@extends('layout.app')
@section('body')
    <br>
      <a href="{{route('task.store')}}" class="btn btn-info">Back</a>
 <div class="col-lg-4 col-lg-offset-4">
      <h1>{{substr(Route::currentRouteName(),5)}}</h1>
 <form action="/task/@yield('editId')" method="post">
       {{csrf_field()}}

       @if(isset($task->id))
       {{ method_field('GET') }}
       @endif
       @section('editmethod')
       @show

   <fieldset>

      <div class="form-group">
        <input type="text" class="form-control" name="name" value="@yield('editname')" placeholder="Enter Name">
       </div>

      <div class="form-group">
         <div class="col-sm-10">
             @if($projects != null)
                <div class="form-group">
                     <label for="exampleSelect1">Select project </label>
                        <select name="project_id" class="form-control" id="exampleSelect1">
                           @foreach ($projects as $key=>$project)
                              <option value ="{{$key}}">
                                   {{$key}}
                                   {{$project}}
                             </option>
                          @endforeach
                        </select>

            @endif
 <div class="form-group">
        <div class="col-sm-10">
            @if($employees != null)
               <div class="form-group">
                 <label for="exampleSelect1">Select employee </label>
                    <select name="employee_id" class="form-control" id="exampleSelect1">
                      @foreach ($employees as $key=>$employee)
                         <option value ="{{$key}}">
                               {{$key}}
                              {{$employee}}
                         </option>
                         @endforeach
                    </select>

           @endif

            <button type="submit" class="btn btn-success">Submit</button>
         </div>


    </div>

        </fieldset>


  </form>
</div>
@endsection
