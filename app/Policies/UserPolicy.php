<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    use HandlesAuthorization;

    public function selectRole(User $user): Response
    {
        return ! is_null($user->individual)
            ? Response::allow()
            : Response::deny(__('You cannot select a role.'));
    }

    public function editRolesAndPermissions(User $user): Response
    {
        return ($user->context == 'regulated-organization' && $user->regulatedOrganization) || ($user->context == 'organization' && $user->organization)
            ? Response::allow()
            : Response::deny(__('You must belong to an :organization in order to manage its roles and permissions.', [
                'organization' => match ($user->context) {
                    'regulated-organization' => __('regulated organization'),
                    default => __('organization.singular_name')
                },
            ]));
    }
}
