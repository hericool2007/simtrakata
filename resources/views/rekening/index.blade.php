@extends('dash.index')

@section('container')
    <h1>Halaman Rekening</h1>
    @if (session()->has('pesan'))
        <div class="alert alert-success" role="alert">
            {{ session('pesan') }}
        </div>
    @endif
    <div class="box">
        <table class="table table-bordered">
            <tr>
                <th style="width: 10px">No</th>
                <th>Jenis Pajak</th>
                <th>Aksi</th>
            </tr>
            @forelse ($data as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->pajak }}</td>
                    <td></td>
                </tr>
            @empty
                <div>
                    Data Belum Tersedia
                </div>
            @endforelse
        </table>
        <div class="d-flex justify-content">{{ $data->links() }}</div>
    </div>
@endsection
