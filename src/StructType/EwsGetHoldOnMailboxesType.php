<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetHoldOnMailboxesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request type for the GetHoldOnMailboxes web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetHoldOnMailboxesType extends EwsBaseRequestType
{
    /**
     * The HoldId
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $HoldId;
    /**
     * Constructor method for GetHoldOnMailboxesType
     * @uses EwsGetHoldOnMailboxesType::setHoldId()
     * @param string $holdId
     */
    public function __construct(string $holdId)
    {
        $this
            ->setHoldId($holdId);
    }
    /**
     * Get HoldId value
     * @return string
     */
    public function getHoldId(): string
    {
        return $this->HoldId;
    }
    /**
     * Set HoldId value
     * @param string $holdId
     * @return \StructType\EwsGetHoldOnMailboxesType
     */
    public function setHoldId(string $holdId): self
    {
        // validation for constraint: string
        if (!is_null($holdId) && !is_string($holdId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($holdId, true), gettype($holdId)), __LINE__);
        }
        $this->HoldId = $holdId;
        
        return $this;
    }
}
