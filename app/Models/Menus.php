<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 * @mixin Model
 *
 * @property mixed id
 * @property mixed name
 * @property mixed href
 * @property mixed icon
 * @property mixed slug
 * @property mixed parent_id
 * @property mixed menu_list_id
 * @property mixed sequence
 * @property mixed created_at
 * @property mixed updated_at
 */
class Menus extends Model
{
    protected $table = 'menus';
    public $timestamps = false;
}
