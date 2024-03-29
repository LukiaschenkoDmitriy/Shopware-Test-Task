<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use PhpCsFixer\Fixer\Alias\MbStrFunctionsFixer;
use PhpCsFixer\Fixer\Comment\HeaderCommentFixer;
use PhpCsFixer\Fixer\FunctionNotation\NativeFunctionInvocationFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set(HeaderCommentFixer::class)
        ->call('configure', [['header' => '(c) shopware AG <info@shopware.com>
For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.', 'separate' => 'bottom', 'location' => 'after_declare_strict', 'comment_type' => 'comment']]);

    $services->set(NativeFunctionInvocationFixer::class)
        ->call('configure', [[
            'include' => [NativeFunctionInvocationFixer::SET_ALL],
            'scope' => 'namespaced',
        ]]);

    $services->set(MbStrFunctionsFixer::class);

    $parameters = $containerConfigurator->parameters();

    $parameters->set('cache_directory', __DIR__ . '/var/cache/cs_fixer');

    $parameters->set('cache_namespace', 'SwagMigrationAssistant');

    $parameters->set('paths', [
        __DIR__ . '/Command',
        __DIR__ . '/Controller',
        __DIR__ . '/Core',
        __DIR__ . '/DataProvider',
        __DIR__ . '/DependencyInjection',
        __DIR__ . '/Exception',
        __DIR__ . '/Migration',
        __DIR__ . '/Profile',
        __DIR__ . '/Resources',
        __DIR__ . '/Test',
        __DIR__ . '/ecs.php',
        __DIR__ . '/SwagMigrationAssistant.php',
    ]);
};
