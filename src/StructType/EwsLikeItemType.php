<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LikeItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsLikeItemType extends EwsBaseRequestType
{
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $ItemId;
    /**
     * The IsUnlike
     * @var bool|null
     */
    protected ?bool $IsUnlike = null;
    /**
     * Constructor method for LikeItemType
     * @uses EwsLikeItemType::setItemId()
     * @uses EwsLikeItemType::setIsUnlike()
     * @param \StructType\EwsItemIdType $itemId
     * @param bool $isUnlike
     */
    public function __construct(\StructType\EwsItemIdType $itemId, ?bool $isUnlike = null)
    {
        $this
            ->setItemId($itemId)
            ->setIsUnlike($isUnlike);
    }
    /**
     * Get ItemId value
     * @return \StructType\EwsItemIdType
     */
    public function getItemId(): \StructType\EwsItemIdType
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \StructType\EwsItemIdType $itemId
     * @return \StructType\EwsLikeItemType
     */
    public function setItemId(\StructType\EwsItemIdType $itemId): self
    {
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Get IsUnlike value
     * @return bool|null
     */
    public function getIsUnlike(): ?bool
    {
        return $this->IsUnlike;
    }
    /**
     * Set IsUnlike value
     * @param bool $isUnlike
     * @return \StructType\EwsLikeItemType
     */
    public function setIsUnlike(?bool $isUnlike = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isUnlike) && !is_bool($isUnlike)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUnlike, true), gettype($isUnlike)), __LINE__);
        }
        $this->IsUnlike = $isUnlike;
        
        return $this;
    }
}
