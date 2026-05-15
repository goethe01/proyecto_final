<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('note.index',compact('notes'));
    }

    public function create()
    {
        return view('note.create');
    }

    public function store(Request $request)
    {
        $user = Auth::user()->id;
        $note = Note::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $user,
        ]);

        return redirect()->route('note.index');
    }
    public function show(Note $note)
    {
        return view('note.show',compact('note'));
    }
    
    public function edit(Note $note){

        return view('note.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $note ->update($request->all());
        return redirect()->route('note.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
