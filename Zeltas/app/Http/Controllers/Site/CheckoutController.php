<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Interfaces\OrderInterface;
use App\Mail\OrderMail;
use App\Models\Order;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    protected OrderInterface $orderRepository;

    public function __construct(OrderInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function getCheckout()
    {
        return view('shopping.checkout');
    }

    public function placeOrder(Request $request)
    {

        $order = $this->orderRepository->storeOrderDetails($request->all());

        if ($order) {

            \Cart::clear();

            Mail::to(auth()->user()->email)->send(new OrderMail($order));

            return view('shopping.success_order', compact('order'));
        }

        return redirect()->back()->with('message','Order not placed');
    }

}
