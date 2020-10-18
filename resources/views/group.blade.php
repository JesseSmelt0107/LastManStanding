@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="col-md-auto text-center">

            @if(count($groups) > 0)

                @foreach($groups as $group)
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h3 class="text-left ml-5">
                                    <a href="/game/{{$group->id}}">{{$group->name}}</a>
                                </h3>
                            </div>

                        </div>
                    </div>
                @endforeach

                @else
                    <h3>Er zijn nog geen groepen waar jij in zit!</h3>
            @endif



            <div>
                <a href="/group/new" class="btn btn-danger" role="button">
                    Maak een nieuwe groep aan
                </a>
            </div>
        </div>
    </div>
@endsection
