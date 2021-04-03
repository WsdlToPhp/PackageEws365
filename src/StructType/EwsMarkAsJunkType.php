<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    protected \StructType\EwsNonEmptyArrayOfBaseItemIdsType $ItemIds;
    /**
     * The IsJunk
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $IsJunk;
    /**
     * The MoveItem
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $MoveItem;
    /**
     * Constructor method for MarkAsJunkType
     * @uses EwsMarkAsJunkType::setItemIds()
     * @uses EwsMarkAsJunkType::setIsJunk()
     * @uses EwsMarkAsJunkType::setMoveItem()
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @param bool $isJunk
     * @param bool $moveItem
     */
    public function __construct(\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds, bool $isJunk, bool $moveItem)
    {
        $this
            ->setItemIds($itemIds)
            ->setIsJunk($isJunk)
            ->setMoveItem($moveItem);
    }
    /**
     * Get ItemIds value
     * @return \StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public function getItemIds(): \StructType\EwsNonEmptyArrayOfBaseItemIdsType
    {
        return $this->ItemIds;
    }
    /**
     * Set ItemIds value
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @return \StructType\EwsMarkAsJunkType
     */
    public function setItemIds(\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds): self
    {
        $this->ItemIds = $itemIds;
        
        return $this;
    }
    /**
     * Get IsJunk value
     * @return bool
     */
    public function getIsJunk(): bool
    {
        return $this->IsJunk;
    }
    /**
     * Set IsJunk value
     * @param bool $isJunk
     * @return \StructType\EwsMarkAsJunkType
     */
    public function setIsJunk(bool $isJunk): self
    {
        // validation for constraint: boolean
        if (!is_null($isJunk) && !is_bool($isJunk)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isJunk, true), gettype($isJunk)), __LINE__);
        }
        $this->IsJunk = $isJunk;
        
        return $this;
    }
    /**
     * Get MoveItem value
     * @return bool
     */
    public function getMoveItem(): bool
    {
        return $this->MoveItem;
    }
    /**
     * Set MoveItem value
     * @param bool $moveItem
     * @return \StructType\EwsMarkAsJunkType
     */
    public function setMoveItem(bool $moveItem): self
    {
        // validation for constraint: boolean
        if (!is_null($moveItem) && !is_bool($moveItem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($moveItem, true), gettype($moveItem)), __LINE__);
        }
        $this->MoveItem = $moveItem;
        
        return $this;
    }
}
