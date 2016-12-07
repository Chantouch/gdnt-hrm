<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LanguageLevel extends Model
{
    protected $table = 'language_levels';
    protected $guarded = ['_method'];
    protected $fillable = [
        'll_custom1',
        'll_custom2',
        'll_emp_id',
        'll_others',
        'll_lang_id',
        'll_listen',
        'll_read',
        'll_speak',
        'll_write',
    ];

    public static function level()
    {
        return [
            'Beginner' => 'Beginner',
            'Conversation' => 'Conversation',
            'Business' => 'Business',
            'Fluent' => 'Fluent',
            'Mother Tongue' => 'Mother Tongue'
        ];
    }

    public static function clean($string)
    {
        $string = str_replace(' ', '_', $string); // Replaces all spaces with hyphens.
        $string = preg_replace('/[^A-Za-z0-9\-]/', '_', $string); // Removes special chars.

        return preg_replace('/-+/', '_', $string); // Replaces multiple hyphens with single one.
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
