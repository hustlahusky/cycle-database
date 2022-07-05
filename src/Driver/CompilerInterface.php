<?php

/**
 * This file is part of Cycle ORM package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Cycle\Database\Driver;

use Cycle\Database\Injection\FragmentInterface;
use Cycle\Database\Query\QueryParameters;
use Spiral\Database\Injection\FragmentInterface as SpiralFragmentInterface;
use Spiral\Database\Query\QueryParameters as SpiralQueryParameters;
use Spiral\Database\Driver\CompilerInterface as SpiralCompilerInterface;

interface_exists(SpiralFragmentInterface::class);
class_exists(SpiralQueryParameters::class);

interface CompilerInterface
{
    // indicates the fragment type to be handled by query compiler
    public const FRAGMENT = 1;
    public const EXPRESSION = 2;
    public const INSERT_QUERY = 4;
    public const SELECT_QUERY = 5;
    public const UPDATE_QUERY = 6;
    public const DELETE_QUERY = 7;

    public const TOKEN_AND = '@AND';
    public const TOKEN_OR = '@OR';

    /**
     * @param string $identifier
     *
     * @return string
     */
    public function quoteIdentifier(string $identifier): string;

    /**
     * Compile the query fragment.
     *
     * @param QueryParameters   $params
     * @param string            $prefix
     * @param FragmentInterface $fragment
     *
     * @return string
     */
    public function compile(
        SpiralQueryParameters $params,
        string $prefix,
        SpiralFragmentInterface $fragment
    ): string;
}
\class_alias(CompilerInterface::class, SpiralCompilerInterface::class, false);
