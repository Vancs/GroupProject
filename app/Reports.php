<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Reports extends Model
{
    use Sortable;

    public $sortable = ['id','CRSRID','semester_and_year','created_at','updated_at'];
}