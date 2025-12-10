<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $table = 'Comment';
    
    protected $fillable =['author','content','post_id']; //fieled that ca be updated

    protected $guarde =['id'] ;  // cannot be upfsted/assigned (readonly)
    


    public function post(){
        return $this->belongsTo(Post::class);
    }


}

