<?php

namespace App\Controllers;

use Database\DB;

class BlogController extends Controller {

    public function index()
    {
        return $this->view('site.index');
    }

    public function home()
    {
        return $this->view('site.home');
    }

    public function login()
    {
        return $this->view('site.login');
    }
    public function loginCreate()
    {
        return $this->view('site.loginCreate');
    }
    public function replacePassword()
    {
        return $this->view('site.replacePassword');
    }


    public function createTierlist()
    {
        return $this->view('site.tierlist_creator');
    }
    public function createFight()
    {
        return $this->view('site.fight_creator');
    }

    public function showPosts(int $id)
    {
        $db = new DB('localhost', 'p_05', 'root', '');
        $req = $db->getPDO()->query('SELECT * FROM posts');
        $posts = $req->fetchALL();
        foreach ($posts as $post)
            echo $post->title;
        return $this->view('site.tierlists', compact('id'));
    }
    public function showFights(int $id)
    {
        $db = new DB('localhost', 'p_05', 'root', '');
        $req = $db->getPDO()->query('SELECT * FROM fights');
        $posts = $req->fetchALL();
        foreach ($posts as $post)
            echo $post->title;
        return $this->view('site.fights', compact('id'));
    }
}