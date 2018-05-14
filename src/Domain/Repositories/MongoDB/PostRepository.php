<?php

namespace App\Domain\Repositories\MongoDB;

use App\Domain\Repositories\Contracts\PostRepositoryInterface;

/**
 * Class PostRepository
 * @package App\Domain\Repositories\MongoDB
 */
class PostRepository implements PostRepositoryInterface
{

    /**
     * Return post comments using mongodb count aggregation
     *
     * @param string $postId post id
     *
     * @return int
     *
     * @author Alaa Attya <alaa.attya91@gamil.com>
     */
    public function getCommentsCountAggregate(string $postId): int
    {
        // TODO: Implement getCommentsCountAggregate() method.
        return 3;
    }

    /**
     * Calculate the top post based on comments count
     *
     * @return int
     *
     * @author Alaa Attya <alaa.attya91@gamil.com>
     */
    public function getTopPostCommentsCount(): int
    {
        // TODO: Implement getTopPostCommentsCount() method.
        return 7;
    }
}
