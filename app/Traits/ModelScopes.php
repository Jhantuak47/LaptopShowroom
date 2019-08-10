<?php
namespace App\Traits;

trait ModelScopes{

	public function scopeOrder($query, $field, $sort = 'ASC'){

		return $query->orderBy($field,$sort);
	}

}


?>