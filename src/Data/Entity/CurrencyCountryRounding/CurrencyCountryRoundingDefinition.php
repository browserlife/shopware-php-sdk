<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CurrencyCountryRounding;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CurrencyCountryRoundingDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'currency_country_rounding';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CurrencyCountryRoundingEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CurrencyCountryRoundingCollection::class;
    }
}