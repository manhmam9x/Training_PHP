@extends('layouts.main')

@section('content')
    <!-- Content Header -->
    <section class="content-header">
        <h1>
            Danh Sách Người Dùng
            <a href="{{ route('user.create') }}" class="btn btn-outline-success">
                <i class="fa fa-plus-circle" style="margin-right: 5px"></i>Thêm
            </a>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>STT</th>
                                <th>Email</th>
                                <th>Họ và Tên</th>
                                <th>Số Điện Thoại</th>
                                <th>Địa Chỉ</th>
                            </tr>
                            @foreach($users as $key => $item)
                                <tr class="item-{{ $item->id }}">
                                    <td> {{ $key + 1 }} </td>
                                    <td>{{ $item->mail_address }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->address }}</td>
                                </tr>
                            @endforeach
                        </table>
                        <div class="box-header">
                            <div class="box-tools">
                                <div> {{ $users->links() }} </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
@endsection
