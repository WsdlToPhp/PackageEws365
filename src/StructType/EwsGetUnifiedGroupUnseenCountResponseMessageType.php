<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var int|null
     */
    protected ?int $UnseenCount = null;
    /**
     * Constructor method for GetUnifiedGroupUnseenCountResponseMessageType
     * @uses EwsGetUnifiedGroupUnseenCountResponseMessageType::setUnseenCount()
     * @param int $unseenCount
     */
    public function __construct(?int $unseenCount = null)
    {
        $this
            ->setUnseenCount($unseenCount);
    }
    /**
     * Get UnseenCount value
     * @return int|null
     */
    public function getUnseenCount(): ?int
    {
        return $this->UnseenCount;
    }
    /**
     * Set UnseenCount value
     * @param int $unseenCount
     * @return \StructType\EwsGetUnifiedGroupUnseenCountResponseMessageType
     */
    public function setUnseenCount(?int $unseenCount = null): self
    {
        // validation for constraint: int
        if (!is_null($unseenCount) && !(is_int($unseenCount) || ctype_digit($unseenCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($unseenCount, true), gettype($unseenCount)), __LINE__);
        }
        $this->UnseenCount = $unseenCount;
        
        return $this;
    }
}
