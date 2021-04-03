<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPeopleInsightsTokensType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetPeopleInsightsTokensType extends EwsBaseRequestType
{
    /**
     * The AppId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AppId = null;
    /**
     * Constructor method for GetPeopleInsightsTokensType
     * @uses EwsGetPeopleInsightsTokensType::setAppId()
     * @param string $appId
     */
    public function __construct(?string $appId = null)
    {
        $this
            ->setAppId($appId);
    }
    /**
     * Get AppId value
     * @return string|null
     */
    public function getAppId(): ?string
    {
        return $this->AppId;
    }
    /**
     * Set AppId value
     * @param string $appId
     * @return \StructType\EwsGetPeopleInsightsTokensType
     */
    public function setAppId(?string $appId = null): self
    {
        // validation for constraint: string
        if (!is_null($appId) && !is_string($appId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appId, true), gettype($appId)), __LINE__);
        }
        $this->AppId = $appId;
        
        return $this;
    }
}
