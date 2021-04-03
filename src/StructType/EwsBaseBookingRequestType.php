<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $TargetMailbox = null;
    /**
     * Constructor method for BaseBookingRequestType
     * @uses EwsBaseBookingRequestType::setTargetMailbox()
     * @param \StructType\EwsEmailAddressType $targetMailbox
     */
    public function __construct(?\StructType\EwsEmailAddressType $targetMailbox = null)
    {
        $this
            ->setTargetMailbox($targetMailbox);
    }
    /**
     * Get TargetMailbox value
     * @return \StructType\EwsEmailAddressType|null
     */
    public function getTargetMailbox(): ?\StructType\EwsEmailAddressType
    {
        return $this->TargetMailbox;
    }
    /**
     * Set TargetMailbox value
     * @param \StructType\EwsEmailAddressType $targetMailbox
     * @return \StructType\EwsBaseBookingRequestType
     */
    public function setTargetMailbox(?\StructType\EwsEmailAddressType $targetMailbox = null): self
    {
        $this->TargetMailbox = $targetMailbox;
        
        return $this;
    }
}
