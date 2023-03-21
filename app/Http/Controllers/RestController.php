<?php

namespace App\Http\Controllers;

use App\Models\Rest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class RestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rests = Rest::all()->sortBy('title');

        return view('back.indexR', ['rests' => $rests]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.createR');
    }

 /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rest = new Rest;

        $rest->title = $request->title;
        $rest->city = $request->city;
        $rest->adress = $request->adress;
        $rest->hours = $request->hours;

        $rest->save();
        

        return redirect()->route('rests-index', ['#'.$rest->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Rest $rest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rest $rest)
    {
        return view('back.editR', [
            'rest' => $rest
           ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rest $rest)
    {
        
        $rest->title = $request->rest_title;
       

        $rest->save();
        return redirect()->route('rests-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rest $rest)
    {

        // $hotels = Hotel::all();
        // foreach($rests as $rest){
        //     if($rest->id == $rest->rest_id){
        //         return redirect()->back()->with('no', 'Country with hotels can not be deleted');
        //     }
        // }

        $rest->delete();
        return redirect()->back(); //->with('ok', 'Country been deleted');
    }
}
