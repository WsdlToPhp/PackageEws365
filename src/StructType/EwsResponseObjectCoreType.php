<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ReferenceItemId;
    /**
     * Constructor method for ResponseObjectCoreType
     * @uses EwsResponseObjectCoreType::setReferenceItemId()
     * @param \Ews\StructType\EwsItemIdType $referenceItemId
     */
    public function __construct(\Ews\StructType\EwsItemIdType $referenceItemId = null)
    {
        $this
            ->setReferenceItemId($referenceItemId);
    }
    /**
     * Get ReferenceItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getReferenceItemId()
    {
        return $this->ReferenceItemId;
    }
    /**
     * Set ReferenceItemId value
     * @param \Ews\StructType\EwsItemIdType $referenceItemId
     * @return \Ews\StructType\EwsResponseObjectCoreType
     */
    public function setReferenceItemId(\Ews\StructType\EwsItemIdType $referenceItemId = null)
    {
        $this->ReferenceItemId = $referenceItemId;
        return $this;
    }
}
