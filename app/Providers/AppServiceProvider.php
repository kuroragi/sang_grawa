<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Register blameable macro for Blueprint
        Blueprint::macro('blameable', function () {
            /** @var Blueprint $this */
            $this->unsignedBigInteger('created_by')->nullable();
            $this->unsignedBigInteger('updated_by')->nullable();
            $this->unsignedBigInteger('deleted_by')->nullable();
            
            // Add foreign key constraints if users table exists
            if (Schema::hasTable('users')) {
                $this->foreign('created_by')->references('id')->on('users')->onDelete('set null');
                $this->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
                $this->foreign('deleted_by')->references('id')->on('users')->onDelete('set null');
            }
        });
    }
}
