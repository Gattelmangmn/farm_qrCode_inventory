<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\InfoScan;
use App\Models\Ingredients;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function __invoke()
   {
       $ingredients = Ingredients::all();
       $infoScan = InfoScan::all();

       return view('qr.index', compact('ingredients', 'infoScan'));
   }
}
