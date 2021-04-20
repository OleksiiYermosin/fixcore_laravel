<?php


namespace App\Models;


class Device
{
    public $id;
    public $status;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function findStatus(){
        if(strlen($this->id)==10){
            $this->status="Ваш пристрій у ремонті";
        }else{
            $this->status="Невірний код";
        }
    }


}
