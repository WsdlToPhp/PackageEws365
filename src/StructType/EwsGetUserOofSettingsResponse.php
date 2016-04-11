<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserOofSettingsResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:GetUserOofSettingsResponse
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUserOofSettingsResponse extends AbstractStructBase
{
    /**
     * The ResponseMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $ResponseMessage;
    /**
     * The OofSettings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: t:OofSettings
     * @var \Ews\StructType\EwsUserOofSettings
     */
    public $OofSettings;
    /**
     * The AllowExternalOof
     * Meta informations extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $allowExternalOof, implode(', ', \Ews\EnumType\EwsExternalAudience::getValidValues())), __LINE__);
        }
        $this->AllowExternalOof = $allowExternalOof;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUserOofSettingsResponse
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
