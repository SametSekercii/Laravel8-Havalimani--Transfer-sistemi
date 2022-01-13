@extends("layouts.admin")
@section("title","SMT TRANSFER Transfer")
@section("content")
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Service Panel</h2>

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/admin">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/admin/category">Services</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Service List</strong>
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
                        <h5>Service Table</h5>
                        <a class="btn btn-success " href="{{route("admin_service_create")}}" style="margin:5px;">Add Service</a>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Base Price</th>
                                    <th>Km Price</th>
                                    <th>Galery</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)
                                    <tr class="gradeX">
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->category->title}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td><img src="{{Storage::url($rs->image) }}" width="50px" height="50px"></td>
                                        <td>{{$rs->price}} $</td>
                                        <td>{{$rs->km_price}} $</td>
                                        <td style="width:55px; "><a href="{{ route('admin_service_image',['id'=>$rs->id]) }}"><img src="/assets/galery.png" width="50px" height="50px"></a></td>
                                        <td>{{$rs->status}}</td>
                                        <td style="width:200px;">
                                            <a href="{{ route("admin_service_edit",['id'=>$rs->id]) }}" class="btn btn-primary btn-mini">Edit</a>
                                            <a href="{{ route("admin_service_destroy",['id'=>$rs->id]) }}" onclick="return confirm('Are You Sure To Delete')" class="btn btn-danger btn-mini" style="float: right;">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Galery</th>
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

