<?php

namespace App\Models\Entity;

class Users{

    /**
     * Attributes
     */

    private $table = 'users';

    private $fillable = [        
        'id', 'fullname','email','password',
    ];
}