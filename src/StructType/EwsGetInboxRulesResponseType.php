<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInboxRulesResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetInboxRulesResponseType extends EwsResponseMessageType
{
    /**
     * The OutlookRuleBlobExists
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $OutlookRuleBlobExists = null;
    /**
     * The InboxRules
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfRulesType|null
     */
    protected ?\ArrayType\EwsArrayOfRulesType $InboxRules = null;
    /**
     * Constructor method for GetInboxRulesResponseType
     * @uses EwsGetInboxRulesResponseType::setOutlookRuleBlobExists()
     * @uses EwsGetInboxRulesResponseType::setInboxRules()
     * @param bool $outlookRuleBlobExists
     * @param \ArrayType\EwsArrayOfRulesType $inboxRules
     */
    public function __construct(?bool $outlookRuleBlobExists = null, ?\ArrayType\EwsArrayOfRulesType $inboxRules = null)
    {
        $this
            ->setOutlookRuleBlobExists($outlookRuleBlobExists)
            ->setInboxRules($inboxRules);
    }
    /**
     * Get OutlookRuleBlobExists value
     * @return bool|null
     */
    public function getOutlookRuleBlobExists(): ?bool
    {
        return $this->OutlookRuleBlobExists;
    }
    /**
     * Set OutlookRuleBlobExists value
     * @param bool $outlookRuleBlobExists
     * @return \StructType\EwsGetInboxRulesResponseType
     */
    public function setOutlookRuleBlobExists(?bool $outlookRuleBlobExists = null): self
    {
        // validation for constraint: boolean
        if (!is_null($outlookRuleBlobExists) && !is_bool($outlookRuleBlobExists)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($outlookRuleBlobExists, true), gettype($outlookRuleBlobExists)), __LINE__);
        }
        $this->OutlookRuleBlobExists = $outlookRuleBlobExists;
        
        return $this;
    }
    /**
     * Get InboxRules value
     * @return \ArrayType\EwsArrayOfRulesType|null
     */
    public function getInboxRules(): ?\ArrayType\EwsArrayOfRulesType
    {
        return $this->InboxRules;
    }
    /**
     * Set InboxRules value
     * @param \ArrayType\EwsArrayOfRulesType $inboxRules
     * @return \StructType\EwsGetInboxRulesResponseType
     */
    public function setInboxRules(?\ArrayType\EwsArrayOfRulesType $inboxRules = null): self
    {
        $this->InboxRules = $inboxRules;
        
        return $this;
    }
}
