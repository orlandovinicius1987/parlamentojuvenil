<?php

function calculate_age($date)
{
	return Carbon\Carbon::createFromFormat('d/m/Y', $date)->diffInYears();
}
