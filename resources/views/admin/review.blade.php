@extends("layouts.admin")
@section("title","SMT TRANSFER Review")
@section("content")
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Service Panel</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/admin">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/admin/message">Reviews</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Review List</strong>
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
                        <h5>Message Table</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Service</th>
                                    <th>IP</th>
                                    <th>Subject</th>
                                    <th>Comment</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)
                                    <tr class="gradeX">
                                        <td>{{$rs->id}}</td>
                                        <td><a href="{{route("admin_user_edit",['id'=>$rs->user->id])}}"
                                               onclick=" return  !window.open(this.href,'targetWindow',
                                               'toolbar=no,location=center,status=no,menubar=no,scrollbars=yes,' +
                                                'resizable=no,width=600,height=600,top=200px,left=300px')"
                                            >
                                                {{$rs->user->name}}
                                            </a></td>
                                        <td>{{$rs->service->title}}</td>
                                        <td>{{$rs->ip}}</td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->review}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td style="width:180px;">
                                            <a href="{{ route("admin_review_edit",['id'=>$rs->id]) }}"
                                               onclick=" return  !window.open(this.href,'targetWindow',
                                               'toolbar=no,location=center,status=no,menubar=no,scrollbars=yes,' +
                                                'resizable=no,width=600,height=500,top=100px,left=100px')"
                                               class="btn btn-primary btn-mini">Edit</a>
                                            <a href="{{ route("admin_review_destroy",['id'=>$rs->id]) }}"
                                               onclick="return confirm('Are You Sure To Delete')"
                                               class="btn btn-danger btn-mini" style="float: right;">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Service</th>
                                    <th>IP</th>
                                    <th>Subject</th>
                                    <th>Comment</th>
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
