<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Creature
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $description
 * @property string|null $tags
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Creature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Creature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Creature query()
 * @method static \Illuminate\Database\Eloquent\Builder|Creature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Creature whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Creature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Creature whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Creature whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Creature whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Creature whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Creature extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'description',
        'tags',
    ];

    protected $table = 'creatures';

    public $timestamps = true;

    public function users()
    {
        return $this->belongsTo(User::class);
    }




}
