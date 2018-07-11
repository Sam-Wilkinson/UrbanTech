<?php

namespace App\Services;


use Storage;
class imageDelete {

/*
* Deletes old images
* @param $image
* @paral $folder
*/
public function imageDelete($image, $folder){
    Storage::disk('local')->delete($image);
    Storage::disk($folder)->delete($image);
}
}