<?php

namespace App\core;

class View{
    public function generate($contentView, $templateView, $data = null){
        if($templateView){
            include_once LAYOUT.$templateView;
        }
    }

}