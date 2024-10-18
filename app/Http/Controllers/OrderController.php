<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Menu; // Pastikan model Menu sudah diimpor
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('menu')->get(); // Mengambil semua order dengan relasi menu
        return view('orders.index', compact('orders')); // Pastikan nama view ini sesuai
    }

    public function create()
    {
        $menus = Menu::all(); // Ambil semua menu untuk dropdown
        return view('orders.create', compact('menus')); // Tampilkan form input order
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'menu_id' => 'required|exists:menus,id', // Validasi untuk menu_id
            'quantity' => 'required|integer|min:1', // Validasi untuk quantity
        ]);

        // Mendapatkan harga menu
        $menu = Menu::find($request->menu_id);
        $total_price = $menu->price * $request->quantity; // Hitung total harga

        // Simpan pesanan ke database
        Order::create([
            'menu_id' => $request->menu_id,
            'quantity' => $request->quantity,
            'total_price' => $total_price, // Pastikan total_price diisi
        ]);

        return redirect()->route('orders.index')->with('success', 'Pesanan berhasil ditambahkan.');
    }

    public function edit(Order $order)
    {
        $menus = Menu::all(); // Ambil semua menu untuk dropdown
        return view('orders.edit', compact('order', 'menus')); // Tampilkan form edit
    }

    public function update(Request $request, Order $order)
    {
        // Validasi input
        $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Mendapatkan harga menu
        $menu = Menu::find($request->menu_id);
        $total_price = $menu->price * $request->quantity; // Hitung total harga

        // Update pesanan
        $order->update([
            'menu_id' => $request->menu_id,
            'quantity' => $request->quantity,
            'total_price' => $total_price, // Pastikan total_price diisi
        ]);

        return redirect()->route('orders.index')->with('success', 'Pesanan berhasil diperbarui.');
    }

    public function destroy(Order $order)
    {
        $order->delete(); // Hapus pesanan
        return redirect()->route('orders.index')->with('success', 'Pesanan berhasil dihapus.');
    }
}