<link href="{{ asset("assets/admin") }}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset("assets/admin") }}/font-awesome/css/font-awesome.css" rel="stylesheet">

<!-- Toastr style -->
<link href="{{ asset("assets/admin") }}/css/plugins/toastr/toastr.min.css" rel="stylesheet">

<!-- Gritter -->
<link href="{{ asset("assets/admin") }}/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

<link href="{{ asset("assets/admin") }}/css/animate.css" rel="stylesheet">
<link href="{{ asset("assets/admin") }}/css/style.css" rel="stylesheet">
@include("home.flash-message")
<h3 style="margin: 10px;text-align: center;">Reservasyon Detail</h3>
<form style="margin: 20px;" enctype="multipart/form-data" action="{{ route('admin_reservation_update',['id'=>$data->id]) }}" method="post" class="form-horizontal">
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
            <input value="{{ $data->transfer->title }}"  type="text" disabled class="form-control" placeholder="Service" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
            <input  value="{{$data->flightdate}}" type="text" disabled class="form-control" placeholder="Date"  />
        </div>
    </div><div class="form-group row">
        <label class="col-sm-2 col-form-label">Hour</label>
        <div class="col-sm-10">
            <input  value="{{$data->flighttime}}" type="text" disabled class="form-control" placeholder="Hour"  />
        </div>
    </div>
    <div class="form-group row" >
        <label class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
            <select class="form-control" name="status" >
                <option
                    @if($data->status=="Onaylandı") selected @endif value="Onaylandı">Onayla</option>
                <option
                    @if($data->status=="İptal Edildi") selected @endif  value="İptal Edildi">Reddet</option>
                <option
                    @if($data->status=="Onay Bekliyor") selected @endif value="Onay Bekliyor">Onay Beklet</option>
            </select>
        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-success">Update</button>
    </div>


</form>
