<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Worksheet extends Model
{
    protected $table = 'worksheets';

    protected $fillable = [
        'vahed'                 ,
        'shoghl'                ,
        'name'                  ,
        'sath_shghl'            ,
        'image'                 ,
        'khatarat_id'           ,
        'payamadha'             ,
        'firstRisk_num_shedat'  ,
        'firstRisk_num_ehtemal' ,
        'firstRisk_num_risk'    ,
        'controls'              ,
        'sathRisk_num_shedat'   ,
        'sathRisk_num_ehtemal'  ,
        'sathRisk_num_risk'     ,
        'rahkar'                ,
        'masool_eghdam'         ,
    ];

    public function educations(): BelongsToMany
    {
        return $this->belongsToMany(Item::class, 'worksheet_educations', 'worksheet_id','education_id');
    }
    public function equipments(): BelongsToMany
    {
        return $this->belongsToMany(Item::class, 'worksheet_equimpents', 'worksheet_id','equipment_id');
    }

    public function  khatarat(): BelongsTo
    {
        return $this->belongsTo(Item::class, 'khatarat_id');
    }
}
