@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mon profil</div>

                <div class="card-body">
                <form action="/profil-update/{{Auth::id()}}'" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value=" {{Auth::user()->name}} " >
                          </div>
                          <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" class="form-control" id="email" value=" {{Auth::user()->email}} " name="email">
                          </div>
                          <button type="submit" class="btn btn-warning">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection