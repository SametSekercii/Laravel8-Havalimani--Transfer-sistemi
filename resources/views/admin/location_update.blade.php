<link href="{{ asset("assets/admin") }}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset("assets/admin") }}/font-awesome/css/font-awesome.css" rel="stylesheet">

<!-- Toastr style -->
<link href="{{ asset("assets/admin") }}/css/plugins/toastr/toastr.min.css" rel="stylesheet">

<!-- Gritter -->
<link href="{{ asset("assets/admin") }}/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

<link href="{{ asset("assets/admin") }}/css/animate.css" rel="stylesheet">
<link href="{{ asset("assets/admin") }}/css/style.css" rel="stylesheet">
@include("home.flash-message")
<h3 style="margin: 10px;text-align: center;">location Detail</h3>
<form style="margin:20px;" enctype="multipart/form-data" action="{{ route("admin_location_update",['id'=>$data->id]) }}"
      method="post"
      class="form-horizontal">
    @csrf

    <div class="control-group">
        <label class="control-label">Type</label>
        <div class="controls">
            <select name="type" id="" class="form-control">
                <option @if($data->type=="Airline") selected @endif value="Airline">Airline</option>
                <option @if($data->type=="City") selected @endif value="City">City</option>
            </select>
        </div>
    </div>


    <div class="control-group">
        <label class="control-label">Name</label>
        <div class="controls">
            <input value="{{$data->name}}"  type="text" name="name" class="form-control">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Lat</label>
        <div class="controls">
            <input value="{{$data->lat}}" type="number" name="lat" step="any" class="form-control">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Long</label>
        <div class="controls">
            <input value="{{$data->long}}"  type="number" name="long" step="any" class="form-control">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Status</label>
        <div class="controls">
            <select class="form-control" name="status">
                <option @if($data->status=="true") selected @endif  value="true">True</option>
                <option @if($data->status=="false") selected @endif  value="false">False</option>
            </select>
        </div>
    </div>
    <br>
    <div class="form-actions">
        <button type="submit" class="btn btn-success">Update Time</button>
    </div>
</form>
