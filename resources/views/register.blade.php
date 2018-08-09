@extends ('layout')

@section('title')
  Register
@stop

@section('content')
<div class="m-t-md">
<form class="" action="{{URL::to('store')}}" method="post">
<input type="text" name="name" placeholder="Enter name" value="">
<br /><br />
<input type="text" name="email" placeholder="Enter email" value="">
<br /><br />
<input type="password" name="password" placeholder="Enter password" value="">
<br /><br />
<input type="hidden" name="_token" value="{{csrf_token()}}">
<br /><br />
<button type="submit" name="button" value="">Register</button>
</form>
</div>
@stop
