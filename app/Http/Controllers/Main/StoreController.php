<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\InfoScan;
use App\Models\Ingredients;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $number = mt_rand(1000000000, 9999999999);

        if ($this->ingredientsCodeExists($number)) {
            $number = mt_rand(1000000000, 9999999999);
        }

        $data = [
            'title' => $request->input('title'),
            'ingredients_code' => $number,
            'ingredients_description' => 'string'
        ];

        Ingredients::create($data);

        return redirect()->route('qr.index');
    }

    public function ingredientsCodeExists($number)
    {
        return Ingredients::where('ingredients_code', $number)->exists();
    }
}
