<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var float
     */
    public $Rank;
    /**
     * The Author
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Author;
    /**
     * The Created
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Created;
    /**
     * The LastModifiedTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LastModifiedTime;
    /**
     * The DefaultEncodingURL
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DefaultEncodingURL;
    /**
     * The FileType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FileType;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The DocumentId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DocumentId;
    /**
     * The PreviewURL
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PreviewURL;
    /**
     * The LastEditor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LastEditor;
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
    public function __construct($rank = null, $author = null, $created = null, $lastModifiedTime = null, $defaultEncodingURL = null, $fileType = null, $title = null, $documentId = null, $previewURL = null, $lastEditor = null)
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
    public function getRank()
    {
        return $this->Rank;
    }
    /**
     * Set Rank value
     * @param float $rank
     * @return \Ews\StructType\EwsDelveDocument
     */
    public function setRank($rank = null)
    {
        // validation for constraint: float
        if (!is_null($rank) && !(is_float($rank) || is_numeric($rank))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rank, true), gettype($rank)), __LINE__);
        }
        $this->Rank = $rank;
        return $this;
    }
    /**
     * Get Author value
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->Author;
    }
    /**
     * Set Author value
     * @param string $author
     * @return \Ews\StructType\EwsDelveDocument
     */
    public function setAuthor($author = null)
    {
        // validation for constraint: string
        if (!is_null($author) && !is_string($author)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($author, true), gettype($author)), __LINE__);
        }
        $this->Author = $author;
        return $this;
    }
    /**
     * Get Created value
     * @return string|null
     */
    public function getCreated()
    {
        return $this->Created;
    }
    /**
     * Set Created value
     * @param string $created
     * @return \Ews\StructType\EwsDelveDocument
     */
    public function setCreated($created = null)
    {
        // validation for constraint: string
        if (!is_null($created) && !is_string($created)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($created, true), gettype($created)), __LINE__);
        }
        $this->Created = $created;
        return $this;
    }
    /**
     * Get LastModifiedTime value
     * @return string|null
     */
    public function getLastModifiedTime()
    {
        return $this->LastModifiedTime;
    }
    /**
     * Set LastModifiedTime value
     * @param string $lastModifiedTime
     * @return \Ews\StructType\EwsDelveDocument
     */
    public function setLastModifiedTime($lastModifiedTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastModifiedTime) && !is_string($lastModifiedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifiedTime, true), gettype($lastModifiedTime)), __LINE__);
        }
        $this->LastModifiedTime = $lastModifiedTime;
        return $this;
    }
    /**
     * Get DefaultEncodingURL value
     * @return string|null
     */
    public function getDefaultEncodingURL()
    {
        return $this->DefaultEncodingURL;
    }
    /**
     * Set DefaultEncodingURL value
     * @param string $defaultEncodingURL
     * @return \Ews\StructType\EwsDelveDocument
     */
    public function setDefaultEncodingURL($defaultEncodingURL = null)
    {
        // validation for constraint: string
        if (!is_null($defaultEncodingURL) && !is_string($defaultEncodingURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultEncodingURL, true), gettype($defaultEncodingURL)), __LINE__);
        }
        $this->DefaultEncodingURL = $defaultEncodingURL;
        return $this;
    }
    /**
     * Get FileType value
     * @return string|null
     */
    public function getFileType()
    {
        return $this->FileType;
    }
    /**
     * Set FileType value
     * @param string $fileType
     * @return \Ews\StructType\EwsDelveDocument
     */
    public function setFileType($fileType = null)
    {
        // validation for constraint: string
        if (!is_null($fileType) && !is_string($fileType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileType, true), gettype($fileType)), __LINE__);
        }
        $this->FileType = $fileType;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \Ews\StructType\EwsDelveDocument
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get DocumentId value
     * @return string|null
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }
    /**
     * Set DocumentId value
     * @param string $documentId
     * @return \Ews\StructType\EwsDelveDocument
     */
    public function setDocumentId($documentId = null)
    {
        // validation for constraint: string
        if (!is_null($documentId) && !is_string($documentId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->DocumentId = $documentId;
        return $this;
    }
    /**
     * Get PreviewURL value
     * @return string|null
     */
    public function getPreviewURL()
    {
        return $this->PreviewURL;
    }
    /**
     * Set PreviewURL value
     * @param string $previewURL
     * @return \Ews\StructType\EwsDelveDocument
     */
    public function setPreviewURL($previewURL = null)
    {
        // validation for constraint: string
        if (!is_null($previewURL) && !is_string($previewURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($previewURL, true), gettype($previewURL)), __LINE__);
        }
        $this->PreviewURL = $previewURL;
        return $this;
    }
    /**
     * Get LastEditor value
     * @return string|null
     */
    public function getLastEditor()
    {
        return $this->LastEditor;
    }
    /**
     * Set LastEditor value
     * @param string $lastEditor
     * @return \Ews\StructType\EwsDelveDocument
     */
    public function setLastEditor($lastEditor = null)
    {
        // validation for constraint: string
        if (!is_null($lastEditor) && !is_string($lastEditor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastEditor, true), gettype($lastEditor)), __LINE__);
        }
        $this->LastEditor = $lastEditor;
        return $this;
    }
}
