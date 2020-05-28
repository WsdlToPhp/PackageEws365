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
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfTimeZoneIdType
     */
    public $Ids;
    /**
     * The ReturnFullTimeZoneData
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnFullTimeZoneData, true), gettype($returnFullTimeZoneData)), __LINE__);
        }
        $this->ReturnFullTimeZoneData = $returnFullTimeZoneData;
        return $this;
    }
}
