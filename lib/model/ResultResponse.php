<?php
/**
 * ResultResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
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
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace model;

use \ArrayAccess;

/**
 * ResultResponse Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ResultResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ResultResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'uid' => 'string',
        'analysis_ref_uid' => 'string',
        'check_report_summary' => '\model\CheckSummaryOfTheSubmittedDocument',
        'document_classification' => '\model\ClassificationOfTheSubmittedDocument',
        'document_detail' => '\model\DetailedInformationOfTheSubmittedDocument',
        'holder_detail' => '\model\DetailedInformationOfTheHolderOfTheSubmittedDocument',
        'mrz' => '\model\Mrz',
        'controls' => '\model\ControlGroup[]',
        'image' => '\model\ExtractedImage[]'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'uid' => 'uid',
        'analysis_ref_uid' => 'analysisRefUid',
        'check_report_summary' => 'checkReportSummary',
        'document_classification' => 'documentClassification',
        'document_detail' => 'documentDetail',
        'holder_detail' => 'holderDetail',
        'mrz' => 'mrz',
        'controls' => 'controls',
        'image' => 'image'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'uid' => 'setUid',
        'analysis_ref_uid' => 'setAnalysisRefUid',
        'check_report_summary' => 'setCheckReportSummary',
        'document_classification' => 'setDocumentClassification',
        'document_detail' => 'setDocumentDetail',
        'holder_detail' => 'setHolderDetail',
        'mrz' => 'setMrz',
        'controls' => 'setControls',
        'image' => 'setImage'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'uid' => 'getUid',
        'analysis_ref_uid' => 'getAnalysisRefUid',
        'check_report_summary' => 'getCheckReportSummary',
        'document_classification' => 'getDocumentClassification',
        'document_detail' => 'getDocumentDetail',
        'holder_detail' => 'getHolderDetail',
        'mrz' => 'getMrz',
        'controls' => 'getControls',
        'image' => 'getImage'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['analysis_ref_uid'] = isset($data['analysis_ref_uid']) ? $data['analysis_ref_uid'] : null;
        $this->container['check_report_summary'] = isset($data['check_report_summary']) ? $data['check_report_summary'] : null;
        $this->container['document_classification'] = isset($data['document_classification']) ? $data['document_classification'] : null;
        $this->container['document_detail'] = isset($data['document_detail']) ? $data['document_detail'] : null;
        $this->container['holder_detail'] = isset($data['holder_detail']) ? $data['holder_detail'] : null;
        $this->container['mrz'] = isset($data['mrz']) ? $data['mrz'] : null;
        $this->container['controls'] = isset($data['controls']) ? $data['controls'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['uid'] === null) {
            $invalid_properties[] = "'uid' can't be null";
        }
        if ($this->container['analysis_ref_uid'] === null) {
            $invalid_properties[] = "'analysis_ref_uid' can't be null";
        }
        if ($this->container['check_report_summary'] === null) {
            $invalid_properties[] = "'check_report_summary' can't be null";
        }
        if ($this->container['document_classification'] === null) {
            $invalid_properties[] = "'document_classification' can't be null";
        }
        if ($this->container['document_detail'] === null) {
            $invalid_properties[] = "'document_detail' can't be null";
        }
        if ($this->container['holder_detail'] === null) {
            $invalid_properties[] = "'holder_detail' can't be null";
        }
        if ($this->container['mrz'] === null) {
            $invalid_properties[] = "'mrz' can't be null";
        }
        if ($this->container['controls'] === null) {
            $invalid_properties[] = "'controls' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['uid'] === null) {
            return false;
        }
        if ($this->container['analysis_ref_uid'] === null) {
            return false;
        }
        if ($this->container['check_report_summary'] === null) {
            return false;
        }
        if ($this->container['document_classification'] === null) {
            return false;
        }
        if ($this->container['document_detail'] === null) {
            return false;
        }
        if ($this->container['holder_detail'] === null) {
            return false;
        }
        if ($this->container['mrz'] === null) {
            return false;
        }
        if ($this->container['controls'] === null) {
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
     * Gets check_report_summary
     * @return \model\CheckSummaryOfTheSubmittedDocument
     */
    public function getCheckReportSummary()
    {
        return $this->container['check_report_summary'];
    }

    /**
     * Sets check_report_summary
     * @param \model\CheckSummaryOfTheSubmittedDocument $check_report_summary
     * @return $this
     */
    public function setCheckReportSummary($check_report_summary)
    {
        $this->container['check_report_summary'] = $check_report_summary;

        return $this;
    }

    /**
     * Gets document_classification
     * @return \model\ClassificationOfTheSubmittedDocument
     */
    public function getDocumentClassification()
    {
        return $this->container['document_classification'];
    }

    /**
     * Sets document_classification
     * @param \model\ClassificationOfTheSubmittedDocument $document_classification
     * @return $this
     */
    public function setDocumentClassification($document_classification)
    {
        $this->container['document_classification'] = $document_classification;

        return $this;
    }

    /**
     * Gets document_detail
     * @return \model\DetailedInformationOfTheSubmittedDocument
     */
    public function getDocumentDetail()
    {
        return $this->container['document_detail'];
    }

    /**
     * Sets document_detail
     * @param \model\DetailedInformationOfTheSubmittedDocument $document_detail
     * @return $this
     */
    public function setDocumentDetail($document_detail)
    {
        $this->container['document_detail'] = $document_detail;

        return $this;
    }

    /**
     * Gets holder_detail
     * @return \model\DetailedInformationOfTheHolderOfTheSubmittedDocument
     */
    public function getHolderDetail()
    {
        return $this->container['holder_detail'];
    }

    /**
     * Sets holder_detail
     * @param \model\DetailedInformationOfTheHolderOfTheSubmittedDocument $holder_detail
     * @return $this
     */
    public function setHolderDetail($holder_detail)
    {
        $this->container['holder_detail'] = $holder_detail;

        return $this;
    }

    /**
     * Gets mrz
     * @return \model\Mrz
     */
    public function getMrz()
    {
        return $this->container['mrz'];
    }

    /**
     * Sets mrz
     * @param \model\Mrz $mrz
     * @return $this
     */
    public function setMrz($mrz)
    {
        $this->container['mrz'] = $mrz;

        return $this;
    }

    /**
     * Gets controls
     * @return \model\ControlGroup[]
     */
    public function getControls()
    {
        return $this->container['controls'];
    }

    /**
     * Sets controls
     * @param \model\ControlGroup[] $controls Performed controls on the submitted document
     * @return $this
     */
    public function setControls($controls)
    {
        $this->container['controls'] = $controls;

        return $this;
    }

    /**
     * Gets image
     * @return \model\ExtractedImage[]
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     * @param \model\ExtractedImage[] $image Cropped image of the submitted document according request
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\invoker\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\invoker\ObjectSerializer::sanitizeForSerialization($this));
    }
}

