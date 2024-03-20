<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'description', 'image', 'slug'];

    public function getAbstract() {
        $abstract = substr($this->description, 0, 100) . '...';
        return $abstract;
    }

    public function getDate($date) {
        return Carbon::create($date)->format('d-m-Y');
    }
}
