<?php

namespace App\Models\Admin;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageCategory extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'page_categories';
    protected $guarded = [];

    public function pages() {
        return $this->hasMany(Page::class, 'category_id')->where('tool_status', true)->orderBy('position', 'ASC');
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'slug'
            ]
        ];
    }
}
