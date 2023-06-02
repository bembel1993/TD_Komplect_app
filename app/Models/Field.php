<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'required', 'form_id'];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    public function values()
    {
        return $this->hasMany(Value::class);
    }
}
