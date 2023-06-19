<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Singer;
use Illuminate\Http\Request;

class SingerController extends Controller
{
    public function index()
    {
        $singers = Singer::with(['genre', 'albums'])->orderByDesc('id')->paginate(4);
        
        return response()->json([
            'success' => true,
            'singers'=> $singers,
        ]);

        
    } 

/*     public function show($slug) {
        $singer = Singer::with(['genre', 'albums'])->where('slug', $slug)->first();

        if ($singer) {
            return response()->json([
                'success' => true,
                'result' => $singer

            ]);
        } else {
            return response()->json([
                'success' => false,
                'result' => 'Page not found 404'

            ]);
        }
    } */
}
