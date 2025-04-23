<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $forums = Forum::latest()->get();
        return view('forums.index', compact('forums'));
    }

    public function create()
    {
        return view('forums.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        Forum::create($request->all());
        return redirect()->route('forums.index')->with('success', 'Berhasil ditambahkan');
    }

    public function show(Forum $forum)
    {
        return view('forums.show', compact('forum'));
    }

    public function edit(Forum $forum)
    {
        return view('forums.edit', compact('forum'));
    }

    public function update(Request $request, Forum $forum)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $forum->update($request->all());
        return redirect()->route('forums.index')->with('success', 'Berhasil diupdate');
    }

    public function destroy(Forum $forum)
    {
        $forum->delete();
        return redirect()->route('forums.index')->with('success', 'Berhasil dihapus');
    }
}
