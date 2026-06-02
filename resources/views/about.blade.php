@extends('layouts.main')

@section('content')
    <div class="row align-items-center bg-white p-5 rounded-3 shadow">
        <div class="col-md-4 text-center mb-4 mb-md-0">
            <div class="bg-secondary text-white rounded-circle d-inline-flex align-items-center justify-content-center shadow" style="width: 200px; height: 200px; font-size: 4rem;">
                👨‍💻
            </div>
            <h4 class="mt-3 fw-bold">Bagus Zaka</h4>
            <p class="text-muted">Mahasiswa Teknik Informatika</p>
        </div>

        <div class="col-md-8">
            <h2 class="fw-bold mb-3" style="color: var(--deep-olive);">Tentang Saya</h2>
            <p class="lead">Halo! Saya adalah seorang mahasiswa IT semester aktif yang memiliki ketertarikan besar dalam dunia web development, khususnya menggunakan framework Laravel.</p>
            <p>Saat ini saya sedang fokus mempelajari bagaimana cara membangun aplikasi web yang bersih, terstruktur, dan mudah dipahami. Portofolio ini dibuat sebagai salah satu bukti proses belajar saya dan pemenuhan tugas kuliah.</p>
            
            <div class="row mt-4">
                <div class="col-sm-6">
                    <strong>Universitas:</strong> <p>Universitas Malikussaleh</p>
                </div>
                <div class="col-sm-6">
                    <strong>Fokus Studi:</strong> <p>Back-End Development</p>
                </div>
            </div>
        </div>
    </div>
@endsection