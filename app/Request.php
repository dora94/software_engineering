<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'requests';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['stud_id','disc_id','rank'];



}
