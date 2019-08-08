<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Associations

    public function ebooks() {
        $this->belongsToMany(Ebook::class);
    }
}
