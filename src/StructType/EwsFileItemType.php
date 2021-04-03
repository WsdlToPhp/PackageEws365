<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FileItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: File search result item.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFileItemType extends EwsItemType
{
    /**
     * The FileName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FileName = null;
    /**
     * The FileExtension
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FileExtension = null;
    /**
     * The FileSize
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FileSize = null;
    /**
     * The FileCreatedTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FileCreatedTime = null;
    /**
     * The FileModifiedTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FileModifiedTime = null;
    /**
     * The StorageProviderContext
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StorageProviderContext = null;
    /**
     * The FileID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FileID = null;
    /**
     * The FileContexts
     * @var \ArrayType\EwsArrayOfFileItemContextsType|null
     */
    protected ?\ArrayType\EwsArrayOfFileItemContextsType $FileContexts = null;
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
     * @param \ArrayType\EwsArrayOfFileItemContextsType $fileContexts
     */
    public function __construct(?string $fileName = null, ?string $fileExtension = null, ?int $fileSize = null, ?string $fileCreatedTime = null, ?string $fileModifiedTime = null, ?string $storageProviderContext = null, ?string $fileID = null, ?\ArrayType\EwsArrayOfFileItemContextsType $fileContexts = null)
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
    public function getFileName(): ?string
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $fileName
     * @return \StructType\EwsFileItemType
     */
    public function setFileName(?string $fileName = null): self
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->FileName = $fileName;
        
        return $this;
    }
    /**
     * Get FileExtension value
     * @return string|null
     */
    public function getFileExtension(): ?string
    {
        return $this->FileExtension;
    }
    /**
     * Set FileExtension value
     * @param string $fileExtension
     * @return \StructType\EwsFileItemType
     */
    public function setFileExtension(?string $fileExtension = null): self
    {
        // validation for constraint: string
        if (!is_null($fileExtension) && !is_string($fileExtension)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileExtension, true), gettype($fileExtension)), __LINE__);
        }
        $this->FileExtension = $fileExtension;
        
        return $this;
    }
    /**
     * Get FileSize value
     * @return int|null
     */
    public function getFileSize(): ?int
    {
        return $this->FileSize;
    }
    /**
     * Set FileSize value
     * @param int $fileSize
     * @return \StructType\EwsFileItemType
     */
    public function setFileSize(?int $fileSize = null): self
    {
        // validation for constraint: int
        if (!is_null($fileSize) && !(is_int($fileSize) || ctype_digit($fileSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fileSize, true), gettype($fileSize)), __LINE__);
        }
        $this->FileSize = $fileSize;
        
        return $this;
    }
    /**
     * Get FileCreatedTime value
     * @return string|null
     */
    public function getFileCreatedTime(): ?string
    {
        return $this->FileCreatedTime;
    }
    /**
     * Set FileCreatedTime value
     * @param string $fileCreatedTime
     * @return \StructType\EwsFileItemType
     */
    public function setFileCreatedTime(?string $fileCreatedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($fileCreatedTime) && !is_string($fileCreatedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileCreatedTime, true), gettype($fileCreatedTime)), __LINE__);
        }
        $this->FileCreatedTime = $fileCreatedTime;
        
        return $this;
    }
    /**
     * Get FileModifiedTime value
     * @return string|null
     */
    public function getFileModifiedTime(): ?string
    {
        return $this->FileModifiedTime;
    }
    /**
     * Set FileModifiedTime value
     * @param string $fileModifiedTime
     * @return \StructType\EwsFileItemType
     */
    public function setFileModifiedTime(?string $fileModifiedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($fileModifiedTime) && !is_string($fileModifiedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileModifiedTime, true), gettype($fileModifiedTime)), __LINE__);
        }
        $this->FileModifiedTime = $fileModifiedTime;
        
        return $this;
    }
    /**
     * Get StorageProviderContext value
     * @return string|null
     */
    public function getStorageProviderContext(): ?string
    {
        return $this->StorageProviderContext;
    }
    /**
     * Set StorageProviderContext value
     * @param string $storageProviderContext
     * @return \StructType\EwsFileItemType
     */
    public function setStorageProviderContext(?string $storageProviderContext = null): self
    {
        // validation for constraint: string
        if (!is_null($storageProviderContext) && !is_string($storageProviderContext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storageProviderContext, true), gettype($storageProviderContext)), __LINE__);
        }
        $this->StorageProviderContext = $storageProviderContext;
        
        return $this;
    }
    /**
     * Get FileID value
     * @return string|null
     */
    public function getFileID(): ?string
    {
        return $this->FileID;
    }
    /**
     * Set FileID value
     * @param string $fileID
     * @return \StructType\EwsFileItemType
     */
    public function setFileID(?string $fileID = null): self
    {
        // validation for constraint: string
        if (!is_null($fileID) && !is_string($fileID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileID, true), gettype($fileID)), __LINE__);
        }
        $this->FileID = $fileID;
        
        return $this;
    }
    /**
     * Get FileContexts value
     * @return \ArrayType\EwsArrayOfFileItemContextsType|null
     */
    public function getFileContexts(): ?\ArrayType\EwsArrayOfFileItemContextsType
    {
        return $this->FileContexts;
    }
    /**
     * Set FileContexts value
     * @param \ArrayType\EwsArrayOfFileItemContextsType $fileContexts
     * @return \StructType\EwsFileItemType
     */
    public function setFileContexts(?\ArrayType\EwsArrayOfFileItemContextsType $fileContexts = null): self
    {
        $this->FileContexts = $fileContexts;
        
        return $this;
    }
}
