<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Worksheet extends Model
{
    protected $table = 'worksheets';

    public function educations(): BelongsToMany
    {
        return $this->belongsToMany(Item::class, 'worksheet_educations', 'worksheet_id','education_id');
    }
    public function equipments(): BelongsToMany
    {
        return $this->belongsToMany(Item::class, 'worksheet_equipments', 'worksheet_id','equipment_id');
    }

    public function  khatarat(): BelongsTo
    {
        return $this->belongsTo(Item::class, 'khatarat_id');
    }
}
