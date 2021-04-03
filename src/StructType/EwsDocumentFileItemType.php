<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $Author = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Title = null;
    /**
     * Constructor method for DocumentFileItemType
     * @uses EwsDocumentFileItemType::setAuthor()
     * @uses EwsDocumentFileItemType::setTitle()
     * @param \ArrayType\EwsArrayOfStringsType $author
     * @param string $title
     */
    public function __construct(?\ArrayType\EwsArrayOfStringsType $author = null, ?string $title = null)
    {
        $this
            ->setAuthor($author)
            ->setTitle($title);
    }
    /**
     * Get Author value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getAuthor(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->Author;
    }
    /**
     * Set Author value
     * @param \ArrayType\EwsArrayOfStringsType $author
     * @return \StructType\EwsDocumentFileItemType
     */
    public function setAuthor(?\ArrayType\EwsArrayOfStringsType $author = null): self
    {
        $this->Author = $author;
        
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
     * @return \StructType\EwsDocumentFileItemType
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
}
