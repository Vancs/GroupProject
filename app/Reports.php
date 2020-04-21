<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Reports extends Model
{
    // Semester_and_year, Code, Title, enrollment
    use Sortable;

    //public $sortable = ['id','CRSRID','semester_and_year','created_at','updated_at'];
    public $sortable = ['semester_and_year','code','title','enrollment'];
}