<?php

namespace App\Core\Domain\Models\Eloquents\VerificationType;

use Illuminate\Database\Eloquent\Model;

class VerificationType extends model
{
    // Specify the table name
    protected $table = '';

    // Allow these attributes to be mass-assigned
    protected $fillable = [''];

    // Guard these attributes from mass-assignment
    protected $guarded = ['id'];

    // Hide these attributes from serialization
    protected $hidden = [''];

    // Specify the primary key column name
    protected $primaryKey = 'user_id';

    // Disable automatic timestamp columns
    public $timestamps = false;

    // Treat these attributes as dates
    protected $dates = [''];

    // Cast this attribute as
    protected $casts = ['' => ''];

    // Set default values for these attributes
    protected $attributes = [
        '' => ,
    ];

    // Define a one-to-one relationship with the other model
    public function Other()
    {
        return $this->hasOne(Other::class);
    }

    // Define a one-to-many relationship with the other model
    public function Others()
    {
        return $this->hasMany(Other::class);
    }

    // Define a many-to-many relationship with the other model
    public function Others()
    {
        return $this->belongsToMany(Other::class);
    }
}
