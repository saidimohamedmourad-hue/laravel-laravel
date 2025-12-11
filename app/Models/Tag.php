<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'Tag';
    //hasFactory;
    protected $fillable =['title']; //fieled that ca be updated

    protected $guarde =['id'] ;  // cannot be upfsted/assigned (readonly)
    
    public function posts(){
        return $this->belongsToMany(post::class);
    }
}

