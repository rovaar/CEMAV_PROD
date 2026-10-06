<?php

namespace App\Support;

class Asset
{
    /**
     * URL d'un fitxer de web/ amb ?v=<data de modificacio>.
     *
     * El .htaccess serveix CSS i fonts amb un any de cache (PSI-03): quan un
     * fitxer canvia, canvia la URL i el navegador el torna a baixar.
     *
     * Es llegeix de web/ i no de public_path(): a cdmon no existeix el symlink
     * public -> web, i un filemtime() sobre un fitxer inexistent seria un 500.
     * Si el fitxer no hi es, es torna l'asset() de sempre, sense versio.
     */
    public static function versioned(string $path): string
    {
        $file = base_path('web/'.ltrim($path, '/'));

        return is_file($file)
            ? asset($path).'?v='.filemtime($file)
            : asset($path);
    }
}
