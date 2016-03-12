<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $PersonaId;
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $EmailAddress;
    /**
     * The ParentFolderId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $ParentFolderId;
    /**
     * Constructor method for GetPersonaType
     * @uses EwsGetPersonaType::setPersonaId()
     * @uses EwsGetPersonaType::setEmailAddress()
     * @uses EwsGetPersonaType::setParentFolderId()
     * @param \Ews\StructType\EwsItemIdType $personaId
     * @param \Ews\StructType\EwsEmailAddressType $emailAddress
     * @param \Ews\StructType\EwsTargetFolderIdType $parentFolderId
     */
    public function __construct(\Ews\StructType\EwsItemIdType $personaId = null, \Ews\StructType\EwsEmailAddressType $emailAddress = null, \Ews\StructType\EwsTargetFolderIdType $parentFolderId = null)
    {
        $this
            ->setPersonaId($personaId)
            ->setEmailAddress($emailAddress)
            ->setParentFolderId($parentFolderId);
    }
    /**
     * Get PersonaId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getPersonaId()
    {
        return $this->PersonaId;
    }
    /**
     * Set PersonaId value
     * @param \Ews\StructType\EwsItemIdType $personaId
     * @return \Ews\StructType\EwsGetPersonaType
     */
    public function setPersonaId(\Ews\StructType\EwsItemIdType $personaId = null)
    {
        $this->PersonaId = $personaId;
        return $this;
    }
    /**
     * Get EmailAddress value
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param \Ews\StructType\EwsEmailAddressType $emailAddress
     * @return \Ews\StructType\EwsGetPersonaType
     */
    public function setEmailAddress(\Ews\StructType\EwsEmailAddressType $emailAddress = null)
    {
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    /**
     * Get ParentFolderId value
     * @return \Ews\StructType\EwsTargetFolderIdType|null
     */
    public function getParentFolderId()
    {
        return $this->ParentFolderId;
    }
    /**
     * Set ParentFolderId value
     * @param \Ews\StructType\EwsTargetFolderIdType $parentFolderId
     * @return \Ews\StructType\EwsGetPersonaType
     */
    public function setParentFolderId(\Ews\StructType\EwsTargetFolderIdType $parentFolderId = null)
    {
        $this->ParentFolderId = $parentFolderId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetPersonaType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
