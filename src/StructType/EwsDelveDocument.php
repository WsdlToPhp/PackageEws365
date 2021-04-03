<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DelveDocument StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDelveDocument extends EwsInsightValue
{
    /**
     * The Rank
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Rank = null;
    /**
     * The Author
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Author = null;
    /**
     * The Created
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Created = null;
    /**
     * The LastModifiedTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastModifiedTime = null;
    /**
     * The DefaultEncodingURL
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DefaultEncodingURL = null;
    /**
     * The FileType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FileType = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Title = null;
    /**
     * The DocumentId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DocumentId = null;
    /**
     * The PreviewURL
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PreviewURL = null;
    /**
     * The LastEditor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastEditor = null;
    /**
     * Constructor method for DelveDocument
     * @uses EwsDelveDocument::setRank()
     * @uses EwsDelveDocument::setAuthor()
     * @uses EwsDelveDocument::setCreated()
     * @uses EwsDelveDocument::setLastModifiedTime()
     * @uses EwsDelveDocument::setDefaultEncodingURL()
     * @uses EwsDelveDocument::setFileType()
     * @uses EwsDelveDocument::setTitle()
     * @uses EwsDelveDocument::setDocumentId()
     * @uses EwsDelveDocument::setPreviewURL()
     * @uses EwsDelveDocument::setLastEditor()
     * @param float $rank
     * @param string $author
     * @param string $created
     * @param string $lastModifiedTime
     * @param string $defaultEncodingURL
     * @param string $fileType
     * @param string $title
     * @param string $documentId
     * @param string $previewURL
     * @param string $lastEditor
     */
    public function __construct(?float $rank = null, ?string $author = null, ?string $created = null, ?string $lastModifiedTime = null, ?string $defaultEncodingURL = null, ?string $fileType = null, ?string $title = null, ?string $documentId = null, ?string $previewURL = null, ?string $lastEditor = null)
    {
        $this
            ->setRank($rank)
            ->setAuthor($author)
            ->setCreated($created)
            ->setLastModifiedTime($lastModifiedTime)
            ->setDefaultEncodingURL($defaultEncodingURL)
            ->setFileType($fileType)
            ->setTitle($title)
            ->setDocumentId($documentId)
            ->setPreviewURL($previewURL)
            ->setLastEditor($lastEditor);
    }
    /**
     * Get Rank value
     * @return float|null
     */
    public function getRank(): ?float
    {
        return $this->Rank;
    }
    /**
     * Set Rank value
     * @param float $rank
     * @return \StructType\EwsDelveDocument
     */
    public function setRank(?float $rank = null): self
    {
        // validation for constraint: float
        if (!is_null($rank) && !(is_float($rank) || is_numeric($rank))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rank, true), gettype($rank)), __LINE__);
        }
        $this->Rank = $rank;
        
        return $this;
    }
    /**
     * Get Author value
     * @return string|null
     */
    public function getAuthor(): ?string
    {
        return $this->Author;
    }
    /**
     * Set Author value
     * @param string $author
     * @return \StructType\EwsDelveDocument
     */
    public function setAuthor(?string $author = null): self
    {
        // validation for constraint: string
        if (!is_null($author) && !is_string($author)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($author, true), gettype($author)), __LINE__);
        }
        $this->Author = $author;
        
        return $this;
    }
    /**
     * Get Created value
     * @return string|null
     */
    public function getCreated(): ?string
    {
        return $this->Created;
    }
    /**
     * Set Created value
     * @param string $created
     * @return \StructType\EwsDelveDocument
     */
    public function setCreated(?string $created = null): self
    {
        // validation for constraint: string
        if (!is_null($created) && !is_string($created)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($created, true), gettype($created)), __LINE__);
        }
        $this->Created = $created;
        
        return $this;
    }
    /**
     * Get LastModifiedTime value
     * @return string|null
     */
    public function getLastModifiedTime(): ?string
    {
        return $this->LastModifiedTime;
    }
    /**
     * Set LastModifiedTime value
     * @param string $lastModifiedTime
     * @return \StructType\EwsDelveDocument
     */
    public function setLastModifiedTime(?string $lastModifiedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($lastModifiedTime) && !is_string($lastModifiedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifiedTime, true), gettype($lastModifiedTime)), __LINE__);
        }
        $this->LastModifiedTime = $lastModifiedTime;
        
        return $this;
    }
    /**
     * Get DefaultEncodingURL value
     * @return string|null
     */
    public function getDefaultEncodingURL(): ?string
    {
        return $this->DefaultEncodingURL;
    }
    /**
     * Set DefaultEncodingURL value
     * @param string $defaultEncodingURL
     * @return \StructType\EwsDelveDocument
     */
    public function setDefaultEncodingURL(?string $defaultEncodingURL = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultEncodingURL) && !is_string($defaultEncodingURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultEncodingURL, true), gettype($defaultEncodingURL)), __LINE__);
        }
        $this->DefaultEncodingURL = $defaultEncodingURL;
        
        return $this;
    }
    /**
     * Get FileType value
     * @return string|null
     */
    public function getFileType(): ?string
    {
        return $this->FileType;
    }
    /**
     * Set FileType value
     * @param string $fileType
     * @return \StructType\EwsDelveDocument
     */
    public function setFileType(?string $fileType = null): self
    {
        // validation for constraint: string
        if (!is_null($fileType) && !is_string($fileType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileType, true), gettype($fileType)), __LINE__);
        }
        $this->FileType = $fileType;
        
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \StructType\EwsDelveDocument
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        
        return $this;
    }
    /**
     * Get DocumentId value
     * @return string|null
     */
    public function getDocumentId(): ?string
    {
        return $this->DocumentId;
    }
    /**
     * Set DocumentId value
     * @param string $documentId
     * @return \StructType\EwsDelveDocument
     */
    public function setDocumentId(?string $documentId = null): self
    {
        // validation for constraint: string
        if (!is_null($documentId) && !is_string($documentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->DocumentId = $documentId;
        
        return $this;
    }
    /**
     * Get PreviewURL value
     * @return string|null
     */
    public function getPreviewURL(): ?string
    {
        return $this->PreviewURL;
    }
    /**
     * Set PreviewURL value
     * @param string $previewURL
     * @return \StructType\EwsDelveDocument
     */
    public function setPreviewURL(?string $previewURL = null): self
    {
        // validation for constraint: string
        if (!is_null($previewURL) && !is_string($previewURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($previewURL, true), gettype($previewURL)), __LINE__);
        }
        $this->PreviewURL = $previewURL;
        
        return $this;
    }
    /**
     * Get LastEditor value
     * @return string|null
     */
    public function getLastEditor(): ?string
    {
        return $this->LastEditor;
    }
    /**
     * Set LastEditor value
     * @param string $lastEditor
     * @return \StructType\EwsDelveDocument
     */
    public function setLastEditor(?string $lastEditor = null): self
    {
        // validation for constraint: string
        if (!is_null($lastEditor) && !is_string($lastEditor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastEditor, true), gettype($lastEditor)), __LINE__);
        }
        $this->LastEditor = $lastEditor;
        
        return $this;
    }
}
