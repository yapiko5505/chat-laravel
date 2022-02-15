<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'people';

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'work' => 'required'

    );

    public function getData()
    {
        return $this->id . ':' . $this->name;
    }

    public function boards()
    {
        return $this->hasOne('App\Models\Board');
    }
}
