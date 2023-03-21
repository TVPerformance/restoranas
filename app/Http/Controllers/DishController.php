<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Rest;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $dishs = Dish::all();
        $rests = Rest::all()->sortBy('title');
       
        return view('back.indexD', ['dishs' => $dishs], ['rests' => $rests]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rests = Rest::all()->sortBy('title');
        return view('back.createD', ['rests' => $rests]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dish = new Dish;
          
        $dish->title = $request->title;
        $dish->price = $request->price;
        $dish->rest_id = $request->rest_id;
       

        // if ($request->file('photo')) {
        //     $photo = $request->file('photo');

        //     $ext = $photo->getClientOriginalExtension();
        //     $name = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
        //     $file = $name. '-' . rand(100000, 999999). '.' . $ext;
        //     $photo->move(public_path().'/hotels', $file);
        //     $hotel->picture ='/hotels' . '/' . $file;
        // }

        $dish->save();
        return redirect()->route('dishs-index');
 
    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $dish)
    {
        $rests = Rest::all()->sortBy('title');
        return view('back.editD', [
            'dish' => $dish, 'rests' => $rests
           ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dish $dish)
    {
        
        $dish->title = $request->title;
        $dish->price = $request->price;
        $dish->save();

        return redirect()->route('dishs-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();
        return redirect()->back(); //->with('ok', 'Hotel been deleted');
    }
}
