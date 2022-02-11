<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request, User $user) {
        $name = $request->file('picture')->store('public/pictures');
        $user->profilepicture = $name;
        $user->save();

        return response()->json(['filename' => $name]);
    }
}
