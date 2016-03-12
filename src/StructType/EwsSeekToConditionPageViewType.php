<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeekToConditionPageViewType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSeekToConditionPageViewType extends EwsBasePagingType
{
    /**
     * The Condition
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\StructType\EwsRestrictionType
     */
    public $Condition;
    /**
     * The BasePoint
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $BasePoint;
    /**
     * Constructor method for SeekToConditionPageViewType
     * @uses EwsSeekToConditionPageViewType::setCondition()
     * @uses EwsSeekToConditionPageViewType::setBasePoint()
     * @param \Ews\StructType\EwsRestrictionType $condition
     * @param string $basePoint
     */
    public function __construct(\Ews\StructType\EwsRestrictionType $condition = null, $basePoint = null)
    {
        $this
            ->setCondition($condition)
            ->setBasePoint($basePoint);
    }
    /**
     * Get Condition value
     * @return \Ews\StructType\EwsRestrictionType
     */
    public function getCondition()
    {
        return $this->Condition;
    }
    /**
     * Set Condition value
     * @param \Ews\StructType\EwsRestrictionType $condition
     * @return \Ews\StructType\EwsSeekToConditionPageViewType
     */
    public function setCondition(\Ews\StructType\EwsRestrictionType $condition = null)
    {
        $this->Condition = $condition;
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
     * @return \Ews\StructType\EwsSeekToConditionPageViewType
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
     * @return \Ews\StructType\EwsSeekToConditionPageViewType
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
