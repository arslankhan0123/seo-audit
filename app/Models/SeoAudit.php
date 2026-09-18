<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoAudit extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'status', 'final_report'];

    public function pages()
    {
        return $this->hasMany(SeoAuditPage::class);
    }
}
