@extends('superadmin.layouts.master')
@section('title', 'Edit Admin')

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
                                <a href="/dash/admins" type="button" class="btn btn-primary"><i class="lnr lnr-arrow-left"></i>Back</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="/dash/admins/update/{{$admin->id_admin}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="nama_admin" class="col-sm-2 col-form-label">Nama admin</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_admin"
                                        placeholder="Masukkan Nama Anda" value="{{$admin->nama_admin}}">
                                        <div class="text-danger">
                                            @error('nama_admin')
                                                {{ $message }}
                                            @enderror   
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="alamat"
                                        placeholder="Masukkan Alamat Anda" value="{{$admin->alamat}}">
                                        <div class="text-danger">
                                            @error('alamat')
                                                {{ $message }}
                                            @enderror   
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="umur" class="col-sm-2 col-form-label">Usia</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="umur"
                                        placeholder="Masukkan Usia Anda" value="{{$admin->umur}}">
                                        <div class="text-danger">
                                            @error('umur')
                                                {{ $message }}
                                            @enderror   
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select name="jenis_kelamin" class="form-control">Jenis Kelamin
                                            <option value="">Pilih Gender</option>
                                            <option value="Laki-laki" {{$admin->jenis_kelamin == 'Laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                                            <option value="Perempuan" {{$admin->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                                        </select>
                                        <div class="text-danger">
                                            @error('jenis_kelamin')
                                                {{ $message }}
                                            @enderror   
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_telp" class="col-sm-2 col-form-label">Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="no_telp"
                                        placeholder="Masukkan Nomor Telepon Anda" value="{{$admin->no_telp}}">
                                        <div class="text-danger">
                                            @error('no_telp')
                                                {{ $message }}
                                            @enderror   
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="no_telp"
                                        placeholder="Masukkan Username Anda" value="{{$admin->username}}" readonly>
                                        <div class="text-danger">
                                            @error('username')
                                                {{ $message }}
                                            @enderror   
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Simpan</button>
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
    