<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReklameController extends Controller
{
    public function getAllReklame()
    {
        $response = Http::get('https://ws.sicantik.go.id/api/TemplateData/keluaran/33638.json');

        return view('reklame',['collection'=>$response['data']['perizinan']]);
    }
   
}
