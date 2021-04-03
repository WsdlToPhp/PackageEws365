<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSharingFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetSharingFolderType extends EwsBaseRequestType
{
    /**
     * The SmtpAddress
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string|null
     */
    protected ?string $SmtpAddress = null;
    /**
     * The DataType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DataType = null;
    /**
     * The SharedFolderId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SharedFolderId = null;
    /**
     * Constructor method for GetSharingFolderType
     * @uses EwsGetSharingFolderType::setSmtpAddress()
     * @uses EwsGetSharingFolderType::setDataType()
     * @uses EwsGetSharingFolderType::setSharedFolderId()
     * @param string $smtpAddress
     * @param string $dataType
     * @param string $sharedFolderId
     */
    public function __construct(?string $smtpAddress = null, ?string $dataType = null, ?string $sharedFolderId = null)
    {
        $this
            ->setSmtpAddress($smtpAddress)
            ->setDataType($dataType)
            ->setSharedFolderId($sharedFolderId);
    }
    /**
     * Get SmtpAddress value
     * @return string|null
     */
    public function getSmtpAddress(): ?string
    {
        return $this->SmtpAddress;
    }
    /**
     * Set SmtpAddress value
     * @param string $smtpAddress
     * @return \StructType\EwsGetSharingFolderType
     */
    public function setSmtpAddress(?string $smtpAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($smtpAddress) && !is_string($smtpAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smtpAddress, true), gettype($smtpAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($smtpAddress) && mb_strlen((string) $smtpAddress) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $smtpAddress)), __LINE__);
        }
        $this->SmtpAddress = $smtpAddress;
        
        return $this;
    }
    /**
     * Get DataType value
     * @return string|null
     */
    public function getDataType(): ?string
    {
        return $this->DataType;
    }
    /**
     * Set DataType value
     * @uses \EnumType\EwsSharingDataType::valueIsValid()
     * @uses \EnumType\EwsSharingDataType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $dataType
     * @return \StructType\EwsGetSharingFolderType
     */
    public function setDataType(?string $dataType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSharingDataType::valueIsValid($dataType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSharingDataType', is_array($dataType) ? implode(', ', $dataType) : var_export($dataType, true), implode(', ', \EnumType\EwsSharingDataType::getValidValues())), __LINE__);
        }
        $this->DataType = $dataType;
        
        return $this;
    }
    /**
     * Get SharedFolderId value
     * @return string|null
     */
    public function getSharedFolderId(): ?string
    {
        return $this->SharedFolderId;
    }
    /**
     * Set SharedFolderId value
     * @param string $sharedFolderId
     * @return \StructType\EwsGetSharingFolderType
     */
    public function setSharedFolderId(?string $sharedFolderId = null): self
    {
        // validation for constraint: string
        if (!is_null($sharedFolderId) && !is_string($sharedFolderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sharedFolderId, true), gettype($sharedFolderId)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($sharedFolderId) && mb_strlen((string) $sharedFolderId) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $sharedFolderId)), __LINE__);
        }
        $this->SharedFolderId = $sharedFolderId;
        
        return $this;
    }
}
