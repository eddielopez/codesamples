@extends('layouts.master')

@section('content')
<div class="container" style="position: relative;top:80px;">
    <div class="row">
        <div class="col-lg-3">
            <p>
                <img src="http://placehold.it/250x200">
            </p>
            <p>
                <a class="btn btn-info btn-lg" href="#">MESSAGE</a>
            </p>
            <p>
                <a class="btn btn-success btn-lg" id="request_temp" href="#">Request OpenTemp</a>
            </p>
        </div>
        <div class="col-lg-9">

            <h1><span class="glyphicon glyphicon-user"></span> {{ucwords($user->firstname)}} {{ucwords($user->lastname)}}</h1>

            <h2><span class="glyphicon glyphicon-certificate"></span> Registered {{ucwords($user->usertype)}}</h2>

            <h3>Licensed In New York</h3>

            <p class="lead">Willing to Travel 25 Miles From Bellmore</p>

        </div>
    </div>
</div>
@stop
