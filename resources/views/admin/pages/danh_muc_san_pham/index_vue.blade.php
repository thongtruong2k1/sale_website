@extends('admin.master')
@section('title')
<div class="page-title-icon">
    <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
</div>
<div>Quản Lý Danh Mục
    <div class="page-title-subheading">
        Thêm Mới Danh Sách Danh Mục và Quản Lý Các Loại Danh Mục.
    </div>
</div>
@endsection
@section('content')
<div id="app">
    <div class="row">
        <div class="col-md-5">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Thêm Mới Danh Mục Sản Phẩm</h5>
                    <form autocomplete="off" id="createDanhMuc">
                        <div class="position-relative form-group">
                            <label>Tên Danh Mục</label>
                            <input v-on:keyup="toSlug(ten_danh_muc)" v-model="ten_danh_muc" name="ten_danh_muc" placeholder="Nhập vào tên danh mục" type="text" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label>Slug Danh Mục</label>
                            <input v-model="slug_danh_muc" name="slug_danh_muc" placeholder="Nhập vào slug danh mục" type="text" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label>Hình Ảnh</label>
                            <div class="input-group">
                                <input v-model="hinh_anh" id="hinh_anh" name="hinh_anh" class="form-control" type="text">
                                <input type="button" class="btn-info lfm" data-input="hinh_anh" data-preview="holder" value="Upload">
                            </div>
                            <img id="holder" style="margin-top:15px;max-height:100px;">
                        </div>
                        <div class="position-relative form-group">
                            <label>Danh Mục Cha</label>
                            <select v-model="id_danh_muc_cha" name="id_danh_muc_cha" class="form-control">

                            </select>
                        </div>
                        <div class="position-relative form-group">
                            <label>Tình Trạng</label>
                            <select v-model="is_open" name="is_open" class="form-control">
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
                    <table class="mb-0 table table-bordered" id="tableDanhMuc">
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

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Xóa Danh Mục Sản Phẩm</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                Bạn có chắc chắn muốn xóa? Điều này không thể hoàn tác.
                <input type="text" class="form-control" placeholder="Nhập vào id cần xóa" hidden>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Xóa Danh Mục</button>
            </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Chỉnh Sửa Danh Mục Sản Phẩm</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <input type="text" id="id_edit" hidden>
                <div class="position-relative form-group">
                    <label>Tên Danh Mục</label>
                    <input placeholder="Nhập vào tên danh mục" type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label>Slug Danh Mục</label>
                    <input placeholder="Nhập vào slug danh mục" type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label>Hình Ảnh</label>
                    <div class="input-group">
                        <input class="form-control" type="text">
                        <input type="button" class="btn-info lfm" data-input="hinh_anh_edit" data-preview="holder_edit" value="Upload">
                    </div>
                    <img id="holder_edit" style="margin-top:15px;max-height:100px;">
                </div>
                <div class="position-relative form-group">
                    <label>Danh Mục Cha</label>
                    <select class="form-control">

                    </select>
                </div>
                <div class="position-relative form-group">
                    <label>Tình Trạng</label>
                    <select class="form-control">
                        <option value=1>Hiển Thị</option>
                        <option value=0>Tạm Tắt</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Cập Nhật Danh Mục</button>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    $('.lfm').filemanager('image');
</script>
<script>
    new Vue({
        el          :   '#app',
        data        :   {
            ten_danh_muc    :   '',
            slug_danh_muc   :   '',
            hinh_anh        :   '',
            id_danh_muc_cha :   0,
            is_open         :   1,
        },
        methods     :   {
            toSlug(str) {
                str = str.toLowerCase();
                str = str
                    .normalize('NFD')
                    .replace(/[\u0300-\u036f]/g, '');
                str = str.replace(/[đĐ]/g, 'd');
                str = str.replace(/([^0-9a-z-\s])/g, '');
                str = str.replace(/(\s+)/g, '-');
                str = str.replace(/-+/g, '-');
                str = str.replace(/^-+|-+$/g, '');

                this.slug_danh_muc = str;
            },
        },
    });
</script>
@endsection
