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
                <form autocomplete="off">
                    <div class="position-relative form-group">
                        <label>Tên Danh Mục</label>
                        <input name="ten_danh_muc" placeholder="Nhập vào tên danh mục" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label>Slug Danh Mục</label>
                        <input name="slug_danh_muc" placeholder="Nhập vào slug danh mục" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label>Hình Ảnh</label>
                        <input name="hinh_anh" placeholder="Nhập vào hình ảnh" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label>Danh Mục Cha</label>
                        <select name="id_danh_muc_cha"class="form-control">
                            <option>1</option>
                            <option>2</option>
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

    </div>
</div>
@endsection
@section('js')

@endsection
