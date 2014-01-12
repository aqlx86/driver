<?php
/**
 * @license MIT
 * Full license text in LICENSE file
 */

namespace Driver\Core\Encryptor;

class Native
{
    public function hash_password($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
}
