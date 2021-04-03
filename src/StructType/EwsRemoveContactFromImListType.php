<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveContactFromImListType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRemoveContactFromImListType extends EwsBaseRequestType
{
    /**
     * The ContactId
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ContactId = null;
    /**
     * Constructor method for RemoveContactFromImListType
     * @uses EwsRemoveContactFromImListType::setContactId()
     * @param \StructType\EwsItemIdType $contactId
     */
    public function __construct(?\StructType\EwsItemIdType $contactId = null)
    {
        $this
            ->setContactId($contactId);
    }
    /**
     * Get ContactId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getContactId(): ?\StructType\EwsItemIdType
    {
        return $this->ContactId;
    }
    /**
     * Set ContactId value
     * @param \StructType\EwsItemIdType $contactId
     * @return \StructType\EwsRemoveContactFromImListType
     */
    public function setContactId(?\StructType\EwsItemIdType $contactId = null): self
    {
        $this->ContactId = $contactId;
        
        return $this;
    }
}
