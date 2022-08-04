@extends('layouts.app')
@section('head')
<style>body{background: rgb(30,23,153);background: linear-gradient(90deg, rgba(30,23,153,1) 0%, rgba(125,18,110,0.7123891793045343) 57%, rgba(198,15,23,1) 91%, rgba(231,24,24,1) 100%, rgba(0,212,255,1) 100%);}</style>
@endsection 
@section('content')
<div class="w-50 m-auto" > 
    <form method="POST" action="{{route('formation.store')}}" enctype="multipart/form-data">  
        @csrf
        <h1>Create Formation</h1> 
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">name</label>   
          <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">description</label>
          <textarea name="description" class="form-control" id="" ></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">image</label>   
            <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
          </div>
        <button type="submit" class="btn btn-primary w-100">save</button> 
    </form>
</div>
@endsection