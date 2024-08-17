@extends('layouts.adminapp')

@section('content')
    <form action="{{ route('kos.store') }}" method="POST">
        @csrf
        <!-- Form Row-->
        <label class="small mb-1" for="nama_kos">Nama Kostan*</label>
        <input class="form-control @error('nama_kos') is-invalid @enderror" id="nama_kos" type="text" name="nama_kos"
            placeholder="Nama Kostan">
        @error('nama_kos')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label class="small mb-1" for="jenis_kos">Jenis Kos*</label>
        <select class="form-control" id="jenis_kos" name="jenis_kos">
            <option value="">Pilih Jenis Kos</option>
            <option value="putra">Putra</option>
            <option value="putri">Putri</option>
            <option value="campur">Campur</option>
        </select>
        @error('jenis_kos')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label class="small mb-1" for="alamat">Alamat</label>
        <textarea cols="30" rows="2" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
            type="text" name="alamat" placeholder="Alamat Kostan"></textarea>
        @error('alamat')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label class="small mb-1" for="kota">Kota*</label>
        <input class="form-control @error('kota') is-invalid @enderror" id="kota" type="text" name="kota"
            placeholder="Kota">
        @error('kota')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label class="small mb-1" for="pemilik">Pemilik*</label>
        <input class="form-control @error('pemilik') is-invalid @enderror" id="pemilik" type="text" name="pemilik"
            placeholder="Nama Pemilik">
        @error('pemilik')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label class="small mb-1" for="nomor_telepon">Nomor Telepon*</label>
        <input class="form-control @error('nomor_telepon') is-invalid @enderror" id="nomor_telepon" type="number"
            name="nomor_telepon" placeholder="Nomor Telepon">
        @error('nomor_telepon')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label class="small mb-1" for="harga_per_bulan">Harga Per Bulan*
            (rupiah/idr)</label>
        <input class="form-control @error('harga_per_bulan') is-invalid @enderror" id="harga_per_bulan" type="number"
            name="harga_per_bulan" placeholder="Harga Per Bulan">
        @error('harga_per_bulan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label class="small mb-1" for="jumlah_kamar">Jumlah Kamar*</label>
        <input class="form-control @error('jumlah_kamar') is-invalid @enderror" id="jumlah_kamar" type="number"
            name="jumlah_kamar" placeholder="Jumlah Kamar">
        @error('jumlah_kamar')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <!-- Submit button-->
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
@endsection
