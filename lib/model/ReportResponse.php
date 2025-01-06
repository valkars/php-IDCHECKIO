<?php
/**
 * ReportResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  idcheckio
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * IdCheck.IO API
 *
 * Check identity documents
 *
 * OpenAPI spec version: 0.0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace idcheckio\model;

use \ArrayAccess;
use idcheckio\ObjectSerializer;

/**
 * ReportResponse Class Doc Comment
 *
 * @category    Class
 * @package     idcheckio
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportResponse implements ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ReportResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uid' => 'string',
        'analysis_ref_uid' => 'string',
        'report' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'uid' => 'uid',
        'analysis_ref_uid' => 'analysisRefUid',
        'report' => 'report'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'uid' => 'setUid',
        'analysis_ref_uid' => 'setAnalysisRefUid',
        'report' => 'setReport'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'uid' => 'getUid',
        'analysis_ref_uid' => 'getAnalysisRefUid',
        'report' => 'getReport'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }





    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->container['uid'] = $data['uid'] ?? null;
        $this->container['analysis_ref_uid'] = $data['analysis_ref_uid'] ?? null;
        $this->container['report'] = $data['report'] ?? null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['uid'] === null) {
            $invalid_properties[] = "'uid' can't be null";
        }
        if ($this->container['analysis_ref_uid'] === null) {
            $invalid_properties[] = "'analysis_ref_uid' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['uid'] === null) {
            return false;
        }
        if ($this->container['analysis_ref_uid'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets uid
     * @return string
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     * @param string $uid uid
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets analysis_ref_uid
     * @return string
     */
    public function getAnalysisRefUid()
    {
        return $this->container['analysis_ref_uid'];
    }

    /**
     * Sets analysis_ref_uid
     * @param string $analysis_ref_uid analysisRefUid
     * @return $this
     */
    public function setAnalysisRefUid($analysis_ref_uid)
    {
        $this->container['analysis_ref_uid'] = $analysis_ref_uid;

        return $this;
    }

    /**
     * Gets report
     * @return string
     */
    public function getReport()
    {
        return $this->container['report'];
    }

    /**
     * Sets report
     * @param string $report Pdf report (base64 encoded)
     * @return $this
     */
    public function setReport($report)
    {
        $this->container['report'] = $report;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (\is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (\defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


