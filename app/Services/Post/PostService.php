<?php
namespace App\Services\Post;

use App\Repositories\Post\PostRepositoryInterface;
use App\Services\Service;
use Illuminate\Contracts\Logging\Log;

/**
 * Class PostService
 * @package App\Services\Post
 */
class PostService extends Service {

    /**
     * @var PostRepositoryInterface
     */
    protected $post;
    /**
     * @var Log
     */
    protected $log;

    /**
     * @param PostRepositoryInterface $post
     * @param Log $log
     */
    public function __construct(PostRepositoryInterface $post, Log $log)
    {
        $this->post = $post;
        $this->log = $log;
    }

    /**
     * Create New Post
     *
     * @param array $postData
     * @return Post|null
     */
    public function create(array $postData)
    {
        try {
            return $this->post->create($postData);
        } catch (\Exception $e) {
            $this->logger->error('Post->create: ' . $e->getMessage());

            return null;
        }
    }

    /**
     * Post Pagination
     *
     * @param array $filter
     * @return collection
     */
    public function paginate(array $filter = [])
    {
        $filter['limit'] = 20;

        return $this->post->paginate($filter);
    }

    /**
     * Update Post
     *
     * @param array $post_id
     * @param array $postData
     * @return bool
     */
    public function update($post_id, array $postData)
    {
        try {
            $post = $this->post->find($post_id);
            $post->title = $postData['title'];
            $post->description = $postData['description'];

            return $post->save();
        } catch (\Exception $e) {
            $this->logger->error('Post->update: ' . $e->getMessage());

            return false;
        }
    }

    /**
     * Delete Post
     *
     * @param $post_id
     * @return mixed
     */
    public function delete($post_id)
    {
        try {
            $post = $this->post->find($post_id);

            return $post->delete();
        } catch (\Exception $e) {
            $this->logger->error('Post->delete: ' . $e->getMessage());

            return false;
        }
    }

    /**
     * Get Post by ID
     *
     * @param $post_id
     * @return Post
     */
    public function find($post_id)
    {
        try {
            return $this->post->find($post_id);
        } catch (\Exception $e) {
            $this->logger->error('Post->find: ' . $e->getMessage());

            return null;
        }
    }

}