<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminStaff extends Model  {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'adminStaff';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['staff_id','dept_id'];


}
