<?php
/**
 * Product
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * OpenAPI spec version: v0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Models;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Product Class Doc Comment
 *
 * @category Class
 * @description An item.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Product implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identifiers' => '\Swagger\Client\Models\IdentifierType',
'attribute_sets' => '\Swagger\Client\Models\AttributeSetList',
'relationships' => '\Swagger\Client\Models\RelationshipList',
'competitive_pricing' => '\Swagger\Client\Models\CompetitivePricingType',
'sales_rankings' => '\Swagger\Client\Models\SalesRankList',
'offers' => '\Swagger\Client\Models\OffersList'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'identifiers' => null,
'attribute_sets' => null,
'relationships' => null,
'competitive_pricing' => null,
'sales_rankings' => null,
'offers' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'identifiers' => 'Identifiers',
'attribute_sets' => 'AttributeSets',
'relationships' => 'Relationships',
'competitive_pricing' => 'CompetitivePricing',
'sales_rankings' => 'SalesRankings',
'offers' => 'Offers'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifiers' => 'setIdentifiers',
'attribute_sets' => 'setAttributeSets',
'relationships' => 'setRelationships',
'competitive_pricing' => 'setCompetitivePricing',
'sales_rankings' => 'setSalesRankings',
'offers' => 'setOffers'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifiers' => 'getIdentifiers',
'attribute_sets' => 'getAttributeSets',
'relationships' => 'getRelationships',
'competitive_pricing' => 'getCompetitivePricing',
'sales_rankings' => 'getSalesRankings',
'offers' => 'getOffers'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['identifiers'] = isset($data['identifiers']) ? $data['identifiers'] : null;
        $this->container['attribute_sets'] = isset($data['attribute_sets']) ? $data['attribute_sets'] : null;
        $this->container['relationships'] = isset($data['relationships']) ? $data['relationships'] : null;
        $this->container['competitive_pricing'] = isset($data['competitive_pricing']) ? $data['competitive_pricing'] : null;
        $this->container['sales_rankings'] = isset($data['sales_rankings']) ? $data['sales_rankings'] : null;
        $this->container['offers'] = isset($data['offers']) ? $data['offers'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['identifiers'] === null) {
            $invalidProperties[] = "'identifiers' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets identifiers
     *
     * @return \Swagger\Client\Models\IdentifierType
     */
    public function getIdentifiers()
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers
     *
     * @param \Swagger\Client\Models\IdentifierType $identifiers identifiers
     *
     * @return $this
     */
    public function setIdentifiers($identifiers)
    {
        $this->container['identifiers'] = $identifiers;

        return $this;
    }

    /**
     * Gets attribute_sets
     *
     * @return \Swagger\Client\Models\AttributeSetList
     */
    public function getAttributeSets()
    {
        return $this->container['attribute_sets'];
    }

    /**
     * Sets attribute_sets
     *
     * @param \Swagger\Client\Models\AttributeSetList $attribute_sets attribute_sets
     *
     * @return $this
     */
    public function setAttributeSets($attribute_sets)
    {
        $this->container['attribute_sets'] = $attribute_sets;

        return $this;
    }

    /**
     * Gets relationships
     *
     * @return \Swagger\Client\Models\RelationshipList
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \Swagger\Client\Models\RelationshipList $relationships relationships
     *
     * @return $this
     */
    public function setRelationships($relationships)
    {
        $this->container['relationships'] = $relationships;

        return $this;
    }

    /**
     * Gets competitive_pricing
     *
     * @return \Swagger\Client\Models\CompetitivePricingType
     */
    public function getCompetitivePricing()
    {
        return $this->container['competitive_pricing'];
    }

    /**
     * Sets competitive_pricing
     *
     * @param \Swagger\Client\Models\CompetitivePricingType $competitive_pricing competitive_pricing
     *
     * @return $this
     */
    public function setCompetitivePricing($competitive_pricing)
    {
        $this->container['competitive_pricing'] = $competitive_pricing;

        return $this;
    }

    /**
     * Gets sales_rankings
     *
     * @return \Swagger\Client\Models\SalesRankList
     */
    public function getSalesRankings()
    {
        return $this->container['sales_rankings'];
    }

    /**
     * Sets sales_rankings
     *
     * @param \Swagger\Client\Models\SalesRankList $sales_rankings sales_rankings
     *
     * @return $this
     */
    public function setSalesRankings($sales_rankings)
    {
        $this->container['sales_rankings'] = $sales_rankings;

        return $this;
    }

    /**
     * Gets offers
     *
     * @return \Swagger\Client\Models\OffersList
     */
    public function getOffers()
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers
     *
     * @param \Swagger\Client\Models\OffersList $offers offers
     *
     * @return $this
     */
    public function setOffers($offers)
    {
        $this->container['offers'] = $offers;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
