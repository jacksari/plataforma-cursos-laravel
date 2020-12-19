<?php

namespace App\Policies;

use App\Models\Courses;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class CoursePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Courses  $courses
     * @return mixed
     */
    public function view(User $user, Courses $courses)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Courses  $courses
     * @return mixed
     */
    public function update(User $user, Courses $courses)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Courses  $courses
     * @return mixed
     */
    public function delete(User $user, Courses $courses)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Courses  $courses
     * @return mixed
     */
    public function restore(User $user, Courses $courses)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Courses  $courses
     * @return mixed
     */
    public function forceDelete(User $user, Courses $courses)
    {
        //
    }
    public function enrolled(User $user, Courses $courses)
    {
        return $courses->students->contains($user->id);

    }


}
