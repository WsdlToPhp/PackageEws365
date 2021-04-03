<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbchPersonContactHandle StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAbchPersonContactHandle extends AbstractStructBase
{
    /**
     * The SourceId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $SourceId;
    /**
     * The ObjectId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ObjectId;
    /**
     * The AccountName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AccountName = null;
    /**
     * Constructor method for AbchPersonContactHandle
     * @uses EwsAbchPersonContactHandle::setSourceId()
     * @uses EwsAbchPersonContactHandle::setObjectId()
     * @uses EwsAbchPersonContactHandle::setAccountName()
     * @param string $sourceId
     * @param string $objectId
     * @param string $accountName
     */
    public function __construct(string $sourceId, string $objectId, ?string $accountName = null)
    {
        $this
            ->setSourceId($sourceId)
            ->setObjectId($objectId)
            ->setAccountName($accountName);
    }
    /**
     * Get SourceId value
     * @return string
     */
    public function getSourceId(): string
    {
        return $this->SourceId;
    }
    /**
     * Set SourceId value
     * @param string $sourceId
     * @return \StructType\EwsAbchPersonContactHandle
     */
    public function setSourceId(string $sourceId): self
    {
        // validation for constraint: string
        if (!is_null($sourceId) && !is_string($sourceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceId, true), gettype($sourceId)), __LINE__);
        }
        $this->SourceId = $sourceId;
        
        return $this;
    }
    /**
     * Get ObjectId value
     * @return string
     */
    public function getObjectId(): string
    {
        return $this->ObjectId;
    }
    /**
     * Set ObjectId value
     * @param string $objectId
     * @return \StructType\EwsAbchPersonContactHandle
     */
    public function setObjectId(string $objectId): self
    {
        // validation for constraint: string
        if (!is_null($objectId) && !is_string($objectId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectId, true), gettype($objectId)), __LINE__);
        }
        $this->ObjectId = $objectId;
        
        return $this;
    }
    /**
     * Get AccountName value
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->AccountName;
    }
    /**
     * Set AccountName value
     * @param string $accountName
     * @return \StructType\EwsAbchPersonContactHandle
     */
    public function setAccountName(?string $accountName = null): self
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->AccountName = $accountName;
        
        return $this;
    }
}
