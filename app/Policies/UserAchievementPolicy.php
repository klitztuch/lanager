<?php

namespace Zeropingheroes\Lanager\Policies;

use Zeropingheroes\Lanager\UserAchievement;
use Zeropingheroes\Lanager\User;

class UserAchievementPolicy extends BasePolicy
{
    /**
     * Determine whether the logged-in user can list all items.
     *
     * @param User $authUser
     * @return boolean
     */
    public function index(?User $authUser)
    {
        return true;
    }

    /**
     * Determine whether the logged-in user can view a given item.
     *
     * @param User $authUser
     * @param UserAchievement $userAchievement
     * @return boolean
     */
    public function view(?User $authUser, UserAchievement $userAchievement)
    {
        return true;
    }

    /**
     * Determine whether the logged-in user can create an item.
     *
     * @param User $authUser
     * @return boolean
     */
    public function create(User $authUser)
    {
        return $authUser->hasRole('admin');
    }

    /**
     * Determine whether the logged-in user can delete a given item.
     *
     * @param User $authUser
     * @param UserAchievement $userAchievement
     * @return boolean
     */
    public function delete(User $authUser, UserAchievement $userAchievement)
    {
        return $authUser->hasRole('admin');
    }
}
