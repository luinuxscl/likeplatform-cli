<?php

namespace Luinuxscl\Cli;

use Illuminate\Support\ServiceProvider;

class CliServiceProvider extends ServiceProvider
{
  /**
   * Registrar cualquier servicio de la aplicación.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Arrancar cualquier servicio de la aplicación.
   *
   * @return void
   */
  public function boot()
  {
    if ($this->app->runningInConsole()) {
      $this->commands([
        Commands\GreetCommand::class,
        Commands\CreateDemoUserCommand::class,
        Commands\InstallCommand::class,
        Commands\TranslateCommand::class,
      ]);
    }
  }
}
