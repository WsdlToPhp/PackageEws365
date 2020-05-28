<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsUnseenDataType
     */
    public $UnseenData;
    /**
     * Constructor method for GetUnifiedGroupUnseenDataResponseMessageType
     * @uses EwsGetUnifiedGroupUnseenDataResponseMessageType::setUnseenData()
     * @param \Ews\StructType\EwsUnseenDataType $unseenData
     */
    public function __construct(\Ews\StructType\EwsUnseenDataType $unseenData = null)
    {
        $this
            ->setUnseenData($unseenData);
    }
    /**
     * Get UnseenData value
     * @return \Ews\StructType\EwsUnseenDataType|null
     */
    public function getUnseenData()
    {
        return $this->UnseenData;
    }
    /**
     * Set UnseenData value
     * @param \Ews\StructType\EwsUnseenDataType $unseenData
     * @return \Ews\StructType\EwsGetUnifiedGroupUnseenDataResponseMessageType
     */
    public function setUnseenData(\Ews\StructType\EwsUnseenDataType $unseenData = null)
    {
        $this->UnseenData = $unseenData;
        return $this;
    }
}
