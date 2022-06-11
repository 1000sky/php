<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
/*{
    public function index($param)
    {
        $item = [
            'txt' => 'テキスト',
            'param' => $param
        ];
        
        return view('index', $item);
    }
    
}
*/

/*{
    public function index()
    {
        $item = [
            'content' => '本文',

        ];
        return view('index', $item);
    }
}
*/
/*
{
    public function index()
    {
        $item = [
            'content' => '自由に入力してください',
        ];
        return view('index', $item);
    }
    public function post(Request $request)
    {
        $content = $request->content;
        $item = [
            'content' => $content . 'と入力しましたね'
        ];
        return view('index', $item);
    }
}
*/

{
    public function index(Request $request)
    {
        return view('index', ['txt' => 'フォームを入力']);

    }
    public function post(Request $request)
    {
        $validata_tule = [
            'name' => ''
        ]
    }
}