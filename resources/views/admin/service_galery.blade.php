@extends("layouts.admin")
@section('title','Admin Image')
@section("css")
@endsection
@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Category</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/admin">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/admin/category">Services</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Service Add</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Service Add </h5>

                </div>
                <div class="ibox-content">
                            <form enctype="multipart/form-data" action="{{ route("admin_service_image_store") }}" method="post" class="form-horizontal">
                                @csrf
                                <input type="text" style="display: none" hidden name="product_id" value="{{ $product_id }}">
                                <div class="control-group">
                                    <label class="control-label">Title</label>
                                    <div class="controls">
                                        <input required type="text" name="title" class="form-control" placeholder="Title" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Image</label>
                                    <div class="controls">
                                        <input required name="image" type="file" />
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button style="margin: 20px;" type="submit" class="btn btn-success">Add Image</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <table id="simple-table" class="table  table-bordered table-hover">

                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                        <tr>
                            <td>{{ $rs->id }}</td>
                            <td>{{ $rs->title }}</td>
                            <td><img style="height: 80px;margin:10px;border: 1px solid #001;" src="{{ Storage::url($rs->image) }}" alt="">
                            </td>
                            <td><a class="btn btn-danger" href="{{ route("admin_service_image_destroy",['id'=>$rs->id]) }}" onclick="return confirm('Are You Sure To Delete')">
                                    Delete
                                </a></td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>

            </div>

@endsection
