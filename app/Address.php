<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	/**
	 * Every field is fillable / mass assignable
	 * @var array
	 */
	protected $guarded = [];

	/**
	 * Don't Use Laravel timestamps for this model
	 * @var bool
	 */
	public $timestamps = false;
}
