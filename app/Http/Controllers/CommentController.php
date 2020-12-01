<?php

namespace App\Http\Controllers;

use App\Application;
use App\User;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentRequest $request, $application_id)
    {
        $data = $request->validated();

        $comment = new Comment();
        $comment->comment = $data["comment"];
        // Attach comment to user
        $comment->user_id = $request->user()->id;
        // Attach comment to application
        $comment->application_id = $application_id;
        $comment->approved = true;
        $comment->save();

        return redirect()->route('applications.show', $application_id)->with('success', 'Comment added successfully.');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::find($id);
        $application_id = $comment->application_id;
        $application = Application::find($application_id);
        $author_id = $application->user_id;
        $author = User::find($author_id);
        return view('comments.edit', compact('application', 'author', 'comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $application_id = $comment->application_id;
        $this->validate($request, array('comment' => 'required'));
        $comment->comment = $request->comment;
        $comment->update();
        return redirect()->route('applications.show', $application_id)->with('success', "Comment updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $application_id = $comment->application_id;
        $comment->delete();
        return redirect()->route('applications.show', $application_id)->with('success', 'Comment deleted successfully.');
    }


}
