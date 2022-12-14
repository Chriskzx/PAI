<?php

declare(strict_types=1);

namespace Laminas\Filter;

use function is_scalar;
use function mb_strtolower;

/** @psalm-import-type UnicodeOptions from AbstractUnicode */
class StringToLower extends AbstractUnicode
{
    /**
     * @param string|UnicodeOptions|iterable|null $encodingOrOptions
     */
    public function __construct($encodingOrOptions = null)
    {
        if ($encodingOrOptions !== null) {
            if (! static::isOptions($encodingOrOptions)) {
                $this->setEncoding($encodingOrOptions);
            } else {
                $this->setOptions($encodingOrOptions);
            }
        }
    }

    /**
     * Defined by Laminas\Filter\FilterInterface
     *
     * Returns the string $value, converting characters to lowercase as necessary
     *
     * If the value provided is non-scalar, the value will remain unfiltered
     *
     * @param mixed $value
     * @return string|mixed
     * @psalm-return ($value is string ? string : $value)
     */
    public function filter($value)
    {
        if (! is_scalar($value)) {
            return $value;
        }

        return mb_strtolower((string) $value, $this->getEncoding());
    }
}
