<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkAsJunkType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMarkAsJunkType extends EwsBaseRequestType
{
    /**
     * The ItemIds
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
    /**
     * The IsJunk
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsJunk;
    /**
     * The MoveItem
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $MoveItem;
    /**
     * Constructor method for MarkAsJunkType
     * @uses EwsMarkAsJunkType::setItemIds()
     * @uses EwsMarkAsJunkType::setIsJunk()
     * @uses EwsMarkAsJunkType::setMoveItem()
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @param bool $isJunk
     * @param bool $moveItem
     */
    public function __construct(\Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null, $isJunk = null, $moveItem = null)
    {
        $this
            ->setItemIds($itemIds)
            ->setIsJunk($isJunk)
            ->setMoveItem($moveItem);
    }
    /**
     * Get ItemIds value
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public function getItemIds()
    {
        return $this->ItemIds;
    }
    /**
     * Set ItemIds value
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @return \Ews\StructType\EwsMarkAsJunkType
     */
    public function setItemIds(\Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null)
    {
        $this->ItemIds = $itemIds;
        return $this;
    }
    /**
     * Get IsJunk value
     * @return bool
     */
    public function getIsJunk()
    {
        return $this->IsJunk;
    }
    /**
     * Set IsJunk value
     * @param bool $isJunk
     * @return \Ews\StructType\EwsMarkAsJunkType
     */
    public function setIsJunk($isJunk = null)
    {
        $this->IsJunk = $isJunk;
        return $this;
    }
    /**
     * Get MoveItem value
     * @return bool
     */
    public function getMoveItem()
    {
        return $this->MoveItem;
    }
    /**
     * Set MoveItem value
     * @param bool $moveItem
     * @return \Ews\StructType\EwsMarkAsJunkType
     */
    public function setMoveItem($moveItem = null)
    {
        $this->MoveItem = $moveItem;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMarkAsJunkType
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
