<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Courses extends Model
{
    protected $table = 'schedules';

    use Sortable;

    public $sortable = ['id','CRSRID','semester_and_year'];
}
