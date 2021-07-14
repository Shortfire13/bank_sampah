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
                    <li>Contact</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section>
            <div class="container">
                <table class="table">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanngal Penjualan</th>
                        <th>Berat Barang</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td>29-06-2021</td>
                        <td>10kg</td>
                        <td>Rp.10.000</td>
                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
