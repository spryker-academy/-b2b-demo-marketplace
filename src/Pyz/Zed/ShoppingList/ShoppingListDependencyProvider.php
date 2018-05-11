<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ShoppingList;

use Spryker\Zed\ProductBundle\Communication\Plugin\ShoppingList\ReplaceBundledQuoteItemsExpanderPlugin;
use Spryker\Zed\ShoppingList\ShoppingListDependencyProvider as SprykerShoppingListDependencyProvider;

class ShoppingListDependencyProvider extends SprykerShoppingListDependencyProvider
{
    /**
     * @return \Spryker\Zed\ShoppingListExtension\Dependency\Plugin\QuoteItemsExtractorExpanderPluginInterface[]
     */
    protected function getQuoteItemExpanderPlugins(): array
    {
        return [
            new ReplaceBundledQuoteItemsExpanderPlugin(),
        ];
    }
}
