<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConnectingSIDType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConnectingSIDType extends AbstractStructBase
{
    /**
     * The PrincipalName
     * Meta information extracted from the WSDL
     * - choice: PrincipalName | SID | PrimarySmtpAddress | SmtpAddress
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\EwsPrincipalNameType|null
     */
    protected ?\StructType\EwsPrincipalNameType $PrincipalName = null;
    /**
     * The SID
     * Meta information extracted from the WSDL
     * - choice: PrincipalName | SID | PrimarySmtpAddress | SmtpAddress
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\EwsSIDType|null
     */
    protected ?\StructType\EwsSIDType $SID = null;
    /**
     * The PrimarySmtpAddress
     * Meta information extracted from the WSDL
     * - choice: PrincipalName | SID | PrimarySmtpAddress | SmtpAddress
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\EwsPrimarySmtpAddressType|null
     */
    protected ?\StructType\EwsPrimarySmtpAddressType $PrimarySmtpAddress = null;
    /**
     * The SmtpAddress
     * Meta information extracted from the WSDL
     * - choice: PrincipalName | SID | PrimarySmtpAddress | SmtpAddress
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\EwsSmtpAddressType|null
     */
    protected ?\StructType\EwsSmtpAddressType $SmtpAddress = null;
    /**
     * Constructor method for ConnectingSIDType
     * @uses EwsConnectingSIDType::setPrincipalName()
     * @uses EwsConnectingSIDType::setSID()
     * @uses EwsConnectingSIDType::setPrimarySmtpAddress()
     * @uses EwsConnectingSIDType::setSmtpAddress()
     * @param \StructType\EwsPrincipalNameType $principalName
     * @param \StructType\EwsSIDType $sID
     * @param \StructType\EwsPrimarySmtpAddressType $primarySmtpAddress
     * @param \StructType\EwsSmtpAddressType $smtpAddress
     */
    public function __construct(?\StructType\EwsPrincipalNameType $principalName = null, ?\StructType\EwsSIDType $sID = null, ?\StructType\EwsPrimarySmtpAddressType $primarySmtpAddress = null, ?\StructType\EwsSmtpAddressType $smtpAddress = null)
    {
        $this
            ->setPrincipalName($principalName)
            ->setSID($sID)
            ->setPrimarySmtpAddress($primarySmtpAddress)
            ->setSmtpAddress($smtpAddress);
    }
    /**
     * Get PrincipalName value
     * @return \StructType\EwsPrincipalNameType|null
     */
    public function getPrincipalName(): ?\StructType\EwsPrincipalNameType
    {
        return isset($this->PrincipalName) ? $this->PrincipalName : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPrincipalName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrincipalName method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePrincipalNameForChoiceConstraintsFromSetPrincipalName($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'SID',
            'PrimarySmtpAddress',
            'SmtpAddress',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property PrincipalName can\'t be set as the property %s is already set. Only one property must be set among these properties: PrincipalName, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set PrincipalName value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsPrincipalNameType $principalName
     * @return \StructType\EwsConnectingSIDType
     */
    public function setPrincipalName(?\StructType\EwsPrincipalNameType $principalName = null): self
    {
        // validation for constraint: choice(PrincipalName, SID, PrimarySmtpAddress, SmtpAddress)
        if ('' !== ($principalNameChoiceErrorMessage = self::validatePrincipalNameForChoiceConstraintsFromSetPrincipalName($principalName))) {
            throw new InvalidArgumentException($principalNameChoiceErrorMessage, __LINE__);
        }
        if (is_null($principalName) || (is_array($principalName) && empty($principalName))) {
            unset($this->PrincipalName);
        } else {
            $this->PrincipalName = $principalName;
        }
        
        return $this;
    }
    /**
     * Get SID value
     * @return \StructType\EwsSIDType|null
     */
    public function getSID(): ?\StructType\EwsSIDType
    {
        return isset($this->SID) ? $this->SID : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSID method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSIDForChoiceConstraintsFromSetSID($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'PrincipalName',
            'PrimarySmtpAddress',
            'SmtpAddress',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SID can\'t be set as the property %s is already set. Only one property must be set among these properties: SID, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set SID value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsSIDType $sID
     * @return \StructType\EwsConnectingSIDType
     */
    public function setSID(?\StructType\EwsSIDType $sID = null): self
    {
        // validation for constraint: choice(PrincipalName, SID, PrimarySmtpAddress, SmtpAddress)
        if ('' !== ($sIDChoiceErrorMessage = self::validateSIDForChoiceConstraintsFromSetSID($sID))) {
            throw new InvalidArgumentException($sIDChoiceErrorMessage, __LINE__);
        }
        if (is_null($sID) || (is_array($sID) && empty($sID))) {
            unset($this->SID);
        } else {
            $this->SID = $sID;
        }
        
        return $this;
    }
    /**
     * Get PrimarySmtpAddress value
     * @return \StructType\EwsPrimarySmtpAddressType|null
     */
    public function getPrimarySmtpAddress(): ?\StructType\EwsPrimarySmtpAddressType
    {
        return isset($this->PrimarySmtpAddress) ? $this->PrimarySmtpAddress : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPrimarySmtpAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrimarySmtpAddress method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePrimarySmtpAddressForChoiceConstraintsFromSetPrimarySmtpAddress($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'PrincipalName',
            'SID',
            'SmtpAddress',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property PrimarySmtpAddress can\'t be set as the property %s is already set. Only one property must be set among these properties: PrimarySmtpAddress, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set PrimarySmtpAddress value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsPrimarySmtpAddressType $primarySmtpAddress
     * @return \StructType\EwsConnectingSIDType
     */
    public function setPrimarySmtpAddress(?\StructType\EwsPrimarySmtpAddressType $primarySmtpAddress = null): self
    {
        // validation for constraint: choice(PrincipalName, SID, PrimarySmtpAddress, SmtpAddress)
        if ('' !== ($primarySmtpAddressChoiceErrorMessage = self::validatePrimarySmtpAddressForChoiceConstraintsFromSetPrimarySmtpAddress($primarySmtpAddress))) {
            throw new InvalidArgumentException($primarySmtpAddressChoiceErrorMessage, __LINE__);
        }
        if (is_null($primarySmtpAddress) || (is_array($primarySmtpAddress) && empty($primarySmtpAddress))) {
            unset($this->PrimarySmtpAddress);
        } else {
            $this->PrimarySmtpAddress = $primarySmtpAddress;
        }
        
        return $this;
    }
    /**
     * Get SmtpAddress value
     * @return \StructType\EwsSmtpAddressType|null
     */
    public function getSmtpAddress(): ?\StructType\EwsSmtpAddressType
    {
        return isset($this->SmtpAddress) ? $this->SmtpAddress : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSmtpAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSmtpAddress method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSmtpAddressForChoiceConstraintsFromSetSmtpAddress($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'PrincipalName',
            'SID',
            'PrimarySmtpAddress',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SmtpAddress can\'t be set as the property %s is already set. Only one property must be set among these properties: SmtpAddress, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set SmtpAddress value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsSmtpAddressType $smtpAddress
     * @return \StructType\EwsConnectingSIDType
     */
    public function setSmtpAddress(?\StructType\EwsSmtpAddressType $smtpAddress = null): self
    {
        // validation for constraint: choice(PrincipalName, SID, PrimarySmtpAddress, SmtpAddress)
        if ('' !== ($smtpAddressChoiceErrorMessage = self::validateSmtpAddressForChoiceConstraintsFromSetSmtpAddress($smtpAddress))) {
            throw new InvalidArgumentException($smtpAddressChoiceErrorMessage, __LINE__);
        }
        if (is_null($smtpAddress) || (is_array($smtpAddress) && empty($smtpAddress))) {
            unset($this->SmtpAddress);
        } else {
            $this->SmtpAddress = $smtpAddress;
        }
        
        return $this;
    }
}
