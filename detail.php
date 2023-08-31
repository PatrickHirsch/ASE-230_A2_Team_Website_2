<?php
// Variable declarations:
// NOTE: All variables are, before being inserted into the HTML document, sanitized via a htmlspecialchars() function.  All Strings should print as they are typed.
//	The following are simple variables taking a single string.
$name			= 'Patrick Hirsch';			// User's name as meant to be printed.  Used in the page title, header, and footer.
$photoPath		= 'HirschP2.jpg';			// File name of user's profile photo in the assets/images/profilephotos directory.
$jobTitle		= 'Cybersecurity Student';	// User's job title as intended to be printed.
$emailAddress	= 'HirschP2@nku.edu';		// User's e-mail address, will also be used in a mailto: link.  Can be left as null to omit.
$phoneNumber	= '(407) 734-0654';			// User's phone number, will also be used in a tel: link.  Can be left as null to omit.
$unameLinkedIn	= 'patrickhirsch';			// User's LinkedIn vanity URL, will also be used to generate a link to the profile.  Can be left as null to omit.
$unameGitHub	= $unameLinkedIn;			// User's GitHub username, will also be used to generate a link to the profile.  Can be left as null to omit.
$personalWebsite= 'nku.edu/~HirschP2';		// User's website in the format of yourwebsite.com, protocols will be added when needed.  Can be left as null to omit.
$personalSummary =		//User's personal summary, a brief paragraph on the user.  Note: Plain-text only, no formatting options are provided.
'Northern Kentucky University student dual majoring in Computer Science & Cybersecurity with minors in Computer Forensics, Computer Information Technology, and Information Security looking to obtain an internship or co-op in the field of cybersecurity and/or computer information technology.';

//	Work experience is defined as an array of associative arrays.  Each associative array can contain the following keys:
//	'Title'			- A string indicating the entry's position title.
//	'Company'		- A string indicating the entry's employer.
//	'YearStart		- An int indicating the year this entry started.
//	'YearLeave		- An int indicating the year this entry concluded.  Can be left as null to indicate still at position.
//	'Description'	- A string to provide a paragraph to describe the entry's position.  Optional: key can be omitted to exclude section.
//	'Achievements'	- A string to provide a second paragraph under an 'Achievements' header to describe what was achieved in this entry's position.  Optional: key can be omitted to exclude section.
//	'AchieveBullets'- An indexed array of strings, each string to be listed as a bullet point in the section.  Optional: key can be omitted to exclude section.
//	'TechUsed'		- An indexed array of strings, each string being a technology used in the position to be listed horizontally.  Optional: key can be omitted to exclude section.
$workExperience =
	[
		[	'Title'			=> 'Outreach',
			'Company'		=> 'NKCyber',
			'YearStart'		=> 2023,
			'YearLeave'		=> null,
			'Description'	=> 'Responsible for outreach and PR efforts of NKU\'s student-run cybersecurity-focused student organization and cyberdefence team.',
			//'Achievements' and 'AchieveBullets' keys are omitted
			'TechUsed'		=> ['Meta Business Suite','Photoshop']
		],
		[	'Title'			=> 'Web Editor',
			'Company'		=> 'The Northerner',
			'YearStart'		=> 2023,
			'YearLeave'		=> null,
			'Description'	=> 'Responsible for overseeing Northern Kentucky University\'s Independent Student Newspaper, The Northerner\'s website and any stories that need to be presented in an alternative format to the traditional written word.',
			//In this instance, the 'Achievements' and 'AchieveBullets' keys are omitted 
			'TechUsed'		=> ['Wordpress','SNO','PHP']
		],
		[	'Title'			=> 'General Manager',
			'Company'		=> 'Norse Code Radio',
			'YearStart'		=> 2023,
			'YearLeave'		=> null,
			'Description'	=> 'Responsible for overseeing the overall operations of NKU\'s campus radio station and student organization, \'Norse Code Radio\'.'
			//In this instance, the 'Achievements', 'AchieveBullets', and 'TechUsed' keys are omitted 
		],
		[	'Title'			=> 'Assistant General Manager',
			'Company'		=> 'Norse Code Radio',
			'YearStart'		=> 2022,
			'YearLeave'		=> 2023,
			'Description'	=> 'Second-in-command of NKU\'s student-run campus radio station, \'Norse Code Radio\'.',
			//In this instance, the 'Achievements' key is omitted, but the following bullet point structure is utilized for specific responsibilities. 
			'AchieveBullets'=> ['Maintained the organization\'s roster.','Tracked weekly meeting attendance.','Recorded and distributed weekly meeting minutes.'],
			'TechUsed'		=> ['Google Sheets','Icecast','Wordpress']
		],
		[	'Title'			=> 'Systems Administrator',
			'Company'		=> 'Norse Code Radio',
			'YearStart'		=> 2020,
			'YearLeave'		=> 2022,
			'Description'	=> 'Appointed \'Systems Administrator\' of NKU\'s student-run online streaming radio station, Norse Code Radio.  Served as the main consultant on any technical questions or issues that arose regarding the station\'s operations.',
			'Achievements'	=> null,	//In this instance, the 'Achievements' key is left defined as null as to retain the header above the bullets. 
			'AchieveBullets'=> ['Worked to investigate systems in place and learn how they worked together to run the station.','Designed a system allowing for remote broadcasting and station control during the pandemic.','Configured existing hardware to allow listeners to call in and be on the air.','Designed new pages to showcase the station\'s podcasts and Live at the Loch sessions.'],
			'TechUsed'		=> ['Wordpress','BASH Scripting','AppleScript','Icecast','Python']
		]
	];

