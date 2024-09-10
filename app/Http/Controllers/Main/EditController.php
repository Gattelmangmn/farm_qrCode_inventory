<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\InfoScan;
use App\Models\Ingredients;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Ingredients $ingredients)
    {
        $infoScan = InfoScan::all();

        return view('qr.edit', compact('ingredients', 'infoScan'));
    }
}
