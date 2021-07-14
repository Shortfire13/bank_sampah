@extends('admin.Templates.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Admin</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <span>
                            <h3><strong>
                                    <center>FORM TAMBAH ADMIN</center>
                                </strong></h3>
                        </span>
                    </div>
                    <div class="card-body p-5 bg-dark">
                        <form action="{{url('admin')}}" method="post">
                            {{ csrf_field() }}
                            <!-- nama -->
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control" id="name" value="" maxlength="45" placeholder="Tuliskan Nama Lengkap Anda" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-8">
                                    <input type="text" name="username" class="form-control" maxlength="255" id="username" placeholder="Masukkan Username" required>
                                </div>
                            </div>
                            {{-- email --}}
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" maxlength="255" required>
                                </div>
                            </div>
                             <!-- password -->
                             <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" name="password" class="form-control" maxlength="255" id="password" placeholder="Masukkan Password" required>
                                </div>
                            </div>
                            {{-- Button --}}
                            <div class="form-group row">
                                <div class="input-group col-sm-12 ">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block mt-3">Daftarkan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection