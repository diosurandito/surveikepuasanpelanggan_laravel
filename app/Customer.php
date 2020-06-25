<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $guarded = [];
	protected $table = 'tbl_customer';
	protected $primaryKey = 'id_datauser';
	public $timestamps = false;
}
