<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table    = 'setting';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'name';
    protected $fillable = ['startdate','enddate'];


}
