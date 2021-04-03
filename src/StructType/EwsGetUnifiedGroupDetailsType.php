<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnifiedGroupDetailsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUnifiedGroupDetailsType extends EwsUnifiedGroupBaseRequestType
{
    /**
     * The GroupDetailsResponseShape
     * Meta information extracted from the WSDL
     * - ref: t:GroupDetailsResponseShape
     * @var string|null
     */
    protected ?string $GroupDetailsResponseShape = null;
    /**
     * Constructor method for GetUnifiedGroupDetailsType
     * @uses EwsGetUnifiedGroupDetailsType::setGroupDetailsResponseShape()
     * @param string $groupDetailsResponseShape
     */
    public function __construct(?string $groupDetailsResponseShape = null)
    {
        $this
            ->setGroupDetailsResponseShape($groupDetailsResponseShape);
    }
    /**
     * Get GroupDetailsResponseShape value
     * @return string|null
     */
    public function getGroupDetailsResponseShape(): ?string
    {
        return $this->GroupDetailsResponseShape;
    }
    /**
     * Set GroupDetailsResponseShape value
     * @uses \EnumType\EwsUnifiedGroupDetailsResponseShapeType::valueIsValid()
     * @uses \EnumType\EwsUnifiedGroupDetailsResponseShapeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $groupDetailsResponseShape
     * @return \StructType\EwsGetUnifiedGroupDetailsType
     */
    public function setGroupDetailsResponseShape(?string $groupDetailsResponseShape = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsUnifiedGroupDetailsResponseShapeType::valueIsValid($groupDetailsResponseShape)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUnifiedGroupDetailsResponseShapeType', is_array($groupDetailsResponseShape) ? implode(', ', $groupDetailsResponseShape) : var_export($groupDetailsResponseShape, true), implode(', ', \EnumType\EwsUnifiedGroupDetailsResponseShapeType::getValidValues())), __LINE__);
        }
        $this->GroupDetailsResponseShape = $groupDetailsResponseShape;
        
        return $this;
    }
}
