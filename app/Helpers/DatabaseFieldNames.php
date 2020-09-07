<?php

namespace App\Helpers;

abstract class DatabaseFieldNames
{
    const LOGIN = 'name';
    const TOKEN = 'token';
    const FIRST_NAME = 'first_name';
    const LAST_NAME = 'last_name';
    const PASSWORD = 'password';
    const EMAIL = 'email';
    const EMAIL_VERIFY = 'email_verified_at';
    const BIRTHDAY = 'birthday';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const ROLE_NAME = 'role_name';
    const USER_ROLE_ID = 'user_role_id';
    const PERMISSIONS = 'permissions';
    const TITLE = 'title';
    const DESCRIPTION = 'description';
    const CONTENT = 'content';
}
