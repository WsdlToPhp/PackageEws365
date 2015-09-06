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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InternetMessageId;
    /**
     * The ParentInternetMessageId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ParentInternetMessageId;
    /**
     * The Items
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsConversationNodeType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
