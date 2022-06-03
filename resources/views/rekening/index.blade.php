@extends('dash.index')

@section('container')
    <div class="row">
        @if (session()->has('pesan'))
            <div class="alert alert-success" role="alert">
                {{ session('pesan') }}
            </div>
        @endif
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <a href="/rekening/create" class="btn btn-primary">Tambah Data Baru</a>
                    </h3>
                    <div class="box-tools">
                        <form action="/rekening">
                            <div class="input-group input-group-md" style="width: 200px;">
                                <input type="text" name="cari" value="{{ request('cari') }}"
                                    class="form-control pull-right" placeholder="Cari Jenis pajak">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="box-body">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Jenis Pajak</th>
                            <th style="width: 200px" class="text-center">Aksi</th>
                        </tr>
                        @forelse ($data as $d)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->pajak }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        {{-- Fungsi Edits --}}
                                        <a href="/rekening/{{ $d->id }}/edit" class="btn btn-warning">
                                            <i class="fa fa-pencil"></i> Edit</a>

                                        {{-- Fungsi Hapus --}}
                                        <form action="/rekening/{{ $d->id }}" method="post" class="inline">
                                            @method('delete')
                                            @csrf

                                            <button type="button" class="btn btn-danger"
                                                onclick="return confirm('Data Akan Dihapus?')">
                                                <i class="fa fa-trash-o"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td></td>
                                <td>
                                    Data Belum Tersedia
                                </td>
                            </tr>
                        @endforelse
                    </table>
                    <div class="box-footer clearfix">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
