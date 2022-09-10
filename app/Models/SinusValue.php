<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SinusValue extends Model
{
	use HasFactory;

    protected $table = 'sinusvalues';

	protected $fillable = [
		'sinus_id',
		'date',
		'value',
	];
}