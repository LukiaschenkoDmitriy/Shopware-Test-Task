<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SwagMigrationAssistant\Test;

use Shopware\Core\Framework\Log\Package;

#[Package('services-settings')]
final class Shopware5DatabaseConnection
{
    final public const DB_NAME = 'sw55';
    final public const DB_USER = 'root';
    final public const DB_PASSWORD = 'app';
    final public const DB_HOST = 'mysql';
    final public const DB_PORT = 3306;

    private function __construct()
    {
    }
}
