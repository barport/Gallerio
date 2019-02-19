<?php

namespace App;

use Cart;
use Illuminate\Database\Eloquent\Model;
use Session;

class Order extends Model
{

    public static function save_new()
    {
        $order = new self();
        $order->user_id = Session::get('user_id');
        $order->total = Cart::getTotal();
        $order->data = serialize(Cart::getContent()->toArray());
        $order->save();
        Session::flash('sm', 'Your order saved successfuly');
        Cart::clear();
    }

}