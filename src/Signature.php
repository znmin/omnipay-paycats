<?php

namespace Omnipay\Paycats;

class Signature
{
    /**
     * @param $data
     * @return array
     */
    public static function trimEmptyParam($data): array
    {
        $result = [];

        foreach ($data as $k => $v) {
            if (trim((string)$v) === '')
                continue;

            $result[$k] = $v;
        }

        return $result;
    }

    /**
     * @param array $data
     * @param string $key
     * @return string
     */
    public static function make(array $data, string $key): string
    {
        $data = static::trimEmptyParam($data);

        ksort($data);
        $sign = strtoupper(md5(urldecode(http_build_query($data)).'&key='.$key));

        return $sign;
    }
}
