<?php

namespace App\Http\Controllers;

use App\Models\InfoScan;
use App\Models\Ingredients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoScanController extends Controller
{
    public function destroy(InfoScan $infoScan)
    {
        $infoScan->delete();

        return redirect()->route('qr.index', $infoScan->ingredient_id);
    }
    public function logscan(Request $request)
    {
        // Получить текущего пользователя
        $user = $request->user();
        // Получить записи из базы данных для данного пользователя
        $infoScans = InfoScan::where('user_id', $user->id)->get();

        return view('user.logscan', [
            'infoScans' => $infoScans
        ]);
    }
}
