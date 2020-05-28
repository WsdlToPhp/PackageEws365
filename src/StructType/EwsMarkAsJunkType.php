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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
    /**
     * The IsJunk
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsJunk;
    /**
     * The MoveItem
     * Meta information extracted from the WSDL
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
        // validation for constraint: boolean
        if (!is_null($isJunk) && !is_bool($isJunk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isJunk, true), gettype($isJunk)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($moveItem) && !is_bool($moveItem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($moveItem, true), gettype($moveItem)), __LINE__);
        }
        $this->MoveItem = $moveItem;
        return $this;
    }
}
