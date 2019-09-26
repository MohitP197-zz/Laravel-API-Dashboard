<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{

    protected $attributes = ['status' => "Not Complete"];
    protected $fillable = ['id', 'task_name', 'description','category', 'location', 'status', 'user_id'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function Office()
    {
        return $this->belongsTo('App\office');
    }
}
