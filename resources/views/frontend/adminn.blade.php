@extends('layouts.frontend')
@section('content')
</br>
</br>
</br>
</br>
<div class = 'cl1 col-4 offset-4'>
 <form method="post" action="{{url('/store')}}">
  {{csrf_field()}}
  @if(count($errors)>0)
           @foreach($errors->all() as $error)
               <div class="alert alert-danger">{{$error}}</div>
           @endforeach
       @endif
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="login" class="form-control" placeholder="Enter email" name="mail">
    
  </div>

 

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" placeholder="Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary" value="login"><a href="{{url('/view')}}" style="color:white">Login</a></button>
   </form>
</div>


@endsection

