@extends('layouts.app')

@section('content')
    <h1 class="my-4">Edit Menu: {{ $menu->name }}</h1>

    <form action="{{ route('menus.update', $menu->id) }}" method="POST" class="needs-validation" novalidate>
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama Menu:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $menu->name }}" required>
            <div class="invalid-feedback">
                Nama menu harus diisi.
            </div>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga:</label>
            <input type="number" step="0.01" id="price" name="price" class="form-control" value="{{ $menu->price }}" required>
            <div class="invalid-feedback">
                Harga harus diisi dengan angka yang valid.
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi (Opsional):</label>
            <textarea id="description" name="description" class="form-control">{{ $menu->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('menus.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection