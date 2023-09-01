<?php
// Variable declarations, $profiles is an associative array with keys defining user ids, values are associative arrays, the format of which can be seen in the sample entry below
// NOTE: All variables are, before being inserted into the HTML document, sanitized via a htmlspecialchars() function.  All Strings should print as they are typed.

$profiles = [
//	'test' => 
//		[	//	The following are simple variables taking a single string.
//			'name'				=> 'Sam Poole',	// User's name as meant to be printed.  Used in the page title, header, and footer.
//			'photoPath'			=> 'test.jpg',			// File name of user's profile photo in the assets/images/profilephotos directory.
//			'jobTitle'			=> 'Tester',			// User's job title as intended to be printed.
//			'emailAddress'		=> 'sample@nku.edu',	// User's e-mail address, will also be used in a mailto: link.  Can be left as null to omit.
//			'phoneNumber'		=> '(555) 555-5555',	// User's phone number, will also be used in a tel: link.  Can be left as null to omit.
//			'unameLinkedIn'		=> 'example',			// User's LinkedIn vanity URL, will also be used to generate a link to the profile.  Can be left as null to omit.
//			'unameGitHub'		=> 'example',			// User's GitHub username, will also be used to generate a link to the profile.  Can be left as null to omit.
//			'personalWebsite'	=> 'nku.edu/~sample',	// User's website in the format of yourwebsite.com, protocols will be added when needed.  Can be left as null to omit.
//			'personalSummary'	=> 	//User's personal summary, a brief paragraph on the user.  Note: Plain-text only, no formatting options are provided.
//				'Lorem ipsum dolro sit amet.',
//			
//			//	Work experience is defined as an array of associative arrays.  Each associative array can contain the following keys:
//			//	'Title'			- A string indicating the entry's position title.
//			//	'Company'		- A string indicating the entry's employer.
//			//	'YearStart		- An int indicating the year this entry started.
//			//	'YearLeave		- An int indicating the year this entry concluded.  Can be left as null to indicate still at position.
//			//	'Description'	- A string to provide a paragraph to describe the entry's position.  Optional: key can be omitted to exclude section.
//			//	'Achievements'	- A string to provide a second paragraph under an 'Achievements' header to describe what was achieved in this entry's position.  Optional: key can be omitted to exclude section.
//			//	'AchieveBullets'- An indexed array of strings, each string to be listed as a bullet point in the section.  Optional: key can be omitted to exclude section.
//			//	'TechUsed'		- An indexed array of strings, each string being a technology used in the position to be listed horizontally.  Optional: key can be omitted to exclude section.
//			'workExperience'	=> 
//				[	[	'Title'			=> 'Product Tester',
//						'Company'		=> 'ACME Testing Co',
//						'YearStart'		=> 2023,
//						'YearLeave'		=> null,	
//						'Description'	=> 'Tested products and produced tests.',
//						'Achievements'	=> 'Achieved tests of the following:',	//In this instance, the 'Achievements' key is left defined as null as to retain the header above the bullets. 
//						'AchieveBullets'=> ['Stuff','Things','Items'],
//						'TechUsed'		=> ['Test Suites','Bubble wrap']
//					]
//				],
//			
//			//	Skills and tools are defined in an associative array.
//			//	The array can be constructed in the format where keys are Strings indicating the skill/tool's name corresponding to an int representing competence in the associated tool as a percentage (0-100)
//			'skillsAndTools' =>
//				[	'TNT' => 100,
//					'Mallets' => 50,
//					'Paint' => 10	
//				],
//			//Additional skills/tools can be defined in the indexed array, skillsAndToolsAdditional, simply containing String representations of items to list.
//			'skillsAndToolsAdditional' => ['Skills','Tools'],
//			
//			//	education experience is defined as an array of associative arrays.  Each associative array should contain the following keys:
//			//	'Degree'		- String representing the name of the degree was earned.
//			//	'Institution'	- String representing the name of the academic institution from which the degree was earned.
//			//	'YearStart		- An int indicating the year this entry started.
//			//	'YearLeave		- An int indicating the year this entry concluded.  Can be left as null to indicate still at position.
//			'education' => 
//				[
//					[	'Degree'		=> 'PhD in Degree Forgery',
//						'Institution'	=> 'Harvard',
//						'YearStart'		=> 2019,
//						'YearLeave'		=> 2024
//					],
//					[	'Degree'		=> 'BS in Degree Forgery',
//						'Institution'	=> 'Northern Kentucky University',
//						'YearStart'		=> 1988,
//						'YearLeave'		=> 1992
//					]
//				],
//			
//			//	awards are defined as an associative array.
//			//	The array can be constructed in the format where keys are Strings indicating the name of the award mapping to strings with additional details
//			'awards' => 
//				[	'The Celestial Flame of Abernethy' => '2 time recipient of this prestigious award',
//					'Holy Flaming Hammer' => 'of Unholy Cosmic Frost',
//					'Hollywood Hootsman Award' => 'Presented by the King of California'
//				],
//			
//			//	languages are defined as an associative array.
//			//	The array can be constructed in the format where keys are Strings indicating the name of the language mapping to strings indicating proficiency
//			'languages' => 
//				[	'English' => 'Native',
//					'Spanish' => 'Limited Working Proficiency'
//				],
//			
//			//	interests are defined in an indexed array of Strings.
//			'interests' => 
//				[	'Testing',
//					'Sampling',
//					'Testing Samples',
//					'Sampling Tests'
//				],
//
//			//	Featured projects are defined as an array of associative arrays.  Each associative array should contain the following keys:
//			//	'ImgPath'		- String indicating the filename of the project's image in the assets/images/projectphotos directory.  Optional: key can be omitted to exclude image.
//			//	'Name'			- String representing the name of the project.
//			//	'Description'	- String containing a description of the project.
//			//	'Link'			- String containing a link to the project on the web.  Optional: key can be omitted to exclude button.
//			//	'LinkText'		- String defining display text of the link.  Optional: defaults to "Go to link" if key is omitted.
//			'projects' => 
//				[
//					[	'ImgPath'		=> 'img.jpg',
//						'Name'			=> 'Something',
//						'Description'	=> 'Lorem ipsum.',
//						'Link'			=> 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
//						'LinkText'		=> 'Watch it'
//					],
//					[	'ImgPath'		=> 'img.jpg',
//						'Name'			=> 'Something Else',
//						'Description'	=> 'Lorem ipsum.',
//						'Link'			=> 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
//					],
//					[	'ImgPath'		=> 'img.jpg',
//						'Name'			=> 'Yet Another Thing',
//						'Description'	=> 'Lorem ipsum.',
//						'Link'			=> 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
//						'LinkText'		=> 'View them'
//					]
//				]
//		],
	'HirschP2' => 
		[	
			'name'				=> 'Patrick Hirsch',		
			'photoPath'			=> 'HirschP2.jpg',			
			'jobTitle'			=> 'Cybersecurity Student',	
			'emailAddress'		=> 'HirschP2@nku.edu',		
			'phoneNumber'		=> '(407) 734-0654',		
			'unameLinkedIn'		=> 'patrickhirsch',			
			'unameGitHub'		=> 'patrickhirsch',			
			'personalWebsite'	=> 'nku.edu/~HirschP2',		
			'personalSummary'	=> 	
				'Northern Kentucky University student dual majoring in Computer Science & Cybersecurity with minors in Computer Forensics, Computer Information Technology, and Information Security looking to obtain an internship or co-op in the field of cybersecurity and/or computer information technology.',
			'workExperience'	=> 
				[
					[	'Title'			=> 'Outreach',
						'Company'		=> 'NKCyber',
						'YearStart'		=> 2023,
						'YearLeave'		=> null,
						'Description'	=> 'Responsible for outreach and PR efforts of NKU\'s student-run cybersecurity-focused student organization and cyberdefence team.',
						
						'TechUsed'		=> ['Meta Business Suite','Photoshop']
					],
					[	'Title'			=> 'Web Editor',
						'Company'		=> 'The Northerner',
						'YearStart'		=> 2023,
						'YearLeave'		=> null,
						'Description'	=> 'Responsible for overseeing Northern Kentucky University\'s Independent Student Newspaper, The Northerner\'s website and any stories that need to be presented in an alternative format to the traditional written word.',
						
						'TechUsed'		=> ['Wordpress','SNO','PHP']
					],
					[	'Title'			=> 'General Manager',
						'Company'		=> 'Norse Code Radio',
						'YearStart'		=> 2023,
						'YearLeave'		=> null,
						'Description'	=> 'Responsible for overseeing the overall operations of NKU\'s campus radio station and student organization, \'Norse Code Radio\'.'
						
					],
					[	'Title'			=> 'Assistant General Manager',
						'Company'		=> 'Norse Code Radio',
						'YearStart'		=> 2022,
						'YearLeave'		=> 2023,
						'Description'	=> 'Second-in-command of NKU\'s student-run campus radio station, \'Norse Code Radio\'.',
						
						'AchieveBullets'=> ['Maintained the organization\'s roster.','Tracked weekly meeting attendance.','Recorded and distributed weekly meeting minutes.'],
						'TechUsed'		=> ['Google Sheets','Icecast','Wordpress']
					],
					[	'Title'			=> 'Systems Administrator',
						'Company'		=> 'Norse Code Radio',
						'YearStart'		=> 2020,
						'YearLeave'		=> 2022,
						'Description'	=> 'Appointed \'Systems Administrator\' of NKU\'s student-run online streaming radio station, Norse Code Radio.  Served as the main consultant on any technical questions or issues that arose regarding the station\'s operations.',
						'Achievements'	=> null,	
						'AchieveBullets'=> ['Worked to investigate systems in place and learn how they worked together to run the station.','Designed a system allowing for remote broadcasting and station control during the pandemic.','Configured existing hardware to allow listeners to call in and be on the air.','Designed new pages to showcase the station\'s podcasts and Live at the Loch sessions.'],
						'TechUsed'		=> ['Wordpress','BASH Scripting','AppleScript','Icecast','Python']
					]
				],
			'skillsAndTools' =>
				[	'HTML' => 95,
					'Java' => 90,
					'Python' => 90,
					'BASH' => 85,
					'Powershell' => 10	
				],
			'skillsAndToolsAdditional' => ['CSS','Javascript','PHP'],
			'education' => 
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
				],
			'awards' => 
				[	'Hey-U Award' => '2021',
					'Randall K. Cooper High School Award for Excellence in Information Technologies' => '2019',
					'Randall K. Cooper High School Award for Excellence in Yearbook Production' => '2019'
				],
			'languages' => 
				[	'English' => 'Native',
					'Spanish' => 'Limited Working Proficiency'
				],
			'interests' => 
				[	'Cybersecurity',
					'Networking',
					'Server Management',
					'Artificial Intelligence'
				],
			'projects' => 
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
				]
		],
	'NorbergP2' => [],
	'RileyS14' => []
];

