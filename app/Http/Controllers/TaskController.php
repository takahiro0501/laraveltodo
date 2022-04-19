<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\ClientRequest;

class TaskController extends Controller
{
    public function index(){
        $items = Task::all();
        return view('index', ['items' => $items]);
    }
    public function create(ClientRequest $request){
        $form = $request->all();
        Task::create($form);
        return redirect('/');
    }
    public function update(ClientRequest $request){
        $form = $request->all();
        unset($form['_token']);
        Task::where('id', $request->id)->update($form);
        return redirect('/');
    }
    public function delete(Request $request){
        Task::find($request->id)->delete();
        return redirect('/');
    }
}
