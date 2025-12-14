<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{   use HasFactory;
    use HasUuids;
    //primary key
    protected  $primarykey= 'id';

    protected $keytype = 'string'; //UUID  univversal unique identifier

    public $incrementing = false;

    protected $table = 'Post';
    //hasFactory;
    protected $fillable =['title','body','author','published']; //fieled that ca be updated

    protected $guarde =['id'] ;  // cannot be upfsted/assigned (readonly)
    
    public function Comments(){
        return $this->hasMany(Comment::class);
    }

    public function tags(){
        return $this->belongsToMany(tag::class);
    }
}

