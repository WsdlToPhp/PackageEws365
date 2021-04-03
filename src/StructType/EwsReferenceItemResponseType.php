<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceItemResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsReferenceItemResponseType extends AbstractStructBase
{
    /**
     * The ReferenceItemId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ReferenceItemId = null;
    /**
     * The ObjectName
     * Meta information extracted from the WSDL
     * - use: prohibited
     * @var string|null
     */
    protected ?string $ObjectName = null;
    /**
     * Constructor method for ReferenceItemResponseType
     * @uses EwsReferenceItemResponseType::setReferenceItemId()
     * @uses EwsReferenceItemResponseType::setObjectName()
     * @param \StructType\EwsItemIdType $referenceItemId
     * @param string $objectName
     */
    public function __construct(?\StructType\EwsItemIdType $referenceItemId = null, ?string $objectName = null)
    {
        $this
            ->setReferenceItemId($referenceItemId)
            ->setObjectName($objectName);
    }
    /**
     * Get ReferenceItemId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getReferenceItemId(): ?\StructType\EwsItemIdType
    {
        return $this->ReferenceItemId;
    }
    /**
     * Set ReferenceItemId value
     * @param \StructType\EwsItemIdType $referenceItemId
     * @return \StructType\EwsReferenceItemResponseType
     */
    public function setReferenceItemId(?\StructType\EwsItemIdType $referenceItemId = null): self
    {
        $this->ReferenceItemId = $referenceItemId;
        
        return $this;
    }
    /**
     * Get ObjectName value
     * @return string|null
     */
    public function getObjectName(): ?string
    {
        return $this->ObjectName;
    }
    /**
     * Set ObjectName value
     * @param string $objectName
     * @return \StructType\EwsReferenceItemResponseType
     */
    public function setObjectName(?string $objectName = null): self
    {
        // validation for constraint: string
        if (!is_null($objectName) && !is_string($objectName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectName, true), gettype($objectName)), __LINE__);
        }
        $this->ObjectName = $objectName;
        
        return $this;
    }
}
