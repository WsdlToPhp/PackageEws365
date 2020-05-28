<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The IsUnlike
     * @var bool
     */
    public $IsUnlike;
    /**
     * Constructor method for LikeItemType
     * @uses EwsLikeItemType::setItemId()
     * @uses EwsLikeItemType::setIsUnlike()
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param bool $isUnlike
     */
    public function __construct(\Ews\StructType\EwsItemIdType $itemId = null, $isUnlike = null)
    {
        $this
            ->setItemId($itemId)
            ->setIsUnlike($isUnlike);
    }
    /**
     * Get ItemId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsLikeItemType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get IsUnlike value
     * @return bool|null
     */
    public function getIsUnlike()
    {
        return $this->IsUnlike;
    }
    /**
     * Set IsUnlike value
     * @param bool $isUnlike
     * @return \Ews\StructType\EwsLikeItemType
     */
    public function setIsUnlike($isUnlike = null)
    {
        // validation for constraint: boolean
        if (!is_null($isUnlike) && !is_bool($isUnlike)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUnlike, true), gettype($isUnlike)), __LINE__);
        }
        $this->IsUnlike = $isUnlike;
        return $this;
    }
}
