<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    use App\Models\Aluno;
use App\Policies\AlunoPolicy;
use Illuminate\Support\Facades\Gate;

public function boot(): void
{
    Gate::policy(Aluno::class, AlunoPolicy::class);
}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
