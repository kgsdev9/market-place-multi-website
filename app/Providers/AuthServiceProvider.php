<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Seller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\DB;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //





        Gate::define('seller_account_update',function(User $user){
          return  $user->role->name=='vendeur' && $user->owner_id !=NULL ;
        });


        Gate::define('seller_account_create',function(User $user){
            return $user->role->name=='vendeur' && $user->owner_id== NULL ;
        });

        Gate::define('carrier_account_update',function(User $user){
            return  $user->role->name=='transporteur' && $user->owner_id !=NULL ;
          });

        Gate::define('carrier_account_create',function(User $user){
            return $user->role->name=='transporteur' && $user->owner_id== NULL ;
        });



        Gate::define('is_seller',function(User $user){

            return $user->role->name=='vendeur' ;
        });

        Gate::define('is_buyer',function(User $user){

            return $user->role->name=='acheteur'  ;
        });

        Gate::define('is_carrier',function(User $user){
            return $user->role->name=='transporteur' ;
        });

        //gates pour les transporteurs

        Gate::define('stockeur_account', function(User $user){
            return $user->role->name == 'stockeur';
        });

        Gate::define('annonce_account', function (User $user){
            return $user->role->name == "annonceur";
        });


        Gate::define('can_annonceur', function (User $user){
            return $user->role->name != "annonceur" ;
        });

    }



}
