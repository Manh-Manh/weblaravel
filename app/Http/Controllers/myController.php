<?php


namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class myController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getIndex()
    {
        return view('welcome');
    }
    public function getAbout()
    {

        return view('about');
    }
    public function getFunct($f)
    {
        try {
            return $this->$f();
        }catch (\Exception $e)
        {
            return " ".$e->getMessage();
        }

    }
}
