<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saran extends Model
{
	protected $guarded = [];
	protected $table = 'tbl_saran';
	protected $primaryKey = 'id_kritiksaran';
	public $timestamps = false;
}
