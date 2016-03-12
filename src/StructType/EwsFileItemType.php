<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FileItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: File search result item.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFileItemType extends EwsItemType
{
    /**
     * The FileName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FileName;
    /**
     * The FileExtension
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FileExtension;
    /**
     * The FileSize
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $FileSize;
    /**
     * The FileCreatedTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FileCreatedTime;
    /**
     * The FileModifiedTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FileModifiedTime;
    /**
     * The StorageProviderContext
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StorageProviderContext;
    /**
     * The FileID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FileID;
    /**
     * The FileContexts
     * @var \Ews\ArrayType\EwsArrayOfFileItemContextsType
     */
    public $FileContexts;
    /**
     * Constructor method for FileItemType
     * @uses EwsFileItemType::setFileName()
     * @uses EwsFileItemType::setFileExtension()
     * @uses EwsFileItemType::setFileSize()
     * @uses EwsFileItemType::setFileCreatedTime()
     * @uses EwsFileItemType::setFileModifiedTime()
     * @uses EwsFileItemType::setStorageProviderContext()
     * @uses EwsFileItemType::setFileID()
     * @uses EwsFileItemType::setFileContexts()
     * @param string $fileName
     * @param string $fileExtension
     * @param int $fileSize
     * @param string $fileCreatedTime
     * @param string $fileModifiedTime
     * @param string $storageProviderContext
     * @param string $fileID
     * @param \Ews\ArrayType\EwsArrayOfFileItemContextsType $fileContexts
     */
    public function __construct($fileName = null, $fileExtension = null, $fileSize = null, $fileCreatedTime = null, $fileModifiedTime = null, $storageProviderContext = null, $fileID = null, \Ews\ArrayType\EwsArrayOfFileItemContextsType $fileContexts = null)
    {
        $this
            ->setFileName($fileName)
            ->setFileExtension($fileExtension)
            ->setFileSize($fileSize)
            ->setFileCreatedTime($fileCreatedTime)
            ->setFileModifiedTime($fileModifiedTime)
            ->setStorageProviderContext($storageProviderContext)
            ->setFileID($fileID)
            ->setFileContexts($fileContexts);
    }
    /**
     * Get FileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $fileName
     * @return \Ews\StructType\EwsFileItemType
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileName)), __LINE__);
        }
        $this->FileName = $fileName;
        return $this;
    }
    /**
     * Get FileExtension value
     * @return string|null
     */
    public function getFileExtension()
    {
        return $this->FileExtension;
    }
    /**
     * Set FileExtension value
     * @param string $fileExtension
     * @return \Ews\StructType\EwsFileItemType
     */
    public function setFileExtension($fileExtension = null)
    {
        // validation for constraint: string
        if (!is_null($fileExtension) && !is_string($fileExtension)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileExtension)), __LINE__);
        }
        $this->FileExtension = $fileExtension;
        return $this;
    }
    /**
     * Get FileSize value
     * @return int|null
     */
    public function getFileSize()
    {
        return $this->FileSize;
    }
    /**
     * Set FileSize value
     * @param int $fileSize
     * @return \Ews\StructType\EwsFileItemType
     */
    public function setFileSize($fileSize = null)
    {
        // validation for constraint: int
        if (!is_null($fileSize) && !is_int($fileSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($fileSize)), __LINE__);
        }
        $this->FileSize = $fileSize;
        return $this;
    }
    /**
     * Get FileCreatedTime value
     * @return string|null
     */
    public function getFileCreatedTime()
    {
        return $this->FileCreatedTime;
    }
    /**
     * Set FileCreatedTime value
     * @param string $fileCreatedTime
     * @return \Ews\StructType\EwsFileItemType
     */
    public function setFileCreatedTime($fileCreatedTime = null)
    {
        // validation for constraint: string
        if (!is_null($fileCreatedTime) && !is_string($fileCreatedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileCreatedTime)), __LINE__);
        }
        $this->FileCreatedTime = $fileCreatedTime;
        return $this;
    }
    /**
     * Get FileModifiedTime value
     * @return string|null
     */
    public function getFileModifiedTime()
    {
        return $this->FileModifiedTime;
    }
    /**
     * Set FileModifiedTime value
     * @param string $fileModifiedTime
     * @return \Ews\StructType\EwsFileItemType
     */
    public function setFileModifiedTime($fileModifiedTime = null)
    {
        // validation for constraint: string
        if (!is_null($fileModifiedTime) && !is_string($fileModifiedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileModifiedTime)), __LINE__);
        }
        $this->FileModifiedTime = $fileModifiedTime;
        return $this;
    }
    /**
     * Get StorageProviderContext value
     * @return string|null
     */
    public function getStorageProviderContext()
    {
        return $this->StorageProviderContext;
    }
    /**
     * Set StorageProviderContext value
     * @param string $storageProviderContext
     * @return \Ews\StructType\EwsFileItemType
     */
    public function setStorageProviderContext($storageProviderContext = null)
    {
        // validation for constraint: string
        if (!is_null($storageProviderContext) && !is_string($storageProviderContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($storageProviderContext)), __LINE__);
        }
        $this->StorageProviderContext = $storageProviderContext;
        return $this;
    }
    /**
     * Get FileID value
     * @return string|null
     */
    public function getFileID()
    {
        return $this->FileID;
    }
    /**
     * Set FileID value
     * @param string $fileID
     * @return \Ews\StructType\EwsFileItemType
     */
    public function setFileID($fileID = null)
    {
        // validation for constraint: string
        if (!is_null($fileID) && !is_string($fileID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileID)), __LINE__);
        }
        $this->FileID = $fileID;
        return $this;
    }
    /**
     * Get FileContexts value
     * @return \Ews\ArrayType\EwsArrayOfFileItemContextsType|null
     */
    public function getFileContexts()
    {
        return $this->FileContexts;
    }
    /**
     * Set FileContexts value
     * @param \Ews\ArrayType\EwsArrayOfFileItemContextsType $fileContexts
     * @return \Ews\StructType\EwsFileItemType
     */
    public function setFileContexts(\Ews\ArrayType\EwsArrayOfFileItemContextsType $fileContexts = null)
    {
        $this->FileContexts = $fileContexts;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFileItemType
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
