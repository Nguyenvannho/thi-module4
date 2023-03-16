@extends('master')
@section('content')
@include('sweetalert::alert')
<main id="main" class="main">
    <div class="pagetitle">
        <h1 class="offset-4">Thông tin sách</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="btn btn-warning"><a href="{{route('book.index')}}"><h6 style="color:red">Trang sách </h6></a></li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row g-0">
                <div class="col-md-12">
                    {{-- <div class="d-flex flex-column justify-content-center">
                        <div style=" margin-top: 24px;" class="main_image"> <img src="{{ asset($bookshow->image)}}" id="main_product_image" height="300" width="412">
                        </div><br>
                    </div> --}}
                </div>
                <div class="col-md-12">
                    <div class="p-3 right-side">
                        <div class="product-info-tabs">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td>Tên: </td>
                                                <td>{{ $bookshow->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>ISBN: </td>
                                                <td>{{ $bookshow->isbn}}</td>
                                            </tr>
                                            <tr>
                                                <td>Tác giả </td>
                                                <td>{{ $bookshow->author}}</td>
                                            </tr>
                                            <tr>
                                                <td>Thể loại: </td>
                                                <td>{{ $bookshow->type}}</td>
                                            </tr>
                                            <tr>
                                                <td>Số trang </td>
                                                <td>{{ $bookshow->number_pages}}</td>
                                            </tr>
                                            <tr>
                                                <td>Năm xuất bản</td>
                                                <td>{{$bookshow->year}}</td>
                                            </tr>
                                          
                                            <tr>
                                                <td>Ngày thêm: </td>
                                                <td>{{ $bookshow->created_at}}</td>
                                            </tr>
                                            <tr>
                                                <td>Ngày sửa: </td>
                                                <td>{{ $bookshow->updated_at}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection