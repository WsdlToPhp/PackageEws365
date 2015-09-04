<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsumerCalendarSharedInformationResponseMessageType
 * StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetConsumerCalendarSharedInformationResponseMessageType extends EwsResponseMessageType
{
    /**
     * The ConsumerCalendarSharedInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsConsumerCalendarSharedInformation
     */
    public $ConsumerCalendarSharedInformation;
    /**
     * Constructor method for GetConsumerCalendarSharedInformationResponseMessageType
     * @uses
     * EwsGetConsumerCalendarSharedInformationResponseMessageType::setConsumerCalendarS
     * haredInformation()
     * @param \Ews\StructType\EwsConsumerCalendarSharedInformation
     * $consumerCalendarSharedInformation
     */
    public function __construct(\Ews\StructType\EwsConsumerCalendarSharedInformation $consumerCalendarSharedInformation = null)
    {
        $this
            ->setConsumerCalendarSharedInformation($consumerCalendarSharedInformation);
    }
    /**
     * Get ConsumerCalendarSharedInformation value
     * @return \Ews\StructType\EwsConsumerCalendarSharedInformation
     */
    public function getConsumerCalendarSharedInformation()
    {
        return $this->ConsumerCalendarSharedInformation;
    }
    /**
     * Set ConsumerCalendarSharedInformation value
     * @param \Ews\StructType\EwsConsumerCalendarSharedInformation
     * $consumerCalendarSharedInformation
     * @return
     * \Ews\StructType\EwsGetConsumerCalendarSharedInformationResponseMessageType
     */
    public function setConsumerCalendarSharedInformation(\Ews\StructType\EwsConsumerCalendarSharedInformation $consumerCalendarSharedInformation = null)
    {
        $this->ConsumerCalendarSharedInformation = $consumerCalendarSharedInformation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return
     * \Ews\StructType\EwsGetConsumerCalendarSharedInformationResponseMessageType
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
