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
     * @var boolean
     */
    public $IsContactPhoto;
    /**
     * The Content
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var base64Binary
     */
    public $Content;
    /**
     * Constructor method for FileAttachmentType
     * @uses EwsFileAttachmentType::setIsContactPhoto()
     * @uses EwsFileAttachmentType::setContent()
     * @param boolean $isContactPhoto
     * @param base64Binary $content
     */
    public function __construct($isContactPhoto = null, base64Binary $content = null)
    {
        $this
            ->setIsContactPhoto($isContactPhoto)
            ->setContent($content);
    }
    /**
     * Get IsContactPhoto value
     * @return boolean|null
     */
    public function getIsContactPhoto()
    {
        return $this->IsContactPhoto;
    }
    /**
     * Set IsContactPhoto value
     * @param boolean $isContactPhoto
     * @return \Ews\StructType\EwsFileAttachmentType
     */
    public function setIsContactPhoto($isContactPhoto = null)
    {
        $this->IsContactPhoto = $isContactPhoto;
        return $this;
    }
    /**
     * Get Content value
     * @return base64Binary|null
     */
    public function getContent()
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param base64Binary $content
     * @return \Ews\StructType\EwsFileAttachmentType
     */
    public function setContent(base64Binary $content = null)
    {
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
