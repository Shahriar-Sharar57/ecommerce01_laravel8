<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;
    public function OutletCompany(){
        return $this->belongsTo('App\Models\Company','outlet_company','company_id');
    }
}
