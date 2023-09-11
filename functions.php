<?php

// Given the recurrence of the need to express a range of years, a function is created to do this in a consistent manner.
// It takes 1-2 values, the first being the start of the range, the second being the end of the range.
// null is used to represent "Present" or "Still at this position" and is the default value used when no end date is passed.
function stringifyRange($start, $end = null)
{
	if ($end == null)
		$end = "Present";
	return $start . " - " . $end;
}

// Allows the delivery of online profiles as links given a username
function getProfileLink($username,$platform=null,$protocol=False)
{	$ret='';
	if($protocol)	$ret=$ret.'https://';
	
	if($platform==null)				$ret=$ret.'';
	else if($platform=='GitHub')	$ret=$ret.'github.com/';
	else if($platform=='LinkedIn')	$ret=$ret.'linkedin.com/';
	
	$ret=$ret.$username;
	
	return $ret;
}
// Shorthands for getProfileLink()
function getGitLink($username,$protocol=False)
{	return getProfileLink($username,'GitHub',$protocol);
}
function getLinkedLink($username,$protocol=False)
{	return getProfileLink($username,'LinkedIn',$protocol);
}

// Function to take 1-2 DateTime objects and return their difference in years as an int.
// If only one parameter is passed, second defaults to current time.
function calculateDuration($startDate,$endDate=null)
{	if($endDate==null)	$endDate = new DateTime("now");;
	$duration = $startDate->diff($endDate);
	return (int)$duration->format('%Y');
}
?>