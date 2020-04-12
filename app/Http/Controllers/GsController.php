<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GsController extends Controller
{
   public function showData()
    {

       $dataFromGs = file_get_contents('http://gsx2json.com/api?id=19Hi-jITt6u6I_oD-q7taYGxtpCmnGh_tdRaeFryn7ls&columns=false');
      //  dd($dataFromGs);
      $gsData =json_decode($dataFromGs);
     // dd($gsData->rows);
        return view('pages.home',['data'=>$gsData->rows]);
    }
}
