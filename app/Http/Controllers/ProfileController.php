<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function store(StoreProfileRequest $request)
    {
        $profile = Profile::create($request->validated());
        return response()->json([
            'success' => true,
            'message' => 'Profile created successfully',
            'data' => $profile
        ], 201);
    }
  

    public function show($id){
        $profile = Profile::Where('user_id', $id)->first();
        return response()->json([  'success' => true, 'data' => $profile
        ], 200);
    }
}
