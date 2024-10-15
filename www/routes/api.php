<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;

Route::any('/status', [StatusController::class, 'status']);
