
@extends('layout')
@section('content')

<div class="row">
  <div class="col-md-12 backg">
    <div class="col-md-6 inner col-xs-6 col-xs-offset-3 col-sm-6">
      <div class="text-box">
          <h2 class="intro">Generators</h2>
          <br><br>
          <div class="row col-xs-offset-2">
            <div class="col-md-10">
            <a href="{{action('MainController@paragraphs')}}" type="submit" class=" btn btn-lg btn-success" style="width: 150px;">Paragraphs</a>
          </div>
        </div>
        <br><br><br>
        <div class="row col-xs-offset-2">
          <div class="col-md-10">
            <a href="{{action('MainController@user_gen')}}" type="submit" class="btn btn-lg btn-primary btn-size" style="width: 150px;">Users</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
