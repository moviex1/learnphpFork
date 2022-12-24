<?php

namespace App\Controllers;

use App\App;
use App\Models\Invoice;
use App\Models\SignUp;
use App\Models\User;

class HomeController

{
    public function index(): View
    {
        $email = 'Bfar25@mail.com';
        $name = 'Bernardii';
        $amount = 25;

        $userModel = new User();
        $invoiceModel = new Invoice();

        $invoiceId = (new SignUp($userModel, $invoiceModel))->register(
            [   'email' => $email,
                'name' => $name],

            [   'amount' => $amount]
        );

        return View::make('index', ['invoice' => $invoiceModel->find($invoiceId)]);
    }

    public function download()
    {
        header('Content-type: multipart/form-data');
        header('Content-disposition: attachment; filename="image.png"');

        readfile(STORAGE_PATH . '/image-12.png');
    }

    public function upload(): void
    {
        $filePath = STORAGE_PATH . '/' . $_FILES['wallpaper']['name'];
        move_uploaded_file(
            $_FILES['wallpaper']['tmp_name'],
            $filePath);

        header('Location: /');
    }

}

