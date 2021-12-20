@extends("layouts.admin")
@section('title','Admin Category')

@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{ route("adminhome")}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Ana Sayfa</a>
                <a href="{{ route("admin_category")}}" class="current">Kategoriler</a> </div>
            <h1>Kategori Yönetimi</h1>
        </div>

        <div class="container-fluid">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                    <h5>Kategori Listesi</h5>

                    <a class="btn btn-inverse " href="{{route("admin_category_create")}}" style="margin:5px;">Kategori Ekle</a>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Başlık</th>
                            <th>Üst Kategori</th>
                            <th>Durum</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($datalist as $rs)
                            <tr class="gradeX">
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}}</td>
                                <td>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</td>
                                <td>{{$rs->status}}</td>
                                <td style="width:100px;">
                                    <a href="{{ route("admin_category_edit",['id'=>$rs->id]) }}" class="btn btn-primary btn-mini">Düzenle</a>
                                    <a href="{{ route("admin_category_destroy",['id'=>$rs->id]) }}" onclick="return confirm('Are You Sure To Delete')" class="btn btn-danger btn-mini" style="float: right;">Sil</a>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

@endsection
