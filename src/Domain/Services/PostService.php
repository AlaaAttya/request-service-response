<?php

namespace App\Domain\Services;

use App\Domain\Repositories\Contracts\PostRepositoryInterface;

/**
 * This class will hold some business logic related to the Post resource
 *
 * Class PostService
 * @package App\Domain\Services
 */
class PostService
{
    /**
     * @var PostRepositoryInterface
     */
    private $postRepository;

    /**
     * PostService constructor.
     *
     * @param PostRepositoryInterface $postRepository post repository
     */
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * Count post comments
     * Here we have the business logic behind
     *
     * @param string $postId post id
     *
     * @return int
     *
     * @author Alaa Attya <alaa.attya@tajawal.com>
     */
    public function getPostViralityRate(string $postId = ''): float
    {
        $postCommentsCount    = $this->postRepository->getCommentsCountAggregate($postId);
        $topPostCommentsCount = $this->postRepository->getTopPostCommentsCount();

        return ($postCommentsCount / $topPostCommentsCount) * 100;
    }
}