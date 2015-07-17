<?php

namespace App\Data\Entities;

use App\Base\Model;

class Article extends Model
{
	public $fillable = [
		'code',
		'heading',
		'subheading',
		'body',
		'edition',
		'image',
		'date',
		'published_at',
		'featured',
		'youtube_url',
	];
}
