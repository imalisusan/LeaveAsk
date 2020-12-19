<?php

namespace App\Http\Controllers;

use App\User;
use App\Comment;
use App\Application;
use Illuminate\Http\Request;
use App\Http\Requests\StoreApplicationRequest;
use DateTime;
use DB;

class ApplicationController extends Controller
{
  public function index()
  {
      $applications = application::latest()->paginate(20);
      foreach ($applications as $application) {
        $author =  User::find($application->user_id);
        $application->author = $author->name;
    }
      return view('applications.index', compact('applications'))->with('i', (request()->input('page', 1) - 1) * 20);
  }

  public function admin_index()
  {
      $applications = application::latest()->paginate(20);
      foreach ($applications as $application) {
        $author =  User::find($application->user_id);
        $application->author = $author->name;
    }
      return view('applications.admin_index', compact('applications'))->with('i', (request()->input('page', 1) - 1) * 20);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('applications.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreApplicationRequest $request)
  {
      $data = $request->validated();

      $application = new Application();
      $application->type = $data["type"];
      $application->start_date = $data["start_date"];
      $application->end_date = $data["end_date"];
      // Count days
      $datetime1 = new DateTime($application->start_date);
      $datetime2 = new DateTime($application->end_date);
      $interval = $datetime1->diff($datetime2);
      $days = $interval->format('%a');
      $application->amount = ($days+1);
      $application->reason = $data["reason"];
      // Attach application to user
      $application->user_id = $request->user()->id;
      // End Attach application to user
      $application->save();
      
      return redirect()->route('profile')->with('success', 'Application created successfully');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\application  $application
   * @return \Illuminate\Http\Response
   */
  public function show(Application $application)
  {   $auth_id = $application->user_id;
      $author =  User::find($auth_id);
      $application_id = $application->id;
      $comments = Comment::latest()->where('application_id', "=", $application_id)->paginate(5);
      foreach ($comments as $comment) {
          $comment->comment = $comment->comment;
          $commentor =  User::find($comment->user_id);
          $comment->author = $commentor->name;
      }
      return view('applications.show', compact('application', 'author', 'comments'))->with('i', (request()->input('page', 1) - 1) * 5);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\application  $application
   * @return \Illuminate\Http\Response
   */
  public function edit(Application $application)
  {
      return view('applications.edit', compact('application'));
  }

  /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\application  $application
     * @return \Illuminate\Http\Response
     */

    public function approve(Application $application){
        $application->status = "Approved";
        $application->save();
        return redirect()->route('admin_applications')->with('success', 'Application approved successfully');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\application  $application
     * @return \Illuminate\Http\Response
     */

    public function decline(Application $application){
        \Log::alert($application);
        $application->status = "Declined";
        $application->save();
        return redirect()->route('admin_applications')->with('success', 'Application declined successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(StoreApplicationRequest $request, Application $application)
    {
        $data = $request->validated();
        $application->type = $data["type"];
        $application->start_date = $data["start_date"];
        $application->end_date = $data["end_date"];
        $application->amount = $data["amount"];
        $application->reason = $data["reason"];
        $application->update();
        return redirect()->route('applications.index')->with('success', 'application updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        $application->delete();
        return redirect()->route('applications.index')->with('success', 'application deleted successfully');
    }
}
