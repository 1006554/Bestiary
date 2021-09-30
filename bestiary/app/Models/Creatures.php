<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Creatures
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $description
 * @property string|null $tags
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Creatures newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Creatures newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Creatures query()
 * @method static \Illuminate\Database\Eloquent\Builder|Creatures whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Creatures whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Creatures whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Creatures whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Creatures whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Creatures whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Creatures whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Creatures extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(Users::class);
    }
}
