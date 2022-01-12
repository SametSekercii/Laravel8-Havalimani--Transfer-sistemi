<link href="{{ asset("assets/admin") }}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset("assets/admin") }}/font-awesome/css/font-awesome.css" rel="stylesheet">

<!-- Toastr style -->
<link href="{{ asset("assets/admin") }}/css/plugins/toastr/toastr.min.css" rel="stylesheet">

<!-- Gritter -->
<link href="{{ asset("assets/admin") }}/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

<link href="{{ asset("assets/admin") }}/css/animate.css" rel="stylesheet">
<link href="{{ asset("assets/admin") }}/css/style.css" rel="stylesheet">
@include("home.flash-message")
<h3 style="margin: 10px;text-align: center;">Message Detail</h3>
<form style="margin:20px;" enctype="multipart/form-data" action="{{ route('admin_message_update',['id'=>$data->id]) }}" method="post" class="form-horizontal">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input value="{{ $data->name }}"  type="text" disabled class="form-control" placeholder="Name" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-10">
            <input value="{{ $data->phone }}"  type="text" disabled class="form-control" placeholder="Phone" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input  value="{{ $data->email }}" type="text" disabled class="form-control" placeholder="email"  />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Subject</label>
        <div class="col-sm-10">
            <input  value="{{ $data->subject }}" type="text" disabled class="form-control" placeholder="subject"  />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">IP Adress</label>
        <div class="col-sm-10">
            <input  value="{{ $data->ip }}" type="text" disabled class="form-control" placeholder="ip adress"  />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Message</label>
        <div class="col-sm-10">
            <textarea disabled class="form-control"  > {{ $data->message }}
            </textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Note</label>
        <div class="col-sm-10">
            <input  value="{{ $data->note }}" type="text" name="note" class="form-control" placeholder="note"  />
        </div>
    </div>
    <div class="form-group row" >
        <label class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
            <select class="form-control" name="status" >
                <option value="Read">Read</option>
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