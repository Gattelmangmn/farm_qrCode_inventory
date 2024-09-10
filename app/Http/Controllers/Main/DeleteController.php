<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\InfoScan;
use App\Models\Ingredients;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke($id)
    {
        $ingredient = Ingredients::find($id);
        $ingredient->delete();
        return redirect()->route('qr.index');
    }
}
