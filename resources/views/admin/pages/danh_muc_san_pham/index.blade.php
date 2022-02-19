@extends('admin.master')
@section('title')
<div class="page-title-icon">
    <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
</div>
<div>Quản Lý Danh Mục
    <div class="page-title-subheading">
        Thêm Mới Danh Sách Danh Mục và Quản Lý Các Loại Danh Mục
    </div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-md-5">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Thêm Mới Danh Mục Sản Phẩm</h5>
                @if($errors->any())
                    @foreach ($errors->all() as $key => $value)
                    <div class="alert alert-danger" role="alert">
                        {{ $value }}
                    </div>
                    @endforeach
                @endif
                <form autocomplete="off" method="post" action="/admin/danh-muc-san-pham/index">
                    @csrf
                    <div class="position-relative form-group">
                        <label>Tên Danh Mục</label>
                        <input id="ten_danh_muc" name="ten_danh_muc" placeholder="Nhập vào tên danh mục" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label>Slug Danh Mục</label>
                        <input id="slug_danh_muc" name="slug_danh_muc" placeholder="Nhập vào slug danh mục" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label>Hình Ảnh</label>
                        <input name="hinh_anh" placeholder="Nhập vào hình ảnh" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label>Danh Mục Cha</label>
                        <select name="id_danh_muc_cha"class="form-control">
                            <option value="">Danh Mục Root</option>
                            @foreach ($danh_muc_cha as $key => $value)
                            <option value={{ $value->id }}>{{ $value->ten_danh_muc }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="position-relative form-group">
                        <label>Tình Trạng</label>
                        <select name="is_open"class="form-control">
                            <option value=1>Hiển Thị</option>
                            <option value=0>Tạm Tắt</option>
                        </select>
                    </div>
                    <button class="mt-1 btn btn-primary">Thêm Mới Danh Mục</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Table bordered</h5>
                <table class="mb-0 table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Tên Danh Mục</th>
                            <th class="text-center">Danh Mục Cha</th>
                            <th class="text-center">Tình Trạng</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value)
                        <tr>
                            <th class="text-center" scope="row">{{ $key + 1 }}</th>
                            <td>{{ $value->ten_danh_muc }}</td>
                            <td>{{ empty($value->ten_danh_muc_cha) ? 'Root' : $value->ten_danh_muc_cha }}</td>
                            <td>{{ $value->is_open }}</td>
                            <td class="text-center">
                                <button class="btn btn-danger">Delete</button>
                                <button class="btn btn-primary">Edit</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            function toSlug(str) {
                str = str.toLowerCase();
                str = str
                    .normalize('NFD')
                    .replace(/[\u0300-\u036f]/g, '');
                str = str.replace(/[đĐ]/g, 'd');
                str = str.replace(/([^0-9a-z-\s])/g, '');
                str = str.replace(/(\s+)/g, '-');
                str = str.replace(/-+/g, '-');
                str = str.replace(/^-+|-+$/g, '');
                return str;
            }
            $("#ten_danh_muc").keyup(function(){
                var tenDanhMuc = $("#ten_danh_muc").val();
                var slugDanhMuc = toSlug(tenDanhMuc);
                $("#slug_danh_muc").val(slugDanhMuc);
                // $("#slug_danh_muc").val(toSlug($("#ten_danh_muc").val()));
            });
        });

    </script>
@endsection
