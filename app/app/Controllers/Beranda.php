<?php
namespace App\BaseControllers;
class Beranda extends BaseController {

    public function index(){
        return view('beranda_v');
    }
}