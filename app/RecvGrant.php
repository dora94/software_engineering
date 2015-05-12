<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class RecvGrant extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recvGrants';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['stud_id','grant_id'];



}
