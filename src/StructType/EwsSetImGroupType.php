<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetImGroupType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetImGroupType extends EwsBaseRequestType
{
    /**
     * The GroupId
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $GroupId = null;
    /**
     * The NewDisplayName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string|null
     */
    protected ?string $NewDisplayName = null;
    /**
     * Constructor method for SetImGroupType
     * @uses EwsSetImGroupType::setGroupId()
     * @uses EwsSetImGroupType::setNewDisplayName()
     * @param \StructType\EwsItemIdType $groupId
     * @param string $newDisplayName
     */
    public function __construct(?\StructType\EwsItemIdType $groupId = null, ?string $newDisplayName = null)
    {
        $this
            ->setGroupId($groupId)
            ->setNewDisplayName($newDisplayName);
    }
    /**
     * Get GroupId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getGroupId(): ?\StructType\EwsItemIdType
    {
        return $this->GroupId;
    }
    /**
     * Set GroupId value
     * @param \StructType\EwsItemIdType $groupId
     * @return \StructType\EwsSetImGroupType
     */
    public function setGroupId(?\StructType\EwsItemIdType $groupId = null): self
    {
        $this->GroupId = $groupId;
        
        return $this;
    }
    /**
     * Get NewDisplayName value
     * @return string|null
     */
    public function getNewDisplayName(): ?string
    {
        return $this->NewDisplayName;
    }
    /**
     * Set NewDisplayName value
     * @param string $newDisplayName
     * @return \StructType\EwsSetImGroupType
     */
    public function setNewDisplayName(?string $newDisplayName = null): self
    {
        // validation for constraint: string
        if (!is_null($newDisplayName) && !is_string($newDisplayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newDisplayName, true), gettype($newDisplayName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($newDisplayName) && mb_strlen((string) $newDisplayName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $newDisplayName)), __LINE__);
        }
        $this->NewDisplayName = $newDisplayName;
        
        return $this;
    }
}
