@extends("layouts.admin")
@section('title','Admin Content')
@section("css")
    <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
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
                    <strong>Service Update</strong>
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
                    <h5>Service Update </h5>

                </div>
                <div class="ibox-content">
                            <form enctype="multipart/form-data" action="{{ route('admin_setting_update',['id'=>$data->id]) }}" method="post" class="form-horizontal">
                                @csrf
                                <div class="widget-box">
                                    <div class="widget-title">
                                        <ul class="nav nav-tabs">
                                            <li><a class="nav-link active" data-toggle="tab" href="#General">General</a></li>
                                            <li ><a class="nav-link" data-toggle="tab" href="#Smtp">Smtp</a></li>
                                            <li ><a class="nav-link"  data-toggle="tab" href="#Social">Social</a></li>
                                            <li ><a class="nav-link"  data-toggle="tab" href="#Contact">Contact</a></li>
                                            <li ><a class="nav-link"  data-toggle="tab" href="#About">About us</a></li>
                                            <li ><a class="nav-link"  data-toggle="tab" href="#Referance">Referance</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget-content tab-content">
                                        <div id="General" class="tab-pane active">
                                            <div class="control-group">
                                                <label class="control-label">Title</label>
                                                <div class="controls">
                                                    <input value="{{$data->title}}" required type="text" name="title" class="form-control" placeholder="Title" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Keywords</label>
                                                <div class="controls">
                                                    <input value="{{$data->keywords}}" type="text" name="keywords" class="form-control" placeholder="Keywords" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Description</label>
                                                <div class="controls">
                                                    <input value="{{$data->description}}" type="text" name="description" class="form-control" placeholder="Description"  />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Company</label>
                                                <div class="controls">
                                                    <input value="{{$data->company}}" type="text" name="company" class="form-control" placeholder="company"  />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Adress</label>
                                                <div class="controls">
                                                    <input value="{{$data->adress}}" type="text" name="adress" class="form-control" placeholder="adress"  />
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label for="normal" class="control-label">Phone</label>
                                                <div class="controls">
                                                    <input value="{{$data->phone}}" name="phone" type="text" class="form-control" ></div>
                                            </div>
                                            <div class="control-group">
                                                <label for="normal" class="control-label">Fax</label>
                                                <div class="controls">
                                                    <input value="{{$data->fax}}" name="fax" type="text" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Email</label>
                                                <div class="controls">
                                                    <input value="{{$data->email}}" type="email" name="email" class="form-control" placeholder="Email"  />
                                                </div>
                                            </div>
                                            <div class="control-group" >
                                                <label class="control-label">Status</label>
                                                <div class="controls">
                                                    <select class="form-control" name="status" >
                                                        <option value="True">True</option>
                                                        @if($data->status=="False")
                                                            <option selected value="False">False</option>
                                                        @else
                                                            <option value="False">False</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="Smtp" class="tab-pane">
                                            <div class="control-group">
                                                <label class="control-label">Smtpserver</label>
                                                <div class="controls">
                                                    <input value="{{$data->smtpserver}}" type="text" name="smtpserver" class="form-control" placeholder="Smtpserver"  />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Smtpemail</label>
                                                <div class="controls">
                                                    <input value="{{$data->smtpemail}}" type="email" name="smtpemail" class="form-control" placeholder="Smtpemail"  />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Smtppassword</label>
                                                <div class="controls">
                                                    <input value="{{$data->smtpspassword}}" type="password" name="smtpspassword" class="form-control" placeholder="Smtppassword"  />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Smtpport</label>
                                                <div class="controls">
                                                    <input value="{{$data->smtpport}}" type="number" name="smtpport" class="form-control" placeholder="Smtpport"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div id="Social" class="tab-pane">
                                            <div class="control-group">
                                                <label class="control-label">Facebook</label>
                                                <div class="controls">
                                                    <input value="{{$data->facebook}}" required type="text" name="facebook" class="form-control" placeholder="Facebook" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Twitter</label>
                                                <div class="controls">
                                                    <input value="{{$data->twitter}}" required type="text" name="twitter" class="form-control" placeholder="Twitter" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Instagram</label>
                                                <div class="controls">
                                                    <input value="{{$data->instagram}}" required type="text" name="instagram" class="form-control" placeholder="Instagram" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Youtube</label>
                                                <div class="controls">
                                                    <input value="{{$data->youtube}}" required type="text" name="youtube" class="form-control" placeholder="Youtube" />
                                                </div>
                                            </div>
                                        </div>
                                        <div id="About" class="tab-pane">
                                            <div class="control-group">
                                                <label class="control-label">About Us</label>
                                                <div class="controls">
                                    <textarea  class="form-control"name="aboutus" >
                                        {{ $data->aboutus }}
                                    </textarea>
                                                    <script>
                                                        CKEDITOR.replace( 'aboutus' );
                                                    </script>

                                                </div>
                                            </div>
                                        </div>
                                            <div id="Contact" class="tab-pane">
                                            <div class="control-group">
                                                <label class="control-label">Contact</label>
                                                <div class="controls">
                                    <textarea  class="form-control"name="contact" >
                                        {{ $data->contact }}
                                    </textarea>
                                                    <script>
                                                        CKEDITOR.replace( 'contact' );
                                                    </script>

                                                </div>
                                            </div>
                                            </div>
                                                <div id="Referance" class="tab-pane">
                                            <div class="control-group">
                                                <label class="control-label">Referances</label>
                                                <div class="controls">
                                    <textarea  class="form-control"name="referances" >
                                        {{ $data->referances }}
                                    </textarea>
                                                    <script>
                                                        CKEDITOR.replace( 'referances' );
                                                    </script>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>




                                <div class="form-actions">
                                    <button style="margin: 10px;" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>


@endsection
@section("jss")


@endsection
