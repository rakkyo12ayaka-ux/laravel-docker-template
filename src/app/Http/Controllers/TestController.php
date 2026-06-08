<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;

use App\Prefecture;

class TestController extends Controller
{
    private $prefecture;

    public function __construct(Prefecture $prefecture)
    {
        $this->prefecture = $prefecture;
    }
    
    public function index()
    {
        $prefectures = $this->prefecture->all();
        return view('todo.lv4',  ['prefectures' => $prefectures]);
    }

    public function show($id)
    {
        $prefectures = $this->prefecture->find($id);
        
        return view('todo.lv5', ['prefectures' => $prefectures]);
    }

    public function create()
    {
        return view('todo.lv6_create');
    }
    public function store(TestRequest $request)
    {
        $inputs = $request->all();
        // dd($inputs);
        $this->prefecture->fill($inputs);
        
        $this->prefecture->save();

        return redirect()->route('todo.display');
    }

    public function edit($id)
{ 
    $prefecture = $this->prefecture->find($id);
    
    return view('todo.lv7_edit',['prefecture' => $prefecture]);
}

public function delete($id)
{
    $prefecture = $this->prefecture->find($id);
    $prefecture->delete();
    return redirect()->route('todo.display');
}

}