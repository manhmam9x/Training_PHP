@extends('layouts.main')

@section('content')
    <!-- Content Header -->
    <section class="content-header">
        <h1>
            Quản Lý Người Dùng
            <a href="{{ route('user.index') }}" class="btn btn-outline-success">
                <i class="fa fa-list-alt" style="margin-right: 5px"></i>Danh sách
            </a>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm Thông Tin Người Dùng</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('user.store') }}" method="post" >
                        @csrf
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Họ và Tên</label>
                                    <input  type="text" class="form-control" id="name" name="name" placeholder="Nhập Họ và Tên">
                                    @if($errors->has('name'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px"><i class="fa fa-info"></i>{{ $errors->first('name') }}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input  type="email" class="form-control" id="email" name="mail_address" placeholder="Nhập Email">
                                    @if($errors->has('mail_address'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px">&ensp;<i class="fa fa-info"></i>{{ $errors->first('mail_address') }}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mật Khẩu</label>
                                    <input   type="password" class="form-control" id="password" name="password" placeholder="Nhập Mật Khẩu">
                                    @if($errors->has('password'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px">&ensp;<i class="fa fa-info"></i>{{ $errors->first('password') }}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Xác Nhận Mật Khẩu</label>
                                    <input   type="password" class="form-control" id="confirmpass" name="confirmpass" placeholder="Xác Nhận Mật Khẩu">
                                    @if($errors->has('password'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px">&ensp;<i class="fa fa-info"></i>{{ $errors->first('password') }}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Số Điện Thoại</label>
                                    <input   type="number" class="form-control" id="phone" name="phone" placeholder="Nhập Số Điện Thoại">
                                    @if($errors->has('phone'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px">&ensp;<i class="fa fa-info"></i>{{ $errors->first('phone') }}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Địa Chỉ</label>
                                    <input   type="text" class="form-control" id="address" name="address" placeholder="Nhập Địa Chỉ">
                                    @if($errors->has('address'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px">&ensp;<i class="fa fa-info"></i>{{ $errors->first('address') }}</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                </div>
                <!-- /.box-body -->
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
@endsection
