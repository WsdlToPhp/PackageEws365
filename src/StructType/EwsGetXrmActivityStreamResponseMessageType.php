<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetXrmActivityStreamResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetXrmActivityStreamResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Activity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsXrmActivityStreamType
     */
    public $Activity;
    /**
     * Constructor method for GetXrmActivityStreamResponseMessageType
     * @uses EwsGetXrmActivityStreamResponseMessageType::setActivity()
     * @param \Ews\StructType\EwsXrmActivityStreamType $activity
     */
    public function __construct(\Ews\StructType\EwsXrmActivityStreamType $activity = null)
    {
        $this
            ->setActivity($activity);
    }
    /**
     * Get Activity value
     * @return \Ews\StructType\EwsXrmActivityStreamType|null
     */
    public function getActivity()
    {
        return $this->Activity;
    }
    /**
     * Set Activity value
     * @param \Ews\StructType\EwsXrmActivityStreamType $activity
     * @return \Ews\StructType\EwsGetXrmActivityStreamResponseMessageType
     */
    public function setActivity(\Ews\StructType\EwsXrmActivityStreamType $activity = null)
    {
        $this->Activity = $activity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetXrmActivityStreamResponseMessageType
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
