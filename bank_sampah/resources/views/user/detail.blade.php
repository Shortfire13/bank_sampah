@extends('user.main')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-hero">
            <div class="container">
                <div class="breadcrumb-hero">
                    <h2>Detail Transaksi</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <ol>
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('riwayat')}}">Riwayat</a></li>
                <li>Detail Transaksi</li>
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
                        <th>Nama Sampah</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detail  as $item)
                    <tr>
                        <td scope="row">{{ $no++ }}</td>
                        <td scope="row">{{ $item->nama_sampah }}</td>
                        <td scope="row">{{ $item->jumlak_kg }} kg</td>
                        <td scope="row">{{ $item->subtotal }}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection
