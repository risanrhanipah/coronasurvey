<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;

class ResultController extends Controller
{
    public function index($id)
    {
        $surveys = Survey::where('id', $id)->first();

        $name = $surveys->name;
        $surv = $surveys->surv;

        if ($surv >= 15) {
            $msg = "Resiko Tinggi";
        }elseif ($surv >= 8) {
            $msg = "resiko Sedang";
        }elseif ($surv < 7) {
            $msg = "resiko Rendah";
        }

        return view('result',['name' => $name, 'msg' => $msg]);
    }
}
