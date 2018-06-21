@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                    <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
            @include('user_favorite.favorite_button', ['user' => $user])
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">TimeLine <span class="badge">{{ $count_microposts }}</span></a></li>
                <li role="presentation" class="{{ Request::is('users/*/favings') ? 'active' : '' }}"><a href="{{ route('users.favings', ['id' => $user->id]) }}">Favings <span class="badge">{{ $count_favings }}</span></a></li>
                <li role="presentation" class="{{ Request::is('users/*/favers') ? 'active' : '' }}"><a href="{{ route('users.favers', ['id' => $user->id]) }}">Favers <span class="badge">{{ $count_favers }}</span></a></li>
            </ul>
            @include('users.users', ['users' => $users])
        </div>
    </div>
@endsection