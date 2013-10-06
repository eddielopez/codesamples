@extends('layouts.master')

@section('content')
 <div class="container results-container">

     <div class="col-lg-12">
         <div class="row">
             <div class="col-lg-3" style="min-height:500px;">
                 <div class="alert alert-dismissable">
                     <strong><span class="badge pull-right">42</span>OpenTemps Available</strong>
                 </div>
             </div>
             <div class="col-lg-9">

                 @foreach ($temp as $temps)

                 <div class="row temp-container" style="margin-bottom: 50px;">

                     <div class="temp-photo-container" id="search-photo">
                         <img src="http://placehold.it/150x150" />
                     </div><!-- end .temp-photo -->

                     <div class="col-md-2">
                         <div>
                             <h5>{{ ucwords($temps->firstname) }} {{ucwords($temps->lastname)}}</h5>
                         </div>
                         <div>
                             <h5>3 Miles Away</h5>
                         </div>

                     </div><!-- end .col-md-3 -->

                     <div class="col-md-2">
                         <div>
                             <h5>${{$temps->salary}}/Hour</h5>
                         </div>
                         <div>
                             <h5> 4+ years Exp</h5>
                         </div>
                     </div><!-- end .col-md-2 -->

                     <div class="col-md-2">

                         <a type="button" class="btn btn-primary" href="user/profile/{{$temps->id}}">View Profile</a>
                         <a type="button" class="btn btn-primary">Request</a>

                      </div><!-- end .col-md-2 -->


                     </div>






                 @endforeach


             </div><!-- end .col-lg-9 -->
         </div>
    </div>
@stop