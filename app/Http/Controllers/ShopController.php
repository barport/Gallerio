<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Order;
use App\Product;
use Cart;
use Illuminate\Http\Request;
use Session;

class ShopController extends MainController
{

    public function categories()
    {
        self::$data['pageTitle'] .= 'Shop Categories';
        self::$data['categories'] = Categorie::all()->toArray();
        return view('content.categories', self::$data);

    }

    public function products($curl)
    {
        Product::getProducts($curl, self::$data);
        return view('content.products', self::$data);
    }

    public function item($curl, $purl)
    {
        Product::getItem($purl, self::$data);
        return view('content.item', self::$data);

    }
    public function addToCart(Request $request)
    {
        Product::addToCart($request['pid']);

    }
    public function cart()
    {

        self::$data['pageTitle'] .= 'Cart';
        $cart = Cart::getContent()->toArray();
        sort($cart);
        self::$data['cart'] = $cart;
        return view('content.cart', self::$data);
    }

    public function clearCart()
    {

        Cart::clear();

        return redirect('shop/cart');

    }

    public function checkout()
    {
        self::$data['pageTitle'] .= 'Checkout';
        $cart = Cart::getContent()->toArray();
        self::$data['cart'] = $cart;
        return view('content.checkout', self::$data);
    }

    public function order()
    {
        if (Cart::isEmpty()) {
            return redirect('shop/cart');
        } else {

            if (!Session::has('user_id')) {
                return redirect('user/signin?rn=shop/cart');
            } else {
                Order::save_new();

            }
        }
    }

    public function updateCart(Request $request)
    {
        Product::updateCart($request);
        return redirect('shop/cart');
    }

    public function removeItem(Request $request)
    {
        Cart::remove($request['pid']);
        return redirect('shop/cart');
    }
}