@extends('layouts.app')
@section('content')

<div class="container">
    <div class="col-md-auto text-center">
        <div>
            <h1>WELKOM</h1>
            @if(!Auth::user())
            <p><a href="/login">Log in</a> of <a href="/register">Registreer</a> om te kunnen spelen</p>
                @endif

        </div>

        <div class="col-md mt-5">
            <h3> WAT IS LAST MAN STANDING</h3>
            <p class="mx-auto" style="width: 300px;">
                Dit is een placeholder text
                hier komt uiteindelijk een uitleg van het spel
            </p>
        </div>
    </div>
</div>


@endsection
