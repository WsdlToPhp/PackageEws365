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
     * Meta informations extracted from the WSDL
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
        $this->Request = $request;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSyncUnifiedGroupType
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
