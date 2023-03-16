@extends('master')
@section('content')
    <div class="container">
        <div class="panel-body">
            <form role="form" class="form-horizontal " action="{{ route('book.store') }}" method="POST">
                @csrf
                <div class="form-group has-warning">
                    <label class="col-lg-3 control-label">Tên</label>
                    <div class="col-lg-12">
                        <input type="text" value="{{old('name')}}" name="name" placeholder=""  class=" @error('name') is-invalid @enderror form-control ">
                        @error('name')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group has-warning">
                    <label class="col-lg-3 control-label">ISBN</label>
                    <div class="col-lg-12">
                        <input type="text" value="{{old('isbn')}}" name="isbn" placeholder=""  class=" @error('isbn') is-invalid @enderror form-control ">
                        @error('isbn')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group has-warning">
                    <label class="col-lg-3 control-label">Tác giả</label>
                    <div class="col-lg-12">
                        <input type="text" value="{{old('author')}}" name="author" placeholder=""  class=" @error('author') is-invalid @enderror form-control ">
                        @error('author')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group has-warning">
                        @error('type')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                        <label for="type">Thể loại</label> <br>
                        <select class="col-lg-3" name="type" id="">
                        <option value="Truyện hài">Truyện hài</option>
                        <option value="Truyện buồn">Truyện buồn</option>
                        <option value="Truyện vui">Truyện vui</option>
                        <option value="Truyện ma">Truyện ma</option>
                        </select>
                    </div>
                </div>
                <div class="form-group has-warning">
                    <label class="col-lg-3 control-label">Số trang</label>
                    <div class="col-lg-12">
                        <input type="text" value="{{old('number_pages')}}" name="number_pages" placeholder=""  class=" @error('number_pages') is-invalid @enderror form-control ">
                        @error('number_pages')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group has-warning">
                    <label class="col-lg-3 control-label">Năm xuất bản</label>
                    <div class="col-lg-12">
                        <input type="text" value="{{old('year')}}" name="year" placeholder=""  class=" @error('year') is-invalid @enderror form-control ">
                        @error('year')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-offset-3 col-lg-6"> <br>
                        <a href="{{ route('book.index') }}" class="btn btn-danger" type="submit">Hủy bỏ</a>
                        <button class="btn btn-primary" type="submit">Thêm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection