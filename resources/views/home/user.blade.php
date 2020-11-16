@extends('layouts.main')

@section('title',)
<title>Trang cá nhân</title>
@endsection



@section('content')
<div class="ms_content_wrapper padder_top80">
<div class="ms_profile_wrapper">
    <h1>Chỉnh sửa thông tin cá nhân</h1>
    <form action="{{route('user.update',['id'=>$user->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="ms_profile_box">
            <div class="ms_pro_img">
                <img src="{{$user->img_path}}" alt="" class="img-fluid">
                <input type="file" name="img_path" id="">
            </div>
            <div class="ms_pro_form">
                <div class="form-group">
                    <label>Tên của bạn</label>
                    <input type="text" id="name" value="{{$user->name}}" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" id="email" value="{{$user->email}}" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" id="password" value="{{$user->password}}" name="password" class="form-control" required disabled>
                    @if($errors->has('password'))
                    <div class="alert alert-danger">
                        {{$errors->first('password')}}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Xác nhận mật khẩu</label>
                    <input type="password" id="repass" placeholder="******" name="comfirmpass" class="form-control" required disabled>
                    @if($errors->has('confirmpass'))
                    <div class="alert alert-danger">
                        {{$errors->first('confirmpass')}}
                    </div>
                    @endif
                </div>
                <div class="pro-form-btn text-center marger_top15">
                    <button class="ms_btn btn_update" data-url="{{route('user.update',['id'=>$user->id])}}" style="border:none">Cập nhật</button>
                    <a href="javascript:void(0)" class="ms_btn btn_repass">Đổi mật khẩu</a>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
@endsection