?>

<?php

//Interpret profile specified in URL, assign it to $profile variable if it is defined in $profiles array, otherwise: print appropriate error and die.
if(array_key_exists('profile',$_GET))
{	if(array_key_exists($_GET['profile'],$profiles))
	{	$profile=$_GET['profile'];
	}else
	{	echo 'ERROR: Invalid profile provided.';
		die();
	}
}else
{	echo 'ERROR: No profile provided.';
	die();
}


//Clean-up, sanitization, etc
//	Assuming valid usernames are provided for linked profiles, complete the URL to the pages in defined profile.
$profiles[$profile]['unameLinkedIn']	= 'linkedin.com/in/'.$profiles[$profile]['unameLinkedIn'];
$profiles[$profile]['unameGitHub']		= 'github.com/'.$profiles[$profile]['unameGitHub'];

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
	<title><?= htmlspecialchars($profiles[$profile]['name']) ?>'s Resume</title>
	
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
						<img class="picture" src="assets/images/profilephotos/<?= htmlspecialchars($profiles[$profile]['photoPath']); ?>" alt="">
					</div><!--//col-->
					<div class="col">
						<div class="row p-4 justify-content-center justify-content-md-between">
							<div class="primary-info col-auto">
								<h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= htmlspecialchars($profiles[$profile]['name']); ?></h1>
								<div class="title mb-3"><?= htmlspecialchars($profiles[$profile]['jobTitle']) ?></div>
								<ul class="list-unstyled">
									<?php if($profiles[$profile]['emailAddress']!==null): ?>
										<li class="mb-2"><a class="text-link" href="mailto:<?= htmlspecialchars($profiles[$profile]['emailAddress']); ?>"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?= htmlspecialchars($profiles[$profile]['emailAddress']) ?></a></li>
									<?php endif ?>
									<?php if($profiles[$profile]['phoneNumber']!==null): ?>
										<li><a class="text-link" href="tel:<?= preg_replace("/[^0-9]/",'',$profiles[$profile]['phoneNumber']); ?>"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?= htmlspecialchars($profiles[$profile]['phoneNumber']) ?></a></li>
									<?php endif ?>
								</ul>
							</div><!--//primary-info-->
							<div class="secondary-info col-auto mt-2">
								<ul class="resume-social list-unstyled">
									<?php if($profiles[$profile]['unameLinkedIn']!==null): ?>
										<li class="mb-3"><a class="text-link" href="https://<?= htmlspecialchars($profiles[$profile]['unameLinkedIn']); ?>"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?= htmlspecialchars($profiles[$profile]['unameLinkedIn']) ?></a></li>
									<?php endif ?>
									<?php if($profiles[$profile]['unameGitHub']!==null): ?>
										<li class="mb-3"><a class="text-link" href="https://<?= htmlspecialchars($profiles[$profile]['unameGitHub']); ?>"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?= htmlspecialchars($profiles[$profile]['unameGitHub']) ?></a></li>
									<?php endif ?>
									<?php if($profiles[$profile]['personalWebsite']!==null): ?>
										<li><a class="text-link" href="https://<?= htmlspecialchars($profiles[$profile]['personalWebsite']); ?>"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?= htmlspecialchars($profiles[$profile]['personalWebsite']) ?></a></li>
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
						<p class="mb-0"><?= htmlspecialchars($profiles[$profile]['personalSummary']) ?></p>
					</div>
				</section><!--//summary-section-->
				
				<div class="row">
					<div class="col-lg-9">
						<section class="resume-section experience-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
							<div class="resume-section-content">
								<div class="resume-timeline position-relative">
									<?php foreach($profiles[$profile]['workExperience'] as $item): ?>
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
										<?php foreach($profiles[$profile]['skillsAndTools'] as $skill => $percent): ?>
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
										<?php foreach($profiles[$profile]['skillsAndToolsAdditional'] as $item): ?>
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
									<?php foreach($profiles[$profile]['education'] as $item): ?>
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
									<?php foreach($profiles[$profile]['awards'] as $arrKey => $description): ?>
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
									<?php foreach($profiles[$profile]['languages'] as $arrKey => $description): ?>
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
									<?php foreach($profiles[$profile]['interests'] as $item): ?>
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
						<?php foreach($profiles[$profile]['projects'] as $item): ?>
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
		<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?= htmlspecialchars($profiles[$profile]['name']) ?></small>
	</footer>
</body>
</html> 

