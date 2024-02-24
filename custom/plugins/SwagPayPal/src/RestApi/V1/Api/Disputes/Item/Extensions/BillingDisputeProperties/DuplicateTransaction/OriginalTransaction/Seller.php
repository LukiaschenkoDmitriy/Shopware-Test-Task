<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\RestApi\V1\Api\Disputes\Item\Extensions\BillingDisputeProperties\DuplicateTransaction\OriginalTransaction;

use Shopware\Core\Framework\Log\Package;
use Swag\PayPal\RestApi\V1\Api\Disputes\Common\Seller as CommonSeller;

#[Package('checkout')]
class Seller extends CommonSeller
{
}
