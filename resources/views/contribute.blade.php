@extends ('layouts.master')

@section('title')
  Catheys Valley Baptist | Contribute
@stop

@section('headscript')

@stop

@section('showcase')
<img src="img/starrynight.jpg">
@stop


@section('section-a')
<div class="row">
  <div class="columns large-6">
    <h2>Our Commitment</h2>
    <p>Catheys Valley Baptist Church is active in the community in a variety of <a href="ministries" target="_blank">ministries</a>.</p>
    <p>Some of our past public ministries include:</p>
    <ul>
      <li>Vacation Bible School</li>
      <li>Financial Peace University</li>
      <li>Harvest Festival</li>
      <li>Local Soulwinning</li>
      <li>Discipleship Programs</li>
    </ul>
  </div>
  <div class="columns large-6">
    <h2>Wanna Help?</h2>
    <p>You can support our ministry through prayer, volunteering and/or by donation.</p>

    <p>You can donate using credit/debit card or your PayPal account here:</p>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="MRVZD5GR6US4L">
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>

  </div>
</div>

@stop

@section('section-b')

@stop

@section('section-c')

@stop
