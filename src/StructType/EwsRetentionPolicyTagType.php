<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetentionPolicyTagType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retention policy tag.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRetentionPolicyTagType extends AbstractStructBase
{
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DisplayName;
    /**
     * The RetentionId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $RetentionId;
    /**
     * The RetentionPeriod
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $RetentionPeriod;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Type;
    /**
     * The RetentionAction
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RetentionAction;
    /**
     * The IsVisible
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $IsVisible;
    /**
     * The OptedInto
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $OptedInto;
    /**
     * The IsArchive
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $IsArchive;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * Constructor method for RetentionPolicyTagType
     * @uses EwsRetentionPolicyTagType::setDisplayName()
     * @uses EwsRetentionPolicyTagType::setRetentionId()
     * @uses EwsRetentionPolicyTagType::setRetentionPeriod()
     * @uses EwsRetentionPolicyTagType::setType()
     * @uses EwsRetentionPolicyTagType::setRetentionAction()
     * @uses EwsRetentionPolicyTagType::setIsVisible()
     * @uses EwsRetentionPolicyTagType::setOptedInto()
     * @uses EwsRetentionPolicyTagType::setIsArchive()
     * @uses EwsRetentionPolicyTagType::setDescription()
     * @param string $displayName
     * @param string $retentionId
     * @param int $retentionPeriod
     * @param string $type
     * @param string $retentionAction
     * @param boolean $isVisible
     * @param boolean $optedInto
     * @param boolean $isArchive
     * @param string $description
     */
    public function __construct($displayName = null, $retentionId = null, $retentionPeriod = null, $type = null, $retentionAction = null, $isVisible = null, $optedInto = null, $isArchive = null, $description = null)
    {
        $this
            ->setDisplayName($displayName)
            ->setRetentionId($retentionId)
            ->setRetentionPeriod($retentionPeriod)
            ->setType($type)
            ->setRetentionAction($retentionAction)
            ->setIsVisible($isVisible)
            ->setOptedInto($optedInto)
            ->setIsArchive($isArchive)
            ->setDescription($description);
    }
    /**
     * Get DisplayName value
     * @return string
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsRetentionPolicyTagType
     */
    public function setDisplayName($displayName = null)
    {
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get RetentionId value
     * @return string
     */
    public function getRetentionId()
    {
        return $this->RetentionId;
    }
    /**
     * Set RetentionId value
     * @param string $retentionId
     * @return \Ews\StructType\EwsRetentionPolicyTagType
     */
    public function setRetentionId($retentionId = null)
    {
        $this->RetentionId = $retentionId;
        return $this;
    }
    /**
     * Get RetentionPeriod value
     * @return int
     */
    public function getRetentionPeriod()
    {
        return $this->RetentionPeriod;
    }
    /**
     * Set RetentionPeriod value
     * @param int $retentionPeriod
     * @return \Ews\StructType\EwsRetentionPolicyTagType
     */
    public function setRetentionPeriod($retentionPeriod = null)
    {
        $this->RetentionPeriod = $retentionPeriod;
        return $this;
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Ews\EnumType\EwsElcFolderType::valueIsValid()
     * @uses \Ews\EnumType\EwsElcFolderType::getValidValues()
     * @param string $type
     * @return \Ews\StructType\EwsRetentionPolicyTagType
     */
    public function setType($type = null)
    {
        if (!\Ews\EnumType\EwsElcFolderType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Ews\EnumType\EwsElcFolderType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get RetentionAction value
     * @return string
     */
    public function getRetentionAction()
    {
        return $this->RetentionAction;
    }
    /**
     * Set RetentionAction value
     * @uses \Ews\EnumType\EwsRetentionActionType::valueIsValid()
     * @uses \Ews\EnumType\EwsRetentionActionType::getValidValues()
     * @param string $retentionAction
     * @return \Ews\StructType\EwsRetentionPolicyTagType
     */
    public function setRetentionAction($retentionAction = null)
    {
        if (!\Ews\EnumType\EwsRetentionActionType::valueIsValid($retentionAction)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $retentionAction, implode(', ', \Ews\EnumType\EwsRetentionActionType::getValidValues())), __LINE__);
        }
        $this->RetentionAction = $retentionAction;
        return $this;
    }
    /**
     * Get IsVisible value
     * @return boolean
     */
    public function getIsVisible()
    {
        return $this->IsVisible;
    }
    /**
     * Set IsVisible value
     * @param boolean $isVisible
     * @return \Ews\StructType\EwsRetentionPolicyTagType
     */
    public function setIsVisible($isVisible = null)
    {
        $this->IsVisible = $isVisible;
        return $this;
    }
    /**
     * Get OptedInto value
     * @return boolean
     */
    public function getOptedInto()
    {
        return $this->OptedInto;
    }
    /**
     * Set OptedInto value
     * @param boolean $optedInto
     * @return \Ews\StructType\EwsRetentionPolicyTagType
     */
    public function setOptedInto($optedInto = null)
    {
        $this->OptedInto = $optedInto;
        return $this;
    }
    /**
     * Get IsArchive value
     * @return boolean
     */
    public function getIsArchive()
    {
        return $this->IsArchive;
    }
    /**
     * Set IsArchive value
     * @param boolean $isArchive
     * @return \Ews\StructType\EwsRetentionPolicyTagType
     */
    public function setIsArchive($isArchive = null)
    {
        $this->IsArchive = $isArchive;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Ews\StructType\EwsRetentionPolicyTagType
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRetentionPolicyTagType
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
