<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'curriculums';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','semester'];



}
