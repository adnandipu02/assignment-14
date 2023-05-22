<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;



class OstadController extends Controller
{
    public function store(Request $request){
        
        $name = $request->input('name');
    
    }
    public function someMethod(Request $request){
    
        $userAgent = $request->header('User-Agent');
        $page = $request->query('page', null);

        $response = [
            'message' => 'Success',
            'data' => [
                'name' => 'John Doe',
                'age' => 25,
            ],
        ];
    
        return response()->json($response);
        $rememberToken = $request->cookie('remember_token', null);

    }
    
    public function uploadAvatar(Request $request){
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = $file->getClientOriginalName();
            $filePath = 'uploads/' . $fileName;

            Storage::disk('public')->put($filePath, file_get_contents($file));

            
        return response()->json(['message' => 'File uploaded successfully']);
            }

        return response()->json(['message' => 'No file uploaded'], 400);
    }

    

}