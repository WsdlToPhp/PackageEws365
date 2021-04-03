<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseObjectCoreType StructType
 * Meta information extracted from the WSDL
 * - documentation: Internal abstract base type for reply objects. Should not appear in client code
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsResponseObjectCoreType extends EwsMessageType
{
    /**
     * The ReferenceItemId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ReferenceItemId = null;
    /**
     * Constructor method for ResponseObjectCoreType
     * @uses EwsResponseObjectCoreType::setReferenceItemId()
     * @param \StructType\EwsItemIdType $referenceItemId
     */
    public function __construct(?\StructType\EwsItemIdType $referenceItemId = null)
    {
        $this
            ->setReferenceItemId($referenceItemId);
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
     * @return \StructType\EwsResponseObjectCoreType
     */
    public function setReferenceItemId(?\StructType\EwsItemIdType $referenceItemId = null): self
    {
        $this->ReferenceItemId = $referenceItemId;
        
        return $this;
    }
}
