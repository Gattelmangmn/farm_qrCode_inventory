<?php
namespace App\Http\Controllers;

use App\Models\InfoScan;
use App\Models\Ingredients;
use Illuminate\Http\Request;

class QRScanController extends Controller
{
    public function scan()
    {
        return view('user.scan');
    }
}
