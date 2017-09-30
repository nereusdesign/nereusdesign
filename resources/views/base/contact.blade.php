@extends('layouts.app')

@section('title', 'Nereus Design')
@section('desc','Custom web design and technology solutions for individuals and small to medium sized businesses.')


@section('styles')
  <style>
      .container legend {
      	margin-top: 50px;
      	margin-left: auto;
      	margin-right: auto;
      	color: #EB771F;
      }

      .container .navbar-header .navbar-brand {
      	height: 90px;
      }

      .container.nav #defaultNavbar1 .nav.navbar-nav.navbar-right {
      	margin-top: 25px;
      }

      nav .container {
      	background-color: #262626;
      }


      .form-horizontal {
      	width: 85%;
      	margin: 0 auto 0 auto;
      	padding: 10px;
      }
  </style>
@endsection

@section('content')

  <div class="container bg1">
  <legend class="h1 text-center bg1">Contact Us</legend>
  <div class="container wrapper">
    <form class="form-horizontal" role="form" method="post" action="{{route('contact')}}">

      <div class="form-group">
        <label class="control-label col-sm-2" for="name"><span class="required">*</span>Name:</label>
        <div class="col-sm-10 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="name" type="text" required class="form-control" id="name" placeholder="Your full name" title="name">
          </div>
          @if ($errors->has('name'))
            <p class="help alert-danger">{{$errors->first('name')}}</p>
          @endif
        </div>
      </div>

      <!--Email Address-->

      <div class="form-group">
        <label class="control-label col-sm-2" for="Email"><span class="required">*</span>Email Address:</label>
        <div class="col-sm-10 inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input name="Email" type="email" required class="form-control" id="email" placeholder="your@email.com" title="Email">
          </div>
          @if ($errors->has('email'))
            <p class="help alert-danger">{{$errors->first('email')}}</p>
          @endif
        </div>
      </div>

      <!--Text Area-->
      <div class="form-group">
        <label class="control-label col-sm-2" for="message"><span class="required">*</span>Message:</label>
        <div class="col-sm-10 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>

            <textarea class="form-control" name="message" rows="4" placeholder="Type your message here."></textarea>
          </div>
          @if ($errors->has('message'))
            <p class="help alert-danger">{{$errors->first('message')}}</p>
          @endif
        </div>
      </div>



      <!--SEND Button-->

      <div class="form-group">
        <label class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <button type="submit" class="btn btn-warning">Send <span class="glyphicon glyphicon-send"></span>
          </button>
        </div>
      </div>

    </form>
  </div>
@endsection
