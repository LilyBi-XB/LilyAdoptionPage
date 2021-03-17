
@extends ('layout')

@section ('content')
    <div id="page" class="container">
        <div id="content">
            <div class="box2">
                <div class="title">
                    <h2>update details</h2>
                </div>
                <ul class="style2">
                    <form method="POST" action="/application">
                        @csrf
                        @method('PUT')
                        <div class="field">
                            <label class="label" for="name">The pet you'd like to adopt</label>

                            <div class="control">
                                <select name="dogName" id="dogName">
                                    <option value="1">Gino</option>
                                    <option value="2">Bebe</option>
                                    <option value="3">Nidge</option>
                                    <option value="4">Buddy</option>
                                </select>
                            </div>
                        </div>
                        <br>

                        <div class="field">
                            <label class="label" for="name">Name</label>

                            <div class="control">
                                <input class="input" type="text" name="name" id="name">
{{--                                <input class="input" type="text" name="name" id="name" value="{{$application->name}}">--}}
                            </div>
                        </div>
                        <br>

                        <div class="field">
                            <label class="label" for="email">Email</label>

                            <div class="control">
                                <input class="input" type="text" name="email" id="email">
{{--                                <input class="input" type="text" name="email" id="email" value="{{$application->email}}">--}}
                            </div>
                        </div>
                        <br>

                        <div class="field">
                            <label class="label" for="experience"> Your experience with dogs</label>

                            <div class="control">
                                <textarea class="textarea"  name="experience" id="experience"></textarea>
{{--                                <textarea class="textarea"  name="experience" id="experience" value="{{$application->experience}}"></textarea>--}}
                            </div>
                        </div>
                        <br>

                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-link" type="submit"> Submit </button>
                            </div>
                        </div>
                    </form>
                </ul>
            </div>
        </div>
@endsection
