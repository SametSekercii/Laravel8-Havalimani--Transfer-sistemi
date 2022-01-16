<link href="{{ asset("assets/admin") }}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset("assets/admin") }}/font-awesome/css/font-awesome.css" rel="stylesheet">

<!-- Toastr style -->
<link href="{{ asset("assets/admin") }}/css/plugins/toastr/toastr.min.css" rel="stylesheet">
<!-- Gritter -->
<link href="{{ asset("assets/admin") }}/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

<link href="{{ asset("assets/admin") }}/css/animate.css" rel="stylesheet">
<link href="{{ asset("assets/admin") }}/css/style.css" rel="stylesheet">
@include("home.flash-message")
<h3 style="margin: 10px;text-align: center;">User Detail</h3>
<form style="margin:20px;" enctype="multipart/form-data" action="{{ route('admin_user_update',['id'=>$data->id]) }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="control-group">
                            <label class="control-label">Name</label>
                            <div class="controls">
                                <input value="{{$data->name}}" required type="text" name="name" class="form-control" placeholder="Name" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email</label>
                            <div class="controls">
                                <input required value="{{$data->email}}" type="text" name="email" class="form-control" placeholder="Email" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Phone</label>
                            <div class="controls">
                                <input value="{{$data->phone}}" type="text" name="phone" class="form-control" placeholder="Phone"  />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Adress</label>
                            <div class="controls">

                                <input value="{{$data->adress}}" type="text" name="adress" class="form-control" placeholder="Adress"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Image</label>
                            <div class="controls">
                                <input  name="profile_photo_path" type="file" />
                            </div>
                            @if($data->profile_photo_path)
                                <img width="150px" style="margin:10px;" src="{{ Storage::url($data->profile_photo_path) }}" alt="">
                            @endif
                        </div>
                        <div class="control-group">
                            <label class="control-label"><b>Roles</b></label>
                            <div class="controls">
                                <table>
                                    @foreach($data->roles as $rl)
                                    <tr>
                                        <td>{{$rl->name}}</td>
                                    </tr>
                                    @endforeach
                                </table>

                            </div>
                        </div>
                        <br>
                        <div class="form-actions">
                            <button style="margin-bottom:10px;" type="submit" class="btn btn-success">User Update</button>
                        </div>
                    </form>

