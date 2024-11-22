<?php
/**
 * DeliveryPreferences.
 *
 * PHP version 5
 *
 * @author   Eiji Muraguchi / Shippinno
 */

/**
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: 2020-07-01
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * DeliveryPreferences Class Doc Comment.
 *
 * @description The delivery preferences applied to the destination address. These preferences are applied when possible and are best effort.
 * This feature is currently supported only in the JP marketplace and not applicable for other marketplaces.
 * For eligible orders, the default delivery preference will be to deliver the package unattended at the front door, unless you specify otherwise.
 *
 * @author   Eiji Muraguchi / Shippinno
 */
class DeliveryPreferences implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'DeliveryPreferences';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'delivery_instructions' => 'string',
        'drop_off_location' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\DropOffLocation',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'delivery_instructions' => null,
        'drop_off_location' => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'delivery_instructions' => 'deliveryInstructions',
        'drop_off_location' => 'dropOffLocation',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_instructions' => 'setDeliveryInstructions',
        'drop_off_location' => 'setDropOffLocation',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_instructions' => 'getDeliveryInstructions',
        'drop_off_location' => 'getDropOffLocation',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
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
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['delivery_instructions'] = isset($data['delivery_instructions']) ? $data['delivery_instructions'] : null;
        $this->container['drop_off_location'] = isset($data['drop_off_location']) ? $data['drop_off_location'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets delivery_instructions.
     *
     * @return string
     */
    public function getDeliveryInstructions()
    {
        return $this->container['delivery_instructions'];
    }

    /**
     * Sets delivery_instructions.
     *
     * @param string $delivery_instructions delivery_instructions
     *
     * @return $this
     */
    public function setDeliveryInstructions($delivery_instructions)
    {
        $this->container['delivery_instructions'] = $delivery_instructions;

        return $this;
    }

    /**
     * Gets drop_off_location.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\DropOffLocation
     */
    public function getDropOffLocation()
    {
        return $this->container['drop_off_location'];
    }

    /**
     * Sets drop_off_location.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\DropOffLocation $drop_off_location drop_off_location
     *
     * @return $this
     */
    public function setDropOffLocation($drop_off_location)
    {
        $this->container['drop_off_location'] = $drop_off_location;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
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
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
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
