

@extends ('layouts.master')

@section('title')
  Catheys Valley Baptist | Services
@stop

@section('headscript')
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<!--link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet"-->
<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
<style>
.showcase{
  height: 800px !important;
  background-image: url(img/congregation.jpg)
}

.events-a{
  background-color: white;
  height:100px;
  border-left: 4px solid #b23850;/*pink #ff69b4;*/
}

.events-b{
  background-color: white;
  height:100px;

}


.eventdate{
  font-size: 2em;
  font-weight: 900 !important;
  font-family: 'Roboto', sans-serif !important;
  color:gray;
  width:100%;
}

.eventmonth{
  font-size: 1em;
  font-weight: 500 !important;
  font-family: 'Raleway', sans-serif !important;
  font-color: grey !important;
  width:100%;
}

.eventmonthname{
  font-size: 3em;
  font-weight: 900 !important;
  font-family: 'Roboto', sans-serif !important;
  color:  #b23850 !important;

}

.eventdescription{
  font-size: 12px;
  font-weight: 400 !important;
  font-family: 'Raleway', sans-serif !important;
  color: grey !important;
}


.eventmsg-a .fa-map-marker,
.eventmsg-a .fa-clock
{
  color: #b23850 !important;
}


.stripes{
  background-image: url("img/stripes.png");
  background-repeat: repeat;
}

</style>
@stop

@section('isevents')
class="current"
@stop

@section('showcase')
<iframe src="calendar/calendar.html" style="width:100%;height:800px;"></iframe>

@stop

@section('section-a')


<div class="row">
  <div class="eventmonthname">{{$events[0]->month_Name or 'No Events Found'}},{{$events[0]->year or 'Sorry'}}</div>
  <div class="columns large-12 medium-12">
@foreach ($events as $event)
    <div class="row listing">

      <div class="columns events-a large-2 medium-2 ">
        <div class="eventdate">{{$event->day or '00'}}</div>
        <div class="eventmonth">{{$event->month_ABC or 'MON'}}</div>
      </div>
      <div class="columns events-b large-10 medium-10 ">
        <div class="eventmsg-a"><i class="far fa-clock"></i> {{$event->start_time or '12:00am'}}-{{$event->end_time or '12:00pm'}} | <i class="fa fa-map-marker"></i> {{$event->location or 'Location'}}</div>
        <div class="eventmsg-b"><strong>{!! $event->title or 'Event Title' !!}</strong><br /><span class="eventdescription">{!! $event->description or 'Event Description' !!}</span></div>
      </div>

    </div>
@endforeach


</div>
</div>


@stop

@section('footerscript')
<script type='text/javascript'>
  $( document ).ready(function() {
   $('.listing:even > div').addClass('stripes');

   //$('.fa-clock').css('color','#ff69b4');
});
</script>
@stop
