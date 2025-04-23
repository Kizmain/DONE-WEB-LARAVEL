<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, $forumId)
    {
        $request->validate([
            'isi' => 'required'
        ]);

        Comment::create([
            'forum_id' => $forumId,
            'isi' => $request->isi
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan!');
    }
}
