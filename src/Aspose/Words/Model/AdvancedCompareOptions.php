<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AdvancedCompareOptions.php">
 *   Copyright (c) 2026 Aspose.Words for Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------
 */

namespace Aspose\Words\Model;
use \ArrayAccess;
use \Aspose\Words\ObjectSerializer;

/*
 * AdvancedCompareOptions
 *
 * @description Allows to set advanced compare options.
 */
class AdvancedCompareOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "AdvancedCompareOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'compare_list_definitions' => 'bool',
        'ignore_dml_unique_id' => 'bool',
        'ignore_store_item_id' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'compare_list_definitions' => 'null',
        'ignore_dml_unique_id' => 'null',
        'ignore_store_item_id' => 'null'
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'compare_list_definitions' => 'CompareListDefinitions',
        'ignore_dml_unique_id' => 'IgnoreDmlUniqueId',
        'ignore_store_item_id' => 'IgnoreStoreItemId'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'compare_list_definitions' => 'setCompareListDefinitions',
        'ignore_dml_unique_id' => 'setIgnoreDmlUniqueId',
        'ignore_store_item_id' => 'setIgnoreStoreItemId'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'compare_list_definitions' => 'getCompareListDefinitions',
        'ignore_dml_unique_id' => 'getIgnoreDmlUniqueId',
        'ignore_store_item_id' => 'getIgnoreStoreItemId'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /*
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /*
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['compare_list_definitions'] = isset($data['compare_list_definitions']) ? $data['compare_list_definitions'] : null;
        $this->container['ignore_dml_unique_id'] = isset($data['ignore_dml_unique_id']) ? $data['ignore_dml_unique_id'] : null;
        $this->container['ignore_store_item_id'] = isset($data['ignore_store_item_id']) ? $data['ignore_store_item_id'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
    }

    /*
     * Gets compare_list_definitions
     *
     * @return bool
     */
    public function getCompareListDefinitions()
    {
        return $this->container['compare_list_definitions'];
    }

    /*
     * Sets compare_list_definitions
     *
     * @param bool $compare_list_definitions Gets or sets the value indicating whether list definition contents are compared instead of list definition Ids. Default value is false.
     *
     * @return $this
     */
    public function setCompareListDefinitions($compare_list_definitions)
    {
        $this->container['compare_list_definitions'] = $compare_list_definitions;
        return $this;
    }


    /*
     * Gets ignore_dml_unique_id
     *
     * @return bool
     */
    public function getIgnoreDmlUniqueId()
    {
        return $this->container['ignore_dml_unique_id'];
    }

    /*
     * Sets ignore_dml_unique_id
     *
     * @param bool $ignore_dml_unique_id Gets or sets the value indicating whether to ignore difference in DrawingML unique Id. Default value is false.
     *
     * @return $this
     */
    public function setIgnoreDmlUniqueId($ignore_dml_unique_id)
    {
        $this->container['ignore_dml_unique_id'] = $ignore_dml_unique_id;
        return $this;
    }


    /*
     * Gets ignore_store_item_id
     *
     * @return bool
     */
    public function getIgnoreStoreItemId()
    {
        return $this->container['ignore_store_item_id'];
    }

    /*
     * Sets ignore_store_item_id
     *
     * @param bool $ignore_store_item_id Gets or sets the value indicating whether to ignore difference in StructuredDocumentTag store item Id. Default value is false.
     *
     * @return $this
     */
    public function setIgnoreStoreItemId($ignore_store_item_id)
    {
        $this->container['ignore_store_item_id'] = $ignore_store_item_id;
        return $this;
    }


    /*
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

    /*
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
	#[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /*
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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

    /*
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
	#[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /*
     * Collect all FileReference variables to list
     */
    public function collectFilesContent($resultFilesContent)
    {
        return $resultFilesContent;
    }

    /*
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

