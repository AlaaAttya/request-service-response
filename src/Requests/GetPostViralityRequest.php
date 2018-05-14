<?php

namespace App\Requests;

use App\Domain\Repositories\Contracts\PostRepositoryInterface;
use App\Domain\Services\PostService;
use Klein\Request;

class GetPostViralityRequest extends BaseRequest
{
    /**
     * @var PostRepositoryInterface
     */
    private $postRepository;

    /**
     * GetPostViralityRequest constructor.
     *
     * @param Request                 $request        request data object
     * @param PostRepositoryInterface $postRepository post repository
     */
    public function __construct(Request $request, PostRepositoryInterface $postRepository)
    {
        $this->request        = $request;
        $this->postRepository = $postRepository;
    }

    /**
     * DESC
     *
     * @return mixed
     *
     * @author Alaa Attya <alaa.attya91@gamil.com>
     */
    public function validate()
    {
        // TODO: Implement validate() method.
        return $this;
    }

    /**
     * DESC
     * @return mixed
     *
     * @author Alaa Attya <alaa.attya91@gamil.com>
     */
    public function process()
    {
        $postId = $this->request->param('postId');
        return (new PostService($this->postRepository))->getPostViralityRate($postId);
    }
}