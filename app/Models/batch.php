<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class batch extends Model
{
    protected $table = 'batches';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'course_id', 'start_date'];


public function course(){
    return $this->belongsTo(course::class);
}


}
