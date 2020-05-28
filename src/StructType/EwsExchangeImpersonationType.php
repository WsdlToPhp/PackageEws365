<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsConnectingSIDType
     */
    public $ConnectingSID;
    /**
     * Constructor method for ExchangeImpersonationType
     * @uses EwsExchangeImpersonationType::setConnectingSID()
     * @param \Ews\StructType\EwsConnectingSIDType $connectingSID
     */
    public function __construct(\Ews\StructType\EwsConnectingSIDType $connectingSID = null)
    {
        $this
            ->setConnectingSID($connectingSID);
    }
    /**
     * Get ConnectingSID value
     * @return \Ews\StructType\EwsConnectingSIDType|null
     */
    public function getConnectingSID()
    {
        return $this->ConnectingSID;
    }
    /**
     * Set ConnectingSID value
     * @param \Ews\StructType\EwsConnectingSIDType $connectingSID
     * @return \Ews\StructType\EwsExchangeImpersonationType
     */
    public function setConnectingSID(\Ews\StructType\EwsConnectingSIDType $connectingSID = null)
    {
        $this->ConnectingSID = $connectingSID;
        return $this;
    }
}
