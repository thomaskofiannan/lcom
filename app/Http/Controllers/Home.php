<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Home extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        //
        return view('blog');
    }
    public function basket()
    {
        //
        return view('basket');
    }

    public function category($value=null)
    {
       
        return view('category');
    }public function category_full()
{
    //
    return view('category-full');
}
    public function category_right()
    {
        //
        return view('category-right');
    }
    public function checkout1()
    {
        //
        return view('checkout1');
    }
    public function checkout2()
    {
        //
        return view('checkout2');
    }
    public function checkout3()
    {
        //
        return view('checkout3');
    }
    public function checkout4()
    {
        //
        return view('checkout4');
    }
    public function contact()
    {
        //
        return view('contact');
    }
    public function customer()
    {
        //
        return view('customer-account');
    }
    public function order()
    {
        //
        return view('customer-order');
    }
    public function wishlist()
    {
        //
        return view('customer-wishlist');
    }
    public function detail()
    {
        //
        return view('detail');
    }
    public function faq()
    {
        //
        return view('faq');
    }
    public function register()
    {
        //
        return view('register');
    }
    public function text()
    {
        //
        return view('text');
    }
    public function text_right()
    {
        //
        return view('text-right');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index');
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
        //
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
        //
    }
}
