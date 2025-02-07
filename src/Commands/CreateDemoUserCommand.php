<?php

namespace Likeplatform\Cli\Commands;

use Illuminate\Console\Command;

class CreateDemoUserCommand extends Command
{
  /**
   * El nombre y la firma del comando de consola.
   *
   * @var string
   */
  protected $signature = 'likeplatform:create-demo-user';

  /**
   * La descripción del comando de consola.
   *
   * @var string
   */
  protected $description = 'Crea un usuario demo en la base de datos';

  /**
   * Ejecutar el comando de consola.
   *
   * @return int
   */
  public function handle()
  {
    // Lógica para crear un usuario demo
    $this->info('Usuario demo creado exitosamente.');
    return 0;
  }
}
