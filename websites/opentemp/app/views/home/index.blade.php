@extends('layouts.master')


@section('content')
<?php echo View::make('modals.login') ?>
<main class="page-wrapper" role="main">




    <div class="intro-masterhead">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron">
                        <h1>OpenTemp</h1>
                        <p class="lead">Quick. Easy. Powerful.</p>
                        <p class="lead lead-box">Find awesome temporary employees in seconds.</p>
                    </div>
                    <?php echo View::make('modals.newemployer') ?>
                      </div><!-- end .col-lg-12 -->
                <div class="col-lg-6">
                    <div class="jumbotron">
                        <p class="center"><a data-toggle="modal" href="#myModal" class="btn btn-lg temp-btn btn-block" href="#">Find an OpenTemp</a></p>
                    </div>
                </div><!-- end .col-lg-6 -->

                <div class="col-lg-6">
                    <div class="jumbotron">
                        <p class="center"><a  class="btn btn-lg temp-btn btn-block" href="user/new">Become an OpenTemp</a></p>
                    </div>
                </div><!-- end .col-lg-6 -->
            </div><!-- end .row -->
        </div><!-- end .container -->
    </div><!-- end .intro-masterhead -->





    @stop