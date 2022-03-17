<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateRequest extends Model
{
    use HasFactory;

    protected $table ='certificate_requests';

    protected $fillable =[
        'request_id',
        'consumerId',
        'request_type'
    ];

    public function consumer()
    {
        return $this->belongsTo(Consumer::class, 'consumerId', 'id');
    }
}
