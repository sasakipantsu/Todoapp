<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();
        return view('index', ['items' => $items]);
    }

    public function create(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $item = $request->all();
        Todo::create($item);
        return redirect('/');
    }

    public function update(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $item = $request->all();
        unset($item['_token']);
        Todo::where('id', $request->id)->update($item);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        $item = Todo::find($request->id);
        $item->delete();
        return redirect('/');
    }
}
