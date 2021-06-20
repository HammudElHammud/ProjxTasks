<?php

namespace App\Http\Controllers;

use App\Models\SlickSlider;
use App\Models\Slider;
use App\Models\SocialMedia;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        $slickSliders = SlickSlider::all();
        $socialMedia = SocialMedia::orderBy('order_no')->get();

        return view('front.index',
            [
                'sliders' => $sliders,
                'slickSliders' => $slickSliders,
                'socialMedia' => $socialMedia,
            ]
        );
    }

    public function search(Request $request)
    {
        $socialMedia = SocialMedia::orderBy('order_no')->get();
        $search = $request->get('search');


        $slickSliders = SlickSlider::where('title', 'like', '%' . $search . '%')->orWhere('description', 'like', '%' . $search . '%')->get();

        return view('front.search',
            [
                'socialMedia' => $socialMedia,
                'slickSliders' => $slickSliders,
            ]
        );
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
