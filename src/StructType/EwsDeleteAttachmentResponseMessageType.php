<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAttachmentResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeleteAttachmentResponseMessageType extends EwsResponseMessageType
{
    /**
     * The RootItemId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsRootItemIdType|null
     */
    protected ?\StructType\EwsRootItemIdType $RootItemId = null;
    /**
     * Constructor method for DeleteAttachmentResponseMessageType
     * @uses EwsDeleteAttachmentResponseMessageType::setRootItemId()
     * @param \StructType\EwsRootItemIdType $rootItemId
     */
    public function __construct(?\StructType\EwsRootItemIdType $rootItemId = null)
    {
        $this
            ->setRootItemId($rootItemId);
    }
    /**
     * Get RootItemId value
     * @return \StructType\EwsRootItemIdType|null
     */
    public function getRootItemId(): ?\StructType\EwsRootItemIdType
    {
        return $this->RootItemId;
    }
    /**
     * Set RootItemId value
     * @param \StructType\EwsRootItemIdType $rootItemId
     * @return \StructType\EwsDeleteAttachmentResponseMessageType
     */
    public function setRootItemId(?\StructType\EwsRootItemIdType $rootItemId = null): self
    {
        $this->RootItemId = $rootItemId;
        
        return $this;
    }
}
