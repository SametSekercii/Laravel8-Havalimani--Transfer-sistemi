<link href="{{ asset("assets/admin") }}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset("assets/admin") }}/font-awesome/css/font-awesome.css" rel="stylesheet">
<!-- Toastr style -->
<link href="{{ asset("assets/admin") }}/css/plugins/toastr/toastr.min.css" rel="stylesheet">
<!-- Gritter -->
<link href="{{ asset("assets/admin") }}/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

<link href="{{ asset("assets/admin") }}/css/animate.css" rel="stylesheet">
<link href="{{ asset("assets/admin") }}/css/style.css" rel="stylesheet">
@include("home.flash-message")
<table class="table-bordered col-lg-12">
    <tr>
        <td>ID</td>
        <td>{{ $data->id }}</td>
    </tr>
    <tr>
        <td>Name</td>
        <td>{{ $data->name }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ $data->email }}</td>
    </tr>
    <div class="control-group">
        <div class="controls">
            <table>
                <tr>
                    <td style="text-align: center" colspan="2">Roles</td>
                </tr>
                @foreach($data->roles as $rl)
                    <tr>
                        <td style="width:200px;">{{$rl->name}}</td>
                        <td><a href="{{ route("admin_user_role_delete",['user_id'=>$data->id,'role_id'=>$rl->id]) }}"
                               onclick="return confirm('Are You Sure To Delete')"><i class="fa fa-trash"></i></a></td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
    <form action="{{ route('admin_user_role_add',['user_id'=>$data->id]) }}" method="post">
        @csrf
        <select  class="form-control"  name="role_id" id="">
            @foreach($datalist as $rl)
                @if(!$data->roles->pluck('name')->contains($rl->name))
            <option value="{{$rl->id}}">{{$rl->name}}</option>

                @else
            <option disabled value="{{$rl->id}}">{{$rl->name}}</option>
                @endif
            @endforeach
        </select>
        <button class="btn btn-success">Add Role</button>
    </form>
</table>