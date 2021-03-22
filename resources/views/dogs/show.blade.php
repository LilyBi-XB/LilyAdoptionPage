@extends ('layout')

@section ('content')

    <div id="page" class="container">
        <div id="sidebar">
            <div class="box2">
                <div class="title">
                    <h2>Apply now</h2>
                </div>
                <ul class="style2">
                    <form method="POST" action="/application">
                        @csrf
                        <div class="field">
                            <label class="label" for="name">Name</label>

                            <div class="control">
                                <input class="input" type="text" name="name" id="name">
                            </div>
                        </div>
                        <br>

                        <div class="field">
                            <label class="label" for="email">Email</label>

                            <div class="control">
                                <input class="input" type="text" name="email" id="email">
                            </div>
                        </div>
                        <br>

                        <div class="field">
                            <label class="label" for="experience"> Your experience with dogs </label>

                            <div class="control">
                                <textarea class="textarea"  name="experience" id="experience"></textarea>
                            </div>
                        </div>
                        <br>

                        <div class="field">
                            <input type="hidden" id="dog_name" name="dog_name" value={{$dogs->name}}>
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-link" type="submit"> Submit </button>
                            </div>
                        </div>
                    </form>
                </ul>
            </div>
        </div>


        <div id="content">
            <div class="title">
                <h2>About {{$dogs->name}}</h2>
                <p style="text-transform: initial">{{$dogs->intro}} </p>
                <img src={{ $dogs->img }} alt="" />
        </div>
    </div>


@endsection
