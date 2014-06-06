<?php
/**
 * This file is part of Vegas package
 *
 * @author Slawomir Zytko <slawomir.zytko@gmail.com>
 * @copyright Amsterdam Standard Sp. Z o.o.
 * @homepage https://bitbucket.org/amsdard/vegas-phalcon
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Phalcon\DiInterface;
use Vegas\DI\ServiceProviderInterface;
use Phalcon\Mvc\Url as UrlResolver;
use \Vegas\Session\Adapter\Files as SessionAdapter;

class SessionServiceProvider implements ServiceProviderInterface
{
    const SERVICE_NAME = 'session';

    /**
     * {@inheritdoc}
     */
    public function register(DiInterface $di)
    {
        $config = $di->get('config');
        $di->set(self::SERVICE_NAME, function () use ($config) {
            $sessionAdapter = new SessionAdapter($config->session->toArray());
            if (!$sessionAdapter->isStarted()) {
                $sessionAdapter->start();
            }
            return $sessionAdapter;
        }, true);
    }
} 