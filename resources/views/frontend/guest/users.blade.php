@extends('frontend.layouts.app')

@section('content')
    <div class="page-box">
        <div class="page-box-content">
            <section id="main">
                <div class="container">
                    <article class="content">
                        <div class="bottom-padding bottom-padding-min">
                            <div class="title-box">
                                <h2 class="title">Our users</h2>
                            </div>
                            <div class="clearfix"></div>
                            <div class="row text-center">
                                @foreach ($users as $user)
                                    @if($user->blog_id != 0)
                                        <div class="col-sm-3 col-md-3 employee rotation">
                                            <div class="default">
                                                <div class="image">
                                                    <img class="replace-2x" src="content/img/team-1.jpg" alt="" title="" width="270" height="270">
                                                </div>
                                                <div class="description">
                                                    <div class="vertical">
                                                        <h3 class="name">{{ $user->name }}</h3>
                                                        <div class="role">Bloger</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="employee-hover">
                                                <h3 class="name">{{ $user->name }}</h3>
                                                <div class="role">Bloger</div>
                                                <a href="{{ url('/blog/' . $user->blog['id']) }}"><h3 class="name"><b>Blog: </b>{{ $user->blog['name'] }}</h3></a>
                                                <div class="image">
                                                    <a href="#"><img class="replace-2x" src="content/img/team-1.jpg" alt="" title="" width="270" height="270"></a>
                                                </div>
                                                <div>
                                                    <p>{{ $user->blog['description'] }}</p>
                                                    <div class="contact"><b>Email: </b>{{ $user->email }}</div>
                                                    <div class="contact"><b>Phone: </b>11 555 333 77</div>
                                                </div>
                                                <div class="social">
                                                    <a class="icon rounded" href="#"><span class="icon-facebook"><i class="fa fa-facebook"></i></span></a>
                                                    <a class="icon rounded" href="#"><span class="icon-twitter"><i class="fa fa-twitter"></i></span></a>
                                                    <a class="icon rounded" href="#"><span class="icon-google"><i class="fa fa-google"></i></span></a>
                                                    <a class="icon rounded" href="#"><span class="icon-linkedin"><i class="fa fa-linkedin"></i></span></a>
                                                </div>
                                            </div><!-- .employee-hover -->
                                        </div><!-- .employee-->
                                    @endif
                                @endforeach
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </article><!-- .content -->
                </div>
            </section><!-- #main -->

        </div><!-- .page-box-content -->
    </div><!-- .page-box -->


@stop

