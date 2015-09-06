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
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $SmtpAddress;
    /**
     * The DataType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DataType;
    /**
     * The SharedFolderId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - minLength: 1
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
     * @param string $dataType
     * @return \Ews\StructType\EwsGetSharingFolderType
     */
    public function setDataType($dataType = null)
    {
        if (!\Ews\EnumType\EwsSharingDataType::valueIsValid($dataType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dataType, implode(', ', \Ews\EnumType\EwsSharingDataType::getValidValues())), __LINE__);
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
        $this->SharedFolderId = $sharedFolderId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetSharingFolderType
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
