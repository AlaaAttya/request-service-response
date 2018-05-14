<?php

namespace App\Responses;

/**
 * Class GetPostViralityResponse
 * @package App\Responses
 */
class GetPostViralityResponse extends BaseResponse
{

    /**
     * Transform data
     *
     * @param array $data data to be transformed
     *
     * @return array
     *
     * @author Alaa Attya <alaa.attya91@gmail.com>
     */
    public function transform(array $data): array
    {
        // TODO: Implement transform() method.
        return [
            'viralityRate' => $data['rate'] ?? 0
        ];
    }
}