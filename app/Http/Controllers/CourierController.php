<?php

namespace App\Http\Controllers;

use App\Courier;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $couriers = Courier::all()->sortBy('courier');
        return view('courier/addCourier', compact('couriers'));
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
        $this->validate($request, [
            'courier' => 'required|min:2|max:50|not_regex:/[^A-Z a-z]/'
        ]);

        Courier::create($request->all());
        return redirect()->back()->with('status', 'New Courier Has Been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function show(Courier $courier)
    {
        return view('courier/detailCourier', compact('courier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function edit(Courier $courier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courier $courier)
    {
        $this->validate($request, [
            'courier' => 'required|min:2|max:50|not_regex:/[^A-Z a-z]/'
        ]);

        Courier::where('id', $courier->id)
            ->update([
                'courier' => $request->courier
            ]);
        return redirect()->back()->with('status', 'Courier Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courier $courier)
    {
        Courier::destroy($courier->id);
        return redirect()->route('addCourier')->with('status', 'Courier Has Been Deleted');
    }
}
