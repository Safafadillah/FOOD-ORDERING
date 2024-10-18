@extends('layouts.app')

@section('content')
    <h1 class="my-4">Tambah Menu</h1>
    
    <form action="{{ route('menus.store') }}" method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Menu:</label>
            <input type="text" id="name" name="name" class="form-control" required>
            <div class="invalid-feedback">
                Nama menu harus diisi.
            </div>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga:</label>
            <input type="number" step="0.01" id="price" name="price" class="form-control" required>
            <div class="invalid-feedback">
                Harga harus diisi dengan angka yang valid.
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi (Opsional):</label>
            <textarea id="description" name="description" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection