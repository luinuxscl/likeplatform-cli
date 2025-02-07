<?php

namespace Likeplatform\Cli\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class TranslateCommand extends Command
{
  /**
   * El nombre y la firma del comando de consola.
   *
   * @var string
   */
  protected $signature = 'likeplatform:translate';

  /**
   * La descripción del comando de consola.
   *
   * @var string
   */
  protected $description = 'Agregar archivos de traducción';

  /**
   * Ejecutar el comando de consola.
   *
   * @return int
   */
  public function handle()
  {
    // copiar carpeta de traducciones 'lang' con todos sus archivos en la carpeta lang de la raiz de la aplicacion. Si la carpeta no existe, debera crearla.
    $source = __DIR__ . '/../lang';
    $destination = base_path('lang');

    $this->info('Copiando archivos de traducción...');
    $this->info('Origen: ' . $source);
    $this->info('Destino: ' . $destination);

    if (!File::exists($source)) {
      $this->error('La carpeta de origen no existe.');
      return 1;
    }

    if (File::exists($destination)) {
      if ($this->confirm('La carpeta de destino ya existe. ¿Desea sobrescribir los archivos?')) {
        File::deleteDirectory($destination);
      } else {
        $this->info('Operación cancelada.');
        return 0;
      }
    }

    File::copyDirectory($source, $destination);
    $this->info('Archivos de traducción copiados exitosamente.');

    return 0;
  }
}
