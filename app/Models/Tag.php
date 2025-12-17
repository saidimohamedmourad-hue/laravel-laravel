<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

     use HasFactory;
    use HasUuids;

     //primary key
    protected  $primarykey= 'id';

    protected $keytype = 'string'; //UUID  univversal unique identifier

    public $incrementing = false;
    
    protected $table = 'tag';
    //hasFactory;
    protected $fillable =['title']; //fieled that ca be updated

    protected $guarded =['id'] ;  // cannot be upfsted/assigned (readonly)
    
    public function posts(){
        return $this->belongsToMany(post::class);
    }
}

