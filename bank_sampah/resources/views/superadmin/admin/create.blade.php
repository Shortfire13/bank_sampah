@extends('superadmin.layouts.master')
@section('title', 'Tambah Admin')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-flu">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">@yield('title')</h3>
                        </div>
                        <div class="panel-body">
                                <form action="/dash/adm/add" method="POST" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="nama_admin" class="col-sm-2 col-form-label">Nama Admin</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_admin"
                                            placeholder="Masukkan Nama Anda" value="{{old('nama_admin')}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="alamat"
                                            placeholder="Masukkan Alamat Anda">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email"
                                            placeholder="Masukkan Email Anda">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="username"
                                            placeholder="Masukkan Username Anda">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" name="password"
                                            placeholder="Masukkan Password Anda">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Daftarkan</button>
                                    </div>
                                </form>
                                @csrf
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    