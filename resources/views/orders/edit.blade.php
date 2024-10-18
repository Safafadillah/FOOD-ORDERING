@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Pesanan</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Tambahkan ini untuk mengatur method PUT -->

        <div class="form-group">
            <label for="menu_id">Menu</label>
            <select class="form-control" name="menu_id" id="menu_id" required>
                <option value="" hidden>Pilih Menu</option>
                @foreach ($menus as $menu) <!-- Iterasi melalui koleksi menus -->
                    <option value="{{ $menu->id }}" {{ $menu->id == $order->menu_id ? 'selected' : '' }}>
                        {{ $menu->name }} - Rp {{ number_format($menu->price, 2) }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="quantity">Jumlah</label>
            <input type="number" class="form-control" name="quantity" id="quantity" value="{{ $order->quantity }}" required min="1">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection