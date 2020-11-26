<?php
/**
 * ShippingOption
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Klarna Checkout API V3
 *
 * API spec
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ShippingOption Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'shipping_option';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'promo' => 'string',
        'price' => 'int',
        'preselected' => 'bool',
        'tax_amount' => 'int',
        'tax_rate' => 'int',
        'shipping_method' => 'string',
        'delivery_details' => '\Swagger\Client\Model\DeliveryDetailsV1',
        'tms_reference' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'promo' => null,
        'price' => 'int64',
        'preselected' => null,
        'tax_amount' => 'int64',
        'tax_rate' => 'int64',
        'shipping_method' => null,
        'delivery_details' => null,
        'tms_reference' => null
    ];

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
        'id' => 'id',
        'name' => 'name',
        'description' => 'description',
        'promo' => 'promo',
        'price' => 'price',
        'preselected' => 'preselected',
        'tax_amount' => 'tax_amount',
        'tax_rate' => 'tax_rate',
        'shipping_method' => 'shipping_method',
        'delivery_details' => 'delivery_details',
        'tms_reference' => 'tms_reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'promo' => 'setPromo',
        'price' => 'setPrice',
        'preselected' => 'setPreselected',
        'tax_amount' => 'setTaxAmount',
        'tax_rate' => 'setTaxRate',
        'shipping_method' => 'setShippingMethod',
        'delivery_details' => 'setDeliveryDetails',
        'tms_reference' => 'setTmsReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'promo' => 'getPromo',
        'price' => 'getPrice',
        'preselected' => 'getPreselected',
        'tax_amount' => 'getTaxAmount',
        'tax_rate' => 'getTaxRate',
        'shipping_method' => 'getShippingMethod',
        'delivery_details' => 'getDeliveryDetails',
        'tms_reference' => 'getTmsReference'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['promo'] = isset($data['promo']) ? $data['promo'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['preselected'] = isset($data['preselected']) ? $data['preselected'] : false;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['shipping_method'] = isset($data['shipping_method']) ? $data['shipping_method'] : null;
        $this->container['delivery_details'] = isset($data['delivery_details']) ? $data['delivery_details'] : null;
        $this->container['tms_reference'] = isset($data['tms_reference']) ? $data['tms_reference'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['tax_amount'] === null) {
            $invalidProperties[] = "'tax_amount' can't be null";
        }
        if ($this->container['tax_rate'] === null) {
            $invalidProperties[] = "'tax_rate' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name.
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ShippingOption., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ShippingOption., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets promo
     *
     * @return string
     */
    public function getPromo()
    {
        return $this->container['promo'];
    }

    /**
     * Sets promo
     *
     * @param string $promo Promotion name. To be used if this shipping option is promotional.
     *
     * @return $this
     */
    public function setPromo($promo)
    {
        $this->container['promo'] = $promo;

        return $this;
    }

    /**
     * Gets price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int $price Price including tax.
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets preselected
     *
     * @return bool
     */
    public function getPreselected()
    {
        return $this->container['preselected'];
    }

    /**
     * Sets preselected
     *
     * @param bool $preselected If true, this option will be preselected when checkout loads. Default: false
     *
     * @return $this
     */
    public function setPreselected($preselected)
    {
        $this->container['preselected'] = $preselected;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return int
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param int $tax_amount Tax amount.
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return int
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param int $tax_rate Non-negative. In percent, two implicit decimals. I.e 2500 = 25%.
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets shipping_method
     *
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     *
     * @param string $shipping_method Shipping method. Possible values:<ul><li>PickUpStore</li><li>Home</li><li>BoxReg</li><li>BoxUnreg</li><li>PickUpPoint</li><li>Own</li><li>Postal</li><li>DHLPackstation</li><li>Digital</li></ul> If DHLPackstation is selected the correct form will be displayed.
     *
     * @return $this
     */
    public function setShippingMethod($shipping_method)
    {
        $this->container['shipping_method'] = $shipping_method;

        return $this;
    }

    /**
     * Gets delivery_details
     *
     * @return \Swagger\Client\Model\DeliveryDetailsV1
     */
    public function getDeliveryDetails()
    {
        return $this->container['delivery_details'];
    }

    /**
     * Sets delivery_details
     *
     * @param \Swagger\Client\Model\DeliveryDetailsV1 $delivery_details delivery_details
     *
     * @return $this
     */
    public function setDeliveryDetails($delivery_details)
    {
        $this->container['delivery_details'] = $delivery_details;

        return $this;
    }

    /**
     * Gets tms_reference
     *
     * @return string
     */
    public function getTmsReference()
    {
        return $this->container['tms_reference'];
    }

    /**
     * Sets tms_reference
     *
     * @param string $tms_reference TMS reference. Required to map completed orders to shipments reserved in TMS.
     *
     * @return $this
     */
    public function setTmsReference($tms_reference)
    {
        $this->container['tms_reference'] = $tms_reference;

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


