<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'phone', 'email', 'address', 'company_id'];

    //Define the relationship with the Company Model
    //A contact belongs to a company
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
