<?php
/**
 * This file is part of Vegas package
 *
 * @author Slawomir Zytko <slawek@amsterdam-standard.pl>
 * @copyright Amsterdam Standard Sp. Z o.o.
 * @homepage http://vegas-cmf.github.io
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Phalcon\DiInterface;
use Vegas\DI\ServiceProviderInterface;

class UserPasswordManagerServiceProvider implements ServiceProviderInterface
{
    const SERVICE_NAME = 'userPasswordManager';

    /**
     * {@inheritdoc}
     */
    public function register(DiInterface $di)
    {
        $di->set(self::SERVICE_NAME, '\Vegas\Security\Password\Adapter\Standard', true);
    }

    /**
     * {@inheritdoc}
     */
    public function getDependencies()
    {
        return [];
    }
} 