<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;

class TodoController extends Controller
{
    private $todo;

    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }
    
    public function index()
    {
        $todos = $this->todo->all();
        return view('todo.index',  ['todos' => $todos]);
    }

    public function create()
{
    return view('todo.create');
}
public function store(Request $request)
{
    $inputs = $request->all();
    // dd($inputs);

    // 1. todosテーブルの1レコードを表すTodoクラスをインスタンス化
    $todo = new Todo(); 
    // 2. Todoインスタンスのカラム名のプロパティに保存したい値を代入
    $this->todo->fill($inputs);
    // 3. Todoインスタンスの`->save()`を実行してオブジェクトの状態をDBに保存するINSERT文を実行
    $this->todo->save();

    return redirect()->route('todo.index');
}

public function show($id)
{
    $todo = $this->todo->find($id);
    return view('todo.show', ['todo' => $todo]);
}

//ルートパラメータを引数に受け取る
public function edit($id)
{
    //編集対象のレコードの情報を持つTodoモデルのインスタンスを取得
    $todo = $this->todo->find($id);
    //view()を使用して編集画面を表示
    return view('todo.edit',['todo' => $todo]);
}

}