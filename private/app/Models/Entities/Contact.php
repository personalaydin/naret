<?php

namespace App\Models\Entities;

use App\Models\Traits\ActionsTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Contact extends Model
{
    use ActionsTrait;
    use LogsActivity;

    /**
     * Set model meta properties
     */
    public $modelMeta = [
        'name' => 'contact',
    ];


    protected $casts = [
        'products' => 'array'
    ];

    /**
     * Set logable fields
     */
    protected static $logAttributes = [
        'name_surname',
        'email',
        'subject',
        'message',
    ];

    /**
     * Set fillable fields
     */
    protected $fillable = [
        'name_surname',
        'subject',
        'sector',
        'message',
    ];

    /**
     * Returns title alias of email
     * @return string
     */
    public function getTitle()
    {
        return $this->getEmail();
    }

    /**
     * Returns email
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
