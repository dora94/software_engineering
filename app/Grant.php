<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Grant extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'grants';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name','amount'];



}
