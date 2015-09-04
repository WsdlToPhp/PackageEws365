<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnifiedGroupUnseenDataResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetUnifiedGroupUnseenDataResponseMessageType extends EwsResponseMessageType
{
    /**
     * The UnseenData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsUnseenDataType
     */
    public $UnseenData;
    /**
     * Constructor method for GetUnifiedGroupUnseenDataResponseMessageType
     * @uses EwsGetUnifiedGroupUnseenDataResponseMessageType::setUnseenData()
     * @param \Ews\StructType\EwsUnseenDataType $unseenData
     */
    public function __construct(\Ews\StructType\EwsUnseenDataType $unseenData = null)
    {
        $this
            ->setUnseenData($unseenData);
    }
    /**
     * Get UnseenData value
     * @return \Ews\StructType\EwsUnseenDataType|null
     */
    public function getUnseenData()
    {
        return $this->UnseenData;
    }
    /**
     * Set UnseenData value
     * @param \Ews\StructType\EwsUnseenDataType $unseenData
     * @return \Ews\StructType\EwsGetUnifiedGroupUnseenDataResponseMessageType
     */
    public function setUnseenData(\Ews\StructType\EwsUnseenDataType $unseenData = null)
    {
        $this->UnseenData = $unseenData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUnifiedGroupUnseenDataResponseMessageType
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
