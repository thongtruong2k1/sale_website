@extends('new_admin.master')
@section('title')
    <h3>Quản Lý Sản Phẩm</h3>
@endsection

@section('content')
<div id="app">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-danger">
                <input type="text" name="" id="idCanXoa" class="form-control" hidden>
                <h5 class="modal-title text-white" id="exampleModalLabel">Xoá Sản Phẩm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" id="taoChinhLaThangXoa" class="btn btn-danger" data-dismiss="modal">Xóa Sản Phẩm</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <label class="modal-title text-text-bold-600 text-white" id="myModalLabel33"><h3>Chỉnh Sửa Sản Phẩm</h3></label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <fieldset class="form-group">
                                            <label>Tên Sản Phẩm</label>
                                            <input type="text" class="form-control" id="ten_san_pham_edit" placeholder="Nhập vào tên sản phẩm">
                                            <input type="number" class="form-control" id="id_edit" hidden>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <fieldset class="form-group">
                                            <label>Slug Sản Phẩm</label>
                                            <input type="text" class="form-control" id="slug_san_pham_edit" placeholder="Nhập vào slug sản phẩm">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label>Giá Bán</label>
                                            <input type="number" class="form-control" id="gia_ban_edit" placeholder="Nhập vào giá bán">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label>Giá Khuyến Mãi</label>
                                            <input type="number" class="form-control" id="gia_khuyen_mai_edit" placeholder="Nhập vào giá khuyến mãi">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <fieldset class="form-group">
                                            <label>Ảnh Đại Diện</label>
                                            <div class="input-group">
                                                <input id="anh_dai_dien_edit" name="anh_dai_dien" class="form-control" type="text">
                                                <input type="button" class="btn-info lfm" data-input="anh_dai_dien_edit" data-preview="holder_edit" value="Upload">
                                            </div>
                                            <img id="holder_edit" style="margin-top:15px;max-height:100px;">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <fieldset class="form-group">
                                            <label for="placeTextarea">Mô Tả Ngắn</label>
                                            <textarea class="form-control" id="mo_ta_ngan_edit" cols="30" rows="5" placeholder="Nhập vào mô tả ngắn"></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="position-relative form-group">
                                    <label>Mô Tả Chi Tiết</label>
                                    <input name="mo_ta_chi_tiet_edit" id="mo_ta_chi_tiet_edit" placeholder="Nhập vào mô tả chi tiết" type="text" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label>Danh Mục</label>
                                            <select id="id_danh_muc_edit" class="custom-select block">

                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label>Danh Mục</label>
                                            <select id="is_open_edit" class="custom-select block">
                                                <option value=1>Hiển Thị</option>
                                                <option value=0>Tạm tắt</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" id="closeModal" class="btn btn-outline-secondary" data-dismiss="modal" value="close">
                        <input type="submit" id="updateSanPham" class="btn btn-outline-primary" data-dismiss="modal" value="Chỉnh sửa">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Thêm Mới Sản Phẩm</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <label>Tên Sản Phẩm</label>
                                                <input type="text" class="form-control" placeholder="Nhập vào tên sản phẩm">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <label>Slug Sản Phẩm</label>
                                                <input type="text" class="form-control" placeholder="Nhập vào slug sản phẩm">
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <fieldset class="form-group">
                                                <label>Giá Bán</label>
                                                <input type="number" class="form-control" placeholder="Nhập vào giá bán">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <fieldset class="form-group">
                                                <label>Giá Khuyến Mãi</label>
                                                <input type="number" class="form-control" placeholder="Nhập vào giá khuyến mãi">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <fieldset class="form-group">
                                                <label>Ảnh Đại Diện</label>
                                                <div class="input-group">
                                                    <input id="anh_dai_dien" name="anh_dai_dien" class="form-control" type="text">
                                                    <input type="button" class="btn-info lfm" data-input="anh_dai_dien" data-preview="holder" value="Upload">
                                                </div>
                                                <img id="holder" style="margin-top:15px;max-height:100px;">
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <fieldset class="form-group">
                                                <label for="placeTextarea">Mô Tả Ngắn</label>
                                                <textarea class="form-control" cols="30" rows="5" placeholder="Nhập vào mô tả ngắn"></textarea>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="position-relative form-group">
                                        <label>Mô Tả Chi Tiết</label>
                                        <input name="mo_ta_chi_tiet" placeholder="Nhập vào mô tả chi tiết" type="text" class="form-control">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <label>Danh Mục</label>
                                                <select class="custom-select block">
                                                {{-- @foreach ($danhSachDanhMuc as $key => $value)
                                                    <option value="{{ $value->id }}">{{ $value->ten_danh_muc }}</option>
                                                @endforeach --}}

                                                <template v-for="(value, key) in danhSachDanhMuc">
                                                    <option v-bind:value="value.id">@{{ value.ten_danh_muc }}</option>
                                                </template>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <label>Danh Mục</label>
                                                <select id="is_open" class="custom-select block">
                                                    <option value=1>Hiển Thị</option>
                                                    <option value=0>Tạm tắt</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <button class="mt-1 btn btn-primary">Thêm Mới Sản Phẩm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Sản Phẩm</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                            <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                            <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0" id="tableSanPham">
                            <thead>
                                <tr>
                                    <th class="text-nowrap text-center">#</th>
                                    <th class="text-nowrap text-center">Tên Sản Phẩm</th>
                                    <th class="text-nowrap text-center">Slug Sản Phẩm</th>
                                    <th class="text-nowrap text-center">Giá Bán</th>
                                    <th class="text-nowrap text-center">Giá Khuyến Mãi</th>
                                    <th class="text-nowrap text-center">Tình Trạng</th>
                                    <th class="text-nowrap text-center">Danh Mục</th>
                                    <th class="text-nowrap text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    new Vue({
        el  :   '#app',
        data:   {
            danhSachDanhMuc :   [],
            danhSachSanPham :   [],
        },
        created() {
            this.loadData();
        },
        methods :   {
            loadData() {
                axios
                    .get('/admin/san-pham/loadData')
                    .then((res) => {
                        this.danhSachDanhMuc = res.data.danhSachDanhMuc;
                        this.danhSachSanPham = res.data.danhSachSanPham;
                        console.log(this.danhSachDanhMuc);
                        console.log(this.danhSachSanPham);
                    });
            },
            create() {
                axios
                    .post('/admin/san-pham/create')
                    .then((res) => {

                    })
                    .catch((res) => {
                        var danh_sach_loi = res.response.data.errors;
                        $.each(danh_sach_loi, function(key, value){
                            toastr.error(value[0]);
                        });
                    });
            },
            update() {
                axios
                    .post('/admin/san-pham/update')
                    .then((res) => {

                    })
                    .catch((res) => {
                        var danh_sach_loi = res.response.data.errors;
                        $.each(danh_sach_loi, function(key, value){
                            toastr.error(value[0]);
                        });
                    });
            },
            edit(id) {
                axios
                    .get('/admin/san-pham/edit/' + id)
                    .then((res) => {

                    });
            },
            delete(id) {
                axios
                    .get('/admin/san-pham/delete/' + id)
                    .then((res) => {

                    });
            },
        },
    });
</script>
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    $('.lfm').filemanager('image');
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.replace('mo_ta_chi_tiet', options);
    CKEDITOR.replace('mo_ta_chi_tiet_edit', options);
</script>

@endsection
