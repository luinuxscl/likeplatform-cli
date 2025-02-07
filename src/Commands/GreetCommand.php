<?php

namespace Likeplatform\Cli\Commands;

use Illuminate\Console\Command;

class GreetCommand extends Command
{
  /**
   * El nombre y la firma del comando de consola.
   *
   * @var string
   */
  protected $signature = 'likeplatform:greet {name}';

  /**
   * La descripción del comando de consola.
   *
   * @var string
   */
  protected $description = 'Muestra un saludo en la consola';

  /**
   * Ejecutar el comando de consola.
   *
   * @return int
   */
  public function handle()
  {
    $name = $this->argument('name');
    $this->info("¡Hola, {$name}! Bienvenido a LikePlatform CLI.");
    return 0;
  }
}
