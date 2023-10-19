<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $fillable = [
        'fullname',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion',
        'created_at',
    ];

    protected $appends = ['fullname'];

    public function scopeFullnameSearch($query, $fullname)
    {
      if (!empty($fullname)) {
        $query->where('fullname', 'like', '%' . $fullname . '%');
      }
    }

    public function scopeEmailSearch($query, $email)
    {
      if (!empty($email)) {
        $query->where('email', 'like', '%' . $email . '%');
      }
    }

    public function scopeDateSearch($query, $start, $end)
    {
      if (!empty($start && $end)) {

        $query->whereDate('created_at', '>=',$start)
        ->whereDate('created_at','<=', $end);
      
    }
    
    
  }

  public function scopeGenderSearch($query, $gender)
    {
      if (!empty($gender)) {
      

        $query->where('gender', $gender);

    }

  
}

    
  


  

  
}
