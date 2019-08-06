@extends('layout.app')
@section('body')
<br>
<A href="{{route('todo.create')}}" class="btn btn-info">Add New</a>

<div class="container">
   <center> <h1>Employee list</h1></center>
       <table class="table table-hover">
         <thead>
            <th>id</th>
            <th>Name</th>
            <th>Body</th>
            <th>Edit</th>
            <th>Delete</th>
          </thead>
            <tbody>
             <tr class="table-info">
            @foreach ($employees as $key=>$employee)
                 <td>{{$employee->id}}</td>
                 <td>{{$employee->name}}</td>
                 <td>{{$employee->body}}</td>
                 <td>

                    <a href="{{route('todo.edit', $employee->id)}}">Edit</a>
                 </td>
            <td>
                <form action="{{route('todo.destroy',$employee->id)}}" method="post">
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
