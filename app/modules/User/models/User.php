<?php
/**
 * This file is part of Vegas package
 *
 * @author Arkadiusz Ostrycharz <arkadiusz.ostrycharz@gmail.com>
 * @copyright Amsterdam Standard Sp. Z o.o.
 * @homepage http://vegas-cmf.github.io
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace User\Models;

use Auth\Models\BaseUser;

class User extends BaseUser
{
    public function beforeCreate() 
    {
        parent::beforeCreate();
        $this->generateSlug($this->email);
    }

    public function getSource()
    {
        return 'vegas_users';
    }
} 
