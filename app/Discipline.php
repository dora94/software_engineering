<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'disciplines';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name','description'];



}
