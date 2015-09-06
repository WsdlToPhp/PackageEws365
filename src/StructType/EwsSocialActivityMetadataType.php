<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SocialActivityMetadataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSocialActivityMetadataType extends AbstractStructBase
{
    /**
     * The TargetGroupName
     * @var string
     */
    public $TargetGroupName;
    /**
     * The MessagePreview
     * @var string
     */
    public $MessagePreview;
    /**
     * Constructor method for SocialActivityMetadataType
     * @uses EwsSocialActivityMetadataType::setTargetGroupName()
     * @uses EwsSocialActivityMetadataType::setMessagePreview()
     * @param string $targetGroupName
     * @param string $messagePreview
     */
    public function __construct($targetGroupName = null, $messagePreview = null)
    {
        $this
            ->setTargetGroupName($targetGroupName)
            ->setMessagePreview($messagePreview);
    }
    /**
     * Get TargetGroupName value
     * @return string|null
     */
    public function getTargetGroupName()
    {
        return $this->TargetGroupName;
    }
    /**
     * Set TargetGroupName value
     * @param string $targetGroupName
     * @return \Ews\StructType\EwsSocialActivityMetadataType
     */
    public function setTargetGroupName($targetGroupName = null)
    {
        $this->TargetGroupName = $targetGroupName;
        return $this;
    }
    /**
     * Get MessagePreview value
     * @return string|null
     */
    public function getMessagePreview()
    {
        return $this->MessagePreview;
    }
    /**
     * Set MessagePreview value
     * @param string $messagePreview
     * @return \Ews\StructType\EwsSocialActivityMetadataType
     */
    public function setMessagePreview($messagePreview = null)
    {
        $this->MessagePreview = $messagePreview;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSocialActivityMetadataType
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
