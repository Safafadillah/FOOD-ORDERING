@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Pesanan</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="menu_id">Menu</label>
            <select class="form-control" name="menu_id" id="menu_id" required>
                <option value="">Pilih Menu</option>
                @foreach ($menus as $menu) <!-- Iterasi melalui koleksi menus -->
                    <option value="{{ $menu->id }}">{{ $menu->name }} - Rp {{ number_format($menu->price, 2) }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantity">Jumlah</label>
            <input type="number" class="form-control" name="quantity" id="quantity" required min="1">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection