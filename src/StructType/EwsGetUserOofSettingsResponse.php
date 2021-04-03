<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsResponseMessageType
     */
    protected \StructType\EwsResponseMessageType $ResponseMessage;
    /**
     * The OofSettings
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: t:OofSettings
     * @var \StructType\EwsUserOofSettings|null
     */
    protected ?\StructType\EwsUserOofSettings $OofSettings = null;
    /**
     * The AllowExternalOof
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AllowExternalOof = null;
    /**
     * Constructor method for GetUserOofSettingsResponse
     * @uses EwsGetUserOofSettingsResponse::setResponseMessage()
     * @uses EwsGetUserOofSettingsResponse::setOofSettings()
     * @uses EwsGetUserOofSettingsResponse::setAllowExternalOof()
     * @param \StructType\EwsResponseMessageType $responseMessage
     * @param \StructType\EwsUserOofSettings $oofSettings
     * @param string $allowExternalOof
     */
    public function __construct(\StructType\EwsResponseMessageType $responseMessage, ?\StructType\EwsUserOofSettings $oofSettings = null, ?string $allowExternalOof = null)
    {
        $this
            ->setResponseMessage($responseMessage)
            ->setOofSettings($oofSettings)
            ->setAllowExternalOof($allowExternalOof);
    }
    /**
     * Get ResponseMessage value
     * @return \StructType\EwsResponseMessageType
     */
    public function getResponseMessage(): \StructType\EwsResponseMessageType
    {
        return $this->ResponseMessage;
    }
    /**
     * Set ResponseMessage value
     * @param \StructType\EwsResponseMessageType $responseMessage
     * @return \StructType\EwsGetUserOofSettingsResponse
     */
    public function setResponseMessage(\StructType\EwsResponseMessageType $responseMessage): self
    {
        $this->ResponseMessage = $responseMessage;
        
        return $this;
    }
    /**
     * Get OofSettings value
     * @return \StructType\EwsUserOofSettings|null
     */
    public function getOofSettings(): ?\StructType\EwsUserOofSettings
    {
        return $this->OofSettings;
    }
    /**
     * Set OofSettings value
     * @param \StructType\EwsUserOofSettings $oofSettings
     * @return \StructType\EwsGetUserOofSettingsResponse
     */
    public function setOofSettings(?\StructType\EwsUserOofSettings $oofSettings = null): self
    {
        $this->OofSettings = $oofSettings;
        
        return $this;
    }
    /**
     * Get AllowExternalOof value
     * @return string|null
     */
    public function getAllowExternalOof(): ?string
    {
        return $this->AllowExternalOof;
    }
    /**
     * Set AllowExternalOof value
     * @uses \EnumType\EwsExternalAudience::valueIsValid()
     * @uses \EnumType\EwsExternalAudience::getValidValues()
     * @throws InvalidArgumentException
     * @param string $allowExternalOof
     * @return \StructType\EwsGetUserOofSettingsResponse
     */
    public function setAllowExternalOof(?string $allowExternalOof = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsExternalAudience::valueIsValid($allowExternalOof)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsExternalAudience', is_array($allowExternalOof) ? implode(', ', $allowExternalOof) : var_export($allowExternalOof, true), implode(', ', \EnumType\EwsExternalAudience::getValidValues())), __LINE__);
        }
        $this->AllowExternalOof = $allowExternalOof;
        
        return $this;
    }
}
