<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{

    use HasFactory;
    use HasUuids;

     //primary key
    protected  $primarykey= 'id';

    protected $keytype = 'string'; //UUID  univversal unique identifier

    public $incrementing = false;
    
     protected $table = 'Comment';
    
    protected $fillable =['author','content','post_id']; //fieled that ca be updated

    protected $guarde =['id'] ;  // cannot be upfsted/assigned (readonly)
    


    public function post(){
        return $this->belongsTo(Post::class);
    }


}

