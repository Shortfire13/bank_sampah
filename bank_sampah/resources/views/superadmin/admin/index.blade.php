@extends('superadmin.layouts.master')
@section('title', 'Data Admin')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">@yield('title')</h3>
                                @if (session('message'))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <i class="fa fa-check-circle"></i> {{session('message')}}
                                </div>
                                @endif
                                <div class="right">
                                    <a href="/dash/adm/add" type="button" class="btn btn-primary"><i class="lnr lnr-plus-circle"></i>Tambah Data</a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama Admin</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">No. Telepon</th>
                                            <th scope="col">Jenis Kelamin</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1 ?>
                                            @foreach ($admin as $data)
                                            <tr>
                                                <td>{{$no++}}.</td> 
                                                <td>{{$data->nama}}</td> 
                                                <td>{{$data->alamat}}</td>
                                                <td>{{$data->no_telp}}</td> 
                                                <td>{{$data->jenis_kelamin}}</td> 
                                                <td>{{$data->email}}</td>
                                                <td><img src="{{url('admin/assets/img/pict_pegawai/'.$data->foto)}}" width="65px" height="60px"></td> 
                                                <td>{{$data->username}}</td> 
                                                <td>
                                                    <a href=""
                                                    class="btn btn-primary mr-2" data-tooltip="tooltip" data-placement="bottom"
                                                    title="Edit">
                                                    <i class="lnr lnr-pencil">Edit</i>
                                                </a>
                                                <a type="button" class="btn btn-danger text-white" data-target="#deleteModal" role="button" data-tooltip="tooltip" data-toggle="modal" data-placement="bottom" title="Hapus">
                                                    <i class="lnr lnr-trash">Hapus</i>
                                                </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
