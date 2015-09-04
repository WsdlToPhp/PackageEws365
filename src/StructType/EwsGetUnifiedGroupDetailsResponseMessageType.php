<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnifiedGroupDetailsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetUnifiedGroupDetailsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The GroupDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUnifiedGroupDetailsType
     */
    public $GroupDetails;
    /**
     * Constructor method for GetUnifiedGroupDetailsResponseMessageType
     * @uses EwsGetUnifiedGroupDetailsResponseMessageType::setGroupDetails()
     * @param \Ews\StructType\EwsUnifiedGroupDetailsType $groupDetails
     */
    public function __construct(\Ews\StructType\EwsUnifiedGroupDetailsType $groupDetails = null)
    {
        $this
            ->setGroupDetails($groupDetails);
    }
    /**
     * Get GroupDetails value
     * @return \Ews\StructType\EwsUnifiedGroupDetailsType
     */
    public function getGroupDetails()
    {
        return $this->GroupDetails;
    }
    /**
     * Set GroupDetails value
     * @param \Ews\StructType\EwsUnifiedGroupDetailsType $groupDetails
     * @return \Ews\StructType\EwsGetUnifiedGroupDetailsResponseMessageType
     */
    public function setGroupDetails(\Ews\StructType\EwsUnifiedGroupDetailsType $groupDetails = null)
    {
        $this->GroupDetails = $groupDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUnifiedGroupDetailsResponseMessageType
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
