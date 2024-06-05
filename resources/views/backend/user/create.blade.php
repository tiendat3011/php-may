@include('backend.dashboard.component.breadcrumd',['title' => $config['seo']['create']['title']])
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('user.store') }}" method="post" class="box">
    @csrf
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
                                    <input type="text" name="email" class="form-control" value="{{old('email')}}"
                                        placeholder="" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Name
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="text" name="name" class="form-control" value="{{old('name')}}"
                                        placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        @php
                            $userCatalog = ['[Choose Type User],','Admin','User'];    
                        @endphp
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Type User
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <select name="user_catalog_id" class="form-control">
                                        @foreach ($userCatalog as $key => $item)
                                        <option
                                        @if(old('user_catalog_id') == $key) selected @endif value="{{$key}}">{{$item}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Birthdate
                                    </label>
                                    <input type="date" name="birthdate" class="form-control"
                                        value="{{old('birthdate')}}" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Password
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="password" name="password" class="form-control" value="" placeholder=""
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Enter the password
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="password" name="re_password" class="form-control" value=""
                                        placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Image
                                    </label>
                                    <input type="text" name="image" class="form-control input-image"
                                        value="{{old('image')}}" placeholder="" autocomplete="off" data-upload="Images">
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
                                    <select name="province_id" class="form-control province location"
                                        data-target="districts">
                                        @if(isset($provinces))
                                        <option value="">[Choose City]</option>
                                            @foreach ($provinces as $province)
                                            <option @if(old('province_id') == $province->code) selected @endif value="{{ sprintf('%02d', $province->code) }}">
                                                {{ $province->name }}
                                            </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left"> District
                                    </label>
                                    <select name="district_id" class="form-control districts location"
                                        data-target="wards">
                                        <option value="0">[Choose District]</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Wards
                                    </label>
                                    <select name="ward_id" class="form-control wards">
                                        <option value="0">[Choose Wards]</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Address
                                    </label>
                                    <input type="text" name="address" class="form-control" value="{{old('address')}}"
                                        placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Phone Num
                                    </label>
                                    <input type="text" name="phone" class="form-control" value="{{old('phone')}}"
                                        placeholder="" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Note
                                    </label>
                                    <input type="text" name="description" class="form-control"
                                        value="{{old('description')}}" placeholder="" autocomplete="off">
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
<script>
    var province_id = '{{old('province_id')}}';
    var district_id = '{{old('district_id')}}';
    var ward_id = '{{old('ward_id')}}';
</script>