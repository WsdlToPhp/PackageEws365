<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsRootItemIdType
     */
    public $RootItemId;
    /**
     * Constructor method for DeleteAttachmentResponseMessageType
     * @uses EwsDeleteAttachmentResponseMessageType::setRootItemId()
     * @param \Ews\StructType\EwsRootItemIdType $rootItemId
     */
    public function __construct(\Ews\StructType\EwsRootItemIdType $rootItemId = null)
    {
        $this
            ->setRootItemId($rootItemId);
    }
    /**
     * Get RootItemId value
     * @return \Ews\StructType\EwsRootItemIdType|null
     */
    public function getRootItemId()
    {
        return $this->RootItemId;
    }
    /**
     * Set RootItemId value
     * @param \Ews\StructType\EwsRootItemIdType $rootItemId
     * @return \Ews\StructType\EwsDeleteAttachmentResponseMessageType
     */
    public function setRootItemId(\Ews\StructType\EwsRootItemIdType $rootItemId = null)
    {
        $this->RootItemId = $rootItemId;
        return $this;
    }
}
