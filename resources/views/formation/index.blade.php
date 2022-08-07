@extends('layouts.app')

@section('content')
@include('aside') 
<div class="container ">         
  @extends('aside') 
  <div class="main"> 
    <div class="topbar d-flex justify-content-between">  
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
       <a href="{{url('formation/create')}}"> 
        <button type="button" class="btn btn-outline-primary">create</button>
       </a>
        <div class="search">
            <label>
                <input type="text" placeholder="Recherche">
            </label>
        </div>  
    </div>     
      <table class="table  table table-striped table-hover">
        <thead> 
            <tr class="bg-primary">      
                <th>nome</th>
                <th>description</th>
                <th>image</th>
                <th>delete</th>
                <th>edit</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($formations as $item)
              <tr>
                <td>{{$item->nome}}</td>
                <td>{{$item->description}}</td>
                <td><img src="images/{{$item->image}}" style="width:80px;height:50px"></td> 
                <td>
                    <form method="POST" action="{{route('formation.destroy',$item->id)}}">
                        @csrf 
                        @method('DELETE') 
                        <button type="submit" class="btn btn-outline-success">delete</button>
                    </form> 
                </td>
                <td >
                  <a href="{{route('formation.edit',$item->id)}}">   
                    <button type="button" class="btn btn-outline-danger">edit</button>
                  </a>
                </td> 
              </tr>
           @endforeach
        </tbody>
      </table>
   </div> 
</div>
@endsection
