<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FeeProposalStageItemResource extends Model
{
    use HasFactory;

    public function item(): BelongsTo
    {
        return $this->belongsTo(FeeProposalStageItem::class);
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted(): void
    {
        static::created(function ($resource) {
            if ($resource->item->price == 0 && $resource->rate != 0 && $resource->hours != 0) {
                $resource->item->price = $resource->hours * $resource->rate;
                $resource->save();
            }
        });
    }
}
