<div class="hidden">
require_once '/path/to/Faker/src/autoload.php';
</div>
@extends('layout')
@section('content')
  <div class="row col-md-12 m-x-auto">
    <div class="col-md-12">
      <div>
        <div class="col-md-10 col-md-offset-1 inner col-xs-10 col-xs-offset-1 col-sm-6">
          <div class="text-box">
            <div>
              <h4>How many users do you want?</h4>
              <br>
              <form class="form-inline" method="get">
                <div class="form-group">
                  <h5>@if (count($errors) > 0)
                      <div class="form-group has-error has-feedback">
                          <input type="text" class="form-control" name="number" placeholder="# of users" value="{{old('number')}}" style="background:#feffe6;">
                          <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                      </div>
                      <br><br>
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                    </div>
                    @else
                    <div class="form-group has-success has-feedbac">
                        <input type="text" class="form-control" name="number" placeholder="# of user" value="{{$number}}">
                  </div>
                    @endif
                  </h5>
                <div>
                <button type="submit" class="btn btn-danger">Generate!</button>
              </div>

          </div>
          </form>
          <h2 class="intro">-----------</h2>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1" >
                  @for ($i=0; $i < $number; $i++)
                  <div class="container">

                    <div class="row">

                      <div class="col-lg-8 col-sm-6">
                              <div class="card hovercard">
                                  <div>
                                         <img alt="User Pic" src="{{$faker->imageUrl($width = 750, $height = 235)}}">
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3 col-lg-3 avatar" align="center"> <img alt="User Pic" src="{{$faker->imageUrl($width = 480, $height = 480)}}" class="img-circle img-responsive"> </div>
                                    <p>
                                    <div class=" col-md-8 col-lg-8 ">
                                      <table class="table user-information-color">
                                        <tbody>
                                          <tr>
                                            <td>Home Address</td>
                                            <td>{{$faker->address}}</td>
                                          </tr>
                                          <tr>
                                            <td>Date of Birth</td>
                                            <td>{{$faker->date($format = 'm/d/y', $max = 'now')}}</td>
                                          </tr>
                                          <tr>
                                            <td>Email</td>
                                            <td ><a class="user-email-color" href="#">{{$faker->email}}</a></td>
                                          </tr>
                                            <td>Phone Number</td>
                                            <td>{{$faker->phoneNumber}}(Landline)
                                            </td>

                                          </tr>

                                        </tbody>
                                      </table>
                                    </div>
                                  </p>
                                  </div>
                                  <div class="bottom">
                                      <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                                          <i class="fa fa-twitter"></i>
                                      </a>
                                      <a class="btn btn-danger btn-sm" rel="publisher"
                                         href="https://plus.google.com/+ahmshahnuralam">
                                          <i class="fa fa-google-plus"></i>
                                      </a>
                                      <a class="btn btn-primary btn-sm" rel="publisher"
                                         href="https://plus.google.com/shahnuralam">
                                          <i class="fa fa-facebook"></i>
                                      </a>
                                      <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                                          <i class="fa fa-behance"></i>
                                      </a>
                                  </div>
                              </div>

                          </div>

                    </div>
                  </div>
                  @endfor
                          </div>
                        <br>
                  </div>
                  </div>

                </div>

            </div>
          </div>


    </div>

@stop
