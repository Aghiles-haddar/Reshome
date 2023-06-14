<?php

namespace App\Controllers;

use Database\DBConnection;

class BlogController extends Controller {


    public function index()
    {
        return $this->view('blog.index');
    }

    public function show(int $id)
    {
        $db = new DBConnection('reshomedata', '127.0.0.1','root','root');
        $req = $db->getPDO()->query('SELECT * FROM announce');
        $posts = $req->fetchAll();
        foreach($posts as $post){
            echo $post->title;
        }
        return $this->view('blog.show', compact('id'));
    }

}