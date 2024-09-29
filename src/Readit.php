<?php

namespace Pinweb\Readit;

class Readit
{
    protected string $key;

    public function __construct()
    {
        $this->key = config('readit.key');
    }

    public function create(string $url)
    {
        return config('readit.reader').'/t/'.$this->aesEncrypt($url, $this->key);
    }

    public function decrypt(string $encryptData, $return_array = false)
    {
        return json_decode($this->aesDecrypt($encryptData, $this->key), $return_array);
    }

    private function base64url_decode($data)
    {
        return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
    }

    private function base64url_encode($data)
    {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }

    private function aesEncrypt($data, $key)
    {
        return $this->base64url_encode(openssl_encrypt($data, 'aes-128-ecb', $key, OPENSSL_RAW_DATA));
    }

    private function aesDecrypt($data, $key)
    {
        return openssl_decrypt($this->base64url_decode($data), 'aes-128-ecb', $key, OPENSSL_RAW_DATA);
    }
}
