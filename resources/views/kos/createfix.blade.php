@extends('layouts.adminapp')

@section('content')

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            @include('layouts.sidebar')

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <form class="form-inline">
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>
                        </form>


                        <ul class="navbar-nav ml-auto">

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Create Kostan</h1>
                        </div>

                        <div class="row">
                            {{-- Area Customer Detail --}}
                            <div class="col-xl col-lg-7">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Kostan Detail</h6>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('kos.store') }}" method="POST">
                                            @csrf
                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (first name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="nama_kos">Nama Kostan*</label>
                                                    <input class="form-control @error('nama_kos') is-invalid @enderror"
                                                        id="nama_kos" type="text" name="nama_kos"
                                                        placeholder="Nama Kostan">
                                                    @error('nama_kos')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!-- Form Group (last name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="merk">Jenis Kos*</label>
                                                    <select class="form-control" id="jenis_kos" name="jenis_kos">
                                                        <option value="">Pilih Jenis Kos</option>
                                                        <option value="putra">Putra</option>
                                                        <option value="putri">Putri</option>
                                                        <option value="campur">Campur</option>
                                                    </select>
                                                    @error('jenis_kos')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (last name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="alamat">Alamat</label>
                                                    <textarea cols="30" rows="2" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                                        type="text" name="alamat" placeholder="Alamat Kostan"></textarea>
                                                    @error('alamat')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <!-- Form Group (first name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="kota">Kota*</label>
                                                    <input class="form-control @error('kota') is-invalid @enderror"
                                                        id="kota" type="text" name="kota" placeholder="Kota">
                                                    @error('kota')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (first name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="pemilik">Pemilik*</label>
                                                    <input class="form-control @error('pemilik') is-invalid @enderror"
                                                        id="pemilik" type="text" name="pemilik"
                                                        placeholder="Nama Pemilik">
                                                    @error('pemilik')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <!-- Form Group (first name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="nomor_telepon">Nomor Telepon*</label>
                                                    <input class="form-control @error('kota') is-invalid @enderror"
                                                        id="nomor_telepon" type="number" name="nomor_telepon"
                                                        placeholder="Nomor Telepon">
                                                    @error('nomor_telepon')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (first name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="harga_per_bulan">Harga Per Bulan*
                                                        (rupiah/idr)</label>
                                                    <input
                                                        class="form-control @error('harga_per_bulan') is-invalid @enderror"
                                                        id="harga_per_bulan" type="number" name="harga_per_bulan"
                                                        placeholder="Harga Per Bulan">
                                                    @error('harga_per_bulan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <!-- Form Group (first name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="jumlah_kamar">Jumlah Kamar*</label>
                                                    <input class="form-control @error('jumlah_kamar') is-invalid @enderror"
                                                        id="jumlah_kamar" type="number" name="jumlah_kamar"
                                                        placeholder="Jumlah Kamar">
                                                    @error('jumlah_kamar')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- Submit button-->
                                            <button class="btn btn-primary" type="submit">Save</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>SAKAMA &copy; Dewata Motor 2023</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>
        @endsection
