<?php

namespace App\Policies;

use App\Post;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user may manage a project.
     *
     * @param  User    $user
     * @param  Post $post
     * @return bool
     */
    public function manage(User $user, Post $post)
    {
        return $user->is($post->owner);
    }

    /**
     * Determine if the user may update the project.
     *
     * @param  User    $user
     * @param  Project $project
     * @return bool
     */
        
    public function update(User $user, Post $post)
    {
        return $user->is($post->owner);

        //or use this auth in controller@update to authorize/authenticate, only the project owner can update a task
        // if (auth()->user()->isNot($project->owner)) {
        //     abort(403);
        // } 

    }
}
