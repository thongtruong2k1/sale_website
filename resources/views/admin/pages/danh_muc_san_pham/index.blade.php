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
                        <div class="input-group">
                            <input name="hinh_anh" id="thumbnail" class="form-control" type="text">
                            <input type="button" class="btn-info" id="lfm" data-input="thumbnail" data-preview="holder" value="Upload">
                        </div>
                        <img id="holder" style="margin-top:15px;max-height:100px;">
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
                            <td class="text-center">
                                <button data-id="{{$value->id}}" class="doiTrangThai btn {{ $value->is_open == 1 ? 'btn-primary' : 'btn-danger'}}">
                                    {{ $value->is_open == 1 ? 'Hiển Thị' : 'Tạm Tắt'}}
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-danger delete" data-iddelete="{{$value->id}}" data-toggle="modal" data-target="#deleteModal">Delete</button>
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
            <input type="text" class="form-control" placeholder="Nhập vào id cần xóa" id="idDeleteDanhMuc" hidden>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" id="accpectDelete" class="btn btn-danger" data-dismiss="modal">Xóa Danh Mục</button>
        </div>
      </div>
    </div>
</div>
@section('js')
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
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
        $(".doiTrangThai").click(function(){
            var idDanhMuc = $(this).data('id');
            var self = $(this);
            $.ajax({
                url     :     '/admin/danh-muc-san-pham/doi-trang-thai/' + idDanhMuc,
                type    :     'get',
                success :     function(res) {
                    if(res.trangThai) {
                        toastr.success('Đã đổi trạng thái thành công!');
                        // Tình trạng mới là true
                        if(res.tinhTrangDanhMuc){
                            self.html('Hiển Thị');
                            self.removeClass('btn-danger');
                            self.addClass('btn-primary');
                        } else {
                            self.html('Tạm Tắt');
                            self.removeClass('btn-primary');
                            self.addClass('btn-danger');
                        }
                    } else {
                        toastr.error('Vui lòng không can thiệp hệ thống!');
                    }
                },
            });
        });
        var row;
        $(".delete").click(function(){
            row = $(this).closest('tr');
            var getId = $(this).data('iddelete');
            $("#idDeleteDanhMuc").val(getId);
        });
        $("#accpectDelete").click(function(){
            var id = $("#idDeleteDanhMuc").val();
            $.ajax({
                url     :   '/admin/danh-muc-san-pham/delete/' + id,
                type    :   'get',
                success :   function(res) {
                    if(res.status) {
                        toastr.success('Đã xóa danh mục thành công!');
                        row.remove();
                    } else {
                        toastr.error('Danh mục không tồn tại!');
                    }
                },
            });
        });
    });

</script>
@endsection
