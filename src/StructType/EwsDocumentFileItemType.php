<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentFileItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDocumentFileItemType extends EwsFileItemType
{
    /**
     * The Author
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Author;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * Constructor method for DocumentFileItemType
     * @uses EwsDocumentFileItemType::setAuthor()
     * @uses EwsDocumentFileItemType::setTitle()
     * @param \Ews\ArrayType\EwsArrayOfStringsType $author
     * @param string $title
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfStringsType $author = null, $title = null)
    {
        $this
            ->setAuthor($author)
            ->setTitle($title);
    }
    /**
     * Get Author value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getAuthor()
    {
        return $this->Author;
    }
    /**
     * Set Author value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $author
     * @return \Ews\StructType\EwsDocumentFileItemType
     */
    public function setAuthor(\Ews\ArrayType\EwsArrayOfStringsType $author = null)
    {
        $this->Author = $author;
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
     * @return \Ews\StructType\EwsDocumentFileItemType
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
}
