<?php

namespace App\Support;

class Icon
{
    /** @var array<string, string> */
    private static $cache = [];

    /**
     * Icona d'Ionicons 7.1.0 en SVG inline (llicencia MIT, resources/icons/LICENSE).
     *
     * Abans es carregava Ionicons des d'unpkg: una cadena de cinc peticions a un
     * altre domini que endarreria el LCP en mobil (PSI-16). Ara els SVG viuen a
     * resources/icons/ i es pinten des del servidor, dins d'un <ion-icon> perque
     * els selectors CSS existents (".servei-icon ion-icon", etc.) segueixin valent.
     * Els estils que abans posava el shadow DOM d'Ionicons son a base.css.
     *
     * Per afegir-ne una: baixa-la de https://unpkg.com/ionicons@7.1.0/dist/svg/<nom>.svg
     * a resources/icons/. Si el fitxer no hi es, no es pinta res (mai un 500).
     */
    public static function render(string $name): string
    {
        if (! array_key_exists($name, self::$cache)) {
            $file = resource_path('icons/'.basename($name).'.svg');
            self::$cache[$name] = is_file($file) ? trim(file_get_contents($file)) : '';
        }

        if (self::$cache[$name] === '') {
            return '';
        }

        return '<ion-icon name="'.e($name).'" aria-hidden="true">'.self::$cache[$name].'</ion-icon>';
    }
}
