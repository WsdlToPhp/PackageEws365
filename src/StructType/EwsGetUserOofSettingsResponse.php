<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserOofSettingsResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:GetUserOofSettingsResponse
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUserOofSettingsResponse extends AbstractStructBase
{
    /**
     * The ResponseMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $ResponseMessage;
    /**
     * The OofSettings
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: t:OofSettings
     * @var \Ews\StructType\EwsUserOofSettings
     */
    public $OofSettings;
    /**
     * The AllowExternalOof
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AllowExternalOof;
    /**
     * Constructor method for GetUserOofSettingsResponse
     * @uses EwsGetUserOofSettingsResponse::setResponseMessage()
     * @uses EwsGetUserOofSettingsResponse::setOofSettings()
     * @uses EwsGetUserOofSettingsResponse::setAllowExternalOof()
     * @param \Ews\StructType\EwsResponseMessageType $responseMessage
     * @param \Ews\StructType\EwsUserOofSettings $oofSettings
     * @param string $allowExternalOof
     */
    public function __construct(\Ews\StructType\EwsResponseMessageType $responseMessage = null, \Ews\StructType\EwsUserOofSettings $oofSettings = null, $allowExternalOof = null)
    {
        $this
            ->setResponseMessage($responseMessage)
            ->setOofSettings($oofSettings)
            ->setAllowExternalOof($allowExternalOof);
    }
    /**
     * Get ResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType
     */
    public function getResponseMessage()
    {
        return $this->ResponseMessage;
    }
    /**
     * Set ResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType $responseMessage
     * @return \Ews\StructType\EwsGetUserOofSettingsResponse
     */
    public function setResponseMessage(\Ews\StructType\EwsResponseMessageType $responseMessage = null)
    {
        $this->ResponseMessage = $responseMessage;
        return $this;
    }
    /**
     * Get OofSettings value
     * @return \Ews\StructType\EwsUserOofSettings|null
     */
    public function getOofSettings()
    {
        return $this->OofSettings;
    }
    /**
     * Set OofSettings value
     * @param \Ews\StructType\EwsUserOofSettings $oofSettings
     * @return \Ews\StructType\EwsGetUserOofSettingsResponse
     */
    public function setOofSettings(\Ews\StructType\EwsUserOofSettings $oofSettings = null)
    {
        $this->OofSettings = $oofSettings;
        return $this;
    }
    /**
     * Get AllowExternalOof value
     * @return string|null
     */
    public function getAllowExternalOof()
    {
        return $this->AllowExternalOof;
    }
    /**
     * Set AllowExternalOof value
     * @uses \Ews\EnumType\EwsExternalAudience::valueIsValid()
     * @uses \Ews\EnumType\EwsExternalAudience::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $allowExternalOof
     * @return \Ews\StructType\EwsGetUserOofSettingsResponse
     */
    public function setAllowExternalOof($allowExternalOof = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsExternalAudience::valueIsValid($allowExternalOof)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsExternalAudience', is_array($allowExternalOof) ? implode(', ', $allowExternalOof) : var_export($allowExternalOof, true), implode(', ', \Ews\EnumType\EwsExternalAudience::getValidValues())), __LINE__);
        }
        $this->AllowExternalOof = $allowExternalOof;
        return $this;
    }
}
