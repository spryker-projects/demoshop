<?php

/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\Collector;

use Pyz\Yves\Category\Plugin\CategoryResourcePlugin;
use Pyz\Yves\Cms\Plugin\PageResourcePlugin;
use Pyz\Yves\Product\Plugin\ProductResourcePlugin;
use Pyz\Yves\ProductSet\Plugin\ProductSetResourcePlugin;
use Pyz\Yves\Redirect\Plugin\RedirectResourcePlugin;
use Spryker\Yves\Kernel\AbstractBundleDependencyProvider;
use Spryker\Yves\Kernel\Container;
use Spryker\Yves\Kernel\Plugin\Pimple;

class CollectorDependencyProvider extends AbstractBundleDependencyProvider
{
    const SERVICE_UTIL_DATE_TIME = 'util date time service';

    const SERVICE_NETWORK = 'util network service';

    const SERVICE_UTIL_IO = 'util io service';

    const SERVICE_DATA = 'util data service';

    const CLIENT_URL = 'CLIENT_URL';
    const CLIENT_CATALOG = 'client client';
    const PLUGIN_APPLICATION = 'application plugin';
    const PLUGIN_CATEGORY_RESOURCE_CREATOR = 'category resource plugin';
    const PLUGIN_PAGE_RESOURCE_CREATOR = 'page resource creator plugin';
    const PLUGIN_PRODUCT_RESOURCE_CREATOR = 'page product creator plugin';
    const PLUGIN_REDIRECT_RESOURCE_CREATOR = 'redirect resource creator plugin';
    const PLUGIN_PRODUCT_SET_RESOURCE_CREATOR = 'PLUGIN_PRODUCT_SET_RESOURCE_CREATOR';

    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return \Spryker\Yves\Kernel\Container
     */
    public function provideDependencies(Container $container)
    {
        $container = $this->provideClients($container);
        $container = $this->providePlugins($container);

        return $container;
    }

    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return \Spryker\Yves\Kernel\Container
     */
    protected function provideClients(Container $container)
    {
        $container[self::CLIENT_URL] = function (Container $container) {
            return $container->getLocator()->url()->client();
        };

        $container[self::CLIENT_CATALOG] = function (Container $container) {
            return $container->getLocator()->catalog()->client();
        };

        return $container;
    }

    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return \Spryker\Yves\Kernel\Container
     */
    protected function providePlugins(Container $container)
    {
        $container[self::PLUGIN_APPLICATION] = function () {
            $pimplePlugin = new Pimple();

            return $pimplePlugin->getApplication();
        };

        $container[self::PLUGIN_CATEGORY_RESOURCE_CREATOR] = function () {
            $categoryResourceCreatorPlugin = new CategoryResourcePlugin();

            return $categoryResourceCreatorPlugin->createCategoryResourceCreator();
        };

        $container[self::PLUGIN_REDIRECT_RESOURCE_CREATOR] = function () {
            $redirectResourceCreatorPlugin = new RedirectResourcePlugin();

            return $redirectResourceCreatorPlugin->createRedirectResourceCreator();
        };

        $container[self::PLUGIN_PAGE_RESOURCE_CREATOR] = function () {
            $pageResourceCreatorPlugin = new PageResourcePlugin();

            return $pageResourceCreatorPlugin->createPageResourceCreator();
        };

        $container[self::PLUGIN_PRODUCT_RESOURCE_CREATOR] = function () {
            $productResourceCreatorPlugin = new ProductResourcePlugin();

            return $productResourceCreatorPlugin->createProductResourceCreator();
        };

        $container[self::PLUGIN_PRODUCT_SET_RESOURCE_CREATOR] = function () {
            $productResourceCreatorPlugin = new ProductSetResourcePlugin();

            return $productResourceCreatorPlugin->createProductSetResourceCreator();
        };

        return $container;
    }
}
