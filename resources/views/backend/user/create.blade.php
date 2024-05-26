@include('backend.dashboard.component.breadcrumd',['title' => $config['seo']['create']['title']])
<form action="" method="" class="box">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">INFO</div>
                    <div class="panel-description">nhap thong tin</div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Email
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="text" name="email" class="form-control" value="" placeholder="" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Name
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="text" name="Name" class="form-control" value="" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Type User
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <select name="user_catalogue_id" class="form-control">
                                        <option value="0">Choose</option>
                                        <option value="1">Admin</option>
                                        <option value="2">User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Birthday
                                    </label>
                                    <input type="text" name="birthday" class="form-control" value="" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Password
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="password" name="password" class="form-control" value="" placeholder="" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Enter the password
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="password" name="re_password" class="form-control" value="" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Image
                                    </label>
                                    <input type="text" name="image" class="form-control" value="" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">INFO</div>
                    <div class="panel-description">nhap thong tin dia chi</div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">City
                                    </label>
                                    <select name="province_id" class="form-control">
                                        <option value="0">Choose</option>
                                        <option value="1">Quang Tri</option>
                                        <option value="2">Da Nang</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Quan/Huyen
                                    </label>
                                    <select name="district_id" class="form-control">
                                        <option value="0">Choose</option>
                                        <option value="1">Hai Chau</option>
                                        <option value="2">Thanh Khe</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Phuong/Xa
                                    </label>
                                    <select name="ward_id" class="form-control">
                                        <option value="0">Choose</option>
                                        <option value="1">Trieu Thanh</option>
                                        <option value="2">Trieu Long</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Address
                                    </label>
                                    <input type="text" name="address" class="form-control" value="" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Phone Num
                                    </label>
                                    <input type="text" name="phone" class="form-control" value="" placeholder="" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Note
                                    </label>
                                    <input type="text" name="description" class="form-control" value="" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mb20">
            <button type="submit" class="btn btn-primary" name="send" value="send">Submit</button>
        </div>
    </div>
</form>
