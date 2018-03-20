<?php

/**
 * PhalconSlayer\Framework.
 *
 * @copyright 2015-2016 Daison Carino <daison12006013@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://docs.phalconslayer.com
 */

namespace Clarity\Providers;

use Phalcon\Mvc\Model\Transaction\Manager;

/**
 * Get the 'transactionManager' service provider.
 */
class TransactionManager extends ServiceProvider
{
    /**
     * {@inheridoc}.
     */
    public function register()
    {
        $this->app->instance('transactionManager', new Manager, $singleton = true);
    }
}
