@extends('new_admin.master')
@section('title')
    <h3>Quản Lý Danh Mục</h3>
@endsection
@section('content')
<div id="app">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="height: auto">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-colored-form-control">Thêm mới danh mục</h4>
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
                    <div class="card-body">

                        <form class="form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="userinput1">Tên Danh Mục</label>
                                            <input type="text" class="form-control" v-model="ten_danh_muc"  name="ten_danh_muc">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="userinput3">Slug Danh Mục</label>
                                            <input type="text" class="form-control" v-model="slug_danh_muc" name="slug_danh_muc">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="userinput3">Hình Ảnh</label>
                                            <div class="input-group">
                                                <input v-model="hinh_anh" name="hinh_anh" class="form-control" type="text">
                                                <input type="button" class="btn-info lfm" data-input="hinh_anh" data-preview="holder" value="Upload">
                                            </div>
                                            <img id="holder" style="margin-top:15px;max-height:100px;">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="issueinput6">Danh Mục Cha</label>
                                        <select v-model="id_danh_muc_cha" id="issueinput6" name="status" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Status" data-original-title="" title="">
                                            <option value="">Root</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="issueinput6">Tinh Trạng</label>
                                        <select v-model="is_open" name="status" class="form-control" >
                                            <option value="1" >Hiển Thị</option>
                                            <option value="0">Tạm Tắt</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="form-actions right">
                                <button type="button" v-on:click="create($event)" class="btn btn-primary">Thêm mới Danh Mục
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Danh sách danh mục</h4>
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
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tên Danh Mục</th>
                                            <th>Danh Muc Cha</th>
                                            <th>Tình Trạng</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="">
                                        <tr v-for="(value, key) in list_vue">
                                            <th class="text-center">@{{ key + 1 }}</th>
                                            <td>@{{ value.ten_danh_muc }}</td>
                                            <td>@{{ value.ten_danh_muc_cha === null ? 'Root' : value.ten_danh_muc_cha }}</td>
                                            <td>@{{ value.is_open == 1 ? 'Hiển Thị' : 'Tạm Tắt' }}</td>
                                            <td>
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#editModal" v-on:click="edit(value.id)">Edit</button>
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>
                                            </td>
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
@endsection
@section('js')
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    $('.lfm').filemanager('image');
</script>
<script>
    new Vue({
        el              : "#app",
        data            : {
            ten_danh_muc    :   '',
            slug_danh_muc   :   '',
            hinh_anh        :   '',
            id_danh_muc_cha :   0,
            is_open         :   1,
            list_vue        :   [],
            danh_muc_cha_vue:   [],
            danh_muc_edit   :   {},
        },
        created(){
            this.getData();
        },
        methods         : {
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
            create(e){
                e.preventDefault();
                var payload = {
                    'ten_danh_muc'      :   this.ten_danh_muc,
                    'slug_danh_muc'     :   this.slug_danh_muc,
                    'hinh_anh'          :   this.hinh_anh,
                    'id_danh_muc_cha'   :   this.id_danh_muc_cha,
                    'is_open'           :   this.is_open,
                };

                axios
                    .post('/admin/danh-muc-san-pham/index', payload)
                    .then((res) => {
                        toasrt.success('Thêm mới thành công !');
                        this.getData();
                    })
                    .catch((res) => {
                        var danh_sach_loi = res.response.data.errors;
                        $.each(danh_sach_loi, function(key, value){
                            toastr.error(value[0]);
                        });
                    });
            },
            getData(){
                axios
                    .get('/admin/danh-muc-san-pham/data')
                    .then((res) => {
                        this.list_vue           = res.data.list;
                        this.danh_muc_cha_vue   = res.data.danh_muc_cha;
                            console.log(this.list_vue);
                            console.log( this.danh_muc_cha_vue );
                    })
            },
        },
    });
</script>
@endsection
