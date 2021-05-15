<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $message = '';
      if (!$this->classIsInCart($request)) {

        $class = \App\Classes::find($request->id);
        $user = \Auth::User()::find($request->user_id);
        $price = 0.0;
        if ($user->usertype_id == 2 ){ // Precio estudiante
          $price = $class->cost2;
        }elseif ($user->usertype_id == 3) { // Precio público en general
          $price = $class->cost3;
        }else {
          $price = $class->cost1; // Precio comunidad UNAM
        }
        \Cart::add($request->id, $class->course->name, 1 , $price)->associate('\App\Classes');  
        $this->updateTotal($price);
        $message = 'Curso agrego al carrito de compras.';

      }else {
        $message = 'El curso ya se encuentra en el carrito de compras';
      }

      return view('cart')->withMessage ($message);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \Cart::remove($id);
        $this->updateTotal(0);
        return back()->withMessage('El curso fue removido con éxito.');
    }

    function classIsInCart($request)
    {
      $duplicates = \Cart::search(function ($cartItem,$rowId) use ($request)
      {   return $cartItem->id === $request->id;  });

      if ($duplicates->isNotEmpty()) 
        return true;

      return false;
    }

    function updateTotal($price)
    {
      $tmp = session()->get('cart_extras'); 

      $course_num = \Cart::count();

      if (($course_num % 3) == 0 ) {
        $multiple = (int) $course_num / 3;
        $tmp['discount'] = $price * $multiple;
      }
      $cart_total = floatval(preg_replace("/[^-0-9\.]/","",\Cart::total()));
      //var_dump(floatval(preg_replace("/[^-0-9\.]/","",\Cart::total())));

      $tmp['total'] = $cart_total -$tmp['discount'];
      session()->put('cart_extras', $tmp);
    }

}
