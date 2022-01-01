@extends("layouts.admin")
@section("title","SMT TRANSFER Faq")
@section("content")
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Category</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/admin">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/admin/faq">Faqs</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Faq Edit</strong>
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
                    <h5>Faq Add </h5>

                </div>
                <div class="ibox-content">
                    <form enctype="multipart/form-data" action="{{ route("admin_faq_update",['id'=>$data->id]) }}" method="post" class="form-horizontal">
                        @csrf

                        <div class="control-group">
                            <label class="control-label">Question</label>
                            <div class="controls">
                                <input value="{{$data->question}}" required type="text" name="question" class="form-control" placeholder="Question" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Answer</label>
                            <div class="controls">
                                <input value="{{$data->answer}}" type="text" name="answer" class="form-control" placeholder="Answer" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Position</label>
                            <div class="controls">
                                <input value="{{$data->position}}" type="number" name="position" class="form-control" placeholder="Position"  />
                            </div>
                        </div>
                        <div class="control-group" >
                            <label class="control-label">Status</label>
                            <div  class="controls">
                                <select class="form-control" name="status" >
                                    <option selected value="True">True</option>
                                    <option value="False">False</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Add Faq</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
@section("jss")


@endsection
