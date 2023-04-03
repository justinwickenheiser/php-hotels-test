<?php

namespace GvsuWebTeam\Hotels\Http\Controllers;

use GvsuWebTeam\Hotels\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = view('hotels::admin.index', [
            'hotels' => Hotel::all(),
            'breadcrumbs' => [
                // Defaults
                // ['title'=>'Hotels', 'route' => route('hotels.index')],
                // ['title'=>'Administrator', 'route' => route('hotels.admin.index')],
                ['title'=>'Hotel List', 'route' => null],
            ],
            'session' => [
                'breadcrumbs' => [
                    // Defaults
                    // ['title'=>'Hotels', 'route' => route('hotels.index')],
                    // ['title'=>'Administrator', 'route' => route('hotels.admin.index')],
                    ['title'=>'Hotel List', 'route' => null],
                ],
            ]
        ]);
        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotels::admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'address1' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip' => 'required|string|max:255',
            'latitude' => 'nullable|string|max:255',
            'longitude' => 'nullable|string|max:255',
            'price_min' => 'nullable|integer',
            'price_max' => 'nullable|integer'
        ]);

        $hotel = Hotel::create([
            'title' => $request->title,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'price_min' => $request->price_min,
            'price_max' => $request->price_max
        ]);
        
        return redirect(route('hotels.admin.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \GvsuWebTeam\Hotels\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \GvsuWebTeam\Hotels\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        return view('hotels::admin.edit', [
            'hotel' => $hotel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \GvsuWebTeam\Hotels\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'address1' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip' => 'required|string|max:255',
            'latitude' => 'nullable|string|max:255',
            'longitude' => 'nullable|string|max:255',
            'price_min' => 'nullable|integer',
            'price_max' => 'nullable|integer'
        ]);

        $hotel->title = $request->title;
        $hotel->address1 = $request->address1;
        $hotel->address2 = $request->address2;
        $hotel->city = $request->city;
        $hotel->state = $request->state;
        $hotel->zip = $request->zip;
        $hotel->latitude = $request->latitude;
        $hotel->longitude = $request->longitude;
        $hotel->price_min = $request->price_min;
        $hotel->price_max = $request->price_max;

        $hotel->save();
        return redirect(route('hotels.admin.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \GvsuWebTeam\Hotels\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect(route('hotels.admin.index'));
    }
}
