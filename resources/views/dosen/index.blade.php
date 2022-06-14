@extends('layout.index')

@section('title')
Dashboard
@endsection

@section('content')
<div class="row mt-3 gx-5">
    <div class="col-lg-9">
        <div class="card bg-card" style="min-height: 250px;height: 100%;">
            <div class="card-body d-flex flex-column justify-content-between">
                <div class="d-flex flex-column">
                    <p class="font-weight-normal text-white mb-1">Selamat Datang </p>
                    <h4 class="font-weight-bold text-white text-capitalize">{{ session()->get('user_data')['nama_lengkap'] }}</h4>
                    <p class="text-white">Di SIAKAD Profesi Dokter</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
