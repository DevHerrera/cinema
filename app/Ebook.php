<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    // Associations

    public function topics() {
        return $this->belongsToMany(Topic::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
