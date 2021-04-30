@extends('backend/layouts.template')
@section('content')
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-user"></i> Profile</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ url('home')}}">Home</a></li>
                    <li><i class="fa fa-user"></i>Profile</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Profile
                    </header>
                    <div class="panel-body">
                        <div class="col-lg-4">
                          <img src="{{ asset('backend/img/profile-avatar.jpg') }}" alt="" width="300px">
                        </div>
                        <div class="col-lg-8">
                          <form class="form-validate form-horizontal" method="post">
                            <div class="form-group">
                              <label for="cname" class="control-label col-lg-2">Nama</label>
                              <div class="col-lg-10">
                                <input class="form-control" type="text" name="nama" id="nama" minlenght="5" value="{{ $user->name }}" disabled />
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="cname" class="control-label col-lg-2">Username</label>
                              <div class="col-lg-10">
                                <input class="form-control" type="text" name="username" id="username" minlenght="5" value="{{ $user->username }}" disabled/>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="cname" class="control-label col-lg-2">Email</label>
                              <div class="col-lg-10">
                                <input class="form-control" type="email" name="email" id="email" value="{{ $user->email }}" disabled/>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="cname" class="control-label col-lg-2">Role</label>
                              <div class="col-lg-10">
                                <input class="form-control" type="text" name="role" id="role" value="{{ $role->role }}" disabled/>
                              </div>
                            </div>
                          </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!--/.row-->
    </section>
</section>
@endsection
