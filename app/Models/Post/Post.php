<?php
namespace App\Models\Post;

use Illuminate\Database\Eloquent\Model;

/**
 * @property  title
 * @property  description
 */
class Post extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description'];

}