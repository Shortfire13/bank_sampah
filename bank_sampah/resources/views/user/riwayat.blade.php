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
                        <th>Total</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($riwayat as $item)
                    <tr>
                        <td scope="row">{{ $no++ }}</td>
                        <td>2{{ $item->tgl_jual }}</td>
                        <td>{{ $item->total }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a href="/detail/{{ $item->tgl_jual}}" class="btn btn-success">
                                <i class="fa fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
