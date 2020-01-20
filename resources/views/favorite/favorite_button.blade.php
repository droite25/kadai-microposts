@if (Auth::user()->is_favorite($favorite->id))
    {!! Form::open(['route' => ['favorites.unfavorite', $favorite->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => 'btn btn-danger btn-sm']) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['favorites.favorite', $favorite->id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-sm"]) !!}
    {!! Form::close() !!}
@endif