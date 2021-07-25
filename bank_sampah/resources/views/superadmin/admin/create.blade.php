@extends('superadmin.layouts.master')
@section('title', 'Tambah Admin')

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
                                <a href="/dash/admin" type="button" class="btn btn-primary"><i class="lnr lnr-arrow-left"></i>Back</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="{{ url('dash/admin/add')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="nama_admin" class="col-sm-2 col-form-label">Nama Admin</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_admin"
                                        placeholder="Masukkan Nama Anda" value="{{old('nama_admin')}}">
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
                                        placeholder="Masukkan Alamat Anda" value="{{old('alamat')}}">
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
                                        placeholder="Masukkan Usia Anda" value="{{old('umur')}}">
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
                                        <select name="jenis_kelamin" class="form-control" value="{{old('jenis_kelamin')}}">Jenis Kelamin
                                            <option value="">Pilih Gender</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
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
                                        placeholder="Masukkan Nomor Telepon Anda" value="{{old('no_telp')}}">
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
                                        <input type="username" class="form-control" name="username"
                                        placeholder="Masukkan Username Anda" value="{{old('username')}}">
                                        <div class="text-danger">
                                            @error('username')
                                                {{ $message }}
                                            @enderror   
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password"
                                        placeholder="Masukkan Password Anda">
                                        <div class="text-danger">
                                            @error('no_telp')
                                                {{ $message }}
                                            @enderror   
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="foto" class="col-sm-2 col-form-label">Foto Admin</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="foto"
                                        placeholder="Masukkan Foto Anda" value="{{old('foto')}}">
                                        <div class="text-danger">
                                            @error('foto')
                                                {{ $message }}
                                            @enderror   
                                        </div>
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
    