<?php
namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\PostRequest;
use App\Services\Post\PostService;
use App\Http\Controllers\Controller;

/**
 * Class PostController
 * @package App\Http\Controllers\Post
 */
class PostController extends Controller {

    /**
     * @var PostService
     */
    protected $post;

    /**
     * @param PostService $post
     */
    public function __construct(PostService $post)
    {
        $this->post = $post;
    }

    /**
     * Display a listing of Posts.
     *
     * @return Response
     */
    public function index()
    {
        $posts = $this->post->paginate();

        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new post.
     *
     * @return Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created post.
     *
     * @param PostRequest $request
     * @return Response
     */
    public function store(PostRequest $request)
    {
        $postData = $request->only(['title', 'description']);

        if($this->post->create($postData)) {
            return redirect()->back()->withSuccess('Post successfully created.');
        }

        return redirect()->back()->withError('Post could not be create.');
    }

    /**
     * Display the specified post.
     *
     * @param  int $post_id
     * @return Response
     */
    public function show($post_id)
    {
        $post = $this->post->find($post_id);

        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param  int $post_id
     * @return Response
     */
    public function edit($post_id)
    {
        $post = $this->post->find($post_id);

        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified post.
     *
     * @param PostRequest $request
     * @param  int $post_id
     * @return Response
     */
    public function update(PostRequest $request, $post_id)
    {
        $postData = $request->only(['title', 'description']);

        if($this->post->update($post_id, $postData)) {
            return redirect()->back()->withSuccess('Post successfully updated.');
        }

        return redirect()->back()->withError('Post could not be update.');
    }

    /**
     * Remove the specified post.
     *
     * @param  int $post_id
     * @return Response
     */
    public function destroy($post_id)
    {
        if($this->post->delete($post_id)) {
            return redirect()->back()->withSuccess('Post successfully deleted.');
        }

        return redirect()->back()->withError('Post could not be delete.');
    }
}
