@extends('master')
@section('content')
@include('sweetalert::alert')

    <h1>Trang sách</h1>
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="market-updates">
                        <div class="col-md-3 market-update-gd"><a href="{{ route('book.add') }}"
                                class="btn btn-warning ">Thêm mới </a></div> <br>
                        <form action="">
                            <div class="container">
                                <div class="col-lg-12" ><input name="key" type="search" class="form-control" placeholder="search" id="searchhead">
                            </div>
                    </div>
                    </form>
                </div>




            </div>
            <div>
                <table class="table" ui-jq="footable"
                    ui-options='{
"paging": {
  "enabled": true
},
"filtering": {
  "enabled": true
},
"sorting": {
  "enabled": true
}}'>
                    <thead>
                        <tr>
                            <th data-breakpoints="xs">ID</th>
                            <th>Tên sách</th>
                            <th>ISBN</th>
                            <th>Tác giả</th>
                            <th>Thể loại</th>
                            <th>Số trang</th>
                            <th>Năm xuất bản</th>
                            <th data-breakpoints="xs">Hành động</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach ($books as $book)
                            <tr data-expanded="true" class="item-{{ $book->id }}">
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->name }}</td>
                                <td>{{ $book->isbn }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->type }}</td>
                                <td>{{ $book->number_pages }}</td>
                                <td>{{ $book->year }}</td>
                                <td>
                                    <a href="{{ route('book.edit', $book->id) }}" class="btn btn-primary">Chỉnh sửa</a>
                                    <a href="{{ route('book.show', $book->id) }}" class="btn btn-warning">Chi tiết</a>
                                    <a data-href="{{ route('book.delete', $book->id) }}" id="{{ $book->id }}"
                                        class="btn btn-danger sm deleteIcon">Xóa</i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $books->onEachSide(3)->links() }}
            </div>
        </div>
        </div>
    </section>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).on('click', '.deleteIcon', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            let href = $(this).data('href');
            let csrf = '{{ csrf_token() }}';
            console.log(id);
            Swal.fire({
                title: 'Bạn có muốn xóa?',
                text: "Bạn sẽ không thể khôi phục lại điều này!",
                icon: 'cảnh báo',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Delete!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: href,
                        method: 'delete',
                        data: {
                            _token: csrf
                        },
                        success: function(res) {
                            Swal.fire(
                                'Xóa!',
                                'Xóa thành công!',
                                'success'
                            )
                            $('.item-' + id).remove();
                        }
                    });
                }
            })
        });
    </script>
@endsection