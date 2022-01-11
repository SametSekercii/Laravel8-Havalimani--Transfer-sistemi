@extends("layouts.admin")
@section("title","SMT TRANSFER location")

@section("content")
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Category</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/admin">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/admin/location">locations</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Location Add</strong>
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
                    <h5>location Add </h5>

                </div>
                <div class="ibox-content">
                    <form enctype="multipart/form-data" action="{{ route("admin_location_store") }}" method="post"
                          class="form-horizontal">
                        @csrf

                        <div class="control-group">
                            <label class="control-label">Type</label>
                            <div class="controls">
                                <select name="type" id="" class="form-control">
                                    <option value="Airline">Airline</option>
                                    <option value="City">City</option>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Name</label>
                            <div class="controls">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Lat</label>
                            <div class="controls">
                                <input type="number" name="lat" step="any" class="form-control">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Long</label>
                            <div class="controls">
                                <input type="number" name="long" step="any" class="form-control">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Status</label>
                            <div class="controls">
                                <select class="form-control" name="status">
                                    <option value="true">True</option>
                                    <option value="false">False</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Add Location</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
@section("jss")


@endsection
