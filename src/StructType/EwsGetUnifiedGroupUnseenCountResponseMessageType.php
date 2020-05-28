<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnifiedGroupUnseenCountResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUnifiedGroupUnseenCountResponseMessageType extends EwsResponseMessageType
{
    /**
     * The UnseenCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $UnseenCount;
    /**
     * Constructor method for GetUnifiedGroupUnseenCountResponseMessageType
     * @uses EwsGetUnifiedGroupUnseenCountResponseMessageType::setUnseenCount()
     * @param int $unseenCount
     */
    public function __construct($unseenCount = null)
    {
        $this
            ->setUnseenCount($unseenCount);
    }
    /**
     * Get UnseenCount value
     * @return int|null
     */
    public function getUnseenCount()
    {
        return $this->UnseenCount;
    }
    /**
     * Set UnseenCount value
     * @param int $unseenCount
     * @return \Ews\StructType\EwsGetUnifiedGroupUnseenCountResponseMessageType
     */
    public function setUnseenCount($unseenCount = null)
    {
        // validation for constraint: int
        if (!is_null($unseenCount) && !(is_int($unseenCount) || ctype_digit($unseenCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($unseenCount, true), gettype($unseenCount)), __LINE__);
        }
        $this->UnseenCount = $unseenCount;
        return $this;
    }
}
