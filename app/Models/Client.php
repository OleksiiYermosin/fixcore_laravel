<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Client extends Model{
    public function orders(){
        return $this->hasMany('App\Models\Order' );
    }

    public function groups(){
        return $this->belongsToMany('App\Models\Group', 'technics', 'client_id', 'group_id');
    }
}
