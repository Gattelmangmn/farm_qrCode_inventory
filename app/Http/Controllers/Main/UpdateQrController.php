<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\InfoScan;
use App\Models\Ingredients;
use Illuminate\Http\Request;

class UpdateQrController extends Controller
{
    public function __invoke(Request $request, Ingredients $ingredient)
    {
        $number = mt_rand(1000000000, 9999999999);

        if ($this->ingredientsCodeExists($number)) {
            $number = mt_rand(1000000000, 9999999999);
        }

        $data = [
            'ingredients_code' => $number,
        ];

        $ingredient->update($data);

        return redirect()->route('qr.index');
    }
    public function ingredientsCodeExists($number)
    {
        return Ingredients::where('ingredients_code', $number)->exists();
    }
}
