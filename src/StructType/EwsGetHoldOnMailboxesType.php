<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetHoldOnMailboxesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Request type for the GetHoldOnMailboxes web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetHoldOnMailboxesType extends EwsBaseRequestType
{
    /**
     * The HoldId
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $HoldId;
    /**
     * Constructor method for GetHoldOnMailboxesType
     * @uses EwsGetHoldOnMailboxesType::setHoldId()
     * @param string $holdId
     */
    public function __construct($holdId = null)
    {
        $this
            ->setHoldId($holdId);
    }
    /**
     * Get HoldId value
     * @return string
     */
    public function getHoldId()
    {
        return $this->HoldId;
    }
    /**
     * Set HoldId value
     * @param string $holdId
     * @return \Ews\StructType\EwsGetHoldOnMailboxesType
     */
    public function setHoldId($holdId = null)
    {
        $this->HoldId = $holdId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetHoldOnMailboxesType
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
