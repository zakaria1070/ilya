@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$user->name}}</div>

                <div class="card-body">
                   
                    <ul>
                        <form action="/user-update/{{$user->id}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" >
                              </div>
                           
                              <div class="form-group">
                                <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" >
                              </div>

                              <div class="form-group">
                                <label for="password">password</label>
                            <input type="text" class="form-control" id="password" name="password" value=""  >
                              </div>

                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Role</label>
                                <select class="form-control" id="exampleFormControlSelect1" name='roleid'>
                                    @foreach ($roles as $role)
                                    @if($role->id == $user->role_id)
                                <option selected value='{{$role->id}}'> {{$role->name}} </option>
                                    @else
                                <option  value='{{$role->id}}'> {{$role->name}} </option>

                                    @endif
                                    @endforeach
                                
                            
                                </select>
                              </div>
                           
                              <button type="submit" class="btn btn-warning">Modifier</button>
                        </form>
                    </ul>
                        
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection