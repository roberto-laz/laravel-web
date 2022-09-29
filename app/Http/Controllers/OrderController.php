<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class OrderController extends Controller
{

    public function index() : View
    {
        $orders = Order::all();
        return view('index-orders', compact('orders'));
    }

 
    public function create() : View
    {
        return view('create-orders');
    }


    public function store(OrderRequest $request) : RedirectResponse
    {
        $order = Order::create($request->all());
        return redirect(route('orders.index'));
    }


    public function show(Order $order) : View
    {
        return view('show-orders', compact('order'));
    }


    public function edit(Order $order) : View
    {
        return view('edit-orders', compact('order'));
    }

    public function update(OrderRequest $request, Order $order) : RedirectResponse
    {
        $message = $order->update($request->all()) ?
        ['successful_message' => 'Order updated successfully'] : ['error_message' => 'Failed to update order'];
        return redirect()->route('orders.index')->with($message);
    }


    public function destroy(Order $order) : RedirectResponse
    {
        $message = $order->delete() ?
        ['successful_message' => 'Order deleted successfully'] : ['error_message' => 'Failed to delete order'];
        return redirect()->route('orders.index')->with($message);
    }
}
