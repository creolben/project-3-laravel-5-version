
@extends('layout')
@section('content')

<div class="row col-md-12 m-x-auto">
  <div class="col-md-12">
    <div>
      <div class="col-md-10 inner col-xs-10 col-xs-offset-1 col-sm-6">
      <div class="text-box">
        <div>
          <h4>How many paragraphs do you want?</h4>
          <br>
          <form class="form-inline" method="get">
            <div class="form-group">
                  <h5>@if (count($errors) > 0)
                      <div class="form-group has-error has-feedback">
                          <input type="text" class="form-control" name="number" placeholder="# of Paragraphs" value="{{old('number')}}" style="background:#feffe6;">
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
                        <input type="text" class="form-control" name="number" placeholder="# of Paragraphs" value="{{$number}}">
                  </div>
                  <br><br><br>
                    @endif
                  </h5>
              </div>
              <br>
            </div>
            <br><br>
            <div class="row">
            <button type="submit" class="btn btn-danger">Generate!</button>
          </div>
          </form>

      </div>
          <h4 class="intro">-----------</h4>
          <p><?php echo implode('<p>', $paragraphs);?></p>
      </div>
    </div>
  </div>
</div>
@stop
