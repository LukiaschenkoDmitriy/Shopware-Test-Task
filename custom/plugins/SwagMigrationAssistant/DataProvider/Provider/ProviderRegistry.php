<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SwagMigrationAssistant\DataProvider\Provider;

use Shopware\Core\Framework\Log\Package;
use SwagMigrationAssistant\DataProvider\Exception\ProviderNotFoundException;

#[Package('services-settings')]
class ProviderRegistry implements ProviderRegistryInterface
{
    /**
     * @param ProviderInterface[]|iterable $providers
     */
    public function __construct(private readonly iterable $providers)
    {
    }

    public function getDataProvider(string $identifier): ProviderInterface
    {
        foreach ($this->providers as $provider) {
            if ($provider->getIdentifier() === $identifier) {
                return $provider;
            }
        }

        throw new ProviderNotFoundException($identifier);
    }

    public function getDataProviderArray(array $identifierArray): array
    {
        $providerLookup = [];
        $providerArray = [];

        foreach ($this->providers as $provider) {
            $providerLookup[$provider->getIdentifier()] = $provider;
        }

        foreach ($identifierArray as $identifier) {
            if (isset($providerLookup[$identifier])) {
                $providerArray[$identifier] = $providerLookup[$identifier];
            }
        }

        return $providerArray;
    }

    public function getAllDataProviders(): array
    {
        $providers = [];
        foreach ($this->providers as $provider) {
            $providers[$provider->getIdentifier()] = $provider;
        }

        return $providers;
    }
}
