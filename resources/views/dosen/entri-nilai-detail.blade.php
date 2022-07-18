@extends('layout.index')

@section('title')
    Entri Nilai
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <style>
    </style>
@endpush

@section('content')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Entri Nilai</h4>
                    {{-- <p class="card-text">Text</p> --}}
                    <div class="table-responsive">
                        <div class="row">
                            <div class="col-12">
                                <table class="table" id="tabel-entri-nilai">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>Nilai Angka</th>
                                            <th>Nilai Huruf</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        const datatable = $('#tabel-entri-nilai').DataTable({
            processing: true,
            serverSide: true,
            ajax: `{{ route('dosen.datatable.mahasiswa', $idjadwal) }}`,
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'no',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'nama',
                    name: 'nama',
                },
                {
                    data: 'nim',
                    name: 'nim',
                },
                {
                    data: null,
                    width: '7%',
                    orderable: false,
                    searchable: false,
                    render: function(data) {
                        return `<input class="form-control" type="number" pattern="[1-9]" step="0.01"/>`
                    }
                },
                {
                    data: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                    render: function(data) {
                        return `<div class="form-group">
                            <select class="form-control" name="nilai_huruf">
                                <option hidden value>Pilih Nilai Huruf</option>
                                <option value="A">A</option>
                                <option value="B+">B+</option>
                                <option value="B">B</option>
                                <option value="C+">C+</option>
                                <option value="C">C</option>
                                <option value="D+">D+</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                        </div>`
                    }
                },
                {
                    data: 'DT_RowIndex',
                    render: function(data) {
                        return `<button class="btn btn-primary">Simpan</button>`
                    }
                },

            ]
        });
    </script>
@endpush
