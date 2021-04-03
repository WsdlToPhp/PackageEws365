<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsConsumerCalendarSharedInformation
     */
    protected \StructType\EwsConsumerCalendarSharedInformation $ConsumerCalendarSharedInformation;
    /**
     * Constructor method for GetConsumerCalendarSharedInformationResponseMessageType
     * @uses EwsGetConsumerCalendarSharedInformationResponseMessageType::setConsumerCalendarSharedInformation()
     * @param \StructType\EwsConsumerCalendarSharedInformation $consumerCalendarSharedInformation
     */
    public function __construct(\StructType\EwsConsumerCalendarSharedInformation $consumerCalendarSharedInformation)
    {
        $this
            ->setConsumerCalendarSharedInformation($consumerCalendarSharedInformation);
    }
    /**
     * Get ConsumerCalendarSharedInformation value
     * @return \StructType\EwsConsumerCalendarSharedInformation
     */
    public function getConsumerCalendarSharedInformation(): \StructType\EwsConsumerCalendarSharedInformation
    {
        return $this->ConsumerCalendarSharedInformation;
    }
    /**
     * Set ConsumerCalendarSharedInformation value
     * @param \StructType\EwsConsumerCalendarSharedInformation $consumerCalendarSharedInformation
     * @return \StructType\EwsGetConsumerCalendarSharedInformationResponseMessageType
     */
    public function setConsumerCalendarSharedInformation(\StructType\EwsConsumerCalendarSharedInformation $consumerCalendarSharedInformation): self
    {
        $this->ConsumerCalendarSharedInformation = $consumerCalendarSharedInformation;
        
        return $this;
    }
}
