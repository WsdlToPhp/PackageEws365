<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IndexedPageViewType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsIndexedPageViewType extends EwsBasePagingType
{
    /**
     * The Offset
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Offset;
    /**
     * The BasePoint
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $BasePoint;
    /**
     * Constructor method for IndexedPageViewType
     * @uses EwsIndexedPageViewType::setOffset()
     * @uses EwsIndexedPageViewType::setBasePoint()
     * @param int $offset
     * @param string $basePoint
     */
    public function __construct($offset = null, $basePoint = null)
    {
        $this
            ->setOffset($offset)
            ->setBasePoint($basePoint);
    }
    /**
     * Get Offset value
     * @return int
     */
    public function getOffset()
    {
        return $this->Offset;
    }
    /**
     * Set Offset value
     * @param int $offset
     * @return \Ews\StructType\EwsIndexedPageViewType
     */
    public function setOffset($offset = null)
    {
        // validation for constraint: int
        if (!is_null($offset) && !is_int($offset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($offset)), __LINE__);
        }
        $this->Offset = $offset;
        return $this;
    }
    /**
     * Get BasePoint value
     * @return string
     */
    public function getBasePoint()
    {
        return $this->BasePoint;
    }
    /**
     * Set BasePoint value
     * @uses \Ews\EnumType\EwsIndexBasePointType::valueIsValid()
     * @uses \Ews\EnumType\EwsIndexBasePointType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $basePoint
     * @return \Ews\StructType\EwsIndexedPageViewType
     */
    public function setBasePoint($basePoint = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsIndexBasePointType::valueIsValid($basePoint)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $basePoint, implode(', ', \Ews\EnumType\EwsIndexBasePointType::getValidValues())), __LINE__);
        }
        $this->BasePoint = $basePoint;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsIndexedPageViewType
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
