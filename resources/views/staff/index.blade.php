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
       <a href="{{url('staff/create')}}">  
        <button type="button" class="btn btn-outline-primary">create</button>
       </a>
        <div class="search">
            <label>
                <input type="text" placeholder="Recherche">
            </label>
        </div> 
    </div>
      <table class="table">
        <thead> 
            <tr>
              <th>nome</th>  
              <th>profession</th> 
              <th>definition</th>
              <th>image</th>
              <th>delete</th>
              <th>edit</th>
            </tr> 
        </thead>
        <tbody>
            @foreach ($staffs as $item) 
              <tr>
                <td>{{$item->nome}}</td> 
                <td>{{$item->profession}}</td> 
                <td>{{$item->definition}}</td> 
                <td>{{$item->image}}</td>  
                <td class="text-center">
                    <form method="POST" action="{{route('staff.destroy',$item->id)}}"> 
                        @csrf 
                        @method('DELETE') 
                        <button type="submit" class="btn btn-outline-success">delete</button>
                    </form> 
                </td>
                <td class="text-center">
                  <a href="{{route('staff.edit',$item->id)}}">   
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
