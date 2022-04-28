<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = 'orders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'id',
        "paper_topic",
        "paper_type",
        "deadline",
        "subject_area",
        "number_of_pages",
        "academic_level",
        "reference",
        "style",
        "cost_per_page",
        "total_price",
        "detail",
        "name",
        "email",
        "country",
        "phone",
        "language",
        "spacing",
        "is_complete",
    ];

    public function files()
    {
        return $this->hasMany(File::class);
    }
    
    public function deadline()
    {
        return $this->belongsTo(Deadline::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, "subject_area", "id");
    }

}
