<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service\DashboardService;
use App\Service\KandidatService;
use App\Service\SettingService;
use App\Service\UserService;
use App\Service\VotersService;
use App\Service\VotingService;
use App\Service\VotingServiceImplement;
use App\Service\VotersServiceImplement;
use App\Service\DashboardServiceImplement;
use App\Service\KandidatServiceImplement;
use App\Service\SettingServiceImplement;
use App\Service\UserServiceImplement;



use App\Repository\KandidatRepository;
use App\Repository\KandidatRepositoryImplement;
use App\Repository\PemilihRepository;
use App\Repository\PemilihRepositoryImplement;
use App\Repository\SettingRepository;
use App\Repository\SettingRepositoryImplement;
use App\Repository\VotersRepository;
use App\Repository\VotersRepositoryImplement;







class ProjectServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(DashboardService::class,DashboardServiceImplement::class);
        $this->app->bind(KandidatService::class,KandidatServiceImplement::class);
        $this->app->bind(SettingService::class,SettingServiceImplement::class);
        $this->app->bind(UserService::class,UserServiceImplement::class);
        $this->app->bind(VotersService::class,VotersServiceImplement::class);
        $this->app->bind(VotingService::class,VotingServiceImplement::class);


        $this->app->bind(KandidatRepository::class,KandidatRepositoryImplement::class);
        $this->app->bind(PemilihRepository::class,PemilihRepositoryImplement::class);
        $this->app->bind(SettingRepository::class,SettingRepositoryImplement::class);
        $this->app->bind(VotersRepository::class,VotersRepositoryImplement::class);



    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
