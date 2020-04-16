<?php

namespace App\Http\Controllers;

use App\Survey;
use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;

class SurveyController extends Controller
{
    public function index()
    {
        return view::make('home');
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

    public function setor(Request $request)
    {
        $name = $request->name;

        Session::put('name', $name);

        return view::make('survey');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request){
        $y1 = $request->y1;
        $y2 = $request->y2;
        $y3 = $request->y3;
        $y4 = $request->y4;
        $y5 = $request->y5;
        $y6 = $request->y6;
        $y6 = $request->y6;
        $y7 = $request->y7;
        $y8 = $request->y8;
        $y9 = $request->y9;
        $y10 = $request->y10;
        $y11 = $request->y11;
        $y12 = $request->y12;
        $y13 = $request->y13;
        $y14 = $request->y14;
        $y15 = $request->y15;
        $y16 = $request->y16;
        $y17 = $request->y17;
        $y18 = $request->y18;
        $y19 = $request->y19;
        $y20 = $request->y20;
        $y21 = $request->y21;

        $y = $y1 + $y2 + $y3 + $y4 + $y5 + $y6 + $y7 + $y8 + $y9 + $y10 + $y11 + $y12 + $y13 + $y14 + $y15 + $y16 + $y17 + $y18 + $y19 + $y20 + $y21;
        $name = Session::get('name');
        
        $survey = new Survey([
            'name' => $name,
            'surv' => $y
        ]);
        
        $survey->save();
        // $id = $survey->id;

        return redirect('/result/'.$survey->id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function show(Survey $survey)
    {
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function edit(Survey $survey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Survey $survey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $survey)
    {
        //
    }}
