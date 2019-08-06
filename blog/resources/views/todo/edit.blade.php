@extends('todo.create')
@section('editId',$employee->id)
@section('editname',$employee->name)
@section('editbody',$employee->body)
@section('editmethod')
{{method_field('PUT')}}

@endsection
