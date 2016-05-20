<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifiedEventType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsModifiedEventType extends EwsBaseObjectChangedEventType
{
    /**
     * The UnreadCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $UnreadCount;
    /**
     * Constructor method for ModifiedEventType
     * @uses EwsModifiedEventType::setUnreadCount()
     * @param int $unreadCount
     */
    public function __construct($unreadCount = null)
    {
        $this
            ->setUnreadCount($unreadCount);
    }
    /**
     * Get UnreadCount value
     * @return int|null
     */
    public function getUnreadCount()
    {
        return $this->UnreadCount;
    }
    /**
     * Set UnreadCount value
     * @param int $unreadCount
     * @return \Ews\StructType\EwsModifiedEventType
     */
    public function setUnreadCount($unreadCount = null)
    {
        // validation for constraint: int
        if (!is_null($unreadCount) && !is_numeric($unreadCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($unreadCount)), __LINE__);
        }
        $this->UnreadCount = $unreadCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsModifiedEventType
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
