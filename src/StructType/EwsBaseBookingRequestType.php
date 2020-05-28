<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseBookingRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsBaseBookingRequestType extends EwsBaseRequestType
{
    /**
     * The TargetMailbox
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $TargetMailbox;
    /**
     * Constructor method for BaseBookingRequestType
     * @uses EwsBaseBookingRequestType::setTargetMailbox()
     * @param \Ews\StructType\EwsEmailAddressType $targetMailbox
     */
    public function __construct(\Ews\StructType\EwsEmailAddressType $targetMailbox = null)
    {
        $this
            ->setTargetMailbox($targetMailbox);
    }
    /**
     * Get TargetMailbox value
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function getTargetMailbox()
    {
        return $this->TargetMailbox;
    }
    /**
     * Set TargetMailbox value
     * @param \Ews\StructType\EwsEmailAddressType $targetMailbox
     * @return \Ews\StructType\EwsBaseBookingRequestType
     */
    public function setTargetMailbox(\Ews\StructType\EwsEmailAddressType $targetMailbox = null)
    {
        $this->TargetMailbox = $targetMailbox;
        return $this;
    }
}
