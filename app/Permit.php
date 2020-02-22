<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permit extends Model
{
    protected $fillable = [
        'FirstName', 'LastName', 'Picture', 'DOB', 'Sex', 'Date', 'State', 'Occupation', 'Address', 'Email',
    ];

    public function getFullNameAttribute() {
        return ucfirst($this->FirstName) . ' ' . ucfirst($this->LastName);
    }
}
