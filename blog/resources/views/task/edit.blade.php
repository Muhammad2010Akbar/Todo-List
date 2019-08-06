@extends('task.create')
@section('editId ',$tasks->id)
@section('editname',$tasks->name)
@section('editemployee_id',$tasks->employee_id)
@section('editproject_id',$tasks->project_id)
@section('editmethod')
 {{method_field('Get')}}

@endsection
