
@extends('layout')
@section('content')

<div class="row col-md-12 m-x-auto">
  <div class="col-md-12">
    <div>
      <div class="col-md-10 inner col-xs-10 col-xs-offset-1 col-sm-6">
      <div class="text-box">
        <div class="double-red-lines">
          <h3 class="user-email-color">How many paragraphs do you want?</h3>
          <br>
          <form class="form-inline" method="get">
             {{ csrf_field() }}
            <div class="form-group">
                  <h5>@if (count($errors) > 0)
                      <div class="form-group has-error has-feedback">
                          <input type="text" class="form-control" name="number" placeholder="# of Paragraphs" value="{{old('number')}}" style="background:#feffe6; text-align:center;">
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
                        <input type="text" class="form-control" name="number" placeholder="# of Paragraphs" value="{{$number}}" style="text-align:center;">
                  </div>
                  <br><br><br>
                    @endif
                  </h5>
              </div>
              <br>
              <div class="row">
              <button type="submit" class="btn btn-danger">Generate!</button>
            </div>
            <br>
            </div>

          </form>
      </div>
        <div class="row">
          <br><br>
          <p><?php echo implode('<p>', $paragraphs);?></p>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
