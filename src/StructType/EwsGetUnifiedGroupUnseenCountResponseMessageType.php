<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnifiedGroupUnseenCountResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUnifiedGroupUnseenCountResponseMessageType extends EwsResponseMessageType
{
    /**
     * The UnseenCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $UnseenCount;
    /**
     * Constructor method for GetUnifiedGroupUnseenCountResponseMessageType
     * @uses EwsGetUnifiedGroupUnseenCountResponseMessageType::setUnseenCount()
     * @param int $unseenCount
     */
    public function __construct($unseenCount = null)
    {
        $this
            ->setUnseenCount($unseenCount);
    }
    /**
     * Get UnseenCount value
     * @return int|null
     */
    public function getUnseenCount()
    {
        return $this->UnseenCount;
    }
    /**
     * Set UnseenCount value
     * @param int $unseenCount
     * @return \Ews\StructType\EwsGetUnifiedGroupUnseenCountResponseMessageType
     */
    public function setUnseenCount($unseenCount = null)
    {
        // validation for constraint: int
        if (!is_null($unseenCount) && !is_numeric($unseenCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($unseenCount)), __LINE__);
        }
        $this->UnseenCount = $unseenCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUnifiedGroupUnseenCountResponseMessageType
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
