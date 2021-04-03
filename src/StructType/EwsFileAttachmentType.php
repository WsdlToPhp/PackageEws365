<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FileAttachmentType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFileAttachmentType extends EwsAttachmentType
{
    /**
     * The IsContactPhoto
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsContactPhoto = null;
    /**
     * The Content
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Content = null;
    /**
     * Constructor method for FileAttachmentType
     * @uses EwsFileAttachmentType::setIsContactPhoto()
     * @uses EwsFileAttachmentType::setContent()
     * @param bool $isContactPhoto
     * @param string $content
     */
    public function __construct(?bool $isContactPhoto = null, ?string $content = null)
    {
        $this
            ->setIsContactPhoto($isContactPhoto)
            ->setContent($content);
    }
    /**
     * Get IsContactPhoto value
     * @return bool|null
     */
    public function getIsContactPhoto(): ?bool
    {
        return $this->IsContactPhoto;
    }
    /**
     * Set IsContactPhoto value
     * @param bool $isContactPhoto
     * @return \StructType\EwsFileAttachmentType
     */
    public function setIsContactPhoto(?bool $isContactPhoto = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isContactPhoto) && !is_bool($isContactPhoto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isContactPhoto, true), gettype($isContactPhoto)), __LINE__);
        }
        $this->IsContactPhoto = $isContactPhoto;
        
        return $this;
    }
    /**
     * Get Content value
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param string $content
     * @return \StructType\EwsFileAttachmentType
     */
    public function setContent(?string $content = null): self
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content, true), gettype($content)), __LINE__);
        }
        $this->Content = $content;
        
        return $this;
    }
}
