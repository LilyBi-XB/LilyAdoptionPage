
@extends ('layout')

@section ('content')

<div id="portfolio-wrapper">
    <div id="portfolio" class="container">
        @foreach ($dogs as $dog)
        <div id="column{{ $dog->id }}">
            <div class="title">
                <h2>{{ $dog->name }}</h2>
            </div>
            <a href="/dog/{{$dog->id}}" class="image image-full"><img src={{ $dog->img }} alt="" /></a>
            <p>{{ $dog->excerpt }}</p>
            <a href="/dog/{{$dog->id}}" class="icon icon-arrow-right button">Adopt {{ $dog->name }}</a> </div>
        @endforeach
    </div>
</div>

@endsection
