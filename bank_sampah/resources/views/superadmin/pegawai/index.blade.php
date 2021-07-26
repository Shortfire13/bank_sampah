@extends('superadmin.layouts.master')
@section('title', 'Data Pegawai')

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
                                    <a href="/dash/pegawai/add" type="button" class="btn btn-primary"><i class="lnr lnr-plus-circle"></i>Tambah Data</a>
                                </div>
                            </div>
                            @if (session('message'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <i class="fa fa-check-circle"></i> {{session('message')}}
                            </div>
                            @endif
                            <div class="panel-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama Pegawai</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Umur</th>
                                            <th scope="col">Jenis Kelamin</th>
                                            <th scope="col">No. Telepon</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1 ?>
                                            @foreach ($pegawai as $data)
                                            <tr>
                                                <td>{{$no++}}.</td> 
                                                <td>{{$data->nama_pegawai}}</td> 
                                                <td>{{$data->alamat}}</td> 
                                                <td>{{$data->umur}} th</td> 
                                                <td>{{$data->jenis_kelamin}}</td> 
                                                <td>{{$data->no_telp}}</td>
                                                <td>
                                                    <a href="/dash/pegawai/edit/{{$data->id_pegawai}}"
                                                    class="btn btn-primary mr-2" data-tooltip="tooltip" data-placement="bottom"
                                                    title="Edit">
                                                    <i class="lnr lnr-pencil">Edit</i>
                                                </a>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id_pegawai}}">
                                                    <i class="lnr lnr-trash">Hapus</i>
                                                </button>
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

@foreach ($pegawai as $data)
    <div class="modal fade" id="delete{{$data->id_pegawai}}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete {{$data->nama_pegawai}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah Anda Yakin Ingin Mengahapus Data Ini?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <a href="/dash/pegawai/delete/{{$data->id_pegawai}}" class="btn btn-danger">Hapus</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endforeach
@stop