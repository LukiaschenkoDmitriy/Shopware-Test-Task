<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SwagMigrationAssistant\Migration\Service;

use Shopware\Core\Framework\Log\Package;
use Shopware\Core\Framework\Struct\Struct;

#[Package('services-settings')]
class SwagMigrationAccessTokenStruct extends Struct
{
    public function __construct(
        protected string $runUuid,
        protected string $accessToken
    ) {
    }
}
