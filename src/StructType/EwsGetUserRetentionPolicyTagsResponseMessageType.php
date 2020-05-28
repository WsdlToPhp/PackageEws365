<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserRetentionPolicyTagsResponseMessageType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response message type for the GetUserRetentionPolicyTags web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUserRetentionPolicyTagsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The RetentionPolicyTags
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
}
