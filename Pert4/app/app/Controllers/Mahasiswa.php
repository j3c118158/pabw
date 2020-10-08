<?php
namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function Index()
    {
        echo "pbw";
    }

    public function greeting()
    {
        $data["n"]=$this->request->getPost("nama");
        // return view("hello");
        echo view("hello",$data);
    }
}

?>