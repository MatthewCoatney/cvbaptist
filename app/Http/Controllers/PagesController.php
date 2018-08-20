<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Helper;

class PagesController extends Controller
{


public function clearcache(){
    //$exitCodeB = Artisan::call('config:cache');
    //$exitCodeA = Artisan::call('cache:clear');
    //$exitCodeC = Artisan::call('view:clear');

    // Commandline
    //$ /opt/php71/bin/php artisan config:cache
    //$ /opt/php71/bin/php artisan cache:clear
    //$ /opt/php71/bin/php artisan view:clear


    $process = new Process('/opt/php71/lib artisan config:cache');
    $process->run();

    $process = new Process('/opt/php71/lib artisan cache:clear');
    $process->run();

    $process = new Process('/opt/php71/lib artisan view:clear');
    $process->run();


    //var_dump(Config::getItems());
/*
  try {
    Dotenv::makeMutable();
    Dotenv::load(app()->environmentPath(), app()->environmentFile());
    Dotenv::makeImmutable();
} catch (InvalidArgumentException $e) {
    //
}
*/
  return 'Clear';
}


public function received()
{
  return view('emails.received');
}
  public function doctrine()
  {
    return view('doctrine');
  }

  public function contribute()
  {
    return view('contribute');
  }

  public function ministries()
  {
    return view('ministries');
  }

public function tipue(){ return view('tipue'); }

  public function sermons()
  {
    $searchlist = Helper::getSermonSearchlist();
    //dd($searchlist);
    return view('sermons')->with('searchlist',$searchlist);;
  }
/*
  public function sermon_searchlist()
  {
    $searchlist = Helper::getSermonSearchlist();

    return view('sermon_searchlist')->with('searchlist',$searchlist);
  }
*/
  public function howler_update(Request $request)
  {

    $title = $request->input('title');
    $sermons = Helper::getSermon($title);

    //return ['title' => urlencode($title)];
    return view('howler')->with('sermons',$sermons);
  }

  public function howler()
  {
    $sermons = Helper::getSermonPlaylist();

    return view('howler')->with('sermons',$sermons);
  }

// Events lists from today + 30 days in the future
  public function events()
  {
      $events = Helper::getCurrentEvents();
      return view('events')->withEvents($events);
  }

    public function about()
    {
      return view('about');
    }

    public function contact()
    {
      return view('contact');
    }

    public function faq()
    {
      return view('faq');
    }

    public function home()
    {
      return view('home');
    }

    public function newsroom()
    {
      return view('newsroom');
    }

    public function policy()
    {
      return view('policy');
    }

    public function portfolio()
    {
      return view('portfolio');
    }

    public function products()
    {
      return view('products');
    }

    public function services()
    {
      return view('services');
    }

    public function sitemap()
    {
      return view('sitemap');
    }

    public function support()
    {
      return view('support');
    }

    public function terms()
    {
      return view('terms');
    }

    public function testimonials()
    {
      return view('testimonials');
    }

    public function welcome()
    {
      return view('welcome');
    }

    public function foundation()
    {
      return view('foundation');
    }

    public function audiotest()
    {
      return view('audiotest');
    }
/*
    public function crud()
    {
      return view('crud');
    }
*/
    public function forge()
    {
      return view('forge');
    }

    public function slider()
    {
      return view('slider');
    }

    public function search()
    {
      return view('search');
    }

    public function register()
    {
      return view('register');
    }

    public function login()
    {
      return view('login');
    }
}
