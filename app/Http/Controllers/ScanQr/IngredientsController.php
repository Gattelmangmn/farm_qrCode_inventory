<?php

namespace App\Http\Controllers\ScanQr;

use App\Http\Controllers\Controller;
use App\Models\InfoScan;
use App\Models\Ingredients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IngredientsController extends Controller

{
    public function findIngredientByQRCode($qrCode) {
        $ingredient = Ingredients::where('ingredients_code', $qrCode)->first();

        if ($ingredient) {
            // Получаем аутентифицированного пользователя
            $user = Auth::user();

            // Создаем запись в таблице info_scans
            $infoScan = new InfoScan();
            $infoScan->ingredient_id = $ingredient->id;
            $infoScan->user_id = $user->id;
            $infoScan->save();

            return "Название ингредиента: " . $ingredient->title;
        } else {
            return "QR-код не найден в базе данных.";
        }
    }

}
