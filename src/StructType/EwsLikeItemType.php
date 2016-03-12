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
     * Meta informations extracted from the WSDL
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
        $this->IsUnlike = $isUnlike;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsLikeItemType
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
