@extends("layouts.admin")
@section("title","SMT TRANSFER User")
@section("content")
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Category</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/admin">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/admin/user">User</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>User List</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>User Table</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Adress</th>
                                    <th>Roles</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)
                                    <tr class="gradeX">
                                        <td>{{$rs->id}}</td>
                                        <td>@if($rs->profile_photo_path)
                                                <img style="width:60px; height:60px;border:1px solid black;border-radius: 4px;"
                                                     src="{{Storage::url($rs->profile_photo_path)}}">
                                            @endif
                                        </td>
                                        <td>{{$rs->name}}</td>
                                        <td>{{$rs->email}}</td>
                                        <td>{{$rs->phone}}</td>
                                        <td>{{$rs->adress}}</td>
                                        <td>
                                            <table>
                                                <tr>
                                                    @foreach($rs->roles as $rl)
                                                        <td style="background-color: #1a202c;color:lightgoldenrodyellow;border-radius: 8px;">{{$rl->name}}</td>

                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="text-align: center">
                                                        <a href="{{ route("admin_user_role_edit",['user_id'=>$rs->id]) }}"
                                                           onclick=" return  !window.open(this.href,'targetWindow',
                                               'toolbar=no,location=center,status=no,menubar=no,scrollbars=yes,' +
                                                'resizable=no,width=600,height=400,top=200px,left=300px')">
                                                            <i class="fa fa-plus"></i></a></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td style="width:150px;">
                                            <a href="{{ route("admin_user_edit",['id'=>$rs->id]) }}"
                                               onclick=" return  !window.open(this.href,'targetWindow',
                                               'toolbar=no,location=center,status=no,menubar=no,scrollbars=yes,' +
                                                'resizable=no,width=600,height=500,top=100px,left=100px')"
                                               class="btn btn-primary btn-mini">Edit</a>
                                            <a href="{{ route("admin_user_destroy",['id'=>$rs->id]) }}"
                                               onclick="return confirm('Are You Sure To Delete')"
                                               class="btn btn-danger btn-mini" style="float: right;">Delete</a>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Parent</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
