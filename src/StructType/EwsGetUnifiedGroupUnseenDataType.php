<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnifiedGroupUnseenDataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUnifiedGroupUnseenDataType extends EwsBaseRequestType
{
    /**
     * The GroupIdentities
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType
     */
    public $GroupIdentities;
    /**
     * Constructor method for GetUnifiedGroupUnseenDataType
     * @uses EwsGetUnifiedGroupUnseenDataType::setGroupIdentities()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType $groupIdentities
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType $groupIdentities = null)
    {
        $this
            ->setGroupIdentities($groupIdentities);
    }
    /**
     * Get GroupIdentities value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType
     */
    public function getGroupIdentities()
    {
        return $this->GroupIdentities;
    }
    /**
     * Set GroupIdentities value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType $groupIdentities
     * @return \Ews\StructType\EwsGetUnifiedGroupUnseenDataType
     */
    public function setGroupIdentities(\Ews\ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType $groupIdentities = null)
    {
        $this->GroupIdentities = $groupIdentities;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUnifiedGroupUnseenDataType
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
