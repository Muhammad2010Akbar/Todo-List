@extends('layout.app')
@section('body')
<br>
<A href="{{route('project.create')}}" class="btn btn-info">Add New</a>

<div class="container">
   <center> <h1>Project list</h1></center>
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
            @foreach ($projects as $key=>$project)
                 <td>{{$project->id}}</td>
                 <td>{{$project->name}}</td>
                 <td>{{$project->body}}</td>
                 <td>

                    <a href="{{route('project.edit', $project->id)}}">Edit</a>
                 </td>
            <td>
                <form action="{{route('project.destroy',$project->id)}}" method="post">
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
