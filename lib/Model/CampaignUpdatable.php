<?php
/**
 * CampaignUpdatable
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
 * CampaignUpdatable Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CampaignUpdatable implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'campaign_updatable';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'description' => 'string',
        'schedule_type' => '\OpenAPI\Client\Model\CmpScheduleType',
        'target_delivery_date' => '\DateTime',
        'send_date' => '\DateTime',
        'cancel_window_campaign_minutes' => 'int',
        'metadata' => 'array<string,string>',
        'is_draft' => 'bool',
        'use_type' => '\OpenAPI\Client\Model\CmpUseType',
        'auto_cancel_if_ncoa' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'schedule_type' => null,
        'target_delivery_date' => 'date-time',
        'send_date' => 'date-time',
        'cancel_window_campaign_minutes' => null,
        'metadata' => null,
        'is_draft' => null,
        'use_type' => null,
        'auto_cancel_if_ncoa' => null
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
        'name' => 'name',
        'description' => 'description',
        'schedule_type' => 'schedule_type',
        'target_delivery_date' => 'target_delivery_date',
        'send_date' => 'send_date',
        'cancel_window_campaign_minutes' => 'cancel_window_campaign_minutes',
        'metadata' => 'metadata',
        'is_draft' => 'is_draft',
        'use_type' => 'use_type',
        'auto_cancel_if_ncoa' => 'auto_cancel_if_ncoa'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'schedule_type' => 'setScheduleType',
        'target_delivery_date' => 'setTargetDeliveryDate',
        'send_date' => 'setSendDate',
        'cancel_window_campaign_minutes' => 'setCancelWindowCampaignMinutes',
        'metadata' => 'setMetadata',
        'is_draft' => 'setIsDraft',
        'use_type' => 'setUseType',
        'auto_cancel_if_ncoa' => 'setAutoCancelIfNcoa'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'schedule_type' => 'getScheduleType',
        'target_delivery_date' => 'getTargetDeliveryDate',
        'send_date' => 'getSendDate',
        'cancel_window_campaign_minutes' => 'getCancelWindowCampaignMinutes',
        'metadata' => 'getMetadata',
        'is_draft' => 'getIsDraft',
        'use_type' => 'getUseType',
        'auto_cancel_if_ncoa' => 'getAutoCancelIfNcoa'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['schedule_type'] = $data['schedule_type'] ?? null;
        $this->container['target_delivery_date'] = $data['target_delivery_date'] ?? null;
        $this->container['send_date'] = $data['send_date'] ?? null;
        $this->container['cancel_window_campaign_minutes'] = $data['cancel_window_campaign_minutes'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['is_draft'] = $data['is_draft'] ?? null;
        $this->container['use_type'] = $data['use_type'] ?? null;
        $this->container['auto_cancel_if_ncoa'] = $data['auto_cancel_if_ncoa'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }

        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }


    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description An internal description that identifies this resource. Must be no longer than 255 characters.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($description) && (mb_strlen($description) > 255)) {
                throw new \InvalidArgumentException('invalid length for $description when calling CampaignUpdatable., must be smaller than or equal to 255.');
            }

        }
        $this->container['description'] = $description;

        return $this;
    }


    /**
     * Gets schedule_type
     *
     * @return \OpenAPI\Client\Model\CmpScheduleType|null
     */
    public function getScheduleType()
    {
        return $this->container['schedule_type'];
    }

    /**
     * Sets schedule_type
     *
     * @param \OpenAPI\Client\Model\CmpScheduleType|null $schedule_type schedule_type
     *
     * @return self
     */
    public function setScheduleType($schedule_type)
    {
        $this->container['schedule_type'] = $schedule_type;

        return $this;
    }


    /**
     * Gets target_delivery_date
     *
     * @return \DateTime|null
     */
    public function getTargetDeliveryDate()
    {
        return $this->container['target_delivery_date'];
    }

    /**
     * Sets target_delivery_date
     *
     * @param \DateTime|null $target_delivery_date If `schedule_type` is `target_delivery_date`, provide a targeted delivery date for mail pieces in this campaign.
     *
     * @return self
     */
    public function setTargetDeliveryDate($target_delivery_date)
    {
        $this->container['target_delivery_date'] = $target_delivery_date;

        return $this;
    }


    /**
     * Gets send_date
     *
     * @return \DateTime|null
     */
    public function getSendDate()
    {
        return $this->container['send_date'];
    }

    /**
     * Sets send_date
     *
     * @param \DateTime|null $send_date If `schedule_type` is `scheduled_send_date`, provide a date to send this campaign.
     *
     * @return self
     */
    public function setSendDate($send_date)
    {
        $this->container['send_date'] = $send_date;

        return $this;
    }


    /**
     * Gets cancel_window_campaign_minutes
     *
     * @return int|null
     */
    public function getCancelWindowCampaignMinutes()
    {
        return $this->container['cancel_window_campaign_minutes'];
    }

    /**
     * Sets cancel_window_campaign_minutes
     *
     * @param int|null $cancel_window_campaign_minutes A window, in minutes, within which the campaign can be canceled.
     *
     * @return self
     */
    public function setCancelWindowCampaignMinutes($cancel_window_campaign_minutes)
    {
        $this->container['cancel_window_campaign_minutes'] = $cancel_window_campaign_minutes;

        return $this;
    }


    /**
     * Gets metadata
     *
     * @return array<string,string>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,string>|null $metadata Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `\"` and `\\`. i.e. '{\"customer_id\" : \"NEWYORK2015\"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {


        }
        $this->container['metadata'] = $metadata;

        return $this;
    }


    /**
     * Gets is_draft
     *
     * @return bool|null
     */
    public function getIsDraft()
    {
        return $this->container['is_draft'];
    }

    /**
     * Sets is_draft
     *
     * @param bool|null $is_draft Whether or not the campaign is still a draft.
     *
     * @return self
     */
    public function setIsDraft($is_draft)
    {
        $this->container['is_draft'] = $is_draft;

        return $this;
    }


    /**
     * Gets use_type
     *
     * @return \OpenAPI\Client\Model\CmpUseType|null
     */
    public function getUseType()
    {
        return $this->container['use_type'];
    }

    /**
     * Sets use_type
     *
     * @param \OpenAPI\Client\Model\CmpUseType|null $use_type use_type
     *
     * @return self
     */
    public function setUseType($use_type)
    {
        $this->container['use_type'] = $use_type;

        return $this;
    }


    /**
     * Gets auto_cancel_if_ncoa
     *
     * @return bool|null
     */
    public function getAutoCancelIfNcoa()
    {
        return $this->container['auto_cancel_if_ncoa'];
    }

    /**
     * Sets auto_cancel_if_ncoa
     *
     * @param bool|null $auto_cancel_if_ncoa Whether or not a mail piece should be automatically canceled and not sent if the address is updated via NCOA.
     *
     * @return self
     */
    public function setAutoCancelIfNcoa($auto_cancel_if_ncoa)
    {
        $this->container['auto_cancel_if_ncoa'] = $auto_cancel_if_ncoa;

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

