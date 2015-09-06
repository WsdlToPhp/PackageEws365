<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EncryptedSharedFolderDataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEncryptedSharedFolderDataType extends AbstractStructBase
{
    /**
     * The Token
     * @var \Ews\StructType\EwsEncryptedDataContainerType
     */
    public $Token;
    /**
     * The Data
     * @var \Ews\StructType\EwsEncryptedDataContainerType
     */
    public $Data;
    /**
     * Constructor method for EncryptedSharedFolderDataType
     * @uses EwsEncryptedSharedFolderDataType::setToken()
     * @uses EwsEncryptedSharedFolderDataType::setData()
     * @param \Ews\StructType\EwsEncryptedDataContainerType $token
     * @param \Ews\StructType\EwsEncryptedDataContainerType $data
     */
    public function __construct(\Ews\StructType\EwsEncryptedDataContainerType $token = null, \Ews\StructType\EwsEncryptedDataContainerType $data = null)
    {
        $this
            ->setToken($token)
            ->setData($data);
    }
    /**
     * Get Token value
     * @return \Ews\StructType\EwsEncryptedDataContainerType|null
     */
    public function getToken()
    {
        return $this->Token;
    }
    /**
     * Set Token value
     * @param \Ews\StructType\EwsEncryptedDataContainerType $token
     * @return \Ews\StructType\EwsEncryptedSharedFolderDataType
     */
    public function setToken(\Ews\StructType\EwsEncryptedDataContainerType $token = null)
    {
        $this->Token = $token;
        return $this;
    }
    /**
     * Get Data value
     * @return \Ews\StructType\EwsEncryptedDataContainerType|null
     */
    public function getData()
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param \Ews\StructType\EwsEncryptedDataContainerType $data
     * @return \Ews\StructType\EwsEncryptedSharedFolderDataType
     */
    public function setData(\Ews\StructType\EwsEncryptedDataContainerType $data = null)
    {
        $this->Data = $data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsEncryptedSharedFolderDataType
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
