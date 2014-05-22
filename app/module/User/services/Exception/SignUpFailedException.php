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
 
namespace User\Services\Exception;

use Vegas\Exception as VegasException;

/**
 * Class SignUpFailedException
 * @package User\Services\Exception
 */
class SignUpFailedException extends VegasException
{
    protected $message = 'Failed to create account';
} 