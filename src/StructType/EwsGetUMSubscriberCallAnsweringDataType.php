<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUMSubscriberCallAnsweringDataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUMSubscriberCallAnsweringDataType extends EwsBaseRequestType
{
    /**
     * The Timeout
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Timeout;
    /**
     * Constructor method for GetUMSubscriberCallAnsweringDataType
     * @uses EwsGetUMSubscriberCallAnsweringDataType::setTimeout()
     * @param string $timeout
     */
    public function __construct($timeout = null)
    {
        $this
            ->setTimeout($timeout);
    }
    /**
     * Get Timeout value
     * @return string
     */
    public function getTimeout()
    {
        return $this->Timeout;
    }
    /**
     * Set Timeout value
     * @param string $timeout
     * @return \Ews\StructType\EwsGetUMSubscriberCallAnsweringDataType
     */
    public function setTimeout($timeout = null)
    {
        // validation for constraint: string
        if (!is_null($timeout) && !is_string($timeout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeout, true), gettype($timeout)), __LINE__);
        }
        $this->Timeout = $timeout;
        return $this;
    }
}
