<?php


namespace App;
use Illuminate\Database\Eloquent\Model;

class Products
{
    protected $table='products';
    public function catrgories(){
return $this->belongTo('App\Categories','CategoryID','ProductID');
    }
}
