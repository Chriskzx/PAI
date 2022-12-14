<?php

declare(strict_types=1);

namespace Laminas\Filter\Word;

use Laminas\Filter\AbstractFilter;
use Laminas\Filter\Exception;

use function is_array;
use function is_string;

/**
 * @psalm-type Options = array{
 *     separator: string,
 * }
 * @extends AbstractFilter<Options>
 */
abstract class AbstractSeparator extends AbstractFilter
{
    /** @var string */
    protected $separator = ' ';

    /**
     * @param Options|string $separator Space by default
     */
    public function __construct($separator = ' ')
    {
        if (is_array($separator) && isset($separator['separator']) && is_string($separator['separator'])) {
            $this->setSeparator($separator['separator']);

            return;
        }

        $this->setSeparator($separator);
    }

    /**
     * Sets a new separator
     *
     * @param  string $separator Separator
     * @return self
     * @throws Exception\InvalidArgumentException
     */
    public function setSeparator($separator)
    {
        if (! is_string($separator)) {
            throw new Exception\InvalidArgumentException('"' . $separator . '" is not a valid separator.');
        }
        $this->separator = $separator;
        return $this;
    }

    /**
     * Returns the actual set separator
     *
     * @return string
     */
    public function getSeparator()
    {
        return $this->separator;
    }
}
