<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name','email','password'
    ];
    //Regras de validação
    public $rules = [
      'name' => 'required',
      'email' => 'required',
      'password' => 'required'
    ];
}
