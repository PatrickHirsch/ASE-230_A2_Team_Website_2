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
function getProfileLink($username, $platform = null, $protocol = False)
{
	$ret = '';
	if ($protocol)
		$ret = $ret . 'https://';

	if ($platform == null)
		$ret = $ret . '';
	else if ($platform == 'GitHub')
		$ret = $ret . 'github.com/';
	else if ($platform == 'LinkedIn')
		$ret = $ret . 'linkedin.com/';

	$ret = $ret . $username;

	return $ret;
}
// Shorthands for getProfileLink()
function getGitLink($username, $protocol = False)
{
	return getProfileLink($username, 'GitHub', $protocol);
}
function getLinkedLink($username, $protocol = False)
{
	return getProfileLink($username, 'LinkedIn', $protocol);
}

//displays each work experience item on the detail page. The function accepts one work experience item as a parameter, and it must display the code for the work experience filled with the employment information.
function displayWorkExp(array $profile): void
{
	foreach ($profile['workExperience'] as $item) {
		echo '<article class="resume-timeline-item position-relative pb-5">
			<div class="resume-timeline-item-header mb-2">
				<div class="d-flex flex-column flex-md-row">
					<h3 class="resume-position-title font-weight-bold mb-1">
						' . htmlspecialchars($item['Title']) . '
					</h3>
					<div class="resume-company-name ms-auto">
					' . htmlspecialchars($item['Company']) . '
					</div>
				</div><!--//row-->
				<div class="resume-position-time">
				' . htmlspecialchars(stringifyRange($item['YearStart'], $item['YearLeave'])) . '
				</div>
			</div><!--//resume-timeline-item-header-->
			<div class="resume-timeline-item-desc">';
		if (array_key_exists('Description', $item)) {
			echo '
					<p>
						' . htmlspecialchars($item['Description']) . '
					</p>';
		}
		if (array_key_exists('Achievements', $item)) {
			echo '
					<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:
					</h4>
					<p>
						' . htmlspecialchars($item['Achievements']) . '
					</p>';
		}
		if (array_key_exists('AchieveBullets', $item)) {
			echo '
					<ul>';
			foreach ($item['AchieveBullets'] as $bullet) {
				echo '
							<li>
								' . htmlspecialchars($bullet) . '
							</li>';
			}
			;
			echo '
					</ul>';
		}
		if (array_key_exists('TechUsed', $item)) {
			echo '
					<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies
						used:</h4>
					<ul class="list-inline">
						';
			foreach ($item["TechUsed"] as $bullet) {
				echo '
							<li class="list-inline-item"><span
									class="badge bg-secondary badge-pill">
									' . htmlspecialchars($bullet) . '
								</span></li>';
			}
			;
			echo '
					</ul>';
		}
		echo '
				</div><!--//resume-timeline-item-desc-->
				</article><!--//resume-timeline-item-->
				';
	}

}

//function changeToJson($contents){
//	$newJson = json_encode($contents,JSON_PRETTY_PRINT);
//	file_put_contents('userData.json', $newJson);
//
//}

function readUserData(){
	$userData = fopen('userData.json','r');
	fread($userData,filesize('userData.json'));
	fclose($userData);
}


?>