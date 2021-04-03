<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsEncryptedDataContainerType|null
     */
    protected ?\StructType\EwsEncryptedDataContainerType $Token = null;
    /**
     * The Data
     * @var \StructType\EwsEncryptedDataContainerType|null
     */
    protected ?\StructType\EwsEncryptedDataContainerType $Data = null;
    /**
     * Constructor method for EncryptedSharedFolderDataType
     * @uses EwsEncryptedSharedFolderDataType::setToken()
     * @uses EwsEncryptedSharedFolderDataType::setData()
     * @param \StructType\EwsEncryptedDataContainerType $token
     * @param \StructType\EwsEncryptedDataContainerType $data
     */
    public function __construct(?\StructType\EwsEncryptedDataContainerType $token = null, ?\StructType\EwsEncryptedDataContainerType $data = null)
    {
        $this
            ->setToken($token)
            ->setData($data);
    }
    /**
     * Get Token value
     * @return \StructType\EwsEncryptedDataContainerType|null
     */
    public function getToken(): ?\StructType\EwsEncryptedDataContainerType
    {
        return $this->Token;
    }
    /**
     * Set Token value
     * @param \StructType\EwsEncryptedDataContainerType $token
     * @return \StructType\EwsEncryptedSharedFolderDataType
     */
    public function setToken(?\StructType\EwsEncryptedDataContainerType $token = null): self
    {
        $this->Token = $token;
        
        return $this;
    }
    /**
     * Get Data value
     * @return \StructType\EwsEncryptedDataContainerType|null
     */
    public function getData(): ?\StructType\EwsEncryptedDataContainerType
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param \StructType\EwsEncryptedDataContainerType $data
     * @return \StructType\EwsEncryptedSharedFolderDataType
     */
    public function setData(?\StructType\EwsEncryptedDataContainerType $data = null): self
    {
        $this->Data = $data;
        
        return $this;
    }
}
