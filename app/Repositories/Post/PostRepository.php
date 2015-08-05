<?php
namespace App\Repositories\Post;

use App\Models\Post\Post;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class PostRepository
 * @package App\Repository
 */
class PostRepository implements PostRepositoryInterface {

    /**
     * @var Post
     */
    protected $post;
    /**
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Create New Post
     *
     * @param array $postData
     * @return Post|null
     */
    public function create(array $postData)
    {
        return $this->post->create($postData);
    }

    /**
     * Post Pagination
     *
     * @param array $filter
     * @return collection
     */
    public function paginate(array $filter)
    {
        return $this->post->paginate($filter['limit']);
    }

    /**
     * Get Post by ID
     *
     * @param $post_id
     * @return Post
     */
    public function find($post_id)
    {
        return $this->post->findOrFail($post_id);
    }
}