<?php

function calculate_age($date)
{
	try
	{
		$result = Carbon\Carbon::createFromFormat('d/m/Y', $date)->diffInYears();
	}
	catch(\Exception $exception)
	{
		try
		{
			$result = Carbon\Carbon::createFromFormat('dmY', $date)->diffInYears();
		}
		catch(\Exception $exception)
		{
			$result = 'nascimento: '.$date;
		}
	}

	return $result;
}

function youtube_embed($you)
{
	return
		preg_replace(
			"/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
			"//www.youtube.com/embed/$1",
			$you
		);
}

function make_image_url($url, $width = 350)
{
//	return "http://api.antoniocarlosribeiro.com/api/v1/image?url={$url}&width={$width}";

	return $url;
}
