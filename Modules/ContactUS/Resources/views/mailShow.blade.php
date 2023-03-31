 @extends('page::layouts.master')

 @section('title', 'Page')

 @section('content')
     <!-- container menu -->
     <div class="container print-none">
         <ul class="nav nav-tabs mt-2">
             <li class="nav-item">
                 <a class="nav-link active" href="#">Email Details</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="{{ route('email-list.page') }}">Eamil List</a>
             </li>
         </ul>
     </div>
     <!-- container menu end -->

     <div class="container">
         <div class="card border-0 mt-3">
             <!-- content body -->
             <div class="card-body p-0 mt-3">
                 <div class="entry-wrap">
                     <div class="row">
                         <div class="col-md-10">
                             <div class="item-details-wrap">
                                 <div class="row gy-2">
                                     <div class="col-md-2">
                                         <span>Name: </span>
                                     </div>
                                     <div class="col-md-10">
                                         <span>{!! $email->name !!}</span>
                                     </div>
                                     <div class="col-md-2">
                                         <span>Email: </span>
                                     </div>
                                     <div class="col-md-10">
                                         <span>{!! $email->email !!}</span>
                                     </div>
                                     <div class="col-md-2">
                                         <span>Message:</span>
                                     </div>
                                     <div class="col-md-10">
                                         <span>{!! $email->message !!}</span>
                                     </div>
                                 </div>
                                 <!-- End information ======================================== -->
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- card head end -->
     </div>

 @endsection
