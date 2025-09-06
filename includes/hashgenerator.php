<?php

class HashGenerator {

    public function generateHash($password) {
        if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) {
            $salt = '$2y$11$' . substr(md5(uniqid(rand(), true)), 0, 22);
            return crypt($password, $salt);
        }
    }

    public function verifyHash($password, $hashedPassword) {
        return crypt($password, $hashedPassword) == $hashedPassword;
    }

    public function generateToken($username) {
        if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) {
            $salt = '$2y$11$$$a$2$' . substr(md5(uniqid($username, true)), 0, 22);
            return crypt($username, $salt);
        }
    }

    public function verifyToken($username, $hashedToken) {
        return crypt($username, $hashedToken) == $hashedToken;
    }

}

$hasher = new HashGenerator();