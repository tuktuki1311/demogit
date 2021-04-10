@extends('layout')

@section('header')
    <div id="wrapper">
        <div id="header-wrapper">
            <div id="header">
                <div id="logo">
                    <h1><a href="#">About Us Section </a></h1>
                    <p>Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a></p>
                </div>
            </div>
        </div>
    @endsection('header')

    @section('content')
        <!-- end #header -->
            <div id="menu">
                <ul>
                    <li class="current_page_item"><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Photos</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="#">Posts</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <!-- end #menu -->
            <div id="page">
                <div id="page-bgtop">
                    <div id="page-bgbtm">
                        <div id="content">

                                {{$posts->title}}
                                <div class="post">
                                    <h2 class="title"><a href="#"></a></h2>
                                    <p class="meta">Posted by <a href="#">Someone</a>
                                        &nbsp;&bull;&nbsp; <a href="#" class="comments"></a> &nbsp;&bull;&nbsp; <a href="" class="permalink">Full article</a></p>
                                    <div class="entry">
                                        <p><img src="images/img03.jpg" width="186" height="186" alt="" class="alignleft border" /></p>
                                        <p> </p>
                                    </div>
                                </div>


                            <div style="clear: both;">&nbsp;</div>
                        </div>
                        <!-- end #content -->

                        <!-- end #sidebar -->
                        <div style="clear: both;">&nbsp;</div>
                    </div>
                </div>
            </div>
            <!-- end #page -->
    </div>
@endsection
