<?php

namespace App\Http\Controllers;

use App\Models\Orderitem;
use App\Models\Reservation;
use App\Models\Shopcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\True_;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Reservation::where('user_id',Auth::id())->get();
        return view('home.user_reservation',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $reservation_date =  $request->input('reservation_date');
        $reservation_finish_date =  $request->input('reservation_finish_date');
        $days =  $request->input('reservation_date');
//        echo $reservation_date;
        return view('home.user_reservation_add',['reservation_date'=>$reservation_date,
            'reservation_finish_date'=>$reservation_finish_date,'days'=>$days]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $data = new Reservation;
        $data -> user_id = Auth::id();
        $data -> product_date = $request->input('reservation_date');
        $data -> returndate = $request->input('reservation_finish_date');
        $data -> days = $request->input('days');
        $data -> IP = $_SERVER['REMOTE_ADDR'];
        $data -> save();

        $datalist = Shopcart::where('user_id',Auth::id())->get();
        foreach ($datalist as $rs){
            $data2 = new Orderitem;
            $data2->user_id = Auth::id();
            $data2->product_id = $rs->product_id;
            $data2->order_id = $data->id;
            $data2->save();
        }

        $data3 = Shopcart::where('user_id',Auth::id());
        $data3->delete();
        return redirect()->route('user_reservations')->with('success','Rezervasyon Gönderildi');



//        $datalist = Shopcart::where('user_id',Auth::id())->get();
//        foreach ($datalist as $rs){
//            $data2 = new Orderitem;
//            $data2->user_id = Auth::id();
//            $data2->product_id = $rs->product_id;
//            $data2->order_id = $rs->id;
//            $data2->save();
//        }
//
//        $data = new Reservation;
//        $data -> user_id = Auth::id();
//        $data -> product_id = $data2->product_id;
//        $data -> product_date = $request->input('reservation_date');
//        $data -> returndate = $request->input('reservation_finish_date');
//        $data -> days = $request->input('days');
//        $data -> IP = $_SERVER['REMOTE_ADDR'];
//
//        $data -> save();
//        $data3 = Shopcart::where('user_id',Auth::id());
//        $data3->delete();
//        return redirect()->route('user_reservations')->with('success','ggg');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation,$id)
    {
        $datalist = Orderitem::where('user_id',Auth::id())->where('order_id',$id)->get();
        return view('home.user_reservation_item',['datalist'=>$datalist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
