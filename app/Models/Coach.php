<?php

namespace App\Models;

use App\Enums\CoachServiceEnum;
use App\Enums\CoachVehicleTypeEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coach extends Model
{
    use HasFactory;
    protected $fillable = [
        'license_plate', //biển số xe
        'coach_maintenance_date',
        'sum_ticket'


    ];
    protected $casts = [
        'service' => CoachServiceEnum::class,
        'vehicle_type' => CoachVehicleTypeEnum::class, //loai xe
    ];
    public function CoachManagements()
    {
        return $this->belongsto('CoachManagements::class');
    }
    public function Ticket()
    {
        return $this->hasmany('Ticket::class');
    }
}