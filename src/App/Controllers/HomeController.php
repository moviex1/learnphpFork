<?php

namespace App\Controllers;

use App\Exceptions\ViewNotFoundException;
use PDO;

class HomeController

{
    public function index() : View
    {
        try{


        $db = new PDO('mysql:host=db;dbname=my_db', 'root', 'root', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]);

        $email = 'moviex@gmail.com';
        $name = 'Nikita Zubkov';
        $isActive = 1;
        $createdAt = date('Y-m-d H:m:i', strtotime('07/11/2022 9:00PM'));
        $query = 'INSERT INTO users (email, full_name,is_active, created_at)
                  VALUES (:email, :name, :active, :date)';


        $stmt = $db->prepare($query);
        $stmt->execute([
            'email' => $email,
            'name' => $name,
            'active' => $isActive,
            'date' => $createdAt]);
        $id = (int) $db->lastInsertId();

        $user = $db->query('SELECT * FROM users WHERE id = ' . $id)->fetch();

        echo '<pre>';
        var_dump($user);
        echo '</pre>';
        } catch (\PDOException $e){
            throw new \PDOException($e->getMessage(), $e->getCode());
        }
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