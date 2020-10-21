<?php

namespace App\Util;

use App\Interfaces\ImageStorage;
use Illuminate\Support\Facades\Storage;

class ImageLocalStorage implements ImageStorage {
    //este metodo no usa nada de instancia, debería ser estático para que no hagamos esa guevonada.
    public function store($request){
        if($request->hasFile('profile_image')) {
            Storage::disk('public')->put("test.png",file_get_contents($request->file('profile_image')->getRealPath()));
        }
    }
}
