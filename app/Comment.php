<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{


    /**
     * The attributes that are not mass assignable, or the opposite of fillable (recommended compared to fillable)
     *
     * @var array
     */
    protected $guarded = [
        
    ];
	
    /**
     * A comment belongs to a user
     *
     */
    
    public function user()
    {

    	return $this->belongsTo(User::class)
            ->select(['id','name']);
            
    }

	
}
