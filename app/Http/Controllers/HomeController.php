<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function h1()
    {
        return "h1";
    }

    public function getOrder(Request $request, $id = null)
    {
//        $query = $request->query();
//        $post = $request->post();
//        return ['query'=> $query,'post'=> $post];
        return $id;
    }

    public function getUser(Request $request)
    {
        return $request->input('id');;
    }

    public function dbTest(){
        DB::select('select * from user');
    }
}
