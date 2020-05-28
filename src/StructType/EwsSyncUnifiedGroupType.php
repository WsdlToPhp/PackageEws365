<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncUnifiedGroupType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSyncUnifiedGroupType extends EwsBaseRequestType
{
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Request;
    /**
     * Constructor method for SyncUnifiedGroupType
     * @uses EwsSyncUnifiedGroupType::setRequest()
     * @param string $request
     */
    public function __construct($request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get Request value
     * @return string
     */
    public function getRequest()
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param string $request
     * @return \Ews\StructType\EwsSyncUnifiedGroupType
     */
    public function setRequest($request = null)
    {
        // validation for constraint: string
        if (!is_null($request) && !is_string($request)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($request, true), gettype($request)), __LINE__);
        }
        $this->Request = $request;
        return $this;
    }
}
