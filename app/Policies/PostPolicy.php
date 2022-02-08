<?php

namespace App\Policies;

use App\Models\Model\admin\admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Model\user\admin  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Model\user\admin  $user
     * @param  \App\Models\post  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Model\user\admin  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(admin $user)
    {
        return $this->getPermission($user, 4);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Model\user\admin  $user
     * @param  \App\Models\post  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(admin $user)
    {
        return $this->getPermission($user, 5);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Model\user\admin  $user
     * @param  \App\Models\post  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(admin $user)
    {
        return $this->getPermission($user, 6);
    }
    protected function getPermission($user, $p_id)
    {
        foreach($user->roles as $role){
            foreach($role->permissions as $permission){
                if($permission->id == $p_id){
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Model\user\admin  $user
     * @param  \App\Models\post  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(admin $user, post $post)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Model\user\admin  $user
     * @param  \App\Models\post  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(admin $user, post $post)
    {
        //
    }
}
