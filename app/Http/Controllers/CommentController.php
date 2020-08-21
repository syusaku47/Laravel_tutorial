<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    public function create(Request $request)
    {
        $user = Auth::user();
        $comment = new Comment(['body' => $request->comment]);

        $user->comments()->save($comment);

        // 追加
        Mail::to($user)->send(new CommentPosted($user, $comment));

        return redirect()->route('comment.thanks');
    }
}
