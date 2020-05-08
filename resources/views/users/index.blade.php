@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User<a href="/user-create" class="btn btn-success"> new</a></div>

                <div class="card-body">
                   
                    <ul>
                        @foreach ($users as $user)
                    <li>
                        {{$user->name}}
                         <a href="user-edit/{{$user->id}}" class="btn btn-warning">edit</a>
                    <form action="/user-delete/{{$user->id}}" method='post' class='d-inline'>
                        @csrf
                        <button type="submit" class='btn btn-danger'>Delet</button>
                         </form>
                    </li>
                        @endforeach
                    </ul>
                        
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection