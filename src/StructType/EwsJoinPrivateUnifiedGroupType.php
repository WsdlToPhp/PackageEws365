<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JoinPrivateUnifiedGroupType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsJoinPrivateUnifiedGroupType extends EwsUnifiedGroupBaseRequestType
{
    /**
     * The MessageBody
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsBodyContentType
     */
    public $MessageBody;
    /**
     * Constructor method for JoinPrivateUnifiedGroupType
     * @uses EwsJoinPrivateUnifiedGroupType::setMessageBody()
     * @param \Ews\StructType\EwsBodyContentType $messageBody
     */
    public function __construct(\Ews\StructType\EwsBodyContentType $messageBody = null)
    {
        $this
            ->setMessageBody($messageBody);
    }
    /**
     * Get MessageBody value
     * @return \Ews\StructType\EwsBodyContentType|null
     */
    public function getMessageBody()
    {
        return $this->MessageBody;
    }
    /**
     * Set MessageBody value
     * @param \Ews\StructType\EwsBodyContentType $messageBody
     * @return \Ews\StructType\EwsJoinPrivateUnifiedGroupType
     */
    public function setMessageBody(\Ews\StructType\EwsBodyContentType $messageBody = null)
    {
        $this->MessageBody = $messageBody;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsJoinPrivateUnifiedGroupType
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
