<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExchangeImpersonationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Allow attributes in the soap namespace to be used here
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsExchangeImpersonationType extends AbstractStructBase
{
    /**
     * The ConnectingSID
     * @var \StructType\EwsConnectingSIDType|null
     */
    protected ?\StructType\EwsConnectingSIDType $ConnectingSID = null;
    /**
     * Constructor method for ExchangeImpersonationType
     * @uses EwsExchangeImpersonationType::setConnectingSID()
     * @param \StructType\EwsConnectingSIDType $connectingSID
     */
    public function __construct(?\StructType\EwsConnectingSIDType $connectingSID = null)
    {
        $this
            ->setConnectingSID($connectingSID);
    }
    /**
     * Get ConnectingSID value
     * @return \StructType\EwsConnectingSIDType|null
     */
    public function getConnectingSID(): ?\StructType\EwsConnectingSIDType
    {
        return $this->ConnectingSID;
    }
    /**
     * Set ConnectingSID value
     * @param \StructType\EwsConnectingSIDType $connectingSID
     * @return \StructType\EwsExchangeImpersonationType
     */
    public function setConnectingSID(?\StructType\EwsConnectingSIDType $connectingSID = null): self
    {
        $this->ConnectingSID = $connectingSID;
        
        return $this;
    }
}
