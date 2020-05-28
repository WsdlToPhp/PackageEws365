<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OMEConfigurationResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsOMEConfigurationResponseType extends EwsResponseMessageType
{
    /**
     * The Xml
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Xml;
    /**
     * Constructor method for OMEConfigurationResponseType
     * @uses EwsOMEConfigurationResponseType::setXml()
     * @param string $xml
     */
    public function __construct($xml = null)
    {
        $this
            ->setXml($xml);
    }
    /**
     * Get Xml value
     * @return string|null
     */
    public function getXml()
    {
        return $this->Xml;
    }
    /**
     * Set Xml value
     * @param string $xml
     * @return \Ews\StructType\EwsOMEConfigurationResponseType
     */
    public function setXml($xml = null)
    {
        // validation for constraint: string
        if (!is_null($xml) && !is_string($xml)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xml, true), gettype($xml)), __LINE__);
        }
        $this->Xml = $xml;
        return $this;
    }
}
