<?php
/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\WebProfiler\Communication\Plugin\ServiceProvider;

use Silex\Application;
use Silex\ControllerProviderInterface;
use Silex\ServiceProviderInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \Pyz\Zed\WebProfiler\Communication\WebProfilerCommunicationFactory getFactory()
 * @method \Pyz\Zed\WebProfiler\WebProfilerConfig getConfig()
 */
class WebProfilerServiceProvider extends AbstractPlugin implements ServiceProviderInterface, ControllerProviderInterface
{
    /**
     * @var \Silex\ServiceProviderInterface[]
     */
    protected $webProfiler;

    /**
     * @param \Silex\Application $app
     *
     * @return void
     */
    public function register(Application $app)
    {
        if ($this->getConfig()->isWebProfilerEnabled()) {
            foreach ($this->getWebProfiler() as $webProfiler) {
                $webProfiler->register($app);
            }
        }
    }

    /**
     * @param \Silex\Application $app
     *
     * @return void
     */
    public function boot(Application $app)
    {
        if ($this->getConfig()->isWebProfilerEnabled()) {
            foreach ($this->getWebProfiler() as $webProfiler) {
                $webProfiler->boot($app);
            }
        }
    }

    /**
     * @param \Silex\Application $app
     *
     * @return void
     */
    public function connect(Application $app)
    {
        if ($this->getConfig()->isWebProfilerEnabled()) {
            foreach ($this->getWebProfiler() as $webProfiler) {
                if ($webProfiler instanceof ControllerProviderInterface) {
                    $webProfiler->connect($app);
                }
            }
        }
    }

    /**
     * @return \Silex\ServiceProviderInterface[]
     */
    protected function getWebProfiler()
    {
        if (!$this->webProfiler) {
            $this->webProfiler = $this->getFactory()->getWebProfiler();
        }

        return $this->webProfiler;
    }
}
