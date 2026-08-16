<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // The $fillable property specifies which attributes should be mass-assignable. This is important for security, as it prevents mass assignment vulnerabilities.
    
    protected $fillable = [
        'name',
        'slug',
        'description',
        'created_by',
    ];
    // The books() method defines a one-to-many relationship between the Category model and the Book model. This means that each category can have multiple books associated with it. The hasMany() method is used to define this relationship, and it assumes that the foreign key in the books table is category_id by default.

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    /**
     * Get human-readable field names for audit logs
     */
    // The getAuditFieldLabels() method returns an associative array that maps the model's attributes to human-readable labels. This can be useful for displaying more user-friendly field names in audit logs or other parts of the application where you want to present the data in a more understandable format.
    public function getAuditFieldLabels()
    {
        return [
            'name' => 'Name',
            'slug' => 'Slug',
            'description' => 'Description',
            'created_by' => 'Created By',
        ];
    }
}
