<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class office extends Model
{
    protected $fillable = ['office_name','description','location','task_id','user_id'];
    
    public function Tasks(){
        return $this->hasMany('App\Tasks');
    }

    public function Users(){
        return $this->hasMany('App\User');
    }
}
