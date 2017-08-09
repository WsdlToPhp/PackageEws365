<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUnifiedGroupFavoriteStateType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetUnifiedGroupFavoriteStateType extends EwsUnifiedGroupBaseRequestType
{
    /**
     * The IsFavoriteUnifiedGroup
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsFavoriteUnifiedGroup;
    /**
     * Constructor method for SetUnifiedGroupFavoriteStateType
     * @uses EwsSetUnifiedGroupFavoriteStateType::setIsFavoriteUnifiedGroup()
     * @param bool $isFavoriteUnifiedGroup
     */
    public function __construct($isFavoriteUnifiedGroup = null)
    {
        $this
            ->setIsFavoriteUnifiedGroup($isFavoriteUnifiedGroup);
    }
    /**
     * Get IsFavoriteUnifiedGroup value
     * @return bool|null
     */
    public function getIsFavoriteUnifiedGroup()
    {
        return $this->IsFavoriteUnifiedGroup;
    }
    /**
     * Set IsFavoriteUnifiedGroup value
     * @param bool $isFavoriteUnifiedGroup
     * @return \Ews\StructType\EwsSetUnifiedGroupFavoriteStateType
     */
    public function setIsFavoriteUnifiedGroup($isFavoriteUnifiedGroup = null)
    {
        // validation for constraint: boolean
        if (!is_null($isFavoriteUnifiedGroup) && !is_bool($isFavoriteUnifiedGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isFavoriteUnifiedGroup)), __LINE__);
        }
        $this->IsFavoriteUnifiedGroup = $isFavoriteUnifiedGroup;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSetUnifiedGroupFavoriteStateType
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
