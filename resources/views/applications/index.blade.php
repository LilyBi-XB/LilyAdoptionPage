@extends ('layout')

@section ('content')
    <div id="content">
        <div id="portfolio" class="container">
            <div class="title">
                <h2><br><br>Current Applications</h2>
            </div>
            <div>
            @foreach ($applications as $application)
                    <br><br>
                    <div id="column{{ $application->id }}" class="card" style="width: 30rem">
                            <h4 class="card-title"><strong> Application ID: {{ $application->id }}</strong> </h4>
                            <p class="card-text">
                                Dog: {{ $application->dog_name }} | Name: {{ $application->name }} | Email: {{ $application->email }}
                                <br> Experience with dogs: {{ $application->experience }}
                            </p>

                        <form method="GET" action="/application/{{ $application->id }}">
                            <input type="submit" value="edit">
                        </form>
                        <form method="POST" action="/application/{{ $application->id }}">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="delete">
                            </form>
                    </div>
            @endforeach
            <br><br><br><br><br>

            </div>
        </div>
    </div>





@endsection
