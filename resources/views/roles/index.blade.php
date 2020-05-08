@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Role <a href="/role-create" class="btn btn-success"> new</a></div>

                <div class="card-body">
                   
                    <ul>
                        @foreach ($roles as $role)
                    <li>
                        {{$role->name}}
                         <a href="role-edit/{{$role->id}}" class="btn btn-warning">edit</a>
                    <form action="/role-delete/{{$role->id}}" method='post' class='d-inline'>
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