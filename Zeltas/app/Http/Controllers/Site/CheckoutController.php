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
        $request->validate([
//            'email' => ['required', 'email'],
//            'first_name' => 'required|string|max:255',
//            'last_name' => 'required|string|max:255',
//            'address' => 'required|string|max:255',
//            'city' => 'required|string|max:255',
//            'country' => 'required|string|max:255',
//            'post_code' => 'required|postal_code_with:zip_code',
//            'phone_number' => 'required|regex:/+(01)[0-9]{9}/',
//            'notes' => 'string|max:255',
        ]);

        $order = $this->orderRepository->storeOrderDetails($request->all());

        if ($order) {

            \Cart::clear();

            Mail::to(auth()->user()->email)->send(new OrderMail($order));

            return view('shopping.success_order', compact('order'));
        }

        return redirect()->back()->with('message','Order not placed');
    }

}
