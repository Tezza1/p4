<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Rep extends Model
{
    public function prospects() {

    	// Reps has many Prospects
        // Define a one-to-many relationship.
    	return $this->hasMany('p4\Prospect');
    }
}
