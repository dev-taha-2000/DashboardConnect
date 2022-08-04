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
                <th>email</th>
                <th>subject</th>
                <th>message</th> 
                <th>delete</th> 
            </tr>
        </thead>
        <tbody>
           @foreach ($contacts as $item)  
              <tr>
                <td>{{$item->nome}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->subject}}</td> 
                <td>{{$item->message}}</td> 
                <td>  
                    <form method="POST" action="{{route('contact.destroy',$item->id)}}">
                        @csrf 
                        @method('DELETE') 
                        <button type="submit" class="btn btn-outline-success">delete</button>
                    </form> 
              </tr>
           @endforeach
        </tbody>
      </table>
   </div> 
</div>
@endsection
