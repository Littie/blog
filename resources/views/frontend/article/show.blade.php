@extends('frontend.layouts.app')

@section('content')
    <div class="page-box">
        <div class="page-box-content">
            <section id="main">
                <header class="page-header">
                    <div class="container">
                        <h1 class="title">{{ $article->title }}</h1>
                    </div>
                </header>
                <div class="container">
                    <div class="row">
                        <div class="content blog blog-post col-sm-9 col-md-9">
                            <article class="post">
                                <div class="entry-content">
                                    {!! $article->body !!}
                                </div>
                                <footer class="entry-meta">
                                    <span class="autor-name">{{ $user->name }}</span>,
                                    <span class="time">{{ $article->published_at->diffForHumans() }}</span>
                                    <span class="separator">|</span>
                                    <span class="meta">Posted in <a href="#">Sports</a>, <a href="#">Movies</a></span>
			<span class="comments-link pull-right">
			  <a href="#"><i class="fa fa-comment"></i> 3 comment(s)</a>
			</span>
                                </footer>
                            </article><!-- .post -->

                            <h3 class="title slim">Comments</h3>
                            <ul class="commentlist">
                                <li>
                                    <img class="replace-2x avatar" width="84" height="84" src="content/img/avatar-1.jpg" alt="">
                                    <div class="meta">
                                        <span>Mike Example</span>,
                                        <span class="time">03.11.2013, 10:45:</span>
                                    </div>
                                    <p class="description">
                                        Suspendisse at placerat turpis. Duis luctus erat vel magna pharetra aliquet. Maecenas tincidunt feugiat ultricies. Phasellus et dui risus. Vestibulum adipiscing, eros quis lobortis dictum.  It enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </li>
                                <li>
                                    <img class="replace-2x avatar" width="84" height="84" src="content/img/avatar-2.jpg" alt="">
                                    <div class="meta">
                                        <span>Mike Example</span>,
                                        <span class="time">03.11.2013, 10:45:</span>
                                    </div>
                                    <p class="description">
                                        Etiam mollis volutpat odio, id euismod justo gravida a. Aliquam erat volutpat. Phasellus faucibus venenatis lorem, vitae commodo elit pretium et. Duis rhoncus lobortis congue. Vestibulum et purus dui, vel porta lectus. Sed vulputate pulvinar adipiscing. It enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </li>
                                <li>
                                    <img class="replace-2x avatar" width="84" height="84" src="content/img/avatar-3.jpg" alt="">
                                    <div class="meta">
                                        <span>Mike Example</span>,
                                        <span class="time">03.11.2013, 10:45:</span>
                                    </div>
                                    <p class="description">
                                        Etiam mollis volutpat odio, id euismod justo gravida a. Aliquam erat volutpat. Phasellus faucibus venenatis lorem, vitae commodo elit pretium et. Duis rhoncus lobortis congue. Vestibulum et purus dui, vel porta lectus. Sed vulputate pulvinar adipiscing. It enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </li>
                            </ul>

                            <h3 class="title slim">Leave a Reaply</h3>

                            <form class="comments-form">
                                <label>Name: <span class="required">*</span></label>
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <input class="form-control" type="text">
                                    </div>
                                </div>

                                <label>Email Adress: <span class="required">*</span></label>
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <input class="form-control" type="email">
                                    </div>
                                </div>

                                <label>Comment: </label>
                                <div class="row">
                                    <div class="comment-box col-sm-10 col-md-10">
                                        <textarea class="form-control"></textarea>
                                        <i>Note: HTML is not translated!</i>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="button-set">
                                    <span class="required pull-right"><b>*</b> Required Field</span>
                                    <button class="btn btn-default">Submit</button>
                                </div>
                            </form>
                        </div><!-- .content -->

                        @include('frontend.include.sidebar')

                    </div>
                </div><!-- .container -->
            </section><!-- #main -->

        </div><!-- .page-box-content -->
    </div><!-- .page-box -->


    <div class="clearfix"></div>
@stop

