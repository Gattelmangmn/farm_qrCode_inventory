<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\InfoScan;
use App\Models\Ingredients;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Ingredients $ingredients)
    {
        $infoScans = InfoScan::where('ingredient_id', $ingredients->id)->get();
        return view('qr.show', compact('ingredients', 'infoScans'));
    }
}
