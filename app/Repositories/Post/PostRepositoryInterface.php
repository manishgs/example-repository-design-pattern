<?php
namespace App\Repositories\Post;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

/**
 * Interface PostRepositoryInterface
 * @package App\Repository
 */
interface PostRepositoryInterface {

    /**
     * Create New Post
     *
     * @param array $postData
     * @return Post
     */
    public function create(array $postData);

    /**
     * Post Pagination
     *
     * @param array $filter
     * @return collection
     */
    public function paginate(array $filter);

    /**
     * Get Post by ID
     * @param $post_id
     * @return Post
     */
    public function find($post_id);
}
