<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoAuditPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'seo_audit_id',
        'page_url',
        'title',
        'meta_description',
        'h1',
        'status',
        'data'
    ];

    protected $casts = [
        'data' => 'array',
    ];

    public function audit()
    {
        return $this->belongsTo(SeoAudit::class, 'seo_audit_id');
    }
}
