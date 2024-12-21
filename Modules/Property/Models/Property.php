<?php

namespace Modules\Property\Models;

use Carbon\Carbon;
use App\Models\BaseModel;
use App\Models\PropertyImage;
use Modules\Post\Enums\PostStatus;
use Spatie\Activitylog\LogOptions;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Post\Models\Presenters\PostPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends BaseModel
{
    use HasFactory;
    use LogsActivity;
    use Notifiable;
    use PostPresenter;
    use SoftDeletes;

    protected $table = 'properties';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logUnguarded()
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->useLogName($this->table);
    }

    public function category()
    {
        return $this->belongsTo('Modules\Category\Models\Category');
    }


    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }


    public function tags()
    {
        return $this->morphToMany('Modules\Tag\Models\Tag', 'taggable');
    }

    public function scopePublishedAndScheduled($query)
    {
        return $query->where('status', '=', PostStatus::Published->value);
    }

    /**
     * Get the list of Published Articles.
     *
     * @param [type] $query [description]
     * @return [type] [description]
     */
    public function scopePublished($query)
    {
        return $query->publishedAndScheduled()->where('published_at', '<=', Carbon::now());
    }

    public function scopeFeatured($query)
    {
        return $query->publishedAndScheduled()->where('is_featured', '=', 'Yes');
    }

    /**
     * Get the list of Recently Published Articles.
     *
     * @param [type] $query [description]
     * @return [type] [description]
     */
    public function scopeRecentlyPublished($query)
    {
        return $query->publishedAndScheduled()->orderBy('published_at', 'desc');
    }

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Property\database\factories\PropertyFactory::new();
    }
}
