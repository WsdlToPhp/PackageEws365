<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseNotificationEventType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBaseNotificationEventType extends AbstractStructBase
{
    /**
     * The Watermark
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var NonEmptyStringType
     */
    public $Watermark;
    /**
     * Constructor method for BaseNotificationEventType
     * @uses EwsBaseNotificationEventType::setWatermark()
     * @param NonEmptyStringType $watermark
     */
    public function __construct(NonEmptyStringType $watermark = null)
    {
        $this
            ->setWatermark($watermark);
    }
    /**
     * Get Watermark value
     * @return NonEmptyStringType|null
     */
    public function getWatermark()
    {
        return $this->Watermark;
    }
    /**
     * Set Watermark value
     * @param NonEmptyStringType $watermark
     * @return \Ews\StructType\EwsBaseNotificationEventType
     */
    public function setWatermark(NonEmptyStringType $watermark = null)
    {
        $this->Watermark = $watermark;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsBaseNotificationEventType
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
