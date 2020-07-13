<?php

namespace Caneco\GithubProfileViewCounter;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    protected $fillable = ['ua', 'ip'];

    protected $table = 'x_github_profile_view_counter';
}
