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
                        <h1 class="h3 mb-2 text-gray-800">List Kostan</h1>
                        <p class="mb-4">Ceritanya List Kostan.</p>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            {{-- <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Ini ada banyak kosan</h6>
                            </div> --}}
                            <div class="card-header py-3">
                                <a href="/kos/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                        class="fas fa-plus fa-sm text-white-50"></i> Add New Kostan</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama Kos</th>
                                                <th>Alamat</th>
                                                <th>Kota</th>
                                                <th>Pemilik</th>
                                                <th>Nomor Telepon</th>
                                                <th>Jenis Kos</th>
                                                <th>Harga per Bulan</th>
                                                <th>Jumlah Kamar</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nama Kos</th>
                                                <th>Alamat</th>
                                                <th>Kota</th>
                                                <th>Pemilik</th>
                                                <th>Nomor Telepon</th>
                                                <th>Jenis Kos</th>
                                                <th>Harga per Bulan</th>
                                                <th>Jumlah Kamar</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($kos_list as $kos)
                                                <tr>
                                                    <td>{{ $kos->nama_kos }}</td>
                                                    <td>{{ $kos->alamat }}</td>
                                                    <td>{{ $kos->kota }}</td>
                                                    <td>{{ $kos->pemilik }}</td>
                                                    <td>{{ $kos->nomor_telepon }}</td>
                                                    <td>{{ $kos->jenis_kos }}</td>
                                                    <td>Rp {{ number_format($kos->harga_per_bulan, 0, ',', '.') }}</td>
                                                    <td>{{ $kos->jumlah_kamar }}</td>
                                                    <td>
                                                        <div class="d-flex justify-content-start">
                                                            <a href="{{ route('kos.show', [$kos->id]) }}"
                                                                class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i
                                                                    class="fas fa-eye fa-lg text-black-50"></i>
                                                            </a>
                                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                                href="{{ route('kos.edit', [$kos->id]) }}">
                                                                {{-- <svg xmlns="http://www.w3.org/2000/svg"
                                                                    width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-edit">
                                                                    <path
                                                                        d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                    </path>
                                                                    <path
                                                                        d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                    </path>
                                                                </svg> --}}
                                                                <i class="fa fa-pen fa-lg"></i>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#eraseUserModal"
                                                                href=""></a>

                                                            <form action="{{ route('kos.destroy', $kos->id) }}"
                                                                method="POST" style="display: inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                                    <i class="fas fa-trash fa-lg text-black-50"></i>
                                                                </button>
                                                            </form>

                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
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

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
