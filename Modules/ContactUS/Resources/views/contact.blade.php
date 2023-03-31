@extends('contactus::layouts.master')

@section('title', 'ContactUS')

@section('content')
<div class="container">
     <form class="form" action="{{ route('send-mail.page') }}" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="bU4aGmnxEyGTDAFvzVtRNfVKjpM734QnX9z3nhSO"> --}}
        <input type="text" class="form-control" placeholder="Your Name *" id="name"
            name="name" required="">
        <input type="email" name="email" class="form-control" placeholder="E-Mail *" id="email"
            required="">
        <textarea placeholder="Your Message Here *" rows="7" id="message" name="message" class="form-control"
            required=""></textarea>
        <button class="globalBtn globalBtn__black" type="submit">Send Message</button>
    </form>
</div>
@endsection
