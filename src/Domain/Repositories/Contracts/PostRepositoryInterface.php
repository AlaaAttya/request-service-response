<?php

namespace App\Domain\Repositories\Contracts;

interface PostRepositoryInterface
{
    /**
     * Aggregate post count
     *
     * @param string $postId post id
     *
     * @return int
     *
     * @author Alaa Attya <alaa.attya91@gamil.com>
     */
    public function getCommentsCountAggregate(string $postId): int;

    /**
     * Calculate the top post based on comments count
     *
     * @return int
     *
     * @author Alaa Attya <alaa.attya91@gamil.com>
     */
    public function getTopPostCommentsCount(): int;
}