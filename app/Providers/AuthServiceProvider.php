<?php

// File: app/Providers/AuthServiceProvider.php

namespace App\Providers;

use App\Models\MedicalRecord;
use App\Policies\MedicalRecordPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        MedicalRecord::class => MedicalRecordPolicy::class,
        // Tambahkan policy lain jika diperlukan
    ];

    public function boot()
    {
        $this->registerPolicies();

        Gate::define('view-medical-record', 'App\Policies\MedicalRecordPolicy@view');
        Gate::define('create-medical-record', 'App\Policies\MedicalRecordPolicy@create');
        Gate::define('update-medical-record', 'App\Policies\MedicalRecordPolicy@update');
        Gate::define('delete-medical-record', 'App\Policies\MedicalRecordPolicy@delete');
    }
}
