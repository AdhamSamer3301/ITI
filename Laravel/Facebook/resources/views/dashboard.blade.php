@extends('layouts.master')

@section('content')


<section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What do you have to say?</h3></header>
            <form action="" >
                <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your Post"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
                
            </form>
        </div>
    </section>

    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What other people say...</h3></header>
            <article class="post">
                <p>
                Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.
                </p>
                <div class="info">
                    posted in may 2020 

                </div>

                <div class="interaction">
                    <a href="#">Like</a>
                    <a href="#">DisLike</a>
                    <a href="#">Delete</a>
                    <a href="#">Edit</a>

                </div>

            </article>
       
        </div>
    </section>


    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            
            <article class="post">
                <p>
                Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.
                </p>
                <div class="info">
                    posted in may 2020 
                </div>

                <div class="interaction">
                    <a href="#">Like</a>
                    <a href="#">DisLike</a>
                    <a href="#">Delete</a>
                    <a href="#">Edit</a>

                </div>

            </article>
       
        </div>
    </section>









@endsection