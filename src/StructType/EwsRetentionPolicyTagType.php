<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetentionPolicyTagType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retention policy tag.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRetentionPolicyTagType extends AbstractStructBase
{
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DisplayName;
    /**
     * The RetentionId
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    protected string $RetentionId;
    /**
     * The RetentionPeriod
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $RetentionPeriod;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Type;
    /**
     * The RetentionAction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $RetentionAction;
    /**
     * The IsVisible
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $IsVisible;
    /**
     * The OptedInto
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $OptedInto;
    /**
     * The IsArchive
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $IsArchive;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
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
     * @param bool $isVisible
     * @param bool $optedInto
     * @param bool $isArchive
     * @param string $description
     */
    public function __construct(string $displayName, string $retentionId, int $retentionPeriod, string $type, string $retentionAction, bool $isVisible, bool $optedInto, bool $isArchive, ?string $description = null)
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
    public function getDisplayName(): string
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\EwsRetentionPolicyTagType
     */
    public function setDisplayName(string $displayName): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
        return $this;
    }
    /**
     * Get RetentionId value
     * @return string
     */
    public function getRetentionId(): string
    {
        return $this->RetentionId;
    }
    /**
     * Set RetentionId value
     * @param string $retentionId
     * @return \StructType\EwsRetentionPolicyTagType
     */
    public function setRetentionId(string $retentionId): self
    {
        // validation for constraint: string
        if (!is_null($retentionId) && !is_string($retentionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retentionId, true), gettype($retentionId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($retentionId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $retentionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($retentionId, true)), __LINE__);
        }
        $this->RetentionId = $retentionId;
        
        return $this;
    }
    /**
     * Get RetentionPeriod value
     * @return int
     */
    public function getRetentionPeriod(): int
    {
        return $this->RetentionPeriod;
    }
    /**
     * Set RetentionPeriod value
     * @param int $retentionPeriod
     * @return \StructType\EwsRetentionPolicyTagType
     */
    public function setRetentionPeriod(int $retentionPeriod): self
    {
        // validation for constraint: int
        if (!is_null($retentionPeriod) && !(is_int($retentionPeriod) || ctype_digit($retentionPeriod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($retentionPeriod, true), gettype($retentionPeriod)), __LINE__);
        }
        $this->RetentionPeriod = $retentionPeriod;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\EwsElcFolderType::valueIsValid()
     * @uses \EnumType\EwsElcFolderType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \StructType\EwsRetentionPolicyTagType
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsElcFolderType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsElcFolderType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\EwsElcFolderType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get RetentionAction value
     * @return string
     */
    public function getRetentionAction(): string
    {
        return $this->RetentionAction;
    }
    /**
     * Set RetentionAction value
     * @uses \EnumType\EwsRetentionActionType::valueIsValid()
     * @uses \EnumType\EwsRetentionActionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $retentionAction
     * @return \StructType\EwsRetentionPolicyTagType
     */
    public function setRetentionAction(string $retentionAction): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsRetentionActionType::valueIsValid($retentionAction)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsRetentionActionType', is_array($retentionAction) ? implode(', ', $retentionAction) : var_export($retentionAction, true), implode(', ', \EnumType\EwsRetentionActionType::getValidValues())), __LINE__);
        }
        $this->RetentionAction = $retentionAction;
        
        return $this;
    }
    /**
     * Get IsVisible value
     * @return bool
     */
    public function getIsVisible(): bool
    {
        return $this->IsVisible;
    }
    /**
     * Set IsVisible value
     * @param bool $isVisible
     * @return \StructType\EwsRetentionPolicyTagType
     */
    public function setIsVisible(bool $isVisible): self
    {
        // validation for constraint: boolean
        if (!is_null($isVisible) && !is_bool($isVisible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVisible, true), gettype($isVisible)), __LINE__);
        }
        $this->IsVisible = $isVisible;
        
        return $this;
    }
    /**
     * Get OptedInto value
     * @return bool
     */
    public function getOptedInto(): bool
    {
        return $this->OptedInto;
    }
    /**
     * Set OptedInto value
     * @param bool $optedInto
     * @return \StructType\EwsRetentionPolicyTagType
     */
    public function setOptedInto(bool $optedInto): self
    {
        // validation for constraint: boolean
        if (!is_null($optedInto) && !is_bool($optedInto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($optedInto, true), gettype($optedInto)), __LINE__);
        }
        $this->OptedInto = $optedInto;
        
        return $this;
    }
    /**
     * Get IsArchive value
     * @return bool
     */
    public function getIsArchive(): bool
    {
        return $this->IsArchive;
    }
    /**
     * Set IsArchive value
     * @param bool $isArchive
     * @return \StructType\EwsRetentionPolicyTagType
     */
    public function setIsArchive(bool $isArchive): self
    {
        // validation for constraint: boolean
        if (!is_null($isArchive) && !is_bool($isArchive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isArchive, true), gettype($isArchive)), __LINE__);
        }
        $this->IsArchive = $isArchive;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\EwsRetentionPolicyTagType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
}
