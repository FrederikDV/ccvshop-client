<?php

namespace JacobDeKeizer\Ccv\Factories;

class QueryParametersArrayFactory
{
    public static function fromUrl(string $url): array
    {
        $parts = explode('?', $url, 2);

        $queryString = $parts[1] ?? null;

        if ($queryString === null) {
            return [];
        }

        $queryParameters = explode('&', $queryString);

        $data = [];

        foreach ($queryParameters as $queryParameter) {
            $queryParts = explode('=', $queryParameter, 2);
            $key = $queryParts[0] ?? null;
            $value = $queryParts[1] ?? null;

            if ($key === null) {
                continue;
            }

            $data[$key] = $value;
        }

        return $data;
    }
}