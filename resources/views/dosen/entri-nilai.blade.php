@extends('layout.index')

@section('title')
Entri Nilai
@endsection

@section('content')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Makul</th>
                                <th>Nama Makul</th>
                                <th>Kelas</th>
                                <th>Program</th>
                                <th>SKS</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($makul_profesi as $makul)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $makul['kodemk'] }}</td>
                                <td>{{ $makul['namamk'] }}</td>
                                <td>{{ $makul['kelas'] }}</td>
                                <td>{{ $makul['program'] }}</td>
                                <td>{{ $makul['sks'] }}</td>
                                <td><a href="{{ route('dosen.entri-nilai-detail', base64_encode($makul['idjadwal'])) }}" class="btn btn-warning">Input Nilai</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
