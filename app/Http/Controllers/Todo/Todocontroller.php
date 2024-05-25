<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class Todocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Todo::orderBy('task','asc')->get();
        return view ("todo.app",['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'task'=>'required|min:3'
        ],[
            'task.required'=>'isian task tidak boleh kurang dari 3',
            'task.min'=>'isian task tidak boleh kurang dari 3',
        ]);

        $data =[
            'task'=>$request->input('task')
        ];

        Todo::create($data);
        return redirect()->route('todo')->with('success','berhasil simpan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'task'=>'required|min:3'
        ],[
            'task.required'=>'isian task tidak boleh kurang dari 3',
            'task.min'=>'isian task tidak boleh kurang dari 3',
        ]);

        $data =[
            'task'=>$request->input('task'),
            'is_done'=>$request->input('is_done')
        ];

        Todo::where('id',$id)->update($data);
        return redirect()->route('todo')->with('success','berhasil perbaikan data');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Todo::where('id',$id)->delete();
        return redirect()->route('todo')->with('success','berhasil hapus data');
    }
}
