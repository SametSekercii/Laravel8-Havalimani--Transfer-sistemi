@extends("layouts.admin")
@section("title","SMT TRANSFER Transfer")
@section("css")

    <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
@endsection
@section("content")
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
                    <form enctype="multipart/form-data" action="{{ route("admin_service_store") }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="control-group">
                            <label class="control-label">Category</label>
                            <div class="controls">
                                <select class="form-control" name="category_id">
                                    @foreach($category_list as $rs)
                                        <option value="{{ $rs->id }}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Title</label>
                            <div class="controls">
                                <input required type="text" name="title" class="form-control"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Keywords</label>
                            <div class="controls">
                                <input type="text" name="keywords" class="form-control"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Description</label>
                            <div class="controls">
                                <input type="text" name="description" class="form-control"   />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Car Model</label>
                            <div class="controls">
                                <input type="text" name="carModel" class="form-control"   />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Capacity</label>
                            <div class="controls">
                                <input type="number" name="capacity" class="form-control"   />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"> Base Price</label>
                            <div class="controls">
                                <input type="number" name="price" step="any" class="form-control"   />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"> Km Price</label>
                            <div class="controls">
                                <input type="number" name="km_price" step="any" class="form-control"   />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Detail</label>
                            <div class="controls">
                                    <textarea class="form-control"name="detail"  >

                                    </textarea>
                                <script>
                                    CKEDITOR.replace( 'detail' );
                                </script>
                            </div>
                        </div>
                        <div class="control-group" >
                            <label class="control-label">Status</label>
                            <div  class="controls">
                                <select class="form-control" name="status" >
                                    <option value="True">True</option>
                                    <option value="False">False</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Image</label>
                            <div class="controls">
                                <input required name="image" type="file" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Slug</label>
                            <div class="controls">
                                <input type="text" name="slug" class="form-control"  />
                            </div>
                        </div>
                        <br>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Add Service</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
@section("jss")


@endsection
