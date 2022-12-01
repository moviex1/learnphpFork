<?php

namespace App\Controllers;

use App\Exceptions\ViewNotFoundException;

class HomeController
{
    public function index() : View
    {
        return View::make('index');
    }

    public function download(){
        header('Content-type: multipart/form-data');
        header('Content-disposition: attachment; filename="image.png"');

        readfile(STORAGE_PATH . '/image-12.png');
    }

    public function upload () : void
    {
        $filePath = STORAGE_PATH . '/' . $_FILES['wallpaper']['name'];
        move_uploaded_file(
            $_FILES['wallpaper']['tmp_name'],
            $filePath);

        header('Location: /');

    }

}