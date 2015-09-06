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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var double
     */
    public $Rank;
    /**
     * The Author
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Author;
    /**
     * The Created
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Created;
    /**
     * The LastModifiedTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LastModifiedTime;
    /**
     * The DefaultEncodingURL
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DefaultEncodingURL;
    /**
     * The FileType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FileType;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The DocumentId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DocumentId;
    /**
     * The PreviewURL
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PreviewURL;
    /**
     * The LastEditor
     * Meta informations extracted from the WSDL
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
     * @param double $rank
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
     * @return double|null
     */
    public function getRank()
    {
        return $this->Rank;
    }
    /**
     * Set Rank value
     * @param double $rank
     * @return \Ews\StructType\EwsDelveDocument
     */
    public function setRank($rank = null)
    {
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
        $this->LastEditor = $lastEditor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsDelveDocument
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
