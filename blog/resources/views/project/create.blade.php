@extends('layout.app')
@section('body')
    <br>
      <a href="{{route('project.store')}}" class="btn btn-info">Back</a>
 <div class="col-lg-4 col-lg-offset-4">
      <h1>{{substr(Route::currentRouteName(),8)}}</h1>
 <form action="/project/@yield('editId')" method="post">
       {{csrf_field()}}

       @if(isset($project->id))
       {{ method_field('PUT') }}
          @endif
         @section('editmethod')
       @show
   <fieldset>
      <div class="form-group">
            <input type="text" class="form-control" name="name" value="@yield('editname')" placeholder="Enter Name">
       </div>
     <div class="form-group">
         <div class="col-sm-10">
            <div class="form-group">
              <textarea class="form-control" placeholder="Enter your Text" name="body"    rows="5" >@yield('editbody')</textarea>
             <br><br>
            </div>
           <button type="submit" class="btn btn-success">Submit</button>
      </div>
     </div>
   </fieldset>
 </form>
</div>
@endsection