//	Skills and tools are defined in an associative array.
//	The array can be constructed in the format where keys are Strings indicating the skill/tool's name corresponding to an int representing competence in the associated tool as a percentage (0-100)
$skillsAndTools = 
	[	'HTML' => 95,
		'Java' => 90,
		'Python' => 90,
		'BASH' => 85,
		'Powershell' => 10	
	];
//	Additional skills/tools can be defined in the indexed array, $skillsAndToolsAdditional, simply containing String representations of items to list.
$skillsAndToolsAdditional	= ['CSS','Javascript','PHP'];

//	education experience is defined as an array of associative arrays.  Each associative array should contain the following keys:
//	'Degree'		- String representing the name of the degree was earned.
//	'Institution'	- String representing the name of the academic institution from which the degree was earned.
//	'YearStart		- An int indicating the year this entry started.
//	'YearLeave		- An int indicating the year this entry concluded.  Can be left as null to indicate still at position.
$education =
	[
		[	'Degree'		=> 'BS in Cybersecurity',
			'Institution'	=> 'Northern Kentucky University',
			'YearStart'		=> 2019,
			'YearLeave'		=> 2024
		],
		[	'Degree'		=> 'BS in Computer Science',
			'Institution'	=> 'Northern Kentucky University',
			'YearStart'		=> 2019,
			'YearLeave'		=> 2024
		],
		[	'Degree'		=> 'High School Diploma',
			'Institution'	=> 'Randall K. Cooper High School',
			'YearStart'		=> 2015,
			'YearLeave'		=> 2019
		]
	];

//	awards are defined as an associative array.
//	The array can be constructed in the format where keys are Strings indicating the name of the award mapping to strings with additional details
$awards = 
	[	'Hey-U Award' => '2021',
			'Randall K. Cooper High School Award for Excellence in Information Technologies' => '2019',
			'Randall K. Cooper High School Award for Excellence in Yearbook Production' => '2019'
	];
	
//	languages are defined as an associative array.
//	The array can be constructed in the format where keys are Strings indicating the name of the language mapping to strings indicating proficiency
$languages = 
	[	'English' => 'Native',
		'Spanish' => 'Limited Working Proficiency'
	];

//	interests are defined in an indexed array of Strings.
$interests = 
	[	'Cybersecurity',
		'Networking',
		'Server Management',
		'Artificial Intelligence'
	];

//	Featured projects are defined as an array of associative arrays.  Each associative array should contain the following keys:
//	'ImgPath'		- String indicating the filename of the project's image in the assets/images/projectphotos directory.  Optional: key can be omitted to exclude image.
//	'Name'			- String representing the name of the project.
//	'Description'	- String containing a description of the project.
//	'Link'			- String containing a link to the project on the web.  Optional: key can be omitted to exclude button.
//	'LinkText'		- String defining display text of the link.  Optional: defaults to "Go to link" if key is omitted.
$projects = 
	[
		[	'ImgPath'		=> 'HirschP2_Vampotter.jpg',
			'Name'			=> 'Short Film: \'Vampotter\'',
			'Description'	=> 'A short film I wrote, directed, filmed and edited for Norse Film Society\'s Cards Against Humanity Film Fest.',
			'Link'			=> 'https://www.youtube.com/watch?v=SJEHJOuNqXw',
			'LinkText'		=> 'Watch it'
		],
		[	'ImgPath'		=> 'HirschP2_sl.jpg',
			'Name'			=> 'ChooChoo.sh',
			'Description'	=> 'A small /slightly/ malicious BASH script I wrote to override all commands with an infinite loop of the sl program.',
			'Link'			=> 'https://github.com/PatrickHirsch/ChooChoo'
		],
		[	'ImgPath'		=> 'HirschP2_PhotoPort.jpg',
			'Name'			=> 'Photography Portfolio',
			'Description'	=> 'A small showcase of photographs I\'ve captured.',
			'Link'			=> 'https://nku.edu/~HirschP2/photography',
			'LinkText'		=> 'View them'
		]
	];
