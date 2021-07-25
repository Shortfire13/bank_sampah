@extends('superadmin.layouts.master')
@section('title', 'Tambah Pegawai')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">@yield('title')</h3>
                            <div class="right">
                                <a href="/dash/pegawai" type="button" class="btn btn-primary"><i class="lnr lnr-arrow-left"></i>Back</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="{{ url('dash/pegawai/add')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="nama_pegawai" class="col-sm-2 col-form-label">Nama Pegawai</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_pegawai"
                                        placeholder="Masukkan Nama Anda" >
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
                                    <label for="umur" class="col-sm-2 col-form-label">Usia</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="umur"
                                        placeholder="Masukkan Usia Anda">
                                    </div>
                                </div><div class="form-group row">
                                    <label for="no_tlp" class="col-sm-2 col-form-label">Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="no_telp"
                                        placeholder="Masukkan Nomor Telepon Anda">
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
                                        <input type="username" class="form-control" name="username"
                                        placeholder="Masukkan Email Anda">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password"
                                        placeholder="Masukkan Email Anda">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Daftarkan</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    