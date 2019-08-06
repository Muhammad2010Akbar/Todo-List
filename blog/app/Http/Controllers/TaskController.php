<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Task;
use App\Project;
use App\Employee;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks=Task::all();
        return view('task.home',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::pluck('name','id');
        $projects = ['0'=>'Select a Project'] + collect($projects)->ToArray();

        $employees = Employee::pluck('name','id');
        $employees = ['0'=>'Select Employee'] + collect($employees)->ToArray();



        // return view('task.tcreate', [
        //     'employee' => $employee,
        //     'project' => $project,
        // ]);

        return view('task.create', compact('employees', 'projects'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request);
        $tasks = new Task;


         $tasks->name = $request->name;
         $tasks->employee_id = $request->employee_id;
         $tasks->project_id = $request->project_id;

          $tasks->save();
          return redirect('task');
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

        $tasks=Task::find($id);

        $projects = Project::pluck('name','id');
        $projects = ['0'=>'Select a Project'] + collect($projects)->ToArray();
        $employees = Employee::pluck('name','id');
        $employees = ['0'=>'Select Employee'] + collect($employees)->ToArray();
        return view('task.edit',compact('tasks','projects','employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tasks = Task::find($id);
        $tasks->name = $request->name;
        $tasks->employee_id = $request->employee_id;
        $tasks->project_id = $request->project_id;

         $tasks->save();
          return redirect('/task');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tasks=Task::find($id);
        $tasks->delete();
        return redirect('/task');
    }
}
