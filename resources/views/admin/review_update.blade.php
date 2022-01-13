<link href="{{ asset("assets/admin") }}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset("assets/admin") }}/font-awesome/css/font-awesome.css" rel="stylesheet">

<!-- Toastr style -->
<link href="{{ asset("assets/admin") }}/css/plugins/toastr/toastr.min.css" rel="stylesheet">

<!-- Gritter -->
<link href="{{ asset("assets/admin") }}/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

<link href="{{ asset("assets/admin") }}/css/animate.css" rel="stylesheet">
<link href="{{ asset("assets/admin") }}/css/style.css" rel="stylesheet">
@include("home.flash-message")
<h3 style="margin: 10px;text-align: center;">Review Detail</h3>
<form style="margin: 20px;" enctype="multipart/form-data" action="{{ route('admin_review_update',['id'=>$data->id]) }}" method="post" class="form-horizontal">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
            <input value="{{ $data->user->name }}"  type="text" disabled class="form-control" placeholder="Name" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Service</label>
        <div class="col-sm-10">
            <input value="{{ $data->service->title }}"  type="text" disabled class="form-control" placeholder="Service" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">IP Adress</label>
        <div class="col-sm-10">
            <input  value="{{ $data->ip }}" type="text" disabled class="form-control" placeholder="ip adress"  />
        </div>
    </div><div class="form-group row">
        <label class="col-sm-2 col-form-label">Rate</label>
        <div class="col-sm-10">
            <input  value="{{ $data->rate }}" type="text" disabled class="form-control" placeholder="Rate"  />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Subject</label>
        <div class="col-sm-10">
            <input  value="{{ $data->subject }}" type="text" disabled class="form-control" placeholder="subject"  />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Review</label>
        <div class="col-sm-10">
            <textarea disabled class="form-control"  > {{ $data->review }}
            </textarea>
        </div>
    </div>
    <div class="form-group row" >
        <label class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
            <select class="form-control" name="status" >
                <option value="True">True</option>
                <option value="False">False</option>
                @if($data->status=="New")
                    <option selected value="New">New</option>
                @else
                    <option value="New">New</option>
                @endif
            </select>
        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-success">Update</button>
    </div>


</form>