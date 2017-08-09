<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServerTimeZonesType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetServerTimeZonesType extends EwsBaseRequestType
{
    /**
     * The Ids
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfTimeZoneIdType
     */
    public $Ids;
    /**
     * The ReturnFullTimeZoneData
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $ReturnFullTimeZoneData;
    /**
     * Constructor method for GetServerTimeZonesType
     * @uses EwsGetServerTimeZonesType::setIds()
     * @uses EwsGetServerTimeZonesType::setReturnFullTimeZoneData()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfTimeZoneIdType $ids
     * @param bool $returnFullTimeZoneData
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfTimeZoneIdType $ids = null, $returnFullTimeZoneData = null)
    {
        $this
            ->setIds($ids)
            ->setReturnFullTimeZoneData($returnFullTimeZoneData);
    }
    /**
     * Get Ids value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfTimeZoneIdType|null
     */
    public function getIds()
    {
        return $this->Ids;
    }
    /**
     * Set Ids value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfTimeZoneIdType $ids
     * @return \Ews\StructType\EwsGetServerTimeZonesType
     */
    public function setIds(\Ews\ArrayType\EwsNonEmptyArrayOfTimeZoneIdType $ids = null)
    {
        $this->Ids = $ids;
        return $this;
    }
    /**
     * Get ReturnFullTimeZoneData value
     * @return bool|null
     */
    public function getReturnFullTimeZoneData()
    {
        return $this->ReturnFullTimeZoneData;
    }
    /**
     * Set ReturnFullTimeZoneData value
     * @param bool $returnFullTimeZoneData
     * @return \Ews\StructType\EwsGetServerTimeZonesType
     */
    public function setReturnFullTimeZoneData($returnFullTimeZoneData = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnFullTimeZoneData) && !is_bool($returnFullTimeZoneData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnFullTimeZoneData)), __LINE__);
        }
        $this->ReturnFullTimeZoneData = $returnFullTimeZoneData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetServerTimeZonesType
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
