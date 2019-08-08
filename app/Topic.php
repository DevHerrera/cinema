<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    // Associations

    public function ebooks() {
        return $this->belongsToMany(Ebook::class);
    }

}
