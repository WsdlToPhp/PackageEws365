<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsNonEmptyArrayOfTimeZoneIdType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfTimeZoneIdType $Ids = null;
    /**
     * The ReturnFullTimeZoneData
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReturnFullTimeZoneData = null;
    /**
     * Constructor method for GetServerTimeZonesType
     * @uses EwsGetServerTimeZonesType::setIds()
     * @uses EwsGetServerTimeZonesType::setReturnFullTimeZoneData()
     * @param \ArrayType\EwsNonEmptyArrayOfTimeZoneIdType $ids
     * @param bool $returnFullTimeZoneData
     */
    public function __construct(?\ArrayType\EwsNonEmptyArrayOfTimeZoneIdType $ids = null, ?bool $returnFullTimeZoneData = null)
    {
        $this
            ->setIds($ids)
            ->setReturnFullTimeZoneData($returnFullTimeZoneData);
    }
    /**
     * Get Ids value
     * @return \ArrayType\EwsNonEmptyArrayOfTimeZoneIdType|null
     */
    public function getIds(): ?\ArrayType\EwsNonEmptyArrayOfTimeZoneIdType
    {
        return $this->Ids;
    }
    /**
     * Set Ids value
     * @param \ArrayType\EwsNonEmptyArrayOfTimeZoneIdType $ids
     * @return \StructType\EwsGetServerTimeZonesType
     */
    public function setIds(?\ArrayType\EwsNonEmptyArrayOfTimeZoneIdType $ids = null): self
    {
        $this->Ids = $ids;
        
        return $this;
    }
    /**
     * Get ReturnFullTimeZoneData value
     * @return bool|null
     */
    public function getReturnFullTimeZoneData(): ?bool
    {
        return $this->ReturnFullTimeZoneData;
    }
    /**
     * Set ReturnFullTimeZoneData value
     * @param bool $returnFullTimeZoneData
     * @return \StructType\EwsGetServerTimeZonesType
     */
    public function setReturnFullTimeZoneData(?bool $returnFullTimeZoneData = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnFullTimeZoneData) && !is_bool($returnFullTimeZoneData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnFullTimeZoneData, true), gettype($returnFullTimeZoneData)), __LINE__);
        }
        $this->ReturnFullTimeZoneData = $returnFullTimeZoneData;
        
        return $this;
    }
}
