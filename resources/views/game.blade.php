@extends('layouts.app')
@section('content')

<div class="container">
    <div class="col-md-auto text-center">
        <h1>{{$group->name}} <br>
            @foreach($member as $member)
                <div class="card">
                    <div class="card-body">
                        {{$member->id}}


                        {{$member->display_name}}
                        @foreach($gu as $info)
                            {{$info->score}}
                            @endforeach
                    </div>
                </div>

                @endforeach
        </h1>
    </div>
</div>
@endsection
