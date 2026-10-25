<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViolationInfo extends Model
{

    protected $fillable = [
        'id',
        'client_id',
        'structure_name',
        'paymentDateG',
        'fine_group_description',
        'violation_number',
        'violation_status_code',
        'violation_status_desc_ar',
        'violation_status_desc_en',
        'violator_id',
        'vehicle_serial_number',
        'vehicle_plate',
        'vehicle_type_code',
        'vehicle_type_desc_ar',
        'vehicle_type_desc_en',
        'vehicle_make',
        'vehicle_model',
        'violation_string_h',
        'violation_string_g',
        'violation_time',
        'violation_city',
        'place_happend',
        'payment_string',
        'payment_string_g',
        'warning_ind',
        'accident_ind',
        'fine_damage',
        'violation_point',
        'clearance_ind',
        'clearance_string_h',
        'detection_center_code',
        'detection_center_name',
        'gis_longitude',
        'gis_latitude',
        'foreign_vehicle_number',
        'foreign_vehicle_crossing_seq',
        'total_fine_items_amount',
        'street_speed',
        'vehicle_speed',
        'lane_number',
        'vehicle_direction',
        'street_name',
        'violation_type_desc_ar',
        'lk_pay_type',
        'lk_pay_type_desc_ar',
        'lk_pay_type_desc',
        'status',
        'violation_date',
        'sendOTP',
        'userOTP',
    ];

    protected $casts = [
        'sendOTP' => 'boolean'
    ];
}
