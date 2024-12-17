<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CetakOrderController extends Controller
{
//     public function cetakOrder($order_id)
// {
//     // Ambil data dari tabel order_items
//     $orderItems = \App\Models\OrderItem::where('order_id', $order_id)->get();

//     // Kirim data ke view
//     return view('orders.cetak_order', compact('orderItems'));

//     //return view('orders.index', compact('price', 'quantity', 'product_id', 'order_id'));
// }

public function cetakOrder($order_id)
{
    // Ambil data dari tabel order_items dengan relasi ke tabel products
    $orderItems = \App\Models\OrderItem::with('product')
        ->where('order_id', $order_id)
        ->get();

    // Kirim data ke view
    return view('orders.cetak_order', compact('orderItems'));
}

}

