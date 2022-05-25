<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plaats;
use App\Models\Reservering;

class HomeController extends Controller
{
    public function index() {
        $plaatsen = Plaats::All();

        return view('welcome', [
            'plaatsen' => $plaatsen,
        ]);
    }

    public function checkdate(Request $request) {

        $plaats = $request->input('plaats');
        $startDate = $request->input('start-date');
        $endDate = $request->input('end-date');

        $exists = Reservering::where('plaats_id', '=', $plaats )
        ->where('datum_van', '>=', $startDate)->where('datum_tot', '<=', $endDate)->get();
        
        if ($exists) {

            echo $exists;

        } else {

            echo $exists;
            
        }
    }
}
