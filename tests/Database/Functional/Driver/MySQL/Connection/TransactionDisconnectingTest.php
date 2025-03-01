<?php

declare(strict_types=1);

namespace Cycle\Database\Tests\Functional\Driver\MySQL\Connection;

// phpcs:ignore
use Cycle\Database\Tests\Functional\Driver\Common\Connection\TransactionDisconnectingTest as CommonClass;

/**
 * @group driver
 * @group driver-mysql
 */
class TransactionDisconnectingTest extends CommonClass
{
    public const DRIVER = 'mysql-mock';
}
