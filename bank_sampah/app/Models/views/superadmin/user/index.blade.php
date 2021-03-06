@extends('superadmin.layouts.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Manajemen Pegawai</h3>
                            <div class="panel-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Umur</th>
                                            <th>No. Hp</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1 ?>
                                            @foreach ($pegawai as $data)
                                            <tr>
                                                <td>{{$no++}}.</td> 
                                                <td>{{$data->name}}</td> 
                                                <td>{{$data->alamat}}</td> 
                                                <td>{{$data->umur}} th</td> 
                                                <td>{{$data->no_telp}}</td> 
                                                <td>{{$data->email}}</td> 
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