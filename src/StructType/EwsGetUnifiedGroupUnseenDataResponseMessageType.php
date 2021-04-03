<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnifiedGroupUnseenDataResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUnifiedGroupUnseenDataResponseMessageType extends EwsResponseMessageType
{
    /**
     * The UnseenData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsUnseenDataType|null
     */
    protected ?\StructType\EwsUnseenDataType $UnseenData = null;
    /**
     * Constructor method for GetUnifiedGroupUnseenDataResponseMessageType
     * @uses EwsGetUnifiedGroupUnseenDataResponseMessageType::setUnseenData()
     * @param \StructType\EwsUnseenDataType $unseenData
     */
    public function __construct(?\StructType\EwsUnseenDataType $unseenData = null)
    {
        $this
            ->setUnseenData($unseenData);
    }
    /**
     * Get UnseenData value
     * @return \StructType\EwsUnseenDataType|null
     */
    public function getUnseenData(): ?\StructType\EwsUnseenDataType
    {
        return $this->UnseenData;
    }
    /**
     * Set UnseenData value
     * @param \StructType\EwsUnseenDataType $unseenData
     * @return \StructType\EwsGetUnifiedGroupUnseenDataResponseMessageType
     */
    public function setUnseenData(?\StructType\EwsUnseenDataType $unseenData = null): self
    {
        $this->UnseenData = $unseenData;
        
        return $this;
    }
}
