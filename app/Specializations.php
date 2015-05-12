<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Specializations extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'specializations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name','description'];



}
