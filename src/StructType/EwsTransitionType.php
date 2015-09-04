<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsTransitionType extends AbstractStructBase
{
    /**
     * The To
     * @var \Ews\StructType\EwsTransitionTargetType
     */
    public $To;
    /**
     * Constructor method for TransitionType
     * @uses EwsTransitionType::setTo()
     * @param \Ews\StructType\EwsTransitionTargetType $to
     */
    public function __construct(\Ews\StructType\EwsTransitionTargetType $to = null)
    {
        $this
            ->setTo($to);
    }
    /**
     * Get To value
     * @return \Ews\StructType\EwsTransitionTargetType|null
     */
    public function getTo()
    {
        return $this->To;
    }
    /**
     * Set To value
     * @param \Ews\StructType\EwsTransitionTargetType $to
     * @return \Ews\StructType\EwsTransitionType
     */
    public function setTo(\Ews\StructType\EwsTransitionTargetType $to = null)
    {
        $this->To = $to;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsTransitionType
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
