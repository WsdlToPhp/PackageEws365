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
     * - minLength: 1
     * @var string
     */
    public $Watermark;
    /**
     * Constructor method for BaseNotificationEventType
     * @uses EwsBaseNotificationEventType::setWatermark()
     * @param string $watermark
     */
    public function __construct($watermark = null)
    {
        $this
            ->setWatermark($watermark);
    }
    /**
     * Get Watermark value
     * @return string|null
     */
    public function getWatermark()
    {
        return $this->Watermark;
    }
    /**
     * Set Watermark value
     * @param string $watermark
     * @return \Ews\StructType\EwsBaseNotificationEventType
     */
    public function setWatermark($watermark = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($watermark) && strlen($watermark) < 1) || (is_array($watermark) && count($watermark) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($watermark) && !is_string($watermark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($watermark)), __LINE__);
        }
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
