<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\InfoScan;
use App\Models\Ingredients;
use Illuminate\Http\Request;

class CreateController extends Controller
{
   public function __invoke()
   {
       return view('qr.create');
   }
}
