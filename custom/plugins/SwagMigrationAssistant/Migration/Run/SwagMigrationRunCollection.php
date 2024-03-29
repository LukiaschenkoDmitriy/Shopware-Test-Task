<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SwagMigrationAssistant\Migration\Run;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;
use Shopware\Core\Framework\Log\Package;

/**
 * @method void                        add(SwagMigrationRunEntity $entity)
 * @method void                        set(string $key, SwagMigrationRunEntity $entity)
 * @method SwagMigrationRunEntity[]    getIterator()
 * @method SwagMigrationRunEntity[]    getElements()
 * @method SwagMigrationRunEntity|null get(string $key)
 * @method SwagMigrationRunEntity|null first()
 * @method SwagMigrationRunEntity|null last()
 */
#[Package('services-settings')]
class SwagMigrationRunCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SwagMigrationRunEntity::class;
    }
}
