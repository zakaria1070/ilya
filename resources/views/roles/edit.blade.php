@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Role: {{$role->name}}</div>

                <div class="card-body">
                <form action="/role-update/{{$role->id}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$role->name}}" >
                          </div>
                       
                          <button type="submit" class="btn btn-warning">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection