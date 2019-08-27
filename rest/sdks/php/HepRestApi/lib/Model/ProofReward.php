<?php
/**
 * ProofReward
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
 * ProofReward Class Doc Comment
 *
 * @category Class
 * @package  HepRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProofReward implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProofReward';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'proof_hash' => 'string',
        'proof_item_id' => 'string',
        'proof_subitem_id' => 'string',
        'reward_tokens' => 'string',
        'newid' => 'string',
        'newforce' => 'string',
        'action' => 'string',
        'issue_timestamp' => 'int',
        'issue_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'proof_hash' => null,
        'proof_item_id' => null,
        'proof_subitem_id' => null,
        'reward_tokens' => null,
        'newid' => null,
        'newforce' => null,
        'action' => null,
        'issue_timestamp' => null,
        'issue_status' => null
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
        'proof_hash' => 'proof_hash',
        'proof_item_id' => 'proof_item_id',
        'proof_subitem_id' => 'proof_subitem_id',
        'reward_tokens' => 'reward_tokens',
        'newid' => 'newid',
        'newforce' => 'newforce',
        'action' => 'action',
        'issue_timestamp' => 'issue_timestamp',
        'issue_status' => 'issue_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'proof_hash' => 'setProofHash',
        'proof_item_id' => 'setProofItemId',
        'proof_subitem_id' => 'setProofSubitemId',
        'reward_tokens' => 'setRewardTokens',
        'newid' => 'setNewid',
        'newforce' => 'setNewforce',
        'action' => 'setAction',
        'issue_timestamp' => 'setIssueTimestamp',
        'issue_status' => 'setIssueStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'proof_hash' => 'getProofHash',
        'proof_item_id' => 'getProofItemId',
        'proof_subitem_id' => 'getProofSubitemId',
        'reward_tokens' => 'getRewardTokens',
        'newid' => 'getNewid',
        'newforce' => 'getNewforce',
        'action' => 'getAction',
        'issue_timestamp' => 'getIssueTimestamp',
        'issue_status' => 'getIssueStatus'
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
        $this->container['proof_hash'] = isset($data['proof_hash']) ? $data['proof_hash'] : null;
        $this->container['proof_item_id'] = isset($data['proof_item_id']) ? $data['proof_item_id'] : null;
        $this->container['proof_subitem_id'] = isset($data['proof_subitem_id']) ? $data['proof_subitem_id'] : null;
        $this->container['reward_tokens'] = isset($data['reward_tokens']) ? $data['reward_tokens'] : null;
        $this->container['newid'] = isset($data['newid']) ? $data['newid'] : null;
        $this->container['newforce'] = isset($data['newforce']) ? $data['newforce'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['issue_timestamp'] = isset($data['issue_timestamp']) ? $data['issue_timestamp'] : null;
        $this->container['issue_status'] = isset($data['issue_status']) ? $data['issue_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['proof_hash'] === null) {
            $invalidProperties[] = "'proof_hash' can't be null";
        }
        if ((mb_strlen($this->container['proof_hash']) > 64)) {
            $invalidProperties[] = "invalid value for 'proof_hash', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['proof_hash']) < 1)) {
            $invalidProperties[] = "invalid value for 'proof_hash', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['proof_item_id'] === null) {
            $invalidProperties[] = "'proof_item_id' can't be null";
        }
        if ((mb_strlen($this->container['proof_item_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'proof_item_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['proof_item_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'proof_item_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['proof_subitem_id'] === null) {
            $invalidProperties[] = "'proof_subitem_id' can't be null";
        }
        if ((mb_strlen($this->container['proof_subitem_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'proof_subitem_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['proof_subitem_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'proof_subitem_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['reward_tokens'] === null) {
            $invalidProperties[] = "'reward_tokens' can't be null";
        }
        if ((mb_strlen($this->container['reward_tokens']) > 64)) {
            $invalidProperties[] = "invalid value for 'reward_tokens', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['reward_tokens']) < 1)) {
            $invalidProperties[] = "invalid value for 'reward_tokens', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['newid'] === null) {
            $invalidProperties[] = "'newid' can't be null";
        }
        if ((mb_strlen($this->container['newid']) > 64)) {
            $invalidProperties[] = "invalid value for 'newid', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['newid']) < 1)) {
            $invalidProperties[] = "invalid value for 'newid', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['newforce'] === null) {
            $invalidProperties[] = "'newforce' can't be null";
        }
        if ((mb_strlen($this->container['newforce']) > 64)) {
            $invalidProperties[] = "invalid value for 'newforce', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['newforce']) < 1)) {
            $invalidProperties[] = "invalid value for 'newforce', the character length must be bigger than or equal to 1.";
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

        if ($this->container['issue_timestamp'] === null) {
            $invalidProperties[] = "'issue_timestamp' can't be null";
        }
        if ($this->container['issue_status'] === null) {
            $invalidProperties[] = "'issue_status' can't be null";
        }
        if ((mb_strlen($this->container['issue_status']) > 64)) {
            $invalidProperties[] = "invalid value for 'issue_status', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['issue_status']) < 1)) {
            $invalidProperties[] = "invalid value for 'issue_status', the character length must be bigger than or equal to 1.";
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
     * Gets proof_hash
     *
     * @return string
     */
    public function getProofHash()
    {
        return $this->container['proof_hash'];
    }

    /**
     * Sets proof_hash
     *
     * @param string $proof_hash proof_hash
     *
     * @return $this
     */
    public function setProofHash($proof_hash)
    {
        if ((mb_strlen($proof_hash) > 64)) {
            throw new \InvalidArgumentException('invalid length for $proof_hash when calling ProofReward., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($proof_hash) < 1)) {
            throw new \InvalidArgumentException('invalid length for $proof_hash when calling ProofReward., must be bigger than or equal to 1.');
        }

        $this->container['proof_hash'] = $proof_hash;

        return $this;
    }

    /**
     * Gets proof_item_id
     *
     * @return string
     */
    public function getProofItemId()
    {
        return $this->container['proof_item_id'];
    }

    /**
     * Sets proof_item_id
     *
     * @param string $proof_item_id proof_item_id
     *
     * @return $this
     */
    public function setProofItemId($proof_item_id)
    {
        if ((mb_strlen($proof_item_id) > 64)) {
            throw new \InvalidArgumentException('invalid length for $proof_item_id when calling ProofReward., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($proof_item_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $proof_item_id when calling ProofReward., must be bigger than or equal to 1.');
        }

        $this->container['proof_item_id'] = $proof_item_id;

        return $this;
    }

    /**
     * Gets proof_subitem_id
     *
     * @return string
     */
    public function getProofSubitemId()
    {
        return $this->container['proof_subitem_id'];
    }

    /**
     * Sets proof_subitem_id
     *
     * @param string $proof_subitem_id proof_subitem_id
     *
     * @return $this
     */
    public function setProofSubitemId($proof_subitem_id)
    {
        if ((mb_strlen($proof_subitem_id) > 64)) {
            throw new \InvalidArgumentException('invalid length for $proof_subitem_id when calling ProofReward., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($proof_subitem_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $proof_subitem_id when calling ProofReward., must be bigger than or equal to 1.');
        }

        $this->container['proof_subitem_id'] = $proof_subitem_id;

        return $this;
    }

    /**
     * Gets reward_tokens
     *
     * @return string
     */
    public function getRewardTokens()
    {
        return $this->container['reward_tokens'];
    }

    /**
     * Sets reward_tokens
     *
     * @param string $reward_tokens reward_tokens
     *
     * @return $this
     */
    public function setRewardTokens($reward_tokens)
    {
        if ((mb_strlen($reward_tokens) > 64)) {
            throw new \InvalidArgumentException('invalid length for $reward_tokens when calling ProofReward., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($reward_tokens) < 1)) {
            throw new \InvalidArgumentException('invalid length for $reward_tokens when calling ProofReward., must be bigger than or equal to 1.');
        }

        $this->container['reward_tokens'] = $reward_tokens;

        return $this;
    }

    /**
     * Gets newid
     *
     * @return string
     */
    public function getNewid()
    {
        return $this->container['newid'];
    }

    /**
     * Sets newid
     *
     * @param string $newid newid
     *
     * @return $this
     */
    public function setNewid($newid)
    {
        if ((mb_strlen($newid) > 64)) {
            throw new \InvalidArgumentException('invalid length for $newid when calling ProofReward., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($newid) < 1)) {
            throw new \InvalidArgumentException('invalid length for $newid when calling ProofReward., must be bigger than or equal to 1.');
        }

        $this->container['newid'] = $newid;

        return $this;
    }

    /**
     * Gets newforce
     *
     * @return string
     */
    public function getNewforce()
    {
        return $this->container['newforce'];
    }

    /**
     * Sets newforce
     *
     * @param string $newforce newforce
     *
     * @return $this
     */
    public function setNewforce($newforce)
    {
        if ((mb_strlen($newforce) > 64)) {
            throw new \InvalidArgumentException('invalid length for $newforce when calling ProofReward., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($newforce) < 1)) {
            throw new \InvalidArgumentException('invalid length for $newforce when calling ProofReward., must be bigger than or equal to 1.');
        }

        $this->container['newforce'] = $newforce;

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
     * @param string $action action
     *
     * @return $this
     */
    public function setAction($action)
    {
        if ((mb_strlen($action) > 64)) {
            throw new \InvalidArgumentException('invalid length for $action when calling ProofReward., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($action) < 1)) {
            throw new \InvalidArgumentException('invalid length for $action when calling ProofReward., must be bigger than or equal to 1.');
        }

        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets issue_timestamp
     *
     * @return int
     */
    public function getIssueTimestamp()
    {
        return $this->container['issue_timestamp'];
    }

    /**
     * Sets issue_timestamp
     *
     * @param int $issue_timestamp issue_timestamp
     *
     * @return $this
     */
    public function setIssueTimestamp($issue_timestamp)
    {
        $this->container['issue_timestamp'] = $issue_timestamp;

        return $this;
    }

    /**
     * Gets issue_status
     *
     * @return string
     */
    public function getIssueStatus()
    {
        return $this->container['issue_status'];
    }

    /**
     * Sets issue_status
     *
     * @param string $issue_status issue_status
     *
     * @return $this
     */
    public function setIssueStatus($issue_status)
    {
        if ((mb_strlen($issue_status) > 64)) {
            throw new \InvalidArgumentException('invalid length for $issue_status when calling ProofReward., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($issue_status) < 1)) {
            throw new \InvalidArgumentException('invalid length for $issue_status when calling ProofReward., must be bigger than or equal to 1.');
        }

        $this->container['issue_status'] = $issue_status;

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


