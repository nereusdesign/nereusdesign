@extends('layouts.app')

@section('title', 'Nereus Design')
@section('desc','Custom web design and technology solutions for individuals and small to medium sized businesses.')

@section('content')

  <div class="container m-t-60 m-b-80" id="get-free-estimate">
    <div class="col-md-12 m-b-50">
      <div class="row">
        <h1 class="title">Request Your Free Estimate</h1>
        <p>Fill out our simple form below to request a free service estimate. Include as much information as possible about your current web solutions, problems and any future goals and one of our design experts will get back to you personally with an outline on ways we can help.</p>
      </div>
    </div>
  	<div class="col-md-12">
  		<div class="row">
  			<form method="post" action="{{route('request-estimate')}}">
  				<fieldset class="form-group">
  					<label for="name">Your Full Name</label>
  					<input type="text" name="name" class="form-control" placeholder="Enter name" id="name">
  				</fieldset>
  				<fieldset class="form-group">
  					<label for="email">Email Address</label>
  					<input name="email" type="email" class="form-control" placeholder="Enter email" id="email">
  				</fieldset>
          <fieldset class="form-group">
            <label for="phone">Phone Number</label>
            <input name="phone" type="text" class="form-control" placeholder="Enter phone number" id="phone">
          </fieldset>

          <fieldset class="form-group">
            <label for="website">Current Website Address / Domain<p class="is-muted help">optional - leave blank if you do not have one</p></label>

            <input name="website" type="text" class="form-control" placeholder="http:\\" id="website">
          </fieldset>
          <fieldset class="form-group">
            <label for="sellOnline">Do You or Will You Sell Online</label>
            <div><input type="radio" name="onlineSale" value="yes"><span class="m-l-5">Yes</span></div>
            <div><input type="radio" name="onlineSale" value="no"><span class="m-l-5">No</span></div>
          </fieldset>
          <fieldset class="form-group">
            <label for="services">Services Needed</label>
            <div><input type="checkbox" class="checkbox-big" name="webdesign" value="1"><span class="m-l-10">Website Design</span></div>
            <div><input type="checkbox" class="checkbox-big" name="seo" value="1"><span class="m-l-10">Search Engine Optimization</span></div>
            <div><input type="checkbox" class="checkbox-big" name="marketing" value="1"><span class="m-l-10">Online Advertising/Marketing</span></div>
          </fieldset>
  				<fieldset class="form-group">
  					<label for="goals">Describe Your Project Goals &amp; Needs</label>
  					<textarea class="form-control" rows="3" id="goals" name="goals"></textarea>
  				</fieldset>
  				<button type="submit" class="btn btn-primary">Request My Estimate</button>
  			</form>
  		</div>
  	</div>
  </div>


@endsection
