@extends('layout.app')
@section('body')
<br>
<A href="{{route('task.create')}}" class="btn btn-info">Add New</a>

<div class="container">
   <center> <h1>Task list</h1></center>
       <table class="table table-hover">
         <thead>
            <th>id</th>
            <th>name</th>
            <th>employee_id</th>
            <th>project_id</th>
            <th>Edit</th>
            <th>Delete</th>
          </thead>
            <tbody>
             <tr class="table-info">
            @foreach ($tasks as $key=>$task)
                 <td>{{$task->id}}</td>
                 <td>{{$task->name}}</td>
                 <td>{{$task->employee_id}}</td>
                 <td>{{$task->project_id}}</td>
                 <td>

                    <a href="{{route('task.edit', $task->id)}}">Edit</a>
                 </td>
            <td>
                <form action="{{route('task.destroy',$task->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                  <button class="form-control"type="submit">DELETE<i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
               </td>
              </tr>
            @endforeach
         </tbody>
        </table>
      </div>
     </div>
   @endsection

