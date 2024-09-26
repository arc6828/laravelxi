<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveRequest extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'leave_type_name', 'start_date', 'end_date','total_leave', 'status', 'comments', 'approver_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'approver_id');
    }    
   
    public function leaveType()
    {
        return $this->belongsTo(LeaveType::class, 'leave_type_name','leave_type_name');
    }

}
