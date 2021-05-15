<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Classes;
use Cart;

class CartController extends Controller {

    public function seeCart() {
        if (Cart::count() > 0) {
            return Cart::content();
        } else {
            return 0;
        }
    }

    public function addCart(Request $request) {
        $id = $request->input('id');
        $class = Classes::findOrFail($id);
        if (Cart::search(['id' => $class->id])) {
            return 0;
        } else {
            if ($request->user()->usertype_id == 1) {
                $cost = $class->cost1;
            } else if ($request->user()->usertype_id == 2) {
                $cost = $class->cost2;
            } else if ($request->user()->usertype_id == 3) {
                $cost = $class->cost3;
            } else {
                $cost = $class->cost1;
            }
            Cart::add($class->id, $class->course->name, 1, $cost, ['time' => $class->startTime . " a " . $class->endTime, 'date' => date("d-m-Y", strtotime($class->startDate)) . " al " . date("d-m-Y", strtotime($class->endDate))]);
        }
        return Cart::content();
    }

    public function deleteCart(Request $request) {
        $id = $request->input('id');
        $class = Classes::findOrFail($id);
        $find = Cart::search(['id' => $class->id]);
        if ($find) {
            Cart::remove($find[0]);
            return Cart::content();
        } else {
            return 0;
        }
    }

}
