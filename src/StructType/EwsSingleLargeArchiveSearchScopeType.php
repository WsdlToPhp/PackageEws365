<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SingleLargeArchiveSearchScopeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSingleLargeArchiveSearchScopeType extends AbstractStructBase
{
    /**
     * The MailboxGuid
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string|null
     */
    protected ?string $MailboxGuid = null;
    /**
     * The FolderScope
     * @var \StructType\EwsSearchFolderScopeType|null
     */
    protected ?\StructType\EwsSearchFolderScopeType $FolderScope = null;
    /**
     * The IsDeepTraversal
     * @var bool|null
     */
    protected ?bool $IsDeepTraversal = null;
    /**
     * Constructor method for SingleLargeArchiveSearchScopeType
     * @uses EwsSingleLargeArchiveSearchScopeType::setMailboxGuid()
     * @uses EwsSingleLargeArchiveSearchScopeType::setFolderScope()
     * @uses EwsSingleLargeArchiveSearchScopeType::setIsDeepTraversal()
     * @param string $mailboxGuid
     * @param \StructType\EwsSearchFolderScopeType $folderScope
     * @param bool $isDeepTraversal
     */
    public function __construct(?string $mailboxGuid = null, ?\StructType\EwsSearchFolderScopeType $folderScope = null, ?bool $isDeepTraversal = null)
    {
        $this
            ->setMailboxGuid($mailboxGuid)
            ->setFolderScope($folderScope)
            ->setIsDeepTraversal($isDeepTraversal);
    }
    /**
     * Get MailboxGuid value
     * @return string|null
     */
    public function getMailboxGuid(): ?string
    {
        return $this->MailboxGuid;
    }
    /**
     * Set MailboxGuid value
     * @param string $mailboxGuid
     * @return \StructType\EwsSingleLargeArchiveSearchScopeType
     */
    public function setMailboxGuid(?string $mailboxGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($mailboxGuid) && !is_string($mailboxGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailboxGuid, true), gettype($mailboxGuid)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($mailboxGuid) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $mailboxGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($mailboxGuid, true)), __LINE__);
        }
        $this->MailboxGuid = $mailboxGuid;
        
        return $this;
    }
    /**
     * Get FolderScope value
     * @return \StructType\EwsSearchFolderScopeType|null
     */
    public function getFolderScope(): ?\StructType\EwsSearchFolderScopeType
    {
        return $this->FolderScope;
    }
    /**
     * Set FolderScope value
     * @param \StructType\EwsSearchFolderScopeType $folderScope
     * @return \StructType\EwsSingleLargeArchiveSearchScopeType
     */
    public function setFolderScope(?\StructType\EwsSearchFolderScopeType $folderScope = null): self
    {
        $this->FolderScope = $folderScope;
        
        return $this;
    }
    /**
     * Get IsDeepTraversal value
     * @return bool|null
     */
    public function getIsDeepTraversal(): ?bool
    {
        return $this->IsDeepTraversal;
    }
    /**
     * Set IsDeepTraversal value
     * @param bool $isDeepTraversal
     * @return \StructType\EwsSingleLargeArchiveSearchScopeType
     */
    public function setIsDeepTraversal(?bool $isDeepTraversal = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeepTraversal) && !is_bool($isDeepTraversal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeepTraversal, true), gettype($isDeepTraversal)), __LINE__);
        }
        $this->IsDeepTraversal = $isDeepTraversal;
        
        return $this;
    }
}
