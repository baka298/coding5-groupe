<?php

namespace App\Services;
use Storage;
use Image;
class Intervention{

    public function imageResize($disk, $x, $y, $image){

        $path = Storage::disk($disk)->path($image);
        $image = Image::make($path)->resize($x, $y);

        return $image;

    }
}