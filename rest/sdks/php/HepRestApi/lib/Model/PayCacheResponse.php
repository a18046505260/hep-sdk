<?php
/**
 * PayCacheResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  HepRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * HEP REST API
 *
 * The REST API for HEP protocol
 *
 * OpenAPI spec version: v1
 * Contact: xiawu@zeuux.org
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.7
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace HepRestApi\Model;

use \ArrayAccess;
use \HepRestApi\ObjectSerializer;

/**
 * PayCacheResponse Class Doc Comment
 *
 * @category Class
 * @package  HepRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayCacheResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PayCacheResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dapp_key' => 'string',
        'protocol' => 'string',
        'version' => 'string',
        'ts' => 'int',
        'nonce' => 'string',
        'os' => 'string',
        'language' => 'string',
        'dapp_signature_method' => 'string',
        'dapp_signature' => 'string',
        'sign_type' => 'string',
        'signature' => 'string',
        'uuid' => 'string',
        'dapp_id' => 'string',
        'action' => 'string',
        'expired' => 'int',
        'description' => 'string',
        'price_currency' => 'string',
        'total_price' => 'string',
        'order_number' => 'string',
        'seller' => 'string',
        'customer' => 'string',
        'broker' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dapp_key' => null,
        'protocol' => null,
        'version' => null,
        'ts' => null,
        'nonce' => null,
        'os' => null,
        'language' => null,
        'dapp_signature_method' => null,
        'dapp_signature' => null,
        'sign_type' => null,
        'signature' => null,
        'uuid' => null,
        'dapp_id' => null,
        'action' => null,
        'expired' => null,
        'description' => null,
        'price_currency' => null,
        'total_price' => null,
        'order_number' => null,
        'seller' => null,
        'customer' => null,
        'broker' => null
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
        'dapp_key' => 'dapp_key',
        'protocol' => 'protocol',
        'version' => 'version',
        'ts' => 'ts',
        'nonce' => 'nonce',
        'os' => 'os',
        'language' => 'language',
        'dapp_signature_method' => 'dapp_signature_method',
        'dapp_signature' => 'dapp_signature',
        'sign_type' => 'sign_type',
        'signature' => 'signature',
        'uuid' => 'uuid',
        'dapp_id' => 'dapp_id',
        'action' => 'action',
        'expired' => 'expired',
        'description' => 'description',
        'price_currency' => 'price_currency',
        'total_price' => 'total_price',
        'order_number' => 'order_number',
        'seller' => 'seller',
        'customer' => 'customer',
        'broker' => 'broker'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dapp_key' => 'setDappKey',
        'protocol' => 'setProtocol',
        'version' => 'setVersion',
        'ts' => 'setTs',
        'nonce' => 'setNonce',
        'os' => 'setOs',
        'language' => 'setLanguage',
        'dapp_signature_method' => 'setDappSignatureMethod',
        'dapp_signature' => 'setDappSignature',
        'sign_type' => 'setSignType',
        'signature' => 'setSignature',
        'uuid' => 'setUuid',
        'dapp_id' => 'setDappId',
        'action' => 'setAction',
        'expired' => 'setExpired',
        'description' => 'setDescription',
        'price_currency' => 'setPriceCurrency',
        'total_price' => 'setTotalPrice',
        'order_number' => 'setOrderNumber',
        'seller' => 'setSeller',
        'customer' => 'setCustomer',
        'broker' => 'setBroker'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dapp_key' => 'getDappKey',
        'protocol' => 'getProtocol',
        'version' => 'getVersion',
        'ts' => 'getTs',
        'nonce' => 'getNonce',
        'os' => 'getOs',
        'language' => 'getLanguage',
        'dapp_signature_method' => 'getDappSignatureMethod',
        'dapp_signature' => 'getDappSignature',
        'sign_type' => 'getSignType',
        'signature' => 'getSignature',
        'uuid' => 'getUuid',
        'dapp_id' => 'getDappId',
        'action' => 'getAction',
        'expired' => 'getExpired',
        'description' => 'getDescription',
        'price_currency' => 'getPriceCurrency',
        'total_price' => 'getTotalPrice',
        'order_number' => 'getOrderNumber',
        'seller' => 'getSeller',
        'customer' => 'getCustomer',
        'broker' => 'getBroker'
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
        $this->container['dapp_key'] = isset($data['dapp_key']) ? $data['dapp_key'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['ts'] = isset($data['ts']) ? $data['ts'] : null;
        $this->container['nonce'] = isset($data['nonce']) ? $data['nonce'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['dapp_signature_method'] = isset($data['dapp_signature_method']) ? $data['dapp_signature_method'] : null;
        $this->container['dapp_signature'] = isset($data['dapp_signature']) ? $data['dapp_signature'] : null;
        $this->container['sign_type'] = isset($data['sign_type']) ? $data['sign_type'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['dapp_id'] = isset($data['dapp_id']) ? $data['dapp_id'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['expired'] = isset($data['expired']) ? $data['expired'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['price_currency'] = isset($data['price_currency']) ? $data['price_currency'] : null;
        $this->container['total_price'] = isset($data['total_price']) ? $data['total_price'] : null;
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['seller'] = isset($data['seller']) ? $data['seller'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['broker'] = isset($data['broker']) ? $data['broker'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['dapp_key'] === null) {
            $invalidProperties[] = "'dapp_key' can't be null";
        }
        if ((mb_strlen($this->container['dapp_key']) > 64)) {
            $invalidProperties[] = "invalid value for 'dapp_key', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['dapp_key']) < 1)) {
            $invalidProperties[] = "invalid value for 'dapp_key', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ((mb_strlen($this->container['protocol']) > 10)) {
            $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['protocol']) < 1)) {
            $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ((mb_strlen($this->container['version']) > 10)) {
            $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['version']) < 1)) {
            $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['ts'] === null) {
            $invalidProperties[] = "'ts' can't be null";
        }
        if ($this->container['nonce'] === null) {
            $invalidProperties[] = "'nonce' can't be null";
        }
        if ((mb_strlen($this->container['nonce']) > 64)) {
            $invalidProperties[] = "invalid value for 'nonce', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['nonce']) < 1)) {
            $invalidProperties[] = "invalid value for 'nonce', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['os'] === null) {
            $invalidProperties[] = "'os' can't be null";
        }
        if ((mb_strlen($this->container['os']) > 10)) {
            $invalidProperties[] = "invalid value for 'os', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['os']) < 1)) {
            $invalidProperties[] = "invalid value for 'os', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ((mb_strlen($this->container['language']) > 10)) {
            $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['language']) < 1)) {
            $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['dapp_signature_method'] === null) {
            $invalidProperties[] = "'dapp_signature_method' can't be null";
        }
        if ((mb_strlen($this->container['dapp_signature_method']) > 64)) {
            $invalidProperties[] = "invalid value for 'dapp_signature_method', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['dapp_signature_method']) < 1)) {
            $invalidProperties[] = "invalid value for 'dapp_signature_method', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['dapp_signature'] === null) {
            $invalidProperties[] = "'dapp_signature' can't be null";
        }
        if ((mb_strlen($this->container['dapp_signature']) > 64)) {
            $invalidProperties[] = "invalid value for 'dapp_signature', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['dapp_signature']) < 1)) {
            $invalidProperties[] = "invalid value for 'dapp_signature', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['sign_type'] === null) {
            $invalidProperties[] = "'sign_type' can't be null";
        }
        if ((mb_strlen($this->container['sign_type']) > 64)) {
            $invalidProperties[] = "invalid value for 'sign_type', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['sign_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'sign_type', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['signature'] === null) {
            $invalidProperties[] = "'signature' can't be null";
        }
        if ((mb_strlen($this->container['signature']) > 130)) {
            $invalidProperties[] = "invalid value for 'signature', the character length must be smaller than or equal to 130.";
        }

        if ((mb_strlen($this->container['signature']) < 1)) {
            $invalidProperties[] = "invalid value for 'signature', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['uuid'] === null) {
            $invalidProperties[] = "'uuid' can't be null";
        }
        if ((mb_strlen($this->container['uuid']) > 64)) {
            $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['uuid']) < 1)) {
            $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['dapp_id'] === null) {
            $invalidProperties[] = "'dapp_id' can't be null";
        }
        if ((mb_strlen($this->container['dapp_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'dapp_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['dapp_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'dapp_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ((mb_strlen($this->container['action']) > 64)) {
            $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['action']) < 1)) {
            $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['expired'] === null) {
            $invalidProperties[] = "'expired' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 64)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['price_currency'] === null) {
            $invalidProperties[] = "'price_currency' can't be null";
        }
        if ((mb_strlen($this->container['price_currency']) > 64)) {
            $invalidProperties[] = "invalid value for 'price_currency', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['price_currency']) < 1)) {
            $invalidProperties[] = "invalid value for 'price_currency', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['total_price'] === null) {
            $invalidProperties[] = "'total_price' can't be null";
        }
        if ((mb_strlen($this->container['total_price']) > 64)) {
            $invalidProperties[] = "invalid value for 'total_price', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['total_price']) < 1)) {
            $invalidProperties[] = "invalid value for 'total_price', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['order_number'] === null) {
            $invalidProperties[] = "'order_number' can't be null";
        }
        if ((mb_strlen($this->container['order_number']) > 64)) {
            $invalidProperties[] = "invalid value for 'order_number', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['order_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'order_number', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['seller'] === null) {
            $invalidProperties[] = "'seller' can't be null";
        }
        if ((mb_strlen($this->container['seller']) > 64)) {
            $invalidProperties[] = "invalid value for 'seller', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['seller']) < 1)) {
            $invalidProperties[] = "invalid value for 'seller', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        if ((mb_strlen($this->container['customer']) > 64)) {
            $invalidProperties[] = "invalid value for 'customer', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['customer']) < 1)) {
            $invalidProperties[] = "invalid value for 'customer', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['broker']) && (mb_strlen($this->container['broker']) > 64)) {
            $invalidProperties[] = "invalid value for 'broker', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['broker']) && (mb_strlen($this->container['broker']) < 1)) {
            $invalidProperties[] = "invalid value for 'broker', the character length must be bigger than or equal to 1.";
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
     * Gets dapp_key
     *
     * @return string
     */
    public function getDappKey()
    {
        return $this->container['dapp_key'];
    }

    /**
     * Sets dapp_key
     *
     * @param string $dapp_key The decentralized application access key
     *
     * @return $this
     */
    public function setDappKey($dapp_key)
    {
        if ((mb_strlen($dapp_key) > 64)) {
            throw new \InvalidArgumentException('invalid length for $dapp_key when calling PayCacheResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($dapp_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for $dapp_key when calling PayCacheResponse., must be bigger than or equal to 1.');
        }

        $this->container['dapp_key'] = $dapp_key;

        return $this;
    }

    /**
     * Gets protocol
     *
     * @return string
     */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     *
     * @param string $protocol The protocol name. default is 'HEP'.
     *
     * @return $this
     */
    public function setProtocol($protocol)
    {
        if ((mb_strlen($protocol) > 10)) {
            throw new \InvalidArgumentException('invalid length for $protocol when calling PayCacheResponse., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($protocol) < 1)) {
            throw new \InvalidArgumentException('invalid length for $protocol when calling PayCacheResponse., must be bigger than or equal to 1.');
        }

        $this->container['protocol'] = $protocol;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version The protocol version such as '1.0'
     *
     * @return $this
     */
    public function setVersion($version)
    {
        if ((mb_strlen($version) > 10)) {
            throw new \InvalidArgumentException('invalid length for $version when calling PayCacheResponse., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($version) < 1)) {
            throw new \InvalidArgumentException('invalid length for $version when calling PayCacheResponse., must be bigger than or equal to 1.');
        }

        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets ts
     *
     * @return int
     */
    public function getTs()
    {
        return $this->container['ts'];
    }

    /**
     * Sets ts
     *
     * @param int $ts The current timestamp
     *
     * @return $this
     */
    public function setTs($ts)
    {
        $this->container['ts'] = $ts;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return string
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param string $nonce The random string or auto-increment sequence
     *
     * @return $this
     */
    public function setNonce($nonce)
    {
        if ((mb_strlen($nonce) > 64)) {
            throw new \InvalidArgumentException('invalid length for $nonce when calling PayCacheResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($nonce) < 1)) {
            throw new \InvalidArgumentException('invalid length for $nonce when calling PayCacheResponse., must be bigger than or equal to 1.');
        }

        $this->container['nonce'] = $nonce;

        return $this;
    }

    /**
     * Gets os
     *
     * @return string
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     *
     * @param string $os The operating system of client such as ios, android, dweb,etc.
     *
     * @return $this
     */
    public function setOs($os)
    {
        if ((mb_strlen($os) > 10)) {
            throw new \InvalidArgumentException('invalid length for $os when calling PayCacheResponse., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($os) < 1)) {
            throw new \InvalidArgumentException('invalid length for $os when calling PayCacheResponse., must be bigger than or equal to 1.');
        }

        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language The i18n language code such as zh, en, etc.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        if ((mb_strlen($language) > 10)) {
            throw new \InvalidArgumentException('invalid length for $language when calling PayCacheResponse., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($language) < 1)) {
            throw new \InvalidArgumentException('invalid length for $language when calling PayCacheResponse., must be bigger than or equal to 1.');
        }

        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets dapp_signature_method
     *
     * @return string
     */
    public function getDappSignatureMethod()
    {
        return $this->container['dapp_signature_method'];
    }

    /**
     * Sets dapp_signature_method
     *
     * @param string $dapp_signature_method The signature method used by dapp.
     *
     * @return $this
     */
    public function setDappSignatureMethod($dapp_signature_method)
    {
        if ((mb_strlen($dapp_signature_method) > 64)) {
            throw new \InvalidArgumentException('invalid length for $dapp_signature_method when calling PayCacheResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($dapp_signature_method) < 1)) {
            throw new \InvalidArgumentException('invalid length for $dapp_signature_method when calling PayCacheResponse., must be bigger than or equal to 1.');
        }

        $this->container['dapp_signature_method'] = $dapp_signature_method;

        return $this;
    }

    /**
     * Gets dapp_signature
     *
     * @return string
     */
    public function getDappSignature()
    {
        return $this->container['dapp_signature'];
    }

    /**
     * Sets dapp_signature
     *
     * @param string $dapp_signature The signature generated by dapp.
     *
     * @return $this
     */
    public function setDappSignature($dapp_signature)
    {
        if ((mb_strlen($dapp_signature) > 64)) {
            throw new \InvalidArgumentException('invalid length for $dapp_signature when calling PayCacheResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($dapp_signature) < 1)) {
            throw new \InvalidArgumentException('invalid length for $dapp_signature when calling PayCacheResponse., must be bigger than or equal to 1.');
        }

        $this->container['dapp_signature'] = $dapp_signature;

        return $this;
    }

    /**
     * Gets sign_type
     *
     * @return string
     */
    public function getSignType()
    {
        return $this->container['sign_type'];
    }

    /**
     * Sets sign_type
     *
     * @param string $sign_type The signature Type,aka cryptographic algorithm.
     *
     * @return $this
     */
    public function setSignType($sign_type)
    {
        if ((mb_strlen($sign_type) > 64)) {
            throw new \InvalidArgumentException('invalid length for $sign_type when calling PayCacheResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($sign_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sign_type when calling PayCacheResponse., must be bigger than or equal to 1.');
        }

        $this->container['sign_type'] = $sign_type;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param string $signature The signature hex string by application owner. The exclude fields is [sign_type, signature, md5].
     *
     * @return $this
     */
    public function setSignature($signature)
    {
        if ((mb_strlen($signature) > 130)) {
            throw new \InvalidArgumentException('invalid length for $signature when calling PayCacheResponse., must be smaller than or equal to 130.');
        }
        if ((mb_strlen($signature) < 1)) {
            throw new \InvalidArgumentException('invalid length for $signature when calling PayCacheResponse., must be bigger than or equal to 1.');
        }

        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid The request uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        if ((mb_strlen($uuid) > 64)) {
            throw new \InvalidArgumentException('invalid length for $uuid when calling PayCacheResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($uuid) < 1)) {
            throw new \InvalidArgumentException('invalid length for $uuid when calling PayCacheResponse., must be bigger than or equal to 1.');
        }

        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets dapp_id
     *
     * @return string
     */
    public function getDappId()
    {
        return $this->container['dapp_id'];
    }

    /**
     * Sets dapp_id
     *
     * @param string $dapp_id The decentralized application ID
     *
     * @return $this
     */
    public function setDappId($dapp_id)
    {
        if ((mb_strlen($dapp_id) > 64)) {
            throw new \InvalidArgumentException('invalid length for $dapp_id when calling PayCacheResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($dapp_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $dapp_id when calling PayCacheResponse., must be bigger than or equal to 1.');
        }

        $this->container['dapp_id'] = $dapp_id;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action The action name which value is 'hep.pay.order'
     *
     * @return $this
     */
    public function setAction($action)
    {
        if ((mb_strlen($action) > 64)) {
            throw new \InvalidArgumentException('invalid length for $action when calling PayCacheResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($action) < 1)) {
            throw new \InvalidArgumentException('invalid length for $action when calling PayCacheResponse., must be bigger than or equal to 1.');
        }

        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets expired
     *
     * @return int
     */
    public function getExpired()
    {
        return $this->container['expired'];
    }

    /**
     * Sets expired
     *
     * @param int $expired The expired timestamp
     *
     * @return $this
     */
    public function setExpired($expired)
    {
        $this->container['expired'] = $expired;

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
     * @param string $description The order description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if ((mb_strlen($description) > 64)) {
            throw new \InvalidArgumentException('invalid length for $description when calling PayCacheResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $description when calling PayCacheResponse., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets price_currency
     *
     * @return string
     */
    public function getPriceCurrency()
    {
        return $this->container['price_currency'];
    }

    /**
     * Sets price_currency
     *
     * @param string $price_currency The symbol of fiat or digital token, such as USD, CNY, NEW,BTC,ETH.
     *
     * @return $this
     */
    public function setPriceCurrency($price_currency)
    {
        if ((mb_strlen($price_currency) > 64)) {
            throw new \InvalidArgumentException('invalid length for $price_currency when calling PayCacheResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($price_currency) < 1)) {
            throw new \InvalidArgumentException('invalid length for $price_currency when calling PayCacheResponse., must be bigger than or equal to 1.');
        }

        $this->container['price_currency'] = $price_currency;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return string
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param string $total_price The amount of fiat or digital token, unit is the minimum unit of given fiat or digital token.
     *
     * @return $this
     */
    public function setTotalPrice($total_price)
    {
        if ((mb_strlen($total_price) > 64)) {
            throw new \InvalidArgumentException('invalid length for $total_price when calling PayCacheResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($total_price) < 1)) {
            throw new \InvalidArgumentException('invalid length for $total_price when calling PayCacheResponse., must be bigger than or equal to 1.');
        }

        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets order_number
     *
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param string $order_number The order number
     *
     * @return $this
     */
    public function setOrderNumber($order_number)
    {
        if ((mb_strlen($order_number) > 64)) {
            throw new \InvalidArgumentException('invalid length for $order_number when calling PayCacheResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($order_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $order_number when calling PayCacheResponse., must be bigger than or equal to 1.');
        }

        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets seller
     *
     * @return string
     */
    public function getSeller()
    {
        return $this->container['seller'];
    }

    /**
     * Sets seller
     *
     * @param string $seller The seller's NewID
     *
     * @return $this
     */
    public function setSeller($seller)
    {
        if ((mb_strlen($seller) > 64)) {
            throw new \InvalidArgumentException('invalid length for $seller when calling PayCacheResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($seller) < 1)) {
            throw new \InvalidArgumentException('invalid length for $seller when calling PayCacheResponse., must be bigger than or equal to 1.');
        }

        $this->container['seller'] = $seller;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return string
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param string $customer The customer's NewID
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        if ((mb_strlen($customer) > 64)) {
            throw new \InvalidArgumentException('invalid length for $customer when calling PayCacheResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($customer) < 1)) {
            throw new \InvalidArgumentException('invalid length for $customer when calling PayCacheResponse., must be bigger than or equal to 1.');
        }

        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets broker
     *
     * @return string
     */
    public function getBroker()
    {
        return $this->container['broker'];
    }

    /**
     * Sets broker
     *
     * @param string $broker The broker's NewID. optional.
     *
     * @return $this
     */
    public function setBroker($broker)
    {
        if (!is_null($broker) && (mb_strlen($broker) > 64)) {
            throw new \InvalidArgumentException('invalid length for $broker when calling PayCacheResponse., must be smaller than or equal to 64.');
        }
        if (!is_null($broker) && (mb_strlen($broker) < 1)) {
            throw new \InvalidArgumentException('invalid length for $broker when calling PayCacheResponse., must be bigger than or equal to 1.');
        }

        $this->container['broker'] = $broker;

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


