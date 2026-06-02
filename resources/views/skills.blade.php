@extends('layouts.main')

@section('content')
    <div class="bg-white p-5 rounded-3 shadow">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: var(--deep-olive);">Keahlian Saya</h2>
            <p class="text-muted">Teknologi dan tools yang saya pelajari selama perkuliahan</p>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <h4 class="fw-bold mb-4" style="color: var(--sage-green);">Coding Skills</h4>
                
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span>HTML & CSS</span>
                        <span>80%</span>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar" role="progressbar" style="width: 80%; background-color: var(--sage-green);" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span>PHP (Dasar)</span>
                        <span>65%</span>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar" role="progressbar" style="width: 65%; background-color: var(--sage-green);" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span>Laravel (Pemula)</span>
                        <span>40%</span>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar" role="progressbar" style="width: 40%; background-color: var(--sage-green);" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <h4 class="fw-bold mb-4" style="color: var(--sage-green);">Tools & Lainnya</h4>
                <div class="row g-3">
                    <div class="col-6">
                        <div class="p-3 border rounded text-center bg-light">
                            <h5>Git & GitHub</h5>
                            <small class="text-muted">Version Control</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 border rounded text-center bg-light">
                            <h5>VS Code</h5>
                            <small class="text-muted">Editor Utama</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 border rounded text-center bg-light">
                            <h5>MySQL</h5>
                            <small class="text-muted">Database</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 border rounded text-center bg-light">
                            <h5>Teamwork</h5>
                            <small class="text-muted">Soft Skill</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection