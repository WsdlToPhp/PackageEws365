<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPersonaType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetPersonaType extends EwsBaseRequestType
{
    /**
     * The PersonaId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $PersonaId = null;
    /**
     * The EmailAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $EmailAddress = null;
    /**
     * The ParentFolderId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsTargetFolderIdType|null
     */
    protected ?\StructType\EwsTargetFolderIdType $ParentFolderId = null;
    /**
     * Constructor method for GetPersonaType
     * @uses EwsGetPersonaType::setPersonaId()
     * @uses EwsGetPersonaType::setEmailAddress()
     * @uses EwsGetPersonaType::setParentFolderId()
     * @param \StructType\EwsItemIdType $personaId
     * @param \StructType\EwsEmailAddressType $emailAddress
     * @param \StructType\EwsTargetFolderIdType $parentFolderId
     */
    public function __construct(?\StructType\EwsItemIdType $personaId = null, ?\StructType\EwsEmailAddressType $emailAddress = null, ?\StructType\EwsTargetFolderIdType $parentFolderId = null)
    {
        $this
            ->setPersonaId($personaId)
            ->setEmailAddress($emailAddress)
            ->setParentFolderId($parentFolderId);
    }
    /**
     * Get PersonaId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getPersonaId(): ?\StructType\EwsItemIdType
    {
        return $this->PersonaId;
    }
    /**
     * Set PersonaId value
     * @param \StructType\EwsItemIdType $personaId
     * @return \StructType\EwsGetPersonaType
     */
    public function setPersonaId(?\StructType\EwsItemIdType $personaId = null): self
    {
        $this->PersonaId = $personaId;
        
        return $this;
    }
    /**
     * Get EmailAddress value
     * @return \StructType\EwsEmailAddressType|null
     */
    public function getEmailAddress(): ?\StructType\EwsEmailAddressType
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param \StructType\EwsEmailAddressType $emailAddress
     * @return \StructType\EwsGetPersonaType
     */
    public function setEmailAddress(?\StructType\EwsEmailAddressType $emailAddress = null): self
    {
        $this->EmailAddress = $emailAddress;
        
        return $this;
    }
    /**
     * Get ParentFolderId value
     * @return \StructType\EwsTargetFolderIdType|null
     */
    public function getParentFolderId(): ?\StructType\EwsTargetFolderIdType
    {
        return $this->ParentFolderId;
    }
    /**
     * Set ParentFolderId value
     * @param \StructType\EwsTargetFolderIdType $parentFolderId
     * @return \StructType\EwsGetPersonaType
     */
    public function setParentFolderId(?\StructType\EwsTargetFolderIdType $parentFolderId = null): self
    {
        $this->ParentFolderId = $parentFolderId;
        
        return $this;
    }
}
