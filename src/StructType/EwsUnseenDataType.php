<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnseenDataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnseenDataType extends AbstractStructBase
{
    /**
     * The GroupIdentity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public $GroupIdentity;
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Count;
    /**
     * The LastVisitedTimeUtc
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $LastVisitedTimeUtc;
    /**
     * Constructor method for UnseenDataType
     * @uses EwsUnseenDataType::setGroupIdentity()
     * @uses EwsUnseenDataType::setCount()
     * @uses EwsUnseenDataType::setLastVisitedTimeUtc()
     * @param \Ews\StructType\EwsUnifiedGroupIdentity $groupIdentity
     * @param int $count
     * @param string $lastVisitedTimeUtc
     */
    public function __construct(\Ews\StructType\EwsUnifiedGroupIdentity $groupIdentity = null, $count = null, $lastVisitedTimeUtc = null)
    {
        $this
            ->setGroupIdentity($groupIdentity)
            ->setCount($count)
            ->setLastVisitedTimeUtc($lastVisitedTimeUtc);
    }
    /**
     * Get GroupIdentity value
     * @return \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public function getGroupIdentity()
    {
        return $this->GroupIdentity;
    }
    /**
     * Set GroupIdentity value
     * @param \Ews\StructType\EwsUnifiedGroupIdentity $groupIdentity
     * @return \Ews\StructType\EwsUnseenDataType
     */
    public function setGroupIdentity(\Ews\StructType\EwsUnifiedGroupIdentity $groupIdentity = null)
    {
        $this->GroupIdentity = $groupIdentity;
        return $this;
    }
    /**
     * Get Count value
     * @return int
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \Ews\StructType\EwsUnseenDataType
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !is_numeric($count)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($count)), __LINE__);
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Get LastVisitedTimeUtc value
     * @return string
     */
    public function getLastVisitedTimeUtc()
    {
        return $this->LastVisitedTimeUtc;
    }
    /**
     * Set LastVisitedTimeUtc value
     * @param string $lastVisitedTimeUtc
     * @return \Ews\StructType\EwsUnseenDataType
     */
    public function setLastVisitedTimeUtc($lastVisitedTimeUtc = null)
    {
        // validation for constraint: string
        if (!is_null($lastVisitedTimeUtc) && !is_string($lastVisitedTimeUtc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastVisitedTimeUtc)), __LINE__);
        }
        $this->LastVisitedTimeUtc = $lastVisitedTimeUtc;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUnseenDataType
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
