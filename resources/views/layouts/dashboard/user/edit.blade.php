@extends('layouts.dashboard.template') @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow mb-4 border-left-primary">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-users"></i> Usuário</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-view-profile rounded-circle" width="100" src="https://randomuser.me/api/portraits/lego/2.jpg">
                    </div>
                    <ul class="list-group list-group-flush py-3">
                            <li class="list-group-item"><i class="far fa-user-circle "></i> {{$user->name}}</li>
                            <li class="list-group-item"><i class="far fa-envelope"></i> {{$user->email}}</li>
                          </ul>
                    
                    
                </div>
            </div>
        </div>
        <div class="col-md-6">

            <div class="card shadow mb-4 border-left-success">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-users"></i> Editar Usuários</h6>
                </div>
                <div class="card-body">
                    <form class="user" action="{{ url('user/update',$user->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="name" name="name" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email"  value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                                <input type="file" class="" id="img-profile" name="imgprofile" value="">
                            </div>
                        <button type="submit" class="btn btn-success btn-user btn-block">
                            Salvar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection