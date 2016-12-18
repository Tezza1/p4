<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    public function rep() {
        // Propsect belongs to Rep
        // Define an inverse one-to-many relationship.
        return $this->belongsTo('p4\Rep');
    }
}
