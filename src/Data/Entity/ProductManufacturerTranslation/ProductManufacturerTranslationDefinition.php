<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductManufacturerTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductManufacturerTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_manufacturer_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductManufacturerTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductManufacturerTranslationCollection::class;
    }
}