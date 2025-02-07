<?php

namespace Luinuxscl\Cli\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class InstallCommand extends Command
{
  /**
   * El nombre y la firma del comando de consola.
   *
   * @var string
   */
  protected $signature = 'likeplatform:install';

  /**
   * La descripción del comando de consola.
   *
   * @var string
   */
  protected $description = 'Instala el paquetes y otras dependencias necesarias';

  /**
   * Ejecutar el comando de consola.
   *
   * @return int
   */
  public function handle()
  {
    $this->info('Instalando paquetes de Composer...');

    $packages = [
      'rappasoft/laravel-livewire-tables',
      'spatie/laravel-permission',
      'likeplatform/wordpress-accounts',
      'openai-php/laravel'
    ];

    foreach ($packages as $package) {
      $process = new Process(['composer', 'require', $package]);
      $process->run();

      if (!$process->isSuccessful()) {
        $this->error("Error al instalar el paquete: {$package}");
        return 1;
      }

      $this->info("Paquete instalado: {$package}");
    }

    $this->info('Todos los paquetes se han instalado correctamente.');

    $this->info('Ejecutando comandos Artisan...');

    $commands = [
      'php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"',
      'php artisan openai:install',
      'php artisan optimize:clear',
      'php artisan migrate',
      'php artisan likeplatform:translate'
      // Agrega más comandos aquí si es necesario
    ];

    foreach ($commands as $command) {
      $process = Process::fromShellCommandline($command);
      $process->run();

      if (!$process->isSuccessful()) {
        $this->error("Error al ejecutar el comando: {$command}");
        return 1;
      }

      $this->info("Comando ejecutado: {$command}");
      $this->line("<fg=green>Comando ejecutado exitosamente: {$command}</>");
    }

    $this->info('Todos los comandos Artisan se han ejecutado correctamente.');

    return 0;
  }
}
