@extends('layouts.app')
@section('content')

    <div class="container">
    <div class="col-md-auto text-center">
        <form method="POST" action={{'/group', 'GroupController@store'}}>
            @csrf
            <label for="groupName">Groepsnaam:</label>
            <input type="text" id="groupName" name="groupName" class="form-control">
            <button type="submit" class="btn btn-danger mt-4">Maak Nieuwe Groep</button>
        </form>

    </div>
</div>

@endsection
