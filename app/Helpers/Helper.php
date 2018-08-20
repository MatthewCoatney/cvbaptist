<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

use Carbon\Carbon;
use DB;

class Helper
{

  public static function getSermon($str)
  {

    $playlist = array(); // return array

    // Fetch latest 7 sermon records
    $songs = DB::table('sermons')
              ->where('title','like', urldecode($str))
              ->limit(7)
              ->get(); //->toSql();


                  foreach ($songs as $s) {
                      $song = array(
                                  "title" => $s->title,
                                  "file" => $s->file,
                                  "howl" => null,
                          );

                      // Merge the playlist array into the return array
                      array_push($playlist, $song);
                  }

    return json_encode($playlist); //JSON encoding w/o header info

  }

  // Build JSON playlist from audio DIR for use with HOWLER.js
  public static function getSermonPlaylist()
  {
    $now = Carbon::now(); //http://php.net/manual/en/function.date.php

    $playlist = array(); // return array

    // Fetch latest 7 sermon records
    $songs = DB::table('sermons')
              ->latest('created_at')
              ->limit(7)
              //->toSql(); // debug sql by uncommenting
              ->get(); //select * from `sermons` order by `date` desc limit 7

              //dd($songs); // debug sql by uncommenting
          
              try{
                  foreach ($songs as $s) {
                      $song = array(
                                  "title" => $s->title,
                                  "file" => $s->file,
                                  "howl" => null,
                          );

                      // Merge the playlist array into the return array
                      array_push($playlist, $song);
                  }
             }catch(\Exception $e){
                //dd($e);
             }
    return json_encode($playlist); //JSON encoding w/o header info
  }

  // Build JSON criteria for TIPUE search
  // with a limit of 208 (1 year = 208)
  public static function getSermonSearchlist()
  {

    $playlist = array(); // return array

    // Fetch sermon records
    $songs = DB::table('sermons')
              ->where('id','>', 0)
              ->latest('date')
              ->limit(208)
              ->orderBy('date')
              ->get(); //->toSql();

    $baseurl = 'howler-update?title=';

                  foreach ($songs as $s) {
                      $song = array(
                                  "title" => $s->title,
                                  "text" => $s->text,
                                  "url" => "javascript:setupPlaylist('" . $baseurl . $s->title . "');",
                                  "tags" => $s->tags,
                          );

                      // Merge the playlist array into the return array
                      array_push($playlist, $song);
                  }

    return json_encode($playlist); //JSON encoding w/o header info
  }

  // Get (from Events) this month and next month's events
  // and order them in ASC order
    public static function getCurrentEvents()
    {
        $now = Carbon::now(); //http://php.net/manual/en/function.date.php
           $thisMonth = strtoupper($now->format('M')); // JUN
           $nextMonth = strtoupper(date('M', strtotime('+1 month'))); // JUL

           // Fetch results from this month or next month, and this year
        // ordered by start date in ASC order
        $events = DB::table('events')
                     ->where(function ($query) {
                         $now = Carbon::now(); //http://php.net/manual/en/function.date.php
                             $thisMonth = strtoupper($now->format('M')); // JUN
                             $nextMonth = strtoupper(date('M', strtotime('+1 month'))); // JUL

                         $query->where('year', '=', $now->year)
                               ->where('month_ABC', '=', $thisMonth);
                     })
                     ->orWhere(function ($query) {
                         $now = Carbon::now(); //http://php.net/manual/en/function.date.php
                             $thisMonth = strtoupper($now->format('M')); // JUN
                             $nextMonth = strtoupper(date('M', strtotime('+1 month'))); // JUL

                         $query->where('year', '=', $now->year)
                               ->where('month_ABC', '=', $nextMonth);
                     })
                     ->orderBy('day', 'asc')
                     ->get();

        return $events;
    }
}
