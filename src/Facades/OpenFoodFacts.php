<?php

namespace OpenFoodFacts\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array barcode(string $value)
 * @method static \Illuminate\Support\Collection find(string $searchTerm)
 * @method static \OpenFoodFacts\Document getProduct(string $barcode)
 *
 * @see \OpenFoodFacts\Laravel\OpenFoodFacts
 */
class OpenFoodFacts extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'openfoodfacts';
    }
}
