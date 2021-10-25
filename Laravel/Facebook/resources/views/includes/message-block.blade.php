@if(count ($errors) >0)
    <div class="row">

        <div class="col-md-6  col-md-offest-4 error" >

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>

                @endforeach
            </ul>

        </div>

    </div>

@endif
@if(Session::has('message'))
    <div class="row">

        <div class="col-md-6  col-md-offest-4 success">

            {{Session::get('message')}}

        </div>

    </div>

@endif
