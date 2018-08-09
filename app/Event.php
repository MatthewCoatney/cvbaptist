<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  /**
     * Scope a query to only include events for this month.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeThisMonth($query)
    {
        $now = Carbon::now();
        $thisMonth = strtoupper($now->format('M')); // JUN

        return $query->where([
                  ['year', '=', $now->year],
                  ['month_ABC', '=', $thisMonth],
              ])->get();

        //return $query->where('year', '=', $now->year)->where('month', '=', $now->month);
    }
}
