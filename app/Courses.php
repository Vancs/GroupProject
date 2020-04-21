<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Courses extends Model
{
    protected $table = 'schedules';
    protected $fillable = [
    'semester_and_year',
    'CRSRID',
    'code',
    'title',
    'credit',
    'start_date',
    'end_date',
    'class_days',
    'class_time',
    'final_day',
    'final_time',
    'enrollment',
    'instructor_id',
    'location_id',
    'comments'
  ];

    use Sortable;

    public $sortable = ['id','CRSRID','semester_and_year'];
}
