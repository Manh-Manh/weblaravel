<?php


namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Categories
{
    protected $table='categories';
    public function products()
    {
        return $this->hasMany('App\Products','categoryID','categoryID');
    }
}
