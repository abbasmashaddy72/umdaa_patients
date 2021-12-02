<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class Doctor extends Model implements Auditable
{
    use AuditingAuditable;
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'department_id',
        'qualification',
        'locality_id',
        'extra_services',
        'about',
        'popup_image',
        'clinic_number',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function services()
    {
        return $this->belongsTo(Service::class, 'department_id');
    }

    public function locality()
    {
        return $this->belongsTo(Locality::class);
    }
}
