<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /** Rules
     */
    public static $rules = [
        'name' => 'required|alpha',
        'last_name' => 'alpha',
        'email' => 'required|email',
        'password' => 'required|text',
    ];

    /** Messages
     */
    public static $messages = [
        'name.required' => 'Name is required',
        'name.alpha' => 'Name must not have numbers',
        'last_name.alpha' => 'Last name must not have numbers',
        'email.required' => 'Email is required',
        'email.email' => 'Email format invalid',
        'password' => 'Password is required'
    ];

    /** Fillable
     */
    protected $fillable = ['name', 'last_name', 'email', 'password'];
}
