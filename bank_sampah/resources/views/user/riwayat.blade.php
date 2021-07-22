@extends('user.main')

@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>Riwayat</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>Riwayat</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section>
            <div class="container">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanngal Penjualan</th>
                        <th>Berat Barang</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($riwayat as $item)
                    <tr>
                        <td scope="row">1</td>
                        <td>29-06-2021</td>
                        <td>10kg</td>
                        <td>Rp.10.000</td>
                        <td>
                            <a href="" class="btn btn-success">Lihat Transaksi</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
