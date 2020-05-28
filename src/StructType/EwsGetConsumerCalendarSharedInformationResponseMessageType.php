<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsumerCalendarSharedInformationResponseMessageType
 * StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetConsumerCalendarSharedInformationResponseMessageType extends EwsResponseMessageType
{
    /**
     * The ConsumerCalendarSharedInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsConsumerCalendarSharedInformation
     */
    public $ConsumerCalendarSharedInformation;
    /**
     * Constructor method for GetConsumerCalendarSharedInformationResponseMessageType
     * @uses EwsGetConsumerCalendarSharedInformationResponseMessageType::setConsumerCalendarSharedInformation()
     * @param \Ews\StructType\EwsConsumerCalendarSharedInformation $consumerCalendarSharedInformation
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
     * @param \Ews\StructType\EwsConsumerCalendarSharedInformation $consumerCalendarSharedInformation
     * @return \Ews\StructType\EwsGetConsumerCalendarSharedInformationResponseMessageType
     */
    public function setConsumerCalendarSharedInformation(\Ews\StructType\EwsConsumerCalendarSharedInformation $consumerCalendarSharedInformation = null)
    {
        $this->ConsumerCalendarSharedInformation = $consumerCalendarSharedInformation;
        return $this;
    }
}
