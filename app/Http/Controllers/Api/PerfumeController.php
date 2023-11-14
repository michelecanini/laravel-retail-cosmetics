<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perfume;

class PerfumeController extends Controller
{
    public function index()
    {
        $perfumes = Perfume::all();
        return response()->json([

            'success' => true,
            'results' => $perfumes

        ]);
    }
}
