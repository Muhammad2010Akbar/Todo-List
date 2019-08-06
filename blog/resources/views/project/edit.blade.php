@extends('project.create')
@section('editId',$project->id)
@section('editname',$project->name)
@section('editbody',$project->body)
@section('editmethod')
 {{method_field('PUT')}}

@endsection
