<?php

class HomeController extends Controller{
    
    public function index(){
        $this->data["title"] = "Главная";
        $this->data["section"] = "Home";
        $this->View();
    }

}
