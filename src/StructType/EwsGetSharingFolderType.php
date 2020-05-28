<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $SmtpAddress;
    /**
     * The DataType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DataType;
    /**
     * The SharedFolderId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $SharedFolderId;
    /**
     * Constructor method for GetSharingFolderType
     * @uses EwsGetSharingFolderType::setSmtpAddress()
     * @uses EwsGetSharingFolderType::setDataType()
     * @uses EwsGetSharingFolderType::setSharedFolderId()
     * @param string $smtpAddress
     * @param string $dataType
     * @param string $sharedFolderId
     */
    public function __construct($smtpAddress = null, $dataType = null, $sharedFolderId = null)
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
    public function getSmtpAddress()
    {
        return $this->SmtpAddress;
    }
    /**
     * Set SmtpAddress value
     * @param string $smtpAddress
     * @return \Ews\StructType\EwsGetSharingFolderType
     */
    public function setSmtpAddress($smtpAddress = null)
    {
        // validation for constraint: string
        if (!is_null($smtpAddress) && !is_string($smtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smtpAddress, true), gettype($smtpAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($smtpAddress) && mb_strlen($smtpAddress) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($smtpAddress)), __LINE__);
        }
        $this->SmtpAddress = $smtpAddress;
        return $this;
    }
    /**
     * Get DataType value
     * @return string|null
     */
    public function getDataType()
    {
        return $this->DataType;
    }
    /**
     * Set DataType value
     * @uses \Ews\EnumType\EwsSharingDataType::valueIsValid()
     * @uses \Ews\EnumType\EwsSharingDataType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dataType
     * @return \Ews\StructType\EwsGetSharingFolderType
     */
    public function setDataType($dataType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSharingDataType::valueIsValid($dataType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsSharingDataType', is_array($dataType) ? implode(', ', $dataType) : var_export($dataType, true), implode(', ', \Ews\EnumType\EwsSharingDataType::getValidValues())), __LINE__);
        }
        $this->DataType = $dataType;
        return $this;
    }
    /**
     * Get SharedFolderId value
     * @return string|null
     */
    public function getSharedFolderId()
    {
        return $this->SharedFolderId;
    }
    /**
     * Set SharedFolderId value
     * @param string $sharedFolderId
     * @return \Ews\StructType\EwsGetSharingFolderType
     */
    public function setSharedFolderId($sharedFolderId = null)
    {
        // validation for constraint: string
        if (!is_null($sharedFolderId) && !is_string($sharedFolderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sharedFolderId, true), gettype($sharedFolderId)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($sharedFolderId) && mb_strlen($sharedFolderId) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($sharedFolderId)), __LINE__);
        }
        $this->SharedFolderId = $sharedFolderId;
        return $this;
    }
}
