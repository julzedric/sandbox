@extends('layouts.app')

@section('content')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="imgs/la.jpg" alt="Los Angeles" style="width:100%;">
            </div>

            <div class="item">
                <img src="imgs/chicago.jpg" alt="Chicago" style="width:100%;">
            </div>

            <div class="item">
                <img src="imgs/ny.jpg" alt="New york" style="width:100%;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{--End of Carousel--}}
    <div class="progress">
        <div class="progress-bar progress-bar-success" style="width: 45%"></div>
        <div class="progress-bar progress-bar-warning" style="width: 35%"></div>
        <div class="progress-bar progress-bar-danger" style="width: 20%"></div>
    </div>
    {{--featured projects start--}}
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel success</h3>
                </div>
                <div class="panel-body">
                    <div class="thumbnail">
                        <a href="/imgs/lights.jpg" target="_blank">
                            <img src="/imgs/lights.jpg" alt="Lights" style="width:100%">
                            <div class="caption">
                                <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel success</h3>
                </div>
                <div class="panel-body">
                    <div class="thumbnail">
                        <a href="/imgs/lights.jpg" target="_blank">
                            <img src="/imgs/lights.jpg" alt="Lights" style="width:100%">
                            <div class="caption">
                                <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel success</h3>
                </div>
                <div class="panel-body">
                    <div class="thumbnail">
                        <a href="/imgs/lights.jpg" target="_blank">
                            <img src="/imgs/lights.jpg" alt="Lights" style="width:100%">
                            <div class="caption">
                                <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection