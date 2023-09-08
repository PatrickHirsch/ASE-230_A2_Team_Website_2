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

// Creates a member card displaying name, occupation, and a full profile button of the given member
function teamMemberCard($profile, $index)
{
    echo '
		    <header class="resume-header mt-4 pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				    ';
    if (isset($profile['photoPath'])) {
        echo '<img class="picture" src="assets/images/profilephotos/'.$profile['photoPath'].'" alt="">';
    }
    echo '</div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">';
    if (isset($profile['name'])) {
        echo '<h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">'.$profile['name'].'</h1>';
    }
    if (isset($profile['jobTitle'])) {
        echo '<div class="title mb-3">'.$profile['jobTitle'].'</div>';
    }
    echo '
								<a href="detail.php?profile='.$index.'" class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
						    </div><!--//secondary-info-->
					    </div><!--//row-->
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>';
}

?>