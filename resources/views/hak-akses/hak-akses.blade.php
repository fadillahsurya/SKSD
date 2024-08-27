@extends('layouts.app')

@section('title', 'Kelola Hak Akses')

@section('content-header')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col">
                <div class="card shadow h-100">
                    <div class="card-header border-0">
                        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between text-center text-md-left">
                            <div class="mb-3">
                                <h2 class="mb-0">Kelola hak-akses</h2>
                                <p class="mb-0 text-sm">Daftar hak-akses yang Tersedia</p>
                            </div>
                            <div class="mb-3">
                                <a href="{{ route('hak-akses.create') }}" class="btn btn-success" title="Tambah Hak Akses"><i class="fas fa-plus"></i> Tambah Hak Akses</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-bordered">
                                <thead class="text-center">
                                    <th>#</th>
                                    <th>Nama Hak Akses</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody class="text-center">
                                    @forelse ($hakAkses as $akses)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $akses->name }}</td>
                                            <td>{{ $akses->description }}</td>
                                            <td>
                                                <a href="{{ route('hak-akses.edit', $akses) }}" class="btn btn-sm btn-warning" title="Edit Hak Akses"><i class="fas fa-edit"></i></a>
                                                <form action="{{ route('hak-akses.destroy', $akses) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus hak akses ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Hapus Hak Akses"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">Tidak ada data hak akses</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{-- Pagination --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
