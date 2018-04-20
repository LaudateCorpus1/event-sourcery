<?php namespace EventSourcery\PersonalData;

use Ramsey\Uuid\Uuid;

class Pbkdf2EncryptionKey implements EncryptionKey {

    public static function generate(): EncryptionKey {
        return new static(hash_pbkdf2('sha256', Uuid::uuid4()->toString(), openssl_random_pseudo_bytes(16), 1000, 20));
    }

    public function toString(): string {
        return base64_encode($this->key);
    }

    public static function fromString($string) {
        return new static(base64_decode($string));
    }

    private $key;

    private function __construct($key) {
        $this->key = $key;
    }
}