<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConversationNodeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConversationNodeType extends AbstractStructBase
{
    /**
     * The InternetMessageId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InternetMessageId;
    /**
     * The ParentInternetMessageId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ParentInternetMessageId;
    /**
     * The Items
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfAllItemsType
     */
    public $Items;
    /**
     * Constructor method for ConversationNodeType
     * @uses EwsConversationNodeType::setInternetMessageId()
     * @uses EwsConversationNodeType::setParentInternetMessageId()
     * @uses EwsConversationNodeType::setItems()
     * @param string $internetMessageId
     * @param string $parentInternetMessageId
     * @param \Ews\StructType\EwsNonEmptyArrayOfAllItemsType $items
     */
    public function __construct($internetMessageId = null, $parentInternetMessageId = null, \Ews\StructType\EwsNonEmptyArrayOfAllItemsType $items = null)
    {
        $this
            ->setInternetMessageId($internetMessageId)
            ->setParentInternetMessageId($parentInternetMessageId)
            ->setItems($items);
    }
    /**
     * Get InternetMessageId value
     * @return string|null
     */
    public function getInternetMessageId()
    {
        return $this->InternetMessageId;
    }
    /**
     * Set InternetMessageId value
     * @param string $internetMessageId
     * @return \Ews\StructType\EwsConversationNodeType
     */
    public function setInternetMessageId($internetMessageId = null)
    {
        // validation for constraint: string
        if (!is_null($internetMessageId) && !is_string($internetMessageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internetMessageId, true), gettype($internetMessageId)), __LINE__);
        }
        $this->InternetMessageId = $internetMessageId;
        return $this;
    }
    /**
     * Get ParentInternetMessageId value
     * @return string|null
     */
    public function getParentInternetMessageId()
    {
        return $this->ParentInternetMessageId;
    }
    /**
     * Set ParentInternetMessageId value
     * @param string $parentInternetMessageId
     * @return \Ews\StructType\EwsConversationNodeType
     */
    public function setParentInternetMessageId($parentInternetMessageId = null)
    {
        // validation for constraint: string
        if (!is_null($parentInternetMessageId) && !is_string($parentInternetMessageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentInternetMessageId, true), gettype($parentInternetMessageId)), __LINE__);
        }
        $this->ParentInternetMessageId = $parentInternetMessageId;
        return $this;
    }
    /**
     * Get Items value
     * @return \Ews\StructType\EwsNonEmptyArrayOfAllItemsType|null
     */
    public function getItems()
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \Ews\StructType\EwsNonEmptyArrayOfAllItemsType $items
     * @return \Ews\StructType\EwsConversationNodeType
     */
    public function setItems(\Ews\StructType\EwsNonEmptyArrayOfAllItemsType $items = null)
    {
        $this->Items = $items;
        return $this;
    }
}
