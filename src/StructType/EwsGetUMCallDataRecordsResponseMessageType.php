<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUMCallDataRecordsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUMCallDataRecordsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The CallDataRecords
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfUMCallDataRecordsType|null
     */
    protected ?\ArrayType\EwsArrayOfUMCallDataRecordsType $CallDataRecords = null;
    /**
     * Constructor method for GetUMCallDataRecordsResponseMessageType
     * @uses EwsGetUMCallDataRecordsResponseMessageType::setCallDataRecords()
     * @param \ArrayType\EwsArrayOfUMCallDataRecordsType $callDataRecords
     */
    public function __construct(?\ArrayType\EwsArrayOfUMCallDataRecordsType $callDataRecords = null)
    {
        $this
            ->setCallDataRecords($callDataRecords);
    }
    /**
     * Get CallDataRecords value
     * @return \ArrayType\EwsArrayOfUMCallDataRecordsType|null
     */
    public function getCallDataRecords(): ?\ArrayType\EwsArrayOfUMCallDataRecordsType
    {
        return $this->CallDataRecords;
    }
    /**
     * Set CallDataRecords value
     * @param \ArrayType\EwsArrayOfUMCallDataRecordsType $callDataRecords
     * @return \StructType\EwsGetUMCallDataRecordsResponseMessageType
     */
    public function setCallDataRecords(?\ArrayType\EwsArrayOfUMCallDataRecordsType $callDataRecords = null): self
    {
        $this->CallDataRecords = $callDataRecords;
        
        return $this;
    }
}
