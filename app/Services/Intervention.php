<?php 

namespace App\Services;
use App\Article;
use Image;
use Storage;
class Intervention {
    public function imgresize($disk,$x,$y,$image){
        $save = $image->store('',$disk);
        $path = Storage::disk($disk)->path($save);
        $img = Image::make($path)->resize($x,$y);
        return $save;
    }
}