@extends('layouts.main')

@section('content')
    <div class="bg-white p-5 rounded-3 shadow">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: var(--deep-olive);">Project Saya</h2>
            <p class="text-muted">Kumpulan tugas kuliah dan project latihan yang telah saya selesaikan</p>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <div class="p-5 text-center text-white rounded-top" style="background-color: var(--deep-olive); font-size: 3rem;">
                        💻
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Website Kasir Toko</h5>
                        <p class="card-text text-muted">Aplikasi pencatatan penjualan sederhana menggunakan PHP native dan database MySQL untuk tugas akhir semester 1.</p>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-3">
                        <span class="badge" style="background-color: var(--sage-green);">PHP</span>
                        <span class="badge bg-secondary">MySQL</span>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <div class="p-5 text-center text-white rounded-top" style="background-color: var(--sage-green); font-size: 3rem;">
                        📱
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Desain UI/UX Aplikasi Mobile</h5>
                        <p class="card-text text-muted">Prototipe desain aplikasi pemesanan makanan kosan yang dibuat menggunakan Figma untuk mata kuliah Interaksi Manusia dan Komputer.</p>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-3">
                        <span class="badge bg-dark">Figma</span>
                        <span class="badge bg-info text-dark">UI/UX</span>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <div class="p-5 text-center text-white rounded-top" style="background-color: var(--dark-charcoal); font-size: 3rem;">
                        ☕
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Aplikasi Manajemen Karyawan</h5>
                        <p class="card-text text-muted">Program berbasis Command Line Interface (CLI) menggunakan bahasa Java untuk mempraktikkan konsep Pemrograman Berorientasi Objek (PBO).</p>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-3">
                        <span class="badge bg-danger">Java</span>
                        <span class="badge bg-secondary">OOP</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection