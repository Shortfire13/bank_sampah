@extends('superadmin.layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Inputs</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="InputNama">Nama Pegawai</label>
                            <input name="nama" type="text" class="form-control" id="InputNama" placeholder="Nama Pegawai">
                        </div>
        
                        <label class="fancy-radio">
                            <input name="gender" value="male" type="radio">
                            <span><i></i>Male</span>
                        </label>
                        <label class="fancy-radio">
                            <input name="gender" value="female" type="radio">
                            <span><i></i>Female</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection