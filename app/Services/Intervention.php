<?php
namespace App\Services;

use Storage;
use Image;



class Intervention{

  public function imgResize($disk, $x, $y, $image) {
    $save = $image->store('',$disk);
    $link = Storage::disk($disk)->path($save);
    $img = Image::make($link)->resize($x,$y);
    return $save;
  }
}