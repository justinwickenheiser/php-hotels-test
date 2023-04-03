
<header>
	<div id="skip">
		<a href="#main" class="focus-inverted">Skip to main content</a>
	</div>
	<div class="header">
		<div class="row content">
			<div class="col-5 col-sm-12 logo">
				<div class="col-12 col-sm-9">
					<h1>
						<!-- <cfIf (sb.isHomepage AND sb.directoryOffset EQ sb.directorySkeleton)> -->
							<!--[if lte IE 8|!IE]>
								<img src="<cfOutput>#getAssetCacheUrl("#sb.directorySkeleton#files/img/gvsu_logo_blue.png")#</cfOutput>" alt="Grand Valley State University Logo" width="600" height="53" />
							<![endif]-->
							<!--[if gte IE 9|!IE]><!-->
								<img src="{{asset('cms/skeleton/5/img/gvsu_logo_white.svg')}}" alt="Grand Valley State University Logo" onerror="this.onerror=null;this.src='{{asset("cms/skeleton/5/img/gvsu_logo_white.png")}}'" width="600" height="53" />
							<!--<![endif]-->
							<span id="gv-logo-label" class="sr-only" aria-hidden="true">Grand Valley State University</span>
						<!-- <cfElse>
							<a href="/"> -->
								<!--[if lte IE 8|!IE]>
									<img src="<cfOutput>#getAssetCacheUrl("#sb.directorySkeleton#files/img/gvsu_logo_white.png")#</cfOutput>" alt="Grand Valley State University Logo" width="600" height="53"/>
								<![endif]-->
								<!--[if gte IE 9|!IE]><!-->
									<!-- <img src="<cfOutput>#getAssetCacheUrl("#sb.directorySkeleton#files/img/gvsu_logo_white.svg")#</cfOutput>" alt="Grand Valley State University Logo" onerror="this.onerror=null;this.src='<cfOutput>#getAssetCacheUrl("#sb.directorySkeleton#files/img/gvsu_logo_white.png")#</cfOutput>'" width="600" height="53" /> -->
								<!--<![endif]-->
								<!-- <span id="gv-logo-label" class="sr-only" aria-hidden="true">Grand Valley State University</span>
							</a>
						</cfIf> -->
					</h1>
				</div>
				<div class="hide-lg hide-md col-sm-3">
					<!-- <cfIf homepage.useNavigation>
						<a href="azindex.htm" id="gv-hamburger" role="button" aria-controls="gv-background-navigation" tabindex="0" aria-label="Menu">
							<span class="icon icon-menu" aria-hidden="true"></span>
						</a>
					</cfIf> -->
				</div>
			</div>
			<div class="col-7 col-sm-12 quick hide-print">
				<span role="navigation" aria-label="Quick">
					<ul class="navigation">
						<li class="tooltip tooltip-bottom" title="Blackboard">
							<a href="https://lms.gvsu.edu/">
								<span class="icon icon-myblackboard" aria-hidden="true"></span>
								<span class="sr-only">Blackboard</span>
							</a>
						</li>
						<li class="tooltip tooltip-bottom" title="Banner">
							<a href="/banner">
								<span class="icon icon-mybanner" aria-hidden="true"></span>
								<span class="sr-only">Banner</span>
							</a>
						</li>
						<li class="tooltip tooltip-bottom" title="Navigate">
							<a href="/navigate">
								<span class="icon icon-compass" aria-hidden="true"></span>
								<span class="sr-only">Navigate</span>
							</a>
						</li>
						<li class="tooltip tooltip-bottom" title="Student Email">
							<a href="http://mail.gvsu.edu">
								<span class="icon icon-mail-alt" aria-hidden="true"></span>
								<span class="sr-only">Student Email</span>
							</a>
						</li>
						<li class="tooltip tooltip-bottom" title="Library">
							<a href="/library">
								<span class="icon icon-bank" aria-hidden="true"></span>
								<span class="sr-only">Library</span>
							</a>
						</li>
					</ul>
				</span>
				<form class="search" action="/searchaction.htm" role="search" id="gv-search">
					<input type="hidden" name="media" value="search" />
					<input type="hidden" name="path" value="" />
					<h2 class="sr-only">
						<label for="gv-search-input">Search People & Pages</label>
					</h2>
					<span class="icon icon-search" aria-hidden="true"></span>
					<input type="text" name="search" id="gv-search-input" size="25" maxlength="255" placeholder="Search People & Pages" />
					<div id="gv-search-suggestion" class="suggestion">
						<div class="row">
							<div class="col-6 col-sm-12 pull-right">
								<h3 class="hide-sm" id="gv-search-suggestion-search-label">
									Search Suggestions
								</h3>
								<ul id="gv-search-suggestion-search" aria-describedby="gv-search-suggestion-search-label">
									<!--- INSERTED BY JAVASCRIPT --->
								</ul>
							</div>
							<div class="col-6 col-sm-12">
								<h3 class="hide-sm" id="gv-search-suggestion-people-label">
									People Finder
								</h3>
								<ul id="gv-search-suggestion-people" class="hide-sm" aria-describedby="gv-search-suggestion-people-label">
									<!--- INSERTED BY JAVASCRIPT --->
								</ul>
								<ul id="gv-search-suggestion-peoplelink" class="hide-lg hide-md">
									<li>
										<a href="/peoplefinder">
											<span class="icon icon-users" aria-hidden="true"></span> People Finder
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-default sr-only" aria-hidden="true" tabindex="-1">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<div class="background hide-print">
		<nav class="navigation" aria-label="Primary">
			<ul class="content" id="gv-background-navigation" role="menubar">
				<li>
					<strong>
						<a href="/admissions">Admissions</a>
					</strong>
				</li>
				<li>
					<strong>
						<a href="/acad-index.htm">Majors &amp; Programs</a>
					</strong>
				</li>
				<li class="separator" aria-hidden="true"> | </li>
				<li data-panel="students" data-panel-loaded="true" class="">
					<a href="/students.htm" aria-haspopup="true" aria-expanded="false">Students</a>
					<div class="panel">
						<h2 id="panel-label-students-page" class="sr-only">Students</h2>
						<div class="row">
							<div class="col-2 col-md-3 panel-left">
								<div class="content">
									<h3 id="panel-label-students-toplinks" class="h4 color-orange"> Top Links </h3>
									<ul>
										<li>
											<a href="/registrar/importantdates.htm" aria-labelledby="panel-label-students-page panel-label-students-toplinks panel-label-students-toplinks-539" id="panel-label-students-toplinks-539"> Academic Calendar </a>
										</li>
										<li>
											<a href="/admissions" aria-labelledby="panel-label-students-page panel-label-students-toplinks panel-label-students-toplinks-183" id="panel-label-students-toplinks-183"> Admissions </a>
										</li>
										<li>
											<a href="https://mybanner.gvsu.edu" aria-labelledby="panel-label-students-page panel-label-students-toplinks panel-label-students-toplinks-216" id="panel-label-students-toplinks-216"> Banner </a>
										</li>
										<li>
											<a href="http://lms.gvsu.edu/" aria-labelledby="panel-label-students-page panel-label-students-toplinks panel-label-students-toplinks-1692" id="panel-label-students-toplinks-1692"> Blackboard </a>
										</li>
										<li>
											<a href="https://app.meadowfi.com/gvsu" aria-labelledby="panel-label-students-page panel-label-students-toplinks panel-label-students-toplinks-1810" id="panel-label-students-toplinks-1810"> Cost Calculator </a>
										</li>
										<li>
											<a href="http://mail.gvsu.edu" aria-labelledby="panel-label-students-page panel-label-students-toplinks panel-label-students-toplinks-485" id="panel-label-students-toplinks-485"> Email </a>
										</li>
										<li>
											<a href="/financialaid" aria-labelledby="panel-label-students-page panel-label-students-toplinks panel-label-students-toplinks-19" id="panel-label-students-toplinks-19"> Financial Aid </a>
										</li>
										<li>
											<a href="https://www.gvsu.edu/l3/" aria-labelledby="panel-label-students-page panel-label-students-toplinks panel-label-students-toplinks-1134" id="panel-label-students-toplinks-1134"> L3 Alum Tuition &amp; Career Support </a>
										</li>
										<li>
											<a href="/library" aria-labelledby="panel-label-students-page panel-label-students-toplinks panel-label-students-toplinks-1091" id="panel-label-students-toplinks-1091"> Library </a>
										</li>
										<li>
											<a href="/acad-index.htm" aria-labelledby="panel-label-students-page panel-label-students-toplinks panel-label-students-toplinks-1107" id="panel-label-students-toplinks-1107"> Majors &amp; Programs </a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-10 col-md-9 panel-right">
								<div class="content">
									<div class="row-gutter">
										<div class="col-3 col-md-4">
											<h3 id="panel-label-students-studentresources" class="h4 color-black"> Resources </h3>
											<ul>
												<li>
													<a href="/advising" aria-labelledby="panel-label-students-page panel-label-students-studentresources panel-label-students-studentresources-475" id="panel-label-students-studentresources-475"> Academic Advising </a>
												</li>
												<li>
													<a href="/campusdine" aria-labelledby="panel-label-students-page panel-label-students-studentresources panel-label-students-studentresources-991" id="panel-label-students-studentresources-991"> Campus Dining </a>
												</li>
												<li>
													<a href="https://app.meadowfi.com/gvsu" aria-labelledby="panel-label-students-page panel-label-students-studentresources panel-label-students-studentresources-1810" id="panel-label-students-studentresources-1810"> Cost Calculator </a>
												</li>
												<li>
													<a href="/catalog" aria-labelledby="panel-label-students-page panel-label-students-studentresources panel-label-students-studentresources-21" id="panel-label-students-studentresources-21"> Course Catalog </a>
												</li>
												<li>
													<a href="/housing" aria-labelledby="panel-label-students-page panel-label-students-studentresources panel-label-students-studentresources-17" id="panel-label-students-studentresources-17"> Housing </a>
												</li>
												<li>
													<a href="https://www.gvsu.edu/mylakersuccess/" aria-labelledby="panel-label-students-page panel-label-students-studentresources panel-label-students-studentresources-1450" id="panel-label-students-studentresources-1450"> myLaker Success </a>
												</li>
												<li>
													<a href="https://www.gvsu.edu/admissions/orientation/plan-ahead-with-mypath-11.htm" aria-labelledby="panel-label-students-page panel-label-students-studentresources panel-label-students-studentresources-1534" id="panel-label-students-studentresources-1534"> myPath </a>
												</li>
												<li>
													<a href="https://www.gvsu.edu/navigate/" aria-labelledby="panel-label-students-page panel-label-students-studentresources panel-label-students-studentresources-1530" id="panel-label-students-studentresources-1530"> Navigate </a>
												</li>
												<li>
													<a href="http://www.gvsu.edu/parking/" aria-labelledby="panel-label-students-page panel-label-students-studentresources panel-label-students-studentresources-999" id="panel-label-students-studentresources-999"> Parking </a>
												</li>
												<li>
													<a href="https://www.gvsu.edu/registrar/student-forms-14.htm" aria-labelledby="panel-label-students-page panel-label-students-studentresources panel-label-students-studentresources-1610" id="panel-label-students-studentresources-1610"> Student Forms </a>
												</li>
												<li>
													<a href="/studentlife" aria-labelledby="panel-label-students-page panel-label-students-studentresources panel-label-students-studentresources-9" id="panel-label-students-studentresources-9"> Student Life </a>
												</li>
												<li>
													<a href="/financialaid/tuition-fees-68.htm" aria-labelledby="panel-label-students-page panel-label-students-studentresources panel-label-students-studentresources-1111" id="panel-label-students-studentresources-1111"> Tuition </a>
												</li>
												<li>
													<a href="/payroll/ultratime_director.htm" aria-labelledby="panel-label-students-page panel-label-students-studentresources panel-label-students-studentresources-529" id="panel-label-students-studentresources-529"> Ultratime </a>
												</li>
												<li>
													<a href="/students.htm#studentresources" class="panel-more" aria-labelledby="panel-label-students-page panel-label-students-studentresources panel-label-students-studentresources-more" id="panel-label-students-studentresources-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
												</li>
											</ul>
										</div>
										<div class="col-9 col-md-8">
											<div class="row-gutter">
												<div class="col-4 col-md-6">
													<h3 id="panel-label-students-futurestudents" class="h4 color-black"> Future </h3>
													<ul>
														<li>
															<a href="/acad-index.htm" aria-labelledby="panel-label-students-page panel-label-students-futurestudents panel-label-students-futurestudents-1109" id="panel-label-students-futurestudents-1109"> Majors &amp; Programs </a>
														</li>
														<li>
															<a href="/admissions/orientation/" aria-labelledby="panel-label-students-page panel-label-students-futurestudents panel-label-students-futurestudents-251" id="panel-label-students-futurestudents-251"> New Student Orientation </a>
														</li>
														<li>
															<a href="/financialaid/tuition-fees-68.htm" aria-labelledby="panel-label-students-page panel-label-students-futurestudents panel-label-students-futurestudents-1113" id="panel-label-students-futurestudents-1113"> Tuition </a>
														</li>
														<li>
															<a href="/admissions/visit-schedule.htm" aria-labelledby="panel-label-students-page panel-label-students-futurestudents panel-label-students-futurestudents-1059" id="panel-label-students-futurestudents-1059"> Visit Campus </a>
														</li>
														<li>
															<a href="/students.htm#futurestudents" class="panel-more" aria-labelledby="panel-label-students-page panel-label-students-futurestudents panel-label-students-futurestudents-more" id="panel-label-students-futurestudents-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
														</li>
													</ul>
												</div>
												<div class="col-4 col-md-6">
													<h3 id="panel-label-students-graduate" class="h4 color-black"> Graduate </h3>
													<ul>
														<li>
															<a href="/gs/graduate-assistantships-student-information-and-resources-11.htm" aria-labelledby="panel-label-students-page panel-label-students-graduate panel-label-students-graduate-23" id="panel-label-students-graduate-23"> Assistantships </a>
														</li>
														<li>
															<a href="/gs/virtual" aria-labelledby="panel-label-students-page panel-label-students-graduate panel-label-students-graduate-25" id="panel-label-students-graduate-25"> Graduate Orientation </a>
														</li>
														<li>
															<a href="/gs/graduate-programs-graduate-degrees-and-certificate-programs-27.htm" aria-labelledby="panel-label-students-page panel-label-students-graduate panel-label-students-graduate-675" id="panel-label-students-graduate-675"> Graduate Programs </a>
														</li>
														<li>
															<a href="/students.htm#graduate" class="panel-more" aria-labelledby="panel-label-students-page panel-label-students-graduate panel-label-students-graduate-more" id="panel-label-students-graduate-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
														</li>
													</ul>
												</div>
												<div class="clear hide-lg"></div>
												<div class="col-4 col-md-6">
													<h3 id="panel-label-students-transfer" class="h4 color-black"> Transfer </h3>
													<ul>
														<li>
															<a href="/studentapps/mtn" aria-labelledby="panel-label-students-page panel-label-students-transfer panel-label-students-transfer-29" id="panel-label-students-transfer-29"> Course Equivalency </a>
														</li>
														<li>
															<a href="/admissions/orientation" aria-labelledby="panel-label-students-page panel-label-students-transfer panel-label-students-transfer-33" id="panel-label-students-transfer-33"> Transfer Orientation </a>
														</li>
														<li>
															<a href="https://www.gvsu.edu/admissions/curriculum-index.htm" aria-labelledby="panel-label-students-page panel-label-students-transfer panel-label-students-transfer-1854" id="panel-label-students-transfer-1854"> Transfer Plans </a>
														</li>
														<li>
															<a href="https://www.gvsu.edu/admissions/transfer-student-welcome-109.htm" aria-labelledby="panel-label-students-page panel-label-students-transfer panel-label-students-transfer-1862" id="panel-label-students-transfer-1862"> Transfer Student Resources </a>
														</li>
														<li>
															<a href="/students.htm#transfer" class="panel-more" aria-labelledby="panel-label-students-page panel-label-students-transfer panel-label-students-transfer-more" id="panel-label-students-transfer-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
														</li>
													</ul>
												</div>
												<div class="clear hide-md"></div>
												<div class="col-4 col-md-6">
													<h3 id="panel-label-students-international" class="h4 color-black"> International </h3>
													<ul>
														<li>
															<a href="/istudents/orientation-7.htm" aria-labelledby="panel-label-students-page panel-label-students-international panel-label-students-international-541" id="panel-label-students-international-541"> International Orientation </a>
														</li>
														<li>
															<a href="https://www.gvsu.edu/pic/compass/" aria-labelledby="panel-label-students-page panel-label-students-international panel-label-students-international-1418" id="panel-label-students-international-1418"> The Compass </a>
														</li>
														<li>
															<a href="/students.htm#international" class="panel-more" aria-labelledby="panel-label-students-page panel-label-students-international panel-label-students-international-more" id="panel-label-students-international-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
														</li>
													</ul>
												</div>
												<div class="clear hide-lg"></div>
												<div class="col-4 col-md-6">
													<h3 id="panel-label-students-studyabroad" class="h4 color-black"> Study Abroad </h3>
													<ul>
														<li>
															<a href="https://www.gvsu.edu/sa" aria-labelledby="panel-label-students-page panel-label-students-studyabroad panel-label-students-studyabroad-1420" id="panel-label-students-studyabroad-1420"> Apply to Study Abroad </a>
														</li>
														<li>
															<a href="https://www.gvsu.edu/studyabroad/programs-by-major-1940.htm" aria-labelledby="panel-label-students-page panel-label-students-studyabroad panel-label-students-studyabroad-1426" id="panel-label-students-studyabroad-1426"> Programs by Major </a>
														</li>
														<li>
															<a href="/studyabroad/search-index.htm" aria-labelledby="panel-label-students-page panel-label-students-studyabroad panel-label-students-studyabroad-45" id="panel-label-students-studyabroad-45"> Search Study Abroad Programs </a>
														</li>
														<li>
															<a href="https://www.gvsu.edu/studyabroad/study-abroad-advising-1821.htm" aria-labelledby="panel-label-students-page panel-label-students-studyabroad panel-label-students-studyabroad-1422" id="panel-label-students-studyabroad-1422"> Study Abroad Advising </a>
														</li>
														<li>
															<a href="/students.htm#studyabroad" class="panel-more" aria-labelledby="panel-label-students-page panel-label-students-studyabroad panel-label-students-studyabroad-more" id="panel-label-students-studyabroad-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
														</li>
													</ul>
												</div>
												<div class="col-4 col-md-6">
													<h3 id="panel-label-students-veterans" class="h4 color-black"> Veterans </h3>
													<ul>
														<li>
															<a href="/careers" aria-labelledby="panel-label-students-page panel-label-students-veterans panel-label-students-veterans-74" id="panel-label-students-veterans-74"> Career Center </a>
														</li>
														<li>
															<a href="http://www.gvsu.edu/veterans/" aria-labelledby="panel-label-students-page panel-label-students-veterans panel-label-students-veterans-647" id="panel-label-students-veterans-647"> Veterans Network </a>
														</li>
														<li>
															<a href="/students.htm#veterans" class="panel-more" aria-labelledby="panel-label-students-page panel-label-students-veterans panel-label-students-veterans-more" id="panel-label-students-veterans-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
														</li>
													</ul>
												</div>
												<div class="clear hide-md"></div>
												<div class="clear hide-lg"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li data-panel="facultystaff" data-panel-loaded="true" class="">
					<a href="/facultystaff.htm" aria-haspopup="true" aria-expanded="false">Faculty &amp; Staff</a>
					<div class="panel">
						<h2 id="panel-label-facultystaff-page" class="sr-only">Faculty &amp; Staff</h2>
						<div class="row">
							<div class="col-2 col-md-3 panel-left">
								<div class="content">
									<h3 id="panel-label-facultystaff-toplinks" class="h4 color-orange"> Top Links </h3>
									<ul>
										<li>
											<a href="/azindex.htm" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-toplinks panel-label-facultystaff-toplinks-22" id="panel-label-facultystaff-toplinks-22"> A-Z Index </a>
										</li>
										<li>
											<a href="/registrar/importantdates.htm" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-toplinks panel-label-facultystaff-toplinks-537" id="panel-label-facultystaff-toplinks-537"> Academic Calendar </a>
										</li>
										<li>
											<a href="/administration" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-toplinks panel-label-facultystaff-toplinks-1004" id="panel-label-facultystaff-toplinks-1004"> Administration </a>
										</li>
										<li>
											<a href="/banner.htm" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-toplinks panel-label-facultystaff-toplinks-208" id="panel-label-facultystaff-toplinks-208"> Banner (SSB) </a>
										</li>
										<li>
											<a href="/directory" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-toplinks panel-label-facultystaff-toplinks-421" id="panel-label-facultystaff-toplinks-421"> Directory </a>
										</li>
										<li>
											<a href="https://outlook.office.com/mail/" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-toplinks panel-label-facultystaff-toplinks-1772" id="panel-label-facultystaff-toplinks-1772"> Email </a>
										</li>
										<li>
											<a href="/facilitiesservices" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-toplinks panel-label-facultystaff-toplinks-341" id="panel-label-facultystaff-toplinks-341"> Facilities Services </a>
										</li>
										<li>
											<a href="/it" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-toplinks panel-label-facultystaff-toplinks-573" id="panel-label-facultystaff-toplinks-573"> IT </a>
										</li>
										<li>
											<a href="/jobs.htm" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-toplinks panel-label-facultystaff-toplinks-951" id="panel-label-facultystaff-toplinks-951"> Jobs </a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-10 col-md-9 panel-right">
								<div class="content">
									<div class="row-gutter">
										<div class="col-3 col-md-4">
											<h3 id="panel-label-facultystaff-faculty" class="h4 color-black"> Faculty </h3>
											<ul>
												<li>
													<a href="https://outlook.office.com/mail/" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-faculty panel-label-facultystaff-faculty-1770" id="panel-label-facultystaff-faculty-1770"> Email </a>
												</li>
												<li>
													<a href="/facultygov" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-faculty panel-label-facultystaff-faculty-65" id="panel-label-facultystaff-faculty-65"> Faculty Governance </a>
												</li>
												<li>
													<a href="/ftlc" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-faculty panel-label-facultystaff-faculty-67" id="panel-label-facultystaff-faculty-67"> FTLC </a>
												</li>
												<li>
													<a href="/sail" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-faculty panel-label-facultystaff-faculty-265" id="panel-label-facultystaff-faculty-265"> Sail </a>
												</li>
												<li>
													<a href="/facultystaff.htm#faculty" class="panel-more" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-faculty panel-label-facultystaff-faculty-more" id="panel-label-facultystaff-faculty-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
												</li>
											</ul>
										</div>
										<div class="col-3 col-md-4"> <h3 id="panel-label-facultystaff-staff" class="h4 color-black"> Staff </h3>
											<ul>
												<li>
													<a href="/busfin" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-staff panel-label-facultystaff-staff-73" id="panel-label-facultystaff-staff-73"> Business and Finance </a>
												</li>
												<li>
													<a href="https://outlook.office.com/mail/" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-staff panel-label-facultystaff-staff-1772" id="panel-label-facultystaff-staff-1772"> Email </a>
												</li>
												<li>
													<a href="/it/telco" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-staff panel-label-facultystaff-staff-81" id="panel-label-facultystaff-staff-81"> Telecommunications </a>
												</li>
												<li>
													<a href="/payroll/ultratime_director.htm" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-staff panel-label-facultystaff-staff-523" id="panel-label-facultystaff-staff-523"> Ultratime </a>
												</li>
												<li>
													<a href="/facultystaff.htm#staff" class="panel-more" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-staff panel-label-facultystaff-staff-more" id="panel-label-facultystaff-staff-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
												</li>
											</ul>
										</div>
										<div class="col-3 col-md-4"> <h3 id="panel-label-facultystaff-campusresources" class="h4 color-black"> Campus Resources </h3>
											<ul>
												<li>
													<a href="http://www.gvsulakers.com" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-campusresources panel-label-facultystaff-campusresources-553" id="panel-label-facultystaff-campusresources-553"> Athletics </a>
												</li>
												<li>
													<a href="/bus" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-campusresources panel-label-facultystaff-campusresources-983" id="panel-label-facultystaff-campusresources-983"> Bus Schedule </a>
												</li>
												<li>
													<a href="/campusdine" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-campusresources panel-label-facultystaff-campusresources-989" id="panel-label-facultystaff-campusresources-989"> Campus Dining </a>
												</li>
												<li>
													<a href="https://www.gvsu.edu/navigate/" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-campusresources panel-label-facultystaff-campusresources-1532" id="panel-label-facultystaff-campusresources-1532"> Navigate </a>
												</li>
												<li>
													<a href="/registrar" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-campusresources panel-label-facultystaff-campusresources-817" id="panel-label-facultystaff-campusresources-817"> Registrar </a>
												</li>
												<li>
													<a href="/facultystaff.htm#campusresources" class="panel-more" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-campusresources panel-label-facultystaff-campusresources-more" id="panel-label-facultystaff-campusresources-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
												</li>
											</ul>
										</div>
										<div class="clear hide-lg"></div> <div class="col-3 col-md-4"> <h3 id="panel-label-facultystaff-humanresources" class="h4 color-black"> Human Resources </h3>
											<ul>
												<li>
													<a href="/healthwellness" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-humanresources panel-label-facultystaff-humanresources-83" id="panel-label-facultystaff-humanresources-83"> Benefits </a>
												</li>
												<li>
													<a href="/hro/compensation-employment-185.htm" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-humanresources panel-label-facultystaff-humanresources-271" id="panel-label-facultystaff-humanresources-271"> Compensation &amp; Employment </a>
												</li>
												<li>
													<a href="http://www.gvsu.edu/payroll/pay-and-holiday-calendars-24.htm" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-humanresources panel-label-facultystaff-humanresources-89" id="panel-label-facultystaff-humanresources-89"> Pay/Holiday Calendar </a>
												</li>
												<li>
													<a href="/facultystaff.htm#humanresources" class="panel-more" aria-labelledby="panel-label-facultystaff-page panel-label-facultystaff-humanresources panel-label-facultystaff-humanresources-more" id="panel-label-facultystaff-humanresources-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
												</li>
											</ul>
										</div>
										<div class="clear hide-md"></div> </div> </div> </div> </div></div></li> <li data-panel="alumni" data-panel-loaded="true" class=""> <a href="/alumni.htm" aria-haspopup="true" aria-expanded="false">Alumni &amp; Community</a> <div class="panel"><h2 id="panel-label-alumni-page" class="sr-only">Alumni &amp; Community</h2> <div class="row"> <div class="col-2 col-md-3 panel-left"> <div class="content"> <h3 id="panel-label-alumni-toplinks" class="h4 color-orange"> Top Links </h3>
											<ul>
												<li>
													<a href="/about.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-toplinks panel-label-alumni-toplinks-481" id="panel-label-alumni-toplinks-481"> About GVSU </a>
												</li>
												<li>
													<a href="/careers" aria-labelledby="panel-label-alumni-page panel-label-alumni-toplinks panel-label-alumni-toplinks-68" id="panel-label-alumni-toplinks-68"> Career Center </a>
												</li>
												<li>
													<a href="/giving/give-online2.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-toplinks panel-label-alumni-toplinks-169" id="panel-label-alumni-toplinks-169"> Give Now </a>
												</li>
												<li>
													<a href="/jobs.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-toplinks panel-label-alumni-toplinks-943" id="panel-label-alumni-toplinks-943"> Jobs </a>
												</li>
												<li>
													<a href="https://www.gvsu.edu/l3/" aria-labelledby="panel-label-alumni-page panel-label-alumni-toplinks panel-label-alumni-toplinks-1132" id="panel-label-alumni-toplinks-1132"> L3 Alum Tuition &amp; Career Support </a>
												</li>
											</ul>
										</div> </div> <div class="col-10 col-md-9 panel-right"> <div class="content"> <div class="row-gutter"> <div class="col-3 col-md-4"> <h3 id="panel-label-alumni-alumniinfo" class="h4 color-black"> Alumni </h3>
											<ul>
												<li>
													<a href="/alumni/alumni-benefits-16.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-alumniinfo panel-label-alumni-alumniinfo-1374" id="panel-label-alumni-alumniinfo-1374"> Alumni Benefits </a>
												</li>
												<li>
													<a href="/alumni/module-events-index.htm?siteModuleId=852D66E8-B2FF-8449-BA725F53CEBF2D73" aria-labelledby="panel-label-alumni-page panel-label-alumni-alumniinfo panel-label-alumni-alumniinfo-281" id="panel-label-alumni-alumniinfo-281"> Alumni Events </a>
												</li>
												<li>
													<a href="/alumni/alumni-networks-13.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-alumniinfo panel-label-alumni-alumniinfo-1372" id="panel-label-alumni-alumniinfo-1372"> Alumni Networks </a>
												</li>
												<li>
													<a href="/alumni" aria-labelledby="panel-label-alumni-page panel-label-alumni-alumniinfo panel-label-alumni-alumniinfo-1370" id="panel-label-alumni-alumniinfo-1370"> Alumni Relations </a>
												</li>
												<li>
													<a href="/alumni/board-of-directors-235.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-alumniinfo panel-label-alumni-alumniinfo-850" id="panel-label-alumni-alumniinfo-850"> Board of Directors </a>
												</li>
												<li>
													<a href="/homecoming" aria-labelledby="panel-label-alumni-page panel-label-alumni-alumniinfo panel-label-alumni-alumniinfo-404" id="panel-label-alumni-alumniinfo-404"> Homecoming </a>
												</li>
												<li>
													<a href="/alumni/cms-form-edit.htm?formId=A42A511D-91E1-B446-4425998B16BA8D44" aria-labelledby="panel-label-alumni-page panel-label-alumni-alumniinfo panel-label-alumni-alumniinfo-844" id="panel-label-alumni-alumniinfo-844"> Update Your Info </a>
												</li>
												<li>
													<a href="/alumni/volunteer" aria-labelledby="panel-label-alumni-page panel-label-alumni-alumniinfo panel-label-alumni-alumniinfo-762" id="panel-label-alumni-alumniinfo-762"> Volunteer Opportunities </a>
												</li>
												<li>
													<a href="/alumni/young-alumni-council-230.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-alumniinfo panel-label-alumni-alumniinfo-852" id="panel-label-alumni-alumniinfo-852"> Young Alumni Council </a>
												</li>
												<li>
													<a href="/alumni.htm#alumniinfo" class="panel-more" aria-labelledby="panel-label-alumni-page panel-label-alumni-alumniinfo panel-label-alumni-alumniinfo-more" id="panel-label-alumni-alumniinfo-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
												</li>
											</ul>
										</div>
										<div class="col-9 col-md-8"> <div class="row-gutter"> <div class="col-4 col-md-6"> <h3 id="panel-label-alumni-community" class="h4 color-black"> Community </h3>
											<ul>
												<li>
													<a href="https://www.gvsu.edu/community/" aria-labelledby="panel-label-alumni-page panel-label-alumni-community panel-label-alumni-community-646" id="panel-label-alumni-community-646"> Community Engagement at GVSU </a>
												</li>
												<li>
													<a href="/csce/community-24.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-community panel-label-alumni-community-1075" id="panel-label-alumni-community-1075"> Find Faculty Research Partners </a>
												</li>
												<li>
													<a href="/service/" aria-labelledby="panel-label-alumni-page panel-label-alumni-community panel-label-alumni-community-1290" id="panel-label-alumni-community-1290"> Get Student Volunteers </a>
												</li>
												<li>
													<a href="/centers.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-community panel-label-alumni-community-1119" id="panel-label-alumni-community-1119"> Resources </a>
												</li>
												<li>
													<a href="/alumni.htm#community" class="panel-more" aria-labelledby="panel-label-alumni-page panel-label-alumni-community panel-label-alumni-community-more" id="panel-label-alumni-community-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
												</li>
											</ul>
										</div>
										<div class="col-4 col-md-6"> <h3 id="panel-label-alumni-giving" class="h4 color-black"> Giving </h3>
											<ul>
												<li>
													<a href="/giving/give-online2.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-giving panel-label-alumni-giving-169" id="panel-label-alumni-giving-169"> Give Now </a>
												</li>
												<li>
													<a href="/giving/priorities-267.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-giving panel-label-alumni-giving-1136" id="panel-label-alumni-giving-1136"> Giving Priorities </a>
												</li>
												<li>
													<a href="/giving" aria-labelledby="panel-label-alumni-page panel-label-alumni-giving panel-label-alumni-giving-1138" id="panel-label-alumni-giving-1138"> Giving to Grand Valley </a>
												</li>
												<li>
													<a href="https://www.gvsu.edu/giving/gvu-foundation-17.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-giving panel-label-alumni-giving-1140" id="panel-label-alumni-giving-1140"> GVU Foundation </a>
												</li>
												<li>
													<a href="/alumni.htm#giving" class="panel-more" aria-labelledby="panel-label-alumni-page panel-label-alumni-giving panel-label-alumni-giving-more" id="panel-label-alumni-giving-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
												</li>
											</ul>
										</div>
										<div class="clear hide-lg"></div> <div class="col-4 col-md-6"> <h3 id="panel-label-alumni-benefitsservices" class="h4 color-black"> About GVSU </h3>
											<ul>
												<li>
													<a href="/azindex.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-benefitsservices panel-label-alumni-benefitsservices-16" id="panel-label-alumni-benefitsservices-16"> A-Z Index </a>
												</li>
												<li>
													<a href="/about.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-benefitsservices panel-label-alumni-benefitsservices-481" id="panel-label-alumni-benefitsservices-481"> About GVSU </a>
												</li>
												<li>
													<a href="/financialaid/price_calculator.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-benefitsservices panel-label-alumni-benefitsservices-295" id="panel-label-alumni-benefitsservices-295"> Cost Calculator </a>
												</li>
												<li>
													<a href="/peoplefinder-index.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-benefitsservices panel-label-alumni-benefitsservices-1033" id="panel-label-alumni-benefitsservices-1033"> People Finder </a>
												</li>
												<li>
													<a href="/alumni.htm#benefitsservices" class="panel-more" aria-labelledby="panel-label-alumni-page panel-label-alumni-benefitsservices panel-label-alumni-benefitsservices-more" id="panel-label-alumni-benefitsservices-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
												</li>
											</ul>
										</div>
										<div class="clear hide-md"></div> <div class="col-4 col-md-6"> <h3 id="panel-label-alumni-findemployees" class="h4 color-black"> Find Employees </h3>
											<ul>
												<li>
													<a href="/careers/2021-22-employer-events-300.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-findemployees panel-label-alumni-findemployees-1416" id="panel-label-alumni-findemployees-1416"> Career Fairs </a>
												</li>
												<li>
													<a href="/careers/internships-and-co-op-education-290.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-findemployees panel-label-alumni-findemployees-1414" id="panel-label-alumni-findemployees-1414"> Offer an Internship or Co-op </a>
												</li>
												<li>
													<a href="/careers/post-a-job-66.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-findemployees panel-label-alumni-findemployees-102" id="panel-label-alumni-findemployees-102"> Post a Job (LakerJobs) </a>
												</li>
												<li>
													<a href="/careers/get-involved-on-campus-64.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-findemployees panel-label-alumni-findemployees-58" id="panel-label-alumni-findemployees-58"> Recruitment </a>
												</li>
												<li>
													<a href="/alumni.htm#findemployees" class="panel-more" aria-labelledby="panel-label-alumni-page panel-label-alumni-findemployees panel-label-alumni-findemployees-more" id="panel-label-alumni-findemployees-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
												</li>
											</ul>
										</div>
										<div class="clear hide-lg"></div> <div class="col-4 col-md-6"> <h3 id="panel-label-alumni-dobusiness" class="h4 color-black"> Do Business with GVSU </h3>
											<ul>
												<li>
													<a href="/busfin/accounts-payable-31.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-dobusiness panel-label-alumni-dobusiness-60" id="panel-label-alumni-dobusiness-60"> Accounts Payable </a>
												</li>
												<li>
													<a href="/purchasing/bid-opportunities.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-dobusiness panel-label-alumni-dobusiness-62" id="panel-label-alumni-dobusiness-62"> Bid Opportunities </a>
												</li>
												<li>
													<a href="/meetatgvsu" aria-labelledby="panel-label-alumni-page panel-label-alumni-dobusiness panel-label-alumni-dobusiness-64" id="panel-label-alumni-dobusiness-64"> Conference &amp; Event Planning </a>
												</li>
												<li>
													<a href="/purchasing/vendor-registration-38.htm" aria-labelledby="panel-label-alumni-page panel-label-alumni-dobusiness panel-label-alumni-dobusiness-76" id="panel-label-alumni-dobusiness-76"> Vendor Application </a>
												</li>
												<li>
													<a href="/alumni.htm#dobusiness" class="panel-more" aria-labelledby="panel-label-alumni-page panel-label-alumni-dobusiness panel-label-alumni-dobusiness-more" id="panel-label-alumni-dobusiness-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
												</li>
											</ul>
										</div> </div> </div> </div> </div> </div> </div></div></li> <li data-panel="about" data-panel-loaded="true" class=""> <a href="/about.htm" aria-haspopup="true" aria-expanded="false">About</a> <div class="panel"><h2 id="panel-label-about-page" class="sr-only">About</h2> <div class="row"> <div class="col-2 col-md-3 panel-left"> <div class="content"> <h3 id="panel-label-about-toplinks" class="h4 color-orange"> Top Links </h3>
											<ul>
												<li>
													<a href="https://www.gvsu.edu/about.htm" aria-labelledby="panel-label-about-page panel-label-about-toplinks panel-label-about-toplinks-1220" id="panel-label-about-toplinks-1220"> GVSU Facts </a>
												</li>
												<li>
													<a href="/president" aria-labelledby="panel-label-about-page panel-label-about-toplinks panel-label-about-toplinks-1214" id="panel-label-about-toplinks-1214"> Meet President Mantella </a>
												</li>
											</ul>
										</div> </div> <div class="col-10 col-md-9 panel-right"> <div class="content"> <div class="row-gutter"> <div class="col-3 col-md-4"> <h3 id="panel-label-about-administration" class="h4 color-black"> Administration </h3>
											<ul>
												<li>
													<a href="https://www.gvsu.edu/boardoftrustees/" aria-labelledby="panel-label-about-page panel-label-about-administration panel-label-about-administration-1273" id="panel-label-about-administration-1273"> Board of Trustees </a>
												</li>
												<li>
													<a href="/president" aria-labelledby="panel-label-about-page panel-label-about-administration panel-label-about-administration-1327" id="panel-label-about-administration-1327"> Office of the President </a>
												</li>
												<li>
													<a href="https://www.gvsu.edu/administration/organizational-charts-9.htm" aria-labelledby="panel-label-about-page panel-label-about-administration panel-label-about-administration-1275" id="panel-label-about-administration-1275"> Organizational Charts </a>
												</li>
												<li>
													<a href="https://www.gvsu.edu/administration/presidents-cabinet-2.htm" aria-labelledby="panel-label-about-page panel-label-about-administration panel-label-about-administration-1516" id="panel-label-about-administration-1516"> President's Council </a>
												</li>
												<li>
													<a href="/about.htm#administration" class="panel-more" aria-labelledby="panel-label-about-page panel-label-about-administration panel-label-about-administration-more" id="panel-label-about-administration-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
												</li>
											</ul>
										</div>
										<div class="col-3 col-md-4"> <h3 id="panel-label-about-about" class="h4 color-black"> About GVSU </h3>
											<ul>
												<li>
													<a href="/financialaid/price_calculator.htm" aria-labelledby="panel-label-about-page panel-label-about-about panel-label-about-about-1253" id="panel-label-about-about-1253"> Cost Calculator </a>
												</li>
												<li>
													<a href="https://www.gvsu.edu/about.htm" aria-labelledby="panel-label-about-page panel-label-about-about panel-label-about-about-1220" id="panel-label-about-about-1220"> GVSU Facts </a>
												</li>
												<li>
													<a href="/maps.htm" aria-labelledby="panel-label-about-page panel-label-about-about panel-label-about-about-1221" id="panel-label-about-about-1221"> Maps &amp; Directions </a>
												</li>
												<li>
													<a href="https://www.gvsu.edu/admissions/undergraduate-campus-visit-20.htm" aria-labelledby="panel-label-about-page panel-label-about-about panel-label-about-about-1325" id="panel-label-about-about-1325"> Visit </a>
												</li>
												<li>
													<a href="/about.htm#about" class="panel-more" aria-labelledby="panel-label-about-page panel-label-about-about panel-label-about-about-more" id="panel-label-about-about-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
												</li>
											</ul>
										</div>
										<div class="col-3 col-md-4"> <h3 id="panel-label-about-officeofthepresident" class="h4 color-black"> Office of the President </h3>
											<ul>
												<li>
													<a href="/president" aria-labelledby="panel-label-about-page panel-label-about-officeofthepresident panel-label-about-officeofthepresident-1214" id="panel-label-about-officeofthepresident-1214"> Meet President Mantella </a>
												</li>
												<li>
													<a href="https://www.gvsu.edu/president/messages-40.htm" aria-labelledby="panel-label-about-page panel-label-about-officeofthepresident panel-label-about-officeofthepresident-1222" id="panel-label-about-officeofthepresident-1222"> Message from the President </a>
												</li>
												<li>
													<a href="https://www.gvsu.edu/administration/presidents-cabinet-2.htm" aria-labelledby="panel-label-about-page panel-label-about-officeofthepresident panel-label-about-officeofthepresident-1518" id="panel-label-about-officeofthepresident-1518"> President's Council </a>
												</li>
												<li>
													<a href="https://www.gvsu.edu/president/index.htm#ourfuture" aria-labelledby="panel-label-about-page panel-label-about-officeofthepresident panel-label-about-officeofthepresident-1224" id="panel-label-about-officeofthepresident-1224"> Presidential Priorities </a>
												</li>
												<li>
													<a href="/president" class="panel-more" aria-labelledby="panel-label-about-page panel-label-about-officeofthepresident panel-label-about-officeofthepresident-more" id="panel-label-about-officeofthepresident-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
												</li>
											</ul>
										</div>
										<div class="clear hide-lg"></div> <div class="col-3 col-md-4"> <h3 id="panel-label-about-strategicplanning" class="h4 color-black"> Strategic Planning </h3>
											<ul>
												<li>
													<a href="https://www.gvsu.edu/spaa/university-accreditation-23.htm" aria-labelledby="panel-label-about-page panel-label-about-strategicplanning panel-label-about-strategicplanning-1333" id="panel-label-about-strategicplanning-1333"> Accreditation </a>
												</li>
												<li>
													<a href="https://www.gvsu.edu/universityhistory/" aria-labelledby="panel-label-about-page panel-label-about-strategicplanning panel-label-about-strategicplanning-1335" id="panel-label-about-strategicplanning-1335"> Grand Valley's History </a>
												</li>
												<li>
													<a href="https://www.gvsu.edu/inclusion/" aria-labelledby="panel-label-about-page panel-label-about-strategicplanning panel-label-about-strategicplanning-1329" id="panel-label-about-strategicplanning-1329"> Inclusion and Equity </a>
												</li>
												<li>
													<a href="https://www.gvsu.edu/reachhigher2025/" aria-labelledby="panel-label-about-page panel-label-about-strategicplanning panel-label-about-strategicplanning-1331" id="panel-label-about-strategicplanning-1331"> Reach Higher 2025 </a>
												</li>
												<li>
													<a href="/about.htm#strategicplanning" class="panel-more" aria-labelledby="panel-label-about-page panel-label-about-strategicplanning panel-label-about-strategicplanning-more" id="panel-label-about-strategicplanning-more"> more <span class="icon icon-angle-right" aria-hidden="true"></span> </a>
												</li>
											</ul>
										</div>
										<div class="clear hide-md"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</nav>
	</div>
</header>
