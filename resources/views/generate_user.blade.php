
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
                 {{ csrf_field() }}
                <div class="form-group">
                  <h5>@if (count($errors) > 0)
                      <div class="form-group has-error has-feedback">
                          <input type="text" class="form-control col-md-3" name="number" placeholder="# of users" value="{{old('number')}}" style="background:#feffe6;">
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
                        <input type="text" class="form-control col-md-3" name="number" placeholder="# of user" value="{{$number}}">
                  </div>
                    @endif
                  </h5>
                <div>
                <button type="submit" class="btn btn-danger">Generate!</button>
              </div>

          </div>
          </form>
          <h2 class="intro">....</h2>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1" >
                  @for ($i=0; $i < $number; $i++)
                      <div class="col-lg-12 col-sm-6">
                              <div class="card hovercard">
                                  <div>
                                         <img alt="User Pic" src="{{$faker->imageUrl($width = 840, $height = 235)}}">
                                  </div>
                                  <div class="row span8">
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
                                  <div class="row span8">
                                    <!--Facebook-->
                                    <button type="button" class="btn btn-primary btn-fb"><i class="fa fa-facebook left"></i> Facebook</button>
                                        <!--Twitter-->
                                        <button type="button" class="btn btn-tw btn-info"><i class="fa fa-twitter left"></i> Twitter</button>
                                        <!--Google +-->
                                        <button type="button" class="btn btn-gplus btn-danger"><i class="fa fa-google-plus left"></i> Google +</button>

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
