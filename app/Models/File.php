<?php

namespace App\Models;

use App\Traits\HasCreatorAndUpdater;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;

/**
 * @property int $id
 * @property string $name
 * @property string|null $path
 * @property int $is_folder
 * @property string|null $mime
 * @property mixed|null $size
 * @property mixed $_lft
 * @property mixed $_rgt
 * @property mixed|null $parent_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Kalnoy\Nestedset\Collection all(array|mixed $columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder query()
 * @mixin \Kalnoy\Nestedset\QueryBuilder
 */
class File extends Model
{
    use HasCreatorAndUpdater, NodeTrait, SoftDeletes;
}