?>

<?php
//Clean-up, santitization, etc
//	Assuming valid usernames are provided for linked passwords, complete the URL to the profile
$unameLinkedIn	= 'linkedin.com/in/'.$unameLinkedIn;
$unameGitHub	= 'github.com/'.$unameGitHub;
$personalWebsite	= $personalWebsite;

// Given the recurrence of the need to express a range of years, a function is created to do this in a consistent manner.
// It takes 1-2 values, the first being the start of the range, the second being the end of the range.
// null is used to represent "Present" or "Still at this position" and is the default value used when no end date is passed.
function stringifyRange($start,$end=null)
{	if($end==null) $end="Present";
	return $start." - ".$end;
}

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
	<title><?= htmlspecialchars($name) ?>'s Resume</title>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Your name's resume">
	<meta name="author" content="Your name">    
	<link rel="shortcut icon" href="favicon.ico"> 
	
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	
	<!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
	
	<!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">
</head> 

<body>
	<article class="resume-wrapper text-center position-relative">
		<div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<header class="resume-header pt-4 pt-md-0">
				<div class="row">
					<div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
						<img class="picture" src="assets/images/profilephotos/<?= htmlspecialchars($photoPath); ?>" alt="">
					</div><!--//col-->
					<div class="col">
						<div class="row p-4 justify-content-center justify-content-md-between">
							<div class="primary-info col-auto">
								<h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= htmlspecialchars($name); ?></h1>
								<div class="title mb-3"><?= htmlspecialchars($jobTitle) ?></div>
								<ul class="list-unstyled">
									<?php if($emailAddress!==null): ?>
										<li class="mb-2"><a class="text-link" href="mailto:<?= htmlspecialchars($emailAddress); ?>"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?= htmlspecialchars($emailAddress) ?></a></li>
									<?php endif ?>
									<?php if($phoneNumber!==null): ?>
										<li><a class="text-link" href="tel:<?= preg_replace("/[^0-9]/",'',$phoneNumber); ?>"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?= htmlspecialchars($phoneNumber) ?></a></li>
									<?php endif ?>
								</ul>
							</div><!--//primary-info-->
							<div class="secondary-info col-auto mt-2">
								<ul class="resume-social list-unstyled">
									<?php if($unameLinkedIn!==null): ?>
										<li class="mb-3"><a class="text-link" href="https://<?= htmlspecialchars($unameLinkedIn); ?>"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?= htmlspecialchars($unameLinkedIn) ?></a></li>
									<?php endif ?>
									<?php if($unameGitHub!==null): ?>
										<li class="mb-3"><a class="text-link" href="https://<?= htmlspecialchars($unameGitHub); ?>"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?= htmlspecialchars($unameGitHub) ?></a></li>
									<?php endif ?>
									<?php if($personalWebsite!==null): ?>
										<li><a class="text-link" href="https://<?= htmlspecialchars($personalWebsite); ?>"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?= htmlspecialchars($personalWebsite) ?></a></li>
									<?php endif ?>
								</ul>
							</div><!--//secondary-info-->
						</div><!--//row-->
					</div><!--//col-->
				</div><!--//row-->
			</header>
			
			
			
			<div class="resume-body p-5">
				<section class="resume-section summary-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
					<div class="resume-section-content">
						<p class="mb-0"><?= htmlspecialchars($personalSummary) ?></p>
					</div>
				</section><!--//summary-section-->
				
				<div class="row">
					<div class="col-lg-9">
						<section class="resume-section experience-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
							<div class="resume-section-content">
								<div class="resume-timeline position-relative">
									<?php foreach($workExperience as $item): ?>
										<article class="resume-timeline-item position-relative pb-5">
											<div class="resume-timeline-item-header mb-2">
												<div class="d-flex flex-column flex-md-row">
													<h3 class="resume-position-title font-weight-bold mb-1"><?= htmlspecialchars($item['Title']) ?></h3>
													<div class="resume-company-name ms-auto"><?= htmlspecialchars($item['Company']) ?></div>
												</div><!--//row-->
												<div class="resume-position-time"><?= htmlspecialchars(stringifyRange($item['YearStart'],$item['YearLeave'])) ?></div>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<?php if(array_key_exists('Description',$item)): ?>
													<p><?= htmlspecialchars($item['Description']) ?></p>
												<?php endif ?>
												<?php if(array_key_exists('Achievements',$item)): ?>
													<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
													<p><?= htmlspecialchars($item['Achievements']) ?></p>
												<?php endif ?>
												<?php if(array_key_exists('AchieveBullets',$item)): ?>
													<ul>
														<?php foreach($item['AchieveBullets'] as $bullet): ?>
															<li><?= htmlspecialchars($bullet) ?></li>
														<?php endforeach ?>
													</ul>
												<?php endif ?>
												<?php if(array_key_exists('TechUsed',$item)): ?>
													<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
													<ul class="list-inline">
														<?php foreach($item["TechUsed"] as $bullet): ?>
															<li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= htmlspecialchars($bullet) ?></span></li>
														<?php endforeach ?>
													</ul>
												<?php endif ?>
											</div><!--//resume-timeline-item-desc-->
										</article><!--//resume-timeline-item-->
									<?php endforeach ?>
								</div><!--//resume-timeline-->
							</div>
						</section><!--//projects-section-->
					</div>
					<div class="col-lg-3">
						<section class="resume-section skills-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
							<div class="resume-section-content">
								<div class="resume-skill-item">
									<ul class="list-unstyled mb-4">
										<?php foreach($skillsAndTools as $skill => $percent): ?>
											<li class="mb-2">
												<div class="resume-skill-name"><?= htmlspecialchars($skill) ?></div>
												<div class="progress resume-progress">
													<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?= htmlspecialchars($percent) ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</li>
										<?php endforeach ?>
									</ul>
								</div><!--//resume-skill-item-->
								<div class="resume-skill-item">
									<h4 class="resume-skills-cat font-weight-bold">Others</h4>
									<ul class="list-inline">
										<?php foreach($skillsAndToolsAdditional as $item): ?>
											<li class="list-inline-item"><span class="badge badge-light"><?= htmlspecialchars($item) ?></span></li>
										<?php endforeach ?>
									</ul>
								</div><!--//resume-skill-item-->
							</div><!--resume-section-content-->
						</section><!--//skills-section-->
						<section class="resume-section education-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">education</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled">
									<?php foreach($education as $item): ?>
										<li class="mb-2">
											<div class="resume-degree font-weight-bold"><?= htmlspecialchars($item["Degree"]) ?></div>
											<div class="resume-degree-org"><?= htmlspecialchars($item["Institution"]) ?></div>
											<div class="resume-degree-time"><?= htmlspecialchars(stringifyRange($item['YearStart'],$item['YearLeave'])) ?></div>
										</li>
									<?php endforeach ?>
								</ul>
							</div>
						</section><!--//education-section-->
						<section class="resume-section reference-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">awards</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled resume-awards-list">
									<?php foreach($awards as $arrKey => $description): ?>
										<li class="mb-2 ps-4 position-relative">
											<i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
											<div class="resume-award-name"><?= htmlspecialchars($arrKey) ?></div>
											<div class="resume-award-desc"><?= htmlspecialchars($description) ?></div>
										</li>
									<?php endforeach ?>
								</ul>
							</div>
						</section><!--//interests-section-->
						<section class="resume-section language-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">languages</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled resume-lang-list">
									<?php foreach($languages as $arrKey => $description): ?>
										<li class="mb-2"><span class="resume-lang-name font-weight-bold"><?= htmlspecialchars($arrKey) ?></span> 
											<?php if(strcmp($description,"")): ?>	
												<small class="text-muted font-weight-normal">(<?= htmlspecialchars($description) ?>)</small></li>
											<?php endif ?>
									<?php endforeach ?>
								</ul>
							</div>
						</section><!--//language-section-->
						<section class="resume-section interests-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">interests</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled">
									<?php foreach($interests as $item): ?>
										<li class="mb-1"><?= htmlspecialchars($item) ?></li>
									<?php endforeach ?>
								</ul>
							</div>
						</section><!--//interests-section-->
					</div>
				</div><!--//row-->
				
				
				
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">projects</h2>
					<div class="row mt-4">
						<?php foreach($projects as $item): ?>
							<div class="col-md-4">
								<div class="card">
									<?php if(array_key_exists('ImgPath',$item)): ?>
										<img src="<?= "assets/images/projectphotos/".htmlspecialchars($item['ImgPath']) ?>" alt="<?= htmlspecialchars($item['Name']) ?>" class="card-img-top">
									<?php endif ?>
									<div class="card-body">
										<h5 class="card-title"><?= htmlspecialchars($item['Name']) ?></h5>
										<p class="card-text"><?= htmlspecialchars($item['Description']) ?></p>
										<?php if(array_key_exists('Link',$item)): ?>
											<a class="btn btn-outline-primary" href="<?= htmlspecialchars($item['Link']) ?>">
												<?php if(array_key_exists('LinkText',$item)): ?>
													<?= htmlspecialchars($item['LinkText']) ?>
												<?php else: ?>
													Go to link
												<?php endif ?>
											</a>
										<?php endif ?>
									</div>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</section><!--//projects-section-->
			</div><!--//resume-body-->
			
			
		</div>
	</article>
	
	
	<footer class="footer text-center pt-2 pb-5">
		<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
		<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?= htmlspecialchars($name) ?></small>
	</footer>
</body>
</html> 

