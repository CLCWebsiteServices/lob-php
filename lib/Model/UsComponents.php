<?php
/**
 * UsComponents
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lob
 *
 * The Lob API is organized around REST. Our API is designed to have predictable, resource-oriented URLs and uses HTTP response codes to indicate any API errors. <p> Looking for our [previous documentation](https://lob.github.io/legacy-docs/)?
 *
 * The version of the OpenAPI document: 1.3.0
 * Contact: lob-openapi@lob.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * UsComponents Class Doc Comment
 *
 * @category Class
 * @description A nested object containing a breakdown of each component of an address.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UsComponents implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'us_components';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'primary_number' => 'string',
        'street_predirection' => 'string',
        'street_name' => 'string',
        'street_suffix' => 'string',
        'street_postdirection' => 'string',
        'secondary_designator' => 'string',
        'secondary_number' => 'string',
        'pmb_designator' => 'string',
        'pmb_number' => 'string',
        'extra_secondary_designator' => 'string',
        'extra_secondary_number' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip_code' => 'string',
        'zip_code_plus_4' => 'string',
        'zip_code_type' => '\OpenAPI\Client\Model\ZipCodeType',
        'delivery_point_barcode' => 'string',
        'address_type' => 'string',
        'record_type' => 'string',
        'default_building_address' => 'bool',
        'county' => 'string',
        'county_fips' => 'string',
        'carrier_route' => 'string',
        'carrier_route_type' => 'string',
        'latitude' => 'float',
        'longitude' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'primary_number' => null,
        'street_predirection' => null,
        'street_name' => null,
        'street_suffix' => null,
        'street_postdirection' => null,
        'secondary_designator' => null,
        'secondary_number' => null,
        'pmb_designator' => null,
        'pmb_number' => null,
        'extra_secondary_designator' => null,
        'extra_secondary_number' => null,
        'city' => null,
        'state' => null,
        'zip_code' => null,
        'zip_code_plus_4' => null,
        'zip_code_type' => null,
        'delivery_point_barcode' => null,
        'address_type' => null,
        'record_type' => null,
        'default_building_address' => null,
        'county' => null,
        'county_fips' => null,
        'carrier_route' => null,
        'carrier_route_type' => null,
        'latitude' => 'float',
        'longitude' => 'float'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'primary_number' => 'primary_number',
        'street_predirection' => 'street_predirection',
        'street_name' => 'street_name',
        'street_suffix' => 'street_suffix',
        'street_postdirection' => 'street_postdirection',
        'secondary_designator' => 'secondary_designator',
        'secondary_number' => 'secondary_number',
        'pmb_designator' => 'pmb_designator',
        'pmb_number' => 'pmb_number',
        'extra_secondary_designator' => 'extra_secondary_designator',
        'extra_secondary_number' => 'extra_secondary_number',
        'city' => 'city',
        'state' => 'state',
        'zip_code' => 'zip_code',
        'zip_code_plus_4' => 'zip_code_plus_4',
        'zip_code_type' => 'zip_code_type',
        'delivery_point_barcode' => 'delivery_point_barcode',
        'address_type' => 'address_type',
        'record_type' => 'record_type',
        'default_building_address' => 'default_building_address',
        'county' => 'county',
        'county_fips' => 'county_fips',
        'carrier_route' => 'carrier_route',
        'carrier_route_type' => 'carrier_route_type',
        'latitude' => 'latitude',
        'longitude' => 'longitude'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'primary_number' => 'setPrimaryNumber',
        'street_predirection' => 'setStreetPredirection',
        'street_name' => 'setStreetName',
        'street_suffix' => 'setStreetSuffix',
        'street_postdirection' => 'setStreetPostdirection',
        'secondary_designator' => 'setSecondaryDesignator',
        'secondary_number' => 'setSecondaryNumber',
        'pmb_designator' => 'setPmbDesignator',
        'pmb_number' => 'setPmbNumber',
        'extra_secondary_designator' => 'setExtraSecondaryDesignator',
        'extra_secondary_number' => 'setExtraSecondaryNumber',
        'city' => 'setCity',
        'state' => 'setState',
        'zip_code' => 'setZipCode',
        'zip_code_plus_4' => 'setZipCodePlus4',
        'zip_code_type' => 'setZipCodeType',
        'delivery_point_barcode' => 'setDeliveryPointBarcode',
        'address_type' => 'setAddressType',
        'record_type' => 'setRecordType',
        'default_building_address' => 'setDefaultBuildingAddress',
        'county' => 'setCounty',
        'county_fips' => 'setCountyFips',
        'carrier_route' => 'setCarrierRoute',
        'carrier_route_type' => 'setCarrierRouteType',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'primary_number' => 'getPrimaryNumber',
        'street_predirection' => 'getStreetPredirection',
        'street_name' => 'getStreetName',
        'street_suffix' => 'getStreetSuffix',
        'street_postdirection' => 'getStreetPostdirection',
        'secondary_designator' => 'getSecondaryDesignator',
        'secondary_number' => 'getSecondaryNumber',
        'pmb_designator' => 'getPmbDesignator',
        'pmb_number' => 'getPmbNumber',
        'extra_secondary_designator' => 'getExtraSecondaryDesignator',
        'extra_secondary_number' => 'getExtraSecondaryNumber',
        'city' => 'getCity',
        'state' => 'getState',
        'zip_code' => 'getZipCode',
        'zip_code_plus_4' => 'getZipCodePlus4',
        'zip_code_type' => 'getZipCodeType',
        'delivery_point_barcode' => 'getDeliveryPointBarcode',
        'address_type' => 'getAddressType',
        'record_type' => 'getRecordType',
        'default_building_address' => 'getDefaultBuildingAddress',
        'county' => 'getCounty',
        'county_fips' => 'getCountyFips',
        'carrier_route' => 'getCarrierRoute',
        'carrier_route_type' => 'getCarrierRouteType',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude'
    ];

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
        return self::$openAPIModelName;
    }

    const STREET_PREDIRECTION_N = 'N';
    const STREET_PREDIRECTION_S = 'S';
    const STREET_PREDIRECTION_E = 'E';
    const STREET_PREDIRECTION_W = 'W';
    const STREET_PREDIRECTION_NE = 'NE';
    const STREET_PREDIRECTION_SW = 'SW';
    const STREET_PREDIRECTION_SE = 'SE';
    const STREET_PREDIRECTION_NW = 'NW';
    const STREET_PREDIRECTION_EMPTY = '';
    const STREET_POSTDIRECTION_N = 'N';
    const STREET_POSTDIRECTION_S = 'S';
    const STREET_POSTDIRECTION_E = 'E';
    const STREET_POSTDIRECTION_W = 'W';
    const STREET_POSTDIRECTION_NE = 'NE';
    const STREET_POSTDIRECTION_SW = 'SW';
    const STREET_POSTDIRECTION_SE = 'SE';
    const STREET_POSTDIRECTION_NW = 'NW';
    const STREET_POSTDIRECTION_EMPTY = '';
    const ADDRESS_TYPE_RESIDENTIAL = 'residential';
    const ADDRESS_TYPE_COMMERCIAL = 'commercial';
    const ADDRESS_TYPE_EMPTY = '';
    const RECORD_TYPE_STREET = 'street';
    const RECORD_TYPE_HIGHRISE = 'highrise';
    const RECORD_TYPE_FIRM = 'firm';
    const RECORD_TYPE_PO_BOX = 'po_box';
    const RECORD_TYPE_RURAL_ROUTE = 'rural_route';
    const RECORD_TYPE_GENERAL_DELIVERY = 'general_delivery';
    const RECORD_TYPE_EMPTY = '';
    const CARRIER_ROUTE_TYPE_CITY_DELIVERY = 'city_delivery';
    const CARRIER_ROUTE_TYPE_RURAL_ROUTE = 'rural_route';
    const CARRIER_ROUTE_TYPE_HIGHWAY_CONTRACT = 'highway_contract';
    const CARRIER_ROUTE_TYPE_PO_BOX = 'po_box';
    const CARRIER_ROUTE_TYPE_GENERAL_DELIVERY = 'general_delivery';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStreetPredirectionAllowableValues()
    {
        return [
            self::STREET_PREDIRECTION_N,
            self::STREET_PREDIRECTION_S,
            self::STREET_PREDIRECTION_E,
            self::STREET_PREDIRECTION_W,
            self::STREET_PREDIRECTION_NE,
            self::STREET_PREDIRECTION_SW,
            self::STREET_PREDIRECTION_SE,
            self::STREET_PREDIRECTION_NW,
            self::STREET_PREDIRECTION_EMPTY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStreetPostdirectionAllowableValues()
    {
        return [
            self::STREET_POSTDIRECTION_N,
            self::STREET_POSTDIRECTION_S,
            self::STREET_POSTDIRECTION_E,
            self::STREET_POSTDIRECTION_W,
            self::STREET_POSTDIRECTION_NE,
            self::STREET_POSTDIRECTION_SW,
            self::STREET_POSTDIRECTION_SE,
            self::STREET_POSTDIRECTION_NW,
            self::STREET_POSTDIRECTION_EMPTY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAddressTypeAllowableValues()
    {
        return [
            self::ADDRESS_TYPE_RESIDENTIAL,
            self::ADDRESS_TYPE_COMMERCIAL,
            self::ADDRESS_TYPE_EMPTY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecordTypeAllowableValues()
    {
        return [
            self::RECORD_TYPE_STREET,
            self::RECORD_TYPE_HIGHRISE,
            self::RECORD_TYPE_FIRM,
            self::RECORD_TYPE_PO_BOX,
            self::RECORD_TYPE_RURAL_ROUTE,
            self::RECORD_TYPE_GENERAL_DELIVERY,
            self::RECORD_TYPE_EMPTY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCarrierRouteTypeAllowableValues()
    {
        return [
            self::CARRIER_ROUTE_TYPE_CITY_DELIVERY,
            self::CARRIER_ROUTE_TYPE_RURAL_ROUTE,
            self::CARRIER_ROUTE_TYPE_HIGHWAY_CONTRACT,
            self::CARRIER_ROUTE_TYPE_PO_BOX,
            self::CARRIER_ROUTE_TYPE_GENERAL_DELIVERY,
        ];
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
        $this->container['primary_number'] = $data['primary_number'] ?? null;
        $this->container['street_predirection'] = $data['street_predirection'] ?? null;
        $this->container['street_name'] = $data['street_name'] ?? null;
        $this->container['street_suffix'] = $data['street_suffix'] ?? null;
        $this->container['street_postdirection'] = $data['street_postdirection'] ?? null;
        $this->container['secondary_designator'] = $data['secondary_designator'] ?? null;
        $this->container['secondary_number'] = $data['secondary_number'] ?? null;
        $this->container['pmb_designator'] = $data['pmb_designator'] ?? null;
        $this->container['pmb_number'] = $data['pmb_number'] ?? null;
        $this->container['extra_secondary_designator'] = $data['extra_secondary_designator'] ?? null;
        $this->container['extra_secondary_number'] = $data['extra_secondary_number'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['zip_code'] = $data['zip_code'] ?? null;
        $this->container['zip_code_plus_4'] = $data['zip_code_plus_4'] ?? null;
        $this->container['zip_code_type'] = $data['zip_code_type'] ?? null;
        $this->container['delivery_point_barcode'] = $data['delivery_point_barcode'] ?? null;
        $this->container['address_type'] = $data['address_type'] ?? null;
        $this->container['record_type'] = $data['record_type'] ?? null;
        $this->container['default_building_address'] = $data['default_building_address'] ?? null;
        $this->container['county'] = $data['county'] ?? null;
        $this->container['county_fips'] = $data['county_fips'] ?? null;
        $this->container['carrier_route'] = $data['carrier_route'] ?? null;
        $this->container['carrier_route_type'] = $data['carrier_route_type'] ?? null;
        $this->container['latitude'] = $data['latitude'] ?? null;
        $this->container['longitude'] = $data['longitude'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStreetPredirectionAllowableValues();
        if (!is_null($this->container['street_predirection']) && !in_array($this->container['street_predirection'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'street_predirection', must be one of '%s'",
                $this->container['street_predirection'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStreetPostdirectionAllowableValues();
        if (!is_null($this->container['street_postdirection']) && !in_array($this->container['street_postdirection'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'street_postdirection', must be one of '%s'",
                $this->container['street_postdirection'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 200)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 2)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['zip_code']) && !preg_match("/^\\d{5}$/", $this->container['zip_code'])) {
            $invalidProperties[] = "invalid value for 'zip_code', must be conform to the pattern /^\\d{5}$/.";
        }

        if (!is_null($this->container['zip_code_plus_4']) && !preg_match("/^\\d{4}$/", $this->container['zip_code_plus_4'])) {
            $invalidProperties[] = "invalid value for 'zip_code_plus_4', must be conform to the pattern /^\\d{4}$/.";
        }

        $allowedValues = $this->getAddressTypeAllowableValues();
        if (!is_null($this->container['address_type']) && !in_array($this->container['address_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'address_type', must be one of '%s'",
                $this->container['address_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRecordTypeAllowableValues();
        if (!is_null($this->container['record_type']) && !in_array($this->container['record_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'record_type', must be one of '%s'",
                $this->container['record_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['county_fips']) && !preg_match("/\\d{5}/", $this->container['county_fips'])) {
            $invalidProperties[] = "invalid value for 'county_fips', must be conform to the pattern /\\d{5}/.";
        }

        $allowedValues = $this->getCarrierRouteTypeAllowableValues();
        if (!is_null($this->container['carrier_route_type']) && !in_array($this->container['carrier_route_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'carrier_route_type', must be one of '%s'",
                $this->container['carrier_route_type'],
                implode("', '", $allowedValues)
            );
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
     * Gets primary_number
     *
     * @return string|null
     */
    public function getPrimaryNumber()
    {
        return $this->container['primary_number'];
    }

    /**
     * Sets primary_number
     *
     * @param string|null $primary_number The numeric or alphanumeric part of an address preceding the street name. Often the house, building, or PO Box number.
     *
     * @return self
     */
    public function setPrimaryNumber($primary_number)
    {
        $this->container['primary_number'] = $primary_number;

        return $this;
    }


    /**
     * Gets street_predirection
     *
     * @return string|null
     */
    public function getStreetPredirection()
    {
        return $this->container['street_predirection'];
    }

    /**
     * Sets street_predirection
     *
     * @param string|null $street_predirection Geographic direction preceding a street name (`N`, `S`, `E`, `W`, `NE`, `SW`, `SE`, `NW`).
     *
     * @return self
     */
    public function setStreetPredirection($street_predirection)
    {
        $allowedValues = $this->getStreetPredirectionAllowableValues();
        if (!is_null($street_predirection) && !in_array($street_predirection, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'street_predirection', must be one of '%s'",
                    $street_predirection,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['street_predirection'] = $street_predirection;

        return $this;
    }


    /**
     * Gets street_name
     *
     * @return string|null
     */
    public function getStreetName()
    {
        return $this->container['street_name'];
    }

    /**
     * Sets street_name
     *
     * @param string|null $street_name The name of the street.
     *
     * @return self
     */
    public function setStreetName($street_name)
    {
        $this->container['street_name'] = $street_name;

        return $this;
    }


    /**
     * Gets street_suffix
     *
     * @return string|null
     */
    public function getStreetSuffix()
    {
        return $this->container['street_suffix'];
    }

    /**
     * Sets street_suffix
     *
     * @param string|null $street_suffix The standard USPS abbreviation for the street suffix (`ST`, `AVE`, `BLVD`, etc).
     *
     * @return self
     */
    public function setStreetSuffix($street_suffix)
    {
        $this->container['street_suffix'] = $street_suffix;

        return $this;
    }


    /**
     * Gets street_postdirection
     *
     * @return string|null
     */
    public function getStreetPostdirection()
    {
        return $this->container['street_postdirection'];
    }

    /**
     * Sets street_postdirection
     *
     * @param string|null $street_postdirection Geographic direction following a street name (`N`, `S`, `E`, `W`, `NE`, `SW`, `SE`, `NW`).
     *
     * @return self
     */
    public function setStreetPostdirection($street_postdirection)
    {
        $allowedValues = $this->getStreetPostdirectionAllowableValues();
        if (!is_null($street_postdirection) && !in_array($street_postdirection, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'street_postdirection', must be one of '%s'",
                    $street_postdirection,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['street_postdirection'] = $street_postdirection;

        return $this;
    }


    /**
     * Gets secondary_designator
     *
     * @return string|null
     */
    public function getSecondaryDesignator()
    {
        return $this->container['secondary_designator'];
    }

    /**
     * Sets secondary_designator
     *
     * @param string|null $secondary_designator The standard USPS abbreviation describing the `components[secondary_number]` (`STE`, `APT`, `BLDG`, etc).
     *
     * @return self
     */
    public function setSecondaryDesignator($secondary_designator)
    {
        $this->container['secondary_designator'] = $secondary_designator;

        return $this;
    }


    /**
     * Gets secondary_number
     *
     * @return string|null
     */
    public function getSecondaryNumber()
    {
        return $this->container['secondary_number'];
    }

    /**
     * Sets secondary_number
     *
     * @param string|null $secondary_number Number of the apartment/unit/etc.
     *
     * @return self
     */
    public function setSecondaryNumber($secondary_number)
    {
        $this->container['secondary_number'] = $secondary_number;

        return $this;
    }


    /**
     * Gets pmb_designator
     *
     * @return string|null
     */
    public function getPmbDesignator()
    {
        return $this->container['pmb_designator'];
    }

    /**
     * Sets pmb_designator
     *
     * @param string|null $pmb_designator Designator of a [CMRA-authorized](https://en.wikipedia.org/wiki/Commercial_mail_receiving_agency) private mailbox.
     *
     * @return self
     */
    public function setPmbDesignator($pmb_designator)
    {
        $this->container['pmb_designator'] = $pmb_designator;

        return $this;
    }


    /**
     * Gets pmb_number
     *
     * @return string|null
     */
    public function getPmbNumber()
    {
        return $this->container['pmb_number'];
    }

    /**
     * Sets pmb_number
     *
     * @param string|null $pmb_number Number of a [CMRA-authorized](https://en.wikipedia.org/wiki/Commercial_mail_receiving_agency) private mailbox.
     *
     * @return self
     */
    public function setPmbNumber($pmb_number)
    {
        $this->container['pmb_number'] = $pmb_number;

        return $this;
    }


    /**
     * Gets extra_secondary_designator
     *
     * @return string|null
     */
    public function getExtraSecondaryDesignator()
    {
        return $this->container['extra_secondary_designator'];
    }

    /**
     * Sets extra_secondary_designator
     *
     * @param string|null $extra_secondary_designator An extra (often unnecessary) secondary designator provided with the input address.
     *
     * @return self
     */
    public function setExtraSecondaryDesignator($extra_secondary_designator)
    {
        $this->container['extra_secondary_designator'] = $extra_secondary_designator;

        return $this;
    }


    /**
     * Gets extra_secondary_number
     *
     * @return string|null
     */
    public function getExtraSecondaryNumber()
    {
        return $this->container['extra_secondary_number'];
    }

    /**
     * Sets extra_secondary_number
     *
     * @param string|null $extra_secondary_number An extra (often unnecessary) secondary number provided with the input address.
     *
     * @return self
     */
    public function setExtraSecondaryNumber($extra_secondary_number)
    {
        $this->container['extra_secondary_number'] = $extra_secondary_number;

        return $this;
    }


    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (!is_null($city) && (mb_strlen($city) > 200)) {
            throw new \InvalidArgumentException('invalid length for $city when calling UsComponents., must be smaller than or equal to 200.');
        }

        $this->container['city'] = $city;

        return $this;
    }


    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state The [ISO 3166-2](https://en.wikipedia.org/wiki/ISO_3166-2) two letter code for the state.
     *
     * @return self
     */
    public function setState($state)
    {
        if (!is_null($state) && (mb_strlen($state) > 2)) {
            throw new \InvalidArgumentException('invalid length for $state when calling UsComponents., must be smaller than or equal to 2.');
        }

        $this->container['state'] = $state;

        return $this;
    }


    /**
     * Gets zip_code
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string|null $zip_code The 5-digit ZIP code
     *
     * @return self
     */
    public function setZipCode($zip_code)
    {

        if (!is_null($zip_code) && (!preg_match("/^\\d{5}$/", $zip_code))) {
            throw new \InvalidArgumentException("invalid value for $zip_code when calling UsComponents., must conform to the pattern /^\\d{5}$/.");
        }

        $this->container['zip_code'] = $zip_code;

        return $this;
    }


    /**
     * Gets zip_code_plus_4
     *
     * @return string|null
     */
    public function getZipCodePlus4()
    {
        return $this->container['zip_code_plus_4'];
    }

    /**
     * Sets zip_code_plus_4
     *
     * @param string|null $zip_code_plus_4 zip_code_plus_4
     *
     * @return self
     */
    public function setZipCodePlus4($zip_code_plus_4)
    {

        if (!is_null($zip_code_plus_4) && (!preg_match("/^\\d{4}$/", $zip_code_plus_4))) {
            throw new \InvalidArgumentException("invalid value for $zip_code_plus_4 when calling UsComponents., must conform to the pattern /^\\d{4}$/.");
        }

        $this->container['zip_code_plus_4'] = $zip_code_plus_4;

        return $this;
    }


    /**
     * Gets zip_code_type
     *
     * @return \OpenAPI\Client\Model\ZipCodeType|null
     */
    public function getZipCodeType()
    {
        return $this->container['zip_code_type'];
    }

    /**
     * Sets zip_code_type
     *
     * @param \OpenAPI\Client\Model\ZipCodeType|null $zip_code_type zip_code_type
     *
     * @return self
     */
    public function setZipCodeType($zip_code_type)
    {
        $this->container['zip_code_type'] = $zip_code_type;

        return $this;
    }


    /**
     * Gets delivery_point_barcode
     *
     * @return string|null
     */
    public function getDeliveryPointBarcode()
    {
        return $this->container['delivery_point_barcode'];
    }

    /**
     * Sets delivery_point_barcode
     *
     * @param string|null $delivery_point_barcode A 12-digit identifier that uniquely identifies a delivery point (location where mail can be sent and received). It consists of the 5-digit ZIP code (`zip_code`), 4-digit ZIP+4 add-on (`zip_code_plus_4`), 2-digit delivery point, and 1-digit delivery point check digit.
     *
     * @return self
     */
    public function setDeliveryPointBarcode($delivery_point_barcode)
    {
        $this->container['delivery_point_barcode'] = $delivery_point_barcode;

        return $this;
    }


    /**
     * Gets address_type
     *
     * @return string|null
     */
    public function getAddressType()
    {
        return $this->container['address_type'];
    }

    /**
     * Sets address_type
     *
     * @param string|null $address_type Uses USPS's [Residential Delivery Indicator (RDI)](https://www.usps.com/nationalpremieraccounts/rdi.htm) to identify whether an address is classified as residential or business. Possible values are: * `residential` –– The address is residential or a PO Box. * `commercial` –– The address is commercial. * `''` –– Not enough information provided to be determined.
     *
     * @return self
     */
    public function setAddressType($address_type)
    {
        $allowedValues = $this->getAddressTypeAllowableValues();
        if (!is_null($address_type) && !in_array($address_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'address_type', must be one of '%s'",
                    $address_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['address_type'] = $address_type;

        return $this;
    }


    /**
     * Gets record_type
     *
     * @return string|null
     */
    public function getRecordType()
    {
        return $this->container['record_type'];
    }

    /**
     * Sets record_type
     *
     * @param string|null $record_type A description of the type of address. Populated if a DPV match is made (`deliverability_analysis[dpv_confirmation]` is `Y`, `S`, or `D`). For more detailed information about each record type, see [US Verification Details](#tag/US-Verification-Types).
     *
     * @return self
     */
    public function setRecordType($record_type)
    {
        $allowedValues = $this->getRecordTypeAllowableValues();
        if (!is_null($record_type) && !in_array($record_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'record_type', must be one of '%s'",
                    $record_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['record_type'] = $record_type;

        return $this;
    }


    /**
     * Gets default_building_address
     *
     * @return bool|null
     */
    public function getDefaultBuildingAddress()
    {
        return $this->container['default_building_address'];
    }

    /**
     * Sets default_building_address
     *
     * @param bool|null $default_building_address Designates whether or not the address is the default address for a building containing multiple delivery points.
     *
     * @return self
     */
    public function setDefaultBuildingAddress($default_building_address)
    {
        $this->container['default_building_address'] = $default_building_address;

        return $this;
    }


    /**
     * Gets county
     *
     * @return string|null
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string|null $county County name of the address city.
     *
     * @return self
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }


    /**
     * Gets county_fips
     *
     * @return string|null
     */
    public function getCountyFips()
    {
        return $this->container['county_fips'];
    }

    /**
     * Sets county_fips
     *
     * @param string|null $county_fips A 5-digit [FIPS county code](https://en.wikipedia.org/wiki/FIPS_county_code) which uniquely identifies `components[county]`. It consists of a 2-digit state code and a 3-digit county code.
     *
     * @return self
     */
    public function setCountyFips($county_fips)
    {

        if (!is_null($county_fips) && (!preg_match("/\\d{5}/", $county_fips))) {
            throw new \InvalidArgumentException("invalid value for $county_fips when calling UsComponents., must conform to the pattern /\\d{5}/.");
        }

        $this->container['county_fips'] = $county_fips;

        return $this;
    }


    /**
     * Gets carrier_route
     *
     * @return string|null
     */
    public function getCarrierRoute()
    {
        return $this->container['carrier_route'];
    }

    /**
     * Sets carrier_route
     *
     * @param string|null $carrier_route A 4-character code assigned to a mail delivery route within a ZIP code.
     *
     * @return self
     */
    public function setCarrierRoute($carrier_route)
    {
        $this->container['carrier_route'] = $carrier_route;

        return $this;
    }


    /**
     * Gets carrier_route_type
     *
     * @return string|null
     */
    public function getCarrierRouteType()
    {
        return $this->container['carrier_route_type'];
    }

    /**
     * Sets carrier_route_type
     *
     * @param string|null $carrier_route_type The type of `components[carrier_route]`. For more detailed information about each carrier route type, see [US Verification Details](#tag/US-Verification-Types).
     *
     * @return self
     */
    public function setCarrierRouteType($carrier_route_type)
    {
        $allowedValues = $this->getCarrierRouteTypeAllowableValues();
        if (!is_null($carrier_route_type) && !in_array($carrier_route_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'carrier_route_type', must be one of '%s'",
                    $carrier_route_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['carrier_route_type'] = $carrier_route_type;

        return $this;
    }


    /**
     * Gets latitude
     *
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param float|null $latitude A positive or negative decimal indicating the geographic latitude of the address, specifying the north-to-south position of a location. This should be used with `longitude` to pinpoint locations on a map. Will not be returned for undeliverable addresses or military addresses (state is `AA`, `AE`, or `AP`).
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }


    /**
     * Gets longitude
     *
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param float|null $longitude A positive or negative decimal indicating the geographic longitude of the address, specifying the north-to-south position of a location. This should be used with `latitude` to pinpoint locations on a map. Will not be returned for undeliverable addresses or military addresses (state is `AA`, `AE`, or `AP`).
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


