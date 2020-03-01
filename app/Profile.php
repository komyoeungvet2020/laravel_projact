<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model{
    protected $fillable = [
        'phone', 'address', 'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
}
