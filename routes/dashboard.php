<?php
use Illuminate\Support\Facades\Route;

/**
 *----------------------
 * Dashboard Auth Routes
 * ---------------------
 */
Route::group([
    'middleware' => ['guest:admin'],
    'as' => 'dashboard.',
    'prefix' => 'dashboard',
], function (){
    // ============================================ LOGIN PAGE
    Route::view('/login', 'dashboard.auth.login')->name('login');
});

/**
 *----------------------
 * Dashboard Pages Routes
 * ---------------------
 */
Route::group([
    'middleware' => ['auth:admin'],
    'as' => 'dashboard.',
    'prefix' => 'dashboard',
], function (){
    Route::view('/','dashboard.index')->name('home');

    // ============================================ SETTINGS PAGE =================================
    Route::view('settings', 'dashboard.settings.index')->name('settings');

    // ============================================ SKILLS PAGE ===================================
    Route::view('skills', 'dashboard.skills.index')->name('skills');

    // ============================================ SUBSCRIBERS PAGE ==============================
    Route::view('subscribers', 'dashboard.subscribers.index')->name('subscribers');

    // ============================================ COUNTERS PAGE =================================
    Route::view('counters', 'dashboard.counters.index')->name('counters');

    // ============================================ SERVICES PAGE =================================
    Route::view('services', 'dashboard.services.index')->name('services');

    // ============================================ Messages PAGE =================================
    Route::view('messages', 'dashboard.messages.index')->name('messages');

    // ============================================ Categories PAGE ===============================
    Route::view('categories', 'dashboard.categories.index')->name('categories');

    // ============================================ Products PAGE =================================
    Route::view('projects', 'dashboard.projects.index')->name('projects');

});
