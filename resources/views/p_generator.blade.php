
@extends('layout')
@section('content')

<div class="row">
  <div class="col-md-12 backg">
    <div class="col-md-10 inner col-xs-10 col-xs-offset-1 col-sm-6">
      <div class="text-box">
        <div>
          <h4>How many paragraphs do you want?</h4>
          <br>
          <form class="form-inline">
            <div class="form-group">
              <div class="">
                  <input type="text" class="form-control" name="num" placeholder="# of Paragraphs" value="">
                  <span class=""></span>
              </div>
              <br>
            </div>
            <br><br>
            <div class="row">
            <button type="submit" class="btn btn-danger">Generate!</button>
          </div>
          </form>
          <h5>(Min: 1 | Max: 99)</h5>
      </div>
          <h4 class="intro">-----------</h4>
          <p><?php echo implode('<p>', $paragraphs);?></p>
      </div>
    </div>
  </div>
</div>
@stop
