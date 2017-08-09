<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsContactPhoto;
    /**
     * The Content
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Content;
    /**
     * Constructor method for FileAttachmentType
     * @uses EwsFileAttachmentType::setIsContactPhoto()
     * @uses EwsFileAttachmentType::setContent()
     * @param bool $isContactPhoto
     * @param string $content
     */
    public function __construct($isContactPhoto = null, $content = null)
    {
        $this
            ->setIsContactPhoto($isContactPhoto)
            ->setContent($content);
    }
    /**
     * Get IsContactPhoto value
     * @return bool|null
     */
    public function getIsContactPhoto()
    {
        return $this->IsContactPhoto;
    }
    /**
     * Set IsContactPhoto value
     * @param bool $isContactPhoto
     * @return \Ews\StructType\EwsFileAttachmentType
     */
    public function setIsContactPhoto($isContactPhoto = null)
    {
        // validation for constraint: boolean
        if (!is_null($isContactPhoto) && !is_bool($isContactPhoto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isContactPhoto)), __LINE__);
        }
        $this->IsContactPhoto = $isContactPhoto;
        return $this;
    }
    /**
     * Get Content value
     * @return string|null
     */
    public function getContent()
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param string $content
     * @return \Ews\StructType\EwsFileAttachmentType
     */
    public function setContent($content = null)
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($content)), __LINE__);
        }
        $this->Content = $content;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFileAttachmentType
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
