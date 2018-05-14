<?php

namespace App\Responses;

/**
 * Class BaseResponse
 * @package App\Responses
 */
abstract class BaseResponse
{
    /**
     * Transform response
     *
     * @param array $data data array
     *
     * @return array
     *
     * @author Alaa Attya <alaa.attya91@gmail.com>
     */
    abstract public function transform(array $data): array;
}