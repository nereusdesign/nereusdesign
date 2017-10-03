@extends('layouts.app')

@section('title', 'Nereus Design')
@section('desc','Custom web design and technology solutions for individuals and small to medium sized businesses.')

@section('content')

  <div class="container m-t-100 m-b-100">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                  <h2 class="panel-heading m-t-5">Custom Web Design</h2>
                    <div class="panel-body">
                        <img src="{{asset('images/web-design.jpg')}}" style="width:100%;height:auto">
                        <p class="is-font-16">
                          Let our experienced web designers create your custom website of your dreams. No matter the size, we guarentee to work with you to put together, design, and deploy your site on time and under budget.
                        </p>
                    </div>
              </div>

              <div class="panel panel-default">
                  <h2 class="panel-heading m-t-5">Search Engine Optimization</h2>
                    <div class="panel-body">
                      <img src="{{asset('images/search-engine-optimization.jpg')}}" style="width:100%;height:auto">
                      <p class="is-font-16">
                        Our team of specalists will review your current site, or oversee your new site to make sure best practices are being followed to help increase your rankings across all major search engines.
                      </p>
                    </div>
              </div>

              <div class="panel panel-default">
                  <h2 class="panel-heading m-t-5">Digital Marketing</h2>
                    <div class="panel-body">
                      <img src="{{asset('images/digital-marketing.jpg')}}" style="width:100%;height:auto">
                      <p class="is-font-16">
                        Our marketing professionals can work with you in designing a marketing plan to get your products and services in front of your future customers. 
                      </p>
                    </div>
              </div>
          </div>
      </div>
  </div>
@endsection
