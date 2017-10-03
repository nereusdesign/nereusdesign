@extends('layouts.app')

@section('title', 'Nereus Design')
@section('desc','Custom web design and technology solutions for individuals and small to medium sized businesses.')

@section('content')


<!-- Main Content -->
<div class="container m-t-100 m-b-40">
      <div class="row">
            <div class="col-lg-6">
              <h1>Let Nereus Design Work For You</h1>
              <p class="is-font-18">Whatever your technology needs, we can help:</p>
              <ul class="is-font-18">
                <li>Modern Responsive Web Design</li>
                <li>Search Engine Optimization</li>
                <li>Custom Tech Solutions</li>
                <li>Responsive customer support</li>
              </ul>
              <p class="is-font-16">No matter if you are an individual looking to start a business or website or a small business looking to grow. You too can have a professional website, digital marketing service and specalized search engine optimization support to to take your business to the next level.</p>
            </div>
            <div class="col-lg-6">
              <img style="max-width: 100%;" class="img-fluid rounded" src="{{asset('images/design-services.jpg')}}" alt="Web Design Services">
            </div>
      </div>
      <hr>
      <div class="row mb-4">
            <div class="col-md-8">
              <p class="is-font-15">Lets get started today. Answer a few questions to request a free estimate and let us show you all we can do for you.</p>
            </div>
            <div class="col-md-4">
              <a class="btn btn-lg btn-primary btn-block" href="{{route('request-estimate')}}">Get A <strong>Free</strong> Estimate</a>
            </div>
      </div>
      <hr>
</div>

<!-- End Content -->

@endsection
