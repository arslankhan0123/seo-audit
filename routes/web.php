<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeoAuditorController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/auditor', [SeoAuditorController::class, 'index'])->name('auditor.index');
Route::get('/auditor/download/{auditId}', [SeoAuditorController::class, 'downloadPdf'])->name('auditor.download');

// API routes for real-time progress
Route::post('/api/audit/start', [SeoAuditorController::class, 'startAudit']);
Route::get('/api/audit/{auditId}/status', [SeoAuditorController::class, 'getAuditStatus']);
