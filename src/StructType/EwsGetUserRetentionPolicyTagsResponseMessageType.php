<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserRetentionPolicyTagsResponseMessageType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Response message type for the GetUserRetentionPolicyTags web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUserRetentionPolicyTagsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The RetentionPolicyTags
     * Meta informations extracted from the WSDL
     * - documentation: Array of retention policy tags.
     * @var \Ews\ArrayType\EwsArrayOfRetentionPolicyTagsType
     */
    public $RetentionPolicyTags;
    /**
     * Constructor method for GetUserRetentionPolicyTagsResponseMessageType
     * @uses EwsGetUserRetentionPolicyTagsResponseMessageType::setRetentionPolicyTags()
     * @param \Ews\ArrayType\EwsArrayOfRetentionPolicyTagsType $retentionPolicyTags
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfRetentionPolicyTagsType $retentionPolicyTags = null)
    {
        $this
            ->setRetentionPolicyTags($retentionPolicyTags);
    }
    /**
     * Get RetentionPolicyTags value
     * @return \Ews\ArrayType\EwsArrayOfRetentionPolicyTagsType|null
     */
    public function getRetentionPolicyTags()
    {
        return $this->RetentionPolicyTags;
    }
    /**
     * Set RetentionPolicyTags value
     * @param \Ews\ArrayType\EwsArrayOfRetentionPolicyTagsType $retentionPolicyTags
     * @return \Ews\StructType\EwsGetUserRetentionPolicyTagsResponseMessageType
     */
    public function setRetentionPolicyTags(\Ews\ArrayType\EwsArrayOfRetentionPolicyTagsType $retentionPolicyTags = null)
    {
        $this->RetentionPolicyTags = $retentionPolicyTags;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUserRetentionPolicyTagsResponseMessageType
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
