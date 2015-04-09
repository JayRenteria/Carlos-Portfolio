<?php
class Carlos {
  public $settings = array("icons" => true);
  public $firstname = "Carlos";
  public $familyname = "M. Indacochea";
  public $bio_data = array(
    "email" => "",
    "phone" => "",
    "website" => "http://carlosmindacochea.com",
    "stars" => array("Business Administration", "Legal Studies", "Criminal Law and Procedures", "Supreme Court Rulings", 
      "Legal Trends and History"),
    "summary" => array("points" => array(
      "Instructional expertise at law school and undergraduate levels",
      "Instruction and Research interests: Business Administration, Legal Studies, Criminal Law and Procedures, Supreme Court Rulings, Legal Trends and History",
      "Research, writing and presentation skills nurtured as author, lecturer, teacher, clerk debater, and mediator"
    )),
  );

  public $education = array (
    "show_gpa" => true,
    "schools" => array(
      array(
        "degree" => "Juris Doctor Degree 5th",
        "major" => "",
        "institution" => "JOHN CARROLL UNIVERSITY, University Heights, OH",
        "graduation_year" => 1990,
      ),
      array(
        "degree" => "Masters in Arts in Business Administration",
        "major" => "Business Administration",
        "institution" => "CASE WESTERN RESERVE UNIVERSITY, Cleveland, OH",
        "graduation_year" => 1987,
      ),
      array(
        "degree" => "Bachelor of Science",
        "major" => "Criminal Justice",
        "institution" => "CASE WESTERN RESERVE UNIVERSITY, Cleveland, OH",
        "graduation_year" => 1985,
      )
    )
  );
  public $experience = array("items" => array(
    array(
      "title" => "Instructor",
      "organisation" => "Central New Mexico Community College",
      "location" => "Albuquerque, NM",
      "from" => "August 2014",
      "to" => "Present",
      "details" => array(
        "Continued the program based on HTML5, CSS3, JavaScript, jQuery, mySQL, and PHP 5 originally started at Deep Dive Coders. Restructured and reformatted the curriculum to be more integrated, challenging, and exciting.",
        "Collaborated with a co-instructor on the presentation and content of the curriculum. Stronger emphasis was placed on object oriented PHP, agile methodologies, and unit testing.",
        "Taught and presented the evolving program while periodically evaluating student progress through online interactive activities, group projects, and tests.",
        "Evaluated, tested, and deployed a new toolset for the program. Wrote documentation for the students' individual setup of the toolset.",
        "Continuously collaborated with outside departments for the improvement of the program and its daily operations."
      ),
      "technology_used" => array("tools" => array(
        array("name" => "Bootstrap"),
        array("name" => "CSS3"),
        array("name" => "Curriculum Development"),
        array("name" => "git"),
        array("name" => "HTML5"),
        array("name" => "JavaScript"),
        array("name" => "jQuery"),
        array("name" => "mySQL"),
        array("name" => "PHP"),
        array("name" => "PhpStorm"),
        array("name" => "SimpleTest"),
        array("name" => "Ubuntu Linux")
      ))
    ),
    array(
      "title" => "Instructor",
      "organisation" => "Deep Dive Coders",
      "location" => "Albuquerque, NM",
      "from" => "October 2013",
      "to" => "August 2014",
      "details" => array(
        "Responsible for revamping, iteratively improving, and updating a full curriculum based on HTML5, CSS3, JavaScript, jQuery, mySQL, and PHP 5. Strong emphasis was placed on agile development methods, object oriented design patterns, and cyber-security.",
        "Designed and wrote assignments and other activities to keep students engaged in and learning the curriculum. This includes designing a comprehensive, monolithic final project that covered all topics covered in the curriculum.",
        "Taught and presented the curriculum to students from varied backgrounds. Continuously evaluated the students and kept the entire class at the same point.",
        "Continuously assisted students in the classroom and held office hours for students requiring review and reinforcement of the concepts in the curriculum.",
        "Supported students and alumni in developing professional profiles and resumes to facilitate a successful job search in information technology.",
        "Planned and deployed a fully functional dual stack IPv4/IPv6 network and developed an interactive lesson on the impacts of IPv6 on web development."
      ),
      "technology_used" => array("tools" => array(
        array("name" => "Bootstrap"),
        array("name" => "CSS3"),
        array("name" => "Curriculum Development"),
        array("name" => "git"),
        array("name" => "HTML5"),
        array("name" => "IPv6"),
        array("name" => "JavaScript"),
        array("name" => "jQuery"),
        array("name" => "mySQL"),
        array("name" => "PHP"),
        array("name" => "SimpleTest"),
        array("name" => "Ubuntu Linux")
      ))
    ),
    array(
      "title" => "Software Engineer",
      "organisation" => "Materialogic",
      "location" => "St Louis, MO",
      "from" => "May 2012",
      "to" => "October 2013",
      "details" => array(
        "Maintained and supported an Apache Tomcat-based n-tiered warehouse management system (WMS) in Java. This included receiving and intrepeting user requests, writing solutions, and executing unit and acceptance tests.",
        "Conducted integrations with the WMS using ANSI X12 Electronic Data Interchange (EDI). After receiving EDI specifications, all documents were unit and acceptance tested. This included expanding the existing system's functionality to support additional documents not previously supported.",
        "Conducted integrations with the WMS using Magento. Clients with existing Magento stores used a custom plugin to integrate to the WMS. Full unit and system tests were conducted before live integrations were allowed. Any problems found in the plugin were addressed and fixed.",
        "Migrated multiple codebases from Subversion to git, including importing historical information and training the team to assist in the transition from Subversion to git.",
        "Involved in rewriting and reworking the WMS from the Tomcat platform to a JBOSS based platform using Spring and Hibernate. The new platforms includes extended support for Java EE interfaces and unit testing with higher coverage compared to the Tomcat based platform.",
        "Wrote and updated documentation on both new and existing processes and subsystems, targeted at end users, internal users, and developers."
      ),
      "technology_used" => array("tools" => array(
        array("name" => "CSS"),
        array("name" => "EDI"),
        array("name" => "Hibernate"),
        array("name" => "HTML"),
        array("name" => "git"),
        array("name" => "IBM Informix"),
        array("name" => "Java EE"),
        array("name" => "JPA"),
        array("name" => "jUnit"),
        array("name" => "JBOSS"),
        array("name" => "Perl"),
        array("name" => "Spring"),
        array("name" => "Subversion"),
        array("name" => "Tomcat"),
        array("name" => "Velocity")
      ))
    ),
    array(
      "title" => "Owner",
      "organisation" => "CCC Computer Consulting",
      "location" => "Rolla, MO",
      "from" => "May 2011",
      "to" => "May 2012",
      "details" => array(
        "Setup a secure wireless network that is accessible to customers within a 1.5 km radius using off the shelf 802.11g/n products and 802.1x (WPA2 Enterprise) authentication using Ubuntu Linux Server to use mySQL based authentication.",
        "Setup a weather station that automatically publishes its data for scientific research to Weather Underground and an offsite mySQL database.",
        "Deployed a web and DNS proxy on Ubuntu Linux for a client with a slow internet connection to enhance throughput despite the unreliable connection.",
        "Designed a solution to securely share financial data using GNU Cash, using a client/server architecture using C on the server end and C++ and Qt on the client end.",
        "Designed and implemented web scraping programs to automatically harvest data from public web sites using Perl and Java.",
        "Consulted for various clients in Missouri, Baja California, and via Email. Baja California clients required assistance in English and Spanish."
      ),
      "technology_used" => array("tools" => array(
        array("name" => "802.1x"),
        array("name" => "C"),
        array("name" => "C++"),
        array("name" => "Java"),
        array("name" => "mySQL"),
        array("name" => "Perl"),
        array("name" => "Qt"),
        array("name" => "Ubuntu Linux"),
        array("name" => "WPA2 Enterprise")
      ))
    ),
    array(
      "title" => "GANN Research Fellow",
      "organisation" => "Missouri University of Science and Technology",
      "location" => "Rolla, MO",
      "from" => "January 2008",
      "to" => "May 2008",
      "details" => array(
        "Supervised several undergraduate students while researching new algorithms in wireless sensor networks (WSNs).",
        "Developed, designed, and proved an algorithm that detected outliers in wireless sensor networks using an enhanced communication method and simulated annealing to self-organize the network.",
        "Researched all background and related work relevant to the algorithm. Mentored students on how to research peer reviewed literature and write about their findings using LaTeX.",
        "Developed a simulation of the algorithm using Castalia, an open source wireless sensor network framework in C++. Stored simulated data in mySQL. Wrote post processing tools in C++ that would analyze and graph the mySQL data using gnuplot.",
        "Debugged the algorithm and submitted a patch to the Castalia community."
      ),
      "technology_used" => array("tools" => array(
        array("name" => "Algorithms"),
        array("name" => "C"),
        array("name" => "C++"),
        array("name" => "Castalia"),
        array("name" => "LaTeX"),
        array("name" => "Subversion"),
        array("name" => "Ubuntu Linux"),
        array("name" => "Wireless Sensor Networks")
      ))
    ),
    array(
      "title" => "Graduate Teaching Assistant",
      "organisation" => "Missouri University of Science and Technology",
      "location" => "Rolla, MO",
      "from" => "August 2006",
      "to" => "January 2008",
      "details" => array(
        "Taught up to four sections of a lab for Introduction to C++. Topics included functions, classes, operator overloading, and templating.",
        "Responsible for the creation, execution, and evaluation of weekly assignments.",
        "Mentored students inside and outside of class to facilitate their development as programmers and people.",
        "Helped lead study sessions to assist students in assignments and the final and midterm exams.",
        "Wrote a grading tool in Perl that would automatically organize and compile the one hundred assignments that were submitted every day. Provided this grading tool to the next teaching assistant who became responsible for the same class.",
        "Rated #2 in departmental instructor and professor evaluations."
      ),
      "technology_used" => array("tools" => array(
        array("name" => "C"),
        array("name" => "C++"),
        array("name" => "Curriculum Development"),
        array("name" => "LaTeX"),
        array("name" => "Linux"),
        array("name" => "Perl")
      ))
    ),
    array(
      "title" => "Instructional Student Aide",
      "organisation" => "California State University, San Marcos",
      "location" => "San Marcos, CA",
      "from" => "September 2005",
      "to" => "May 2006",
      "details" => array(
        "Assisted students with computer science related assignments and questions in C++ and other programming languages.",
        "Provided free consultation to students wanting to learn about Windows, Microsoft Office, and other software products.",
        "Helped students pass the Computer Core Competency exam required by the university.",
        "Wrote a time clock program in PHP and mySQL that tracked the number of hours worked by employees and statistics on students who visited our office."
      ),
      "technology_used" => array("tools" => array(
        array("name" => "C++"),
        array("name" => "HTML"),
        array("name" => "JavaScript"),
        array("name" => "mySQL"),
        array("name" => "PHP"),
        array("name" => "Linux")
      ))
    ),
    array(
      "title" => "Programmer",
      "organisation" => "HowToInternet.Com",
      "location" => "Encinitas, CA",
      "from" => "September 2005",
      "to" => "July 2006",
      "details" => array(
        "Setup a Samba controlled Windows domain to seamlessly integrate the logins and profiles of Windows and UNIX clients.",
        "Setup secure remote access using FreeBSD and OpenSSH.",
        "Wrote programs to scrape specific information from web sites and write it to Access and mySQL databases.",
        "Wrote a program in Java to automatically search the web, scrape particular information, and write out in a tab-delimited file.",
        "Evaluated and tested software products for future employee use.",
        "Repaired and troubleshooted the network and employee workstations."
      ),
      "technology_used" => array("tools" => array(
        array("name" => "FreeBSD"),
        array("name" => "HTML"),
        array("name" => "Java"),
        array("name" => "Microsoft Access"),
        array("name" => "mySQL"),
        array("name" => "Perl")
      ))
    ),
    array(
      "title" => "AVID Tutor",
      "organisation" => "La Costa Canyon High School",
      "location" => "Carlsbad, CA",
      "from" => "November 2004",
      "to" => "June 2005",
      "details" => array(
        "Worked with high school students and helped them with homework and projects with an emphasis in mathematics, physics, computer science, and other life and physical sciences.",
        "Continuously worked with students from differing backgrounds and proficiencies in English. Provided instruction in Spanish where helpful.",
        "Assisted students and staff with basic use of Microsoft Windows and Microsoft Office."
      ),
      "technology_used" => array("tools" => array(
        array("name" => "Bilingual Education"),
        array("name" => "Mathematics"),
        array("name" => "Microsoft Office"),
        array("name" => "Physics"),
        array("name" => "Spanish")
      ))
    ),
    array(
      "title" => "Systems Administrator",
      "organisation" => "Avalon Equipment Corporation",
      "location" => "Vista, CA",
      "from" => "March 2002",
      "to" => "November 2004",
      "details" => array(
        "Built and maintained a Linux-based mail server running sendmail, BIND9 DNS Server, POP3 and IMAP4 services, and SSL-Enabled Apache. All mail services included encrypted authentication using SSL. Implemented Sophos anti-virus protection with automatic updates for mail services. Setup SMTP Services for remote users.",
        "Setup and maintained a Windows 2000 Server Domain Controller. Integrated the Windows 2000 DNS Service with existing Linux-based DNS Servers.",
        "Implemented strong anti-virus protection, security, and password policies.",
        "Designed and implemented a system to automatically perform search engine optimization (SEO) on the company web site. Using C, PHP, and mySQL, product information pages were automatically created so they would show up in search engines. Our pages often showed up as the #1 search result on Google, even beating the original manufacturers' web sites.",
        "Assisted in the transition from a Peer-to-Peer Mac-based inventory system to a centralized Linux-based inventory and accounting system.",
        "Programmed, customized, supported, and troubleshooted a 4GL-based accounting system. Wrote code in C and PHP to synchronize the data to a mySQL-based data warehouse. Created a front end in PHP to facilitate easy access to the data in the mySQL data warehouse.",
        "Supported and maintained a Windows-based accounting system. Wrote code in C and PHP to synchronize the data to a Microsoft SQL Server-based data warehouse. Created and improved reports using Crystal Reports.",
        "Coordinated with consultants that were assisting in programming additional add ons to our accounting system. Enforced quality assurance (QA) of the code and that the add ons met all of our requirements."
    ),
      "technology_used" => array("tools" => array(
        array("name" => "Apache"),
        array("name" => "C"),
        array("name" => "Crystal Reports"),
        array("name" => "FreeBSD"),
        array("name" => "HTML"),
        array("name" => "Microsoft SQL Server"),
        array("name" => "Microsoft Windows Server"),
        array("name" => "mySQL"),
        array("name" => "PHP"),
        array("name" => "qmail"),
        array("name" => "Quality Assurance"),
        array("name" => "SuSE Linux")
      ))
    )
  ));
  public $research_experience = array(
    "items" => array(
      array(
        "title" => "Outlier Detection in Wireless Sensor Networks",
        "organisation" => "Missouri University of Science and Technology",
        "from" => "May 2008",
        "to" => "May 2011",
        "points" => array(
          "Detecting and reacting to outliers in wireless sensor networks",
          "Maximized the chance of finding an optimal solution while minimizing the network traffic",
          "data-agnostic framework applicable to non-Gaussian data sets"
        )
      ),
      array(
        "title" => "TutorWriter",
        "organisation" => "California State University, San Marcos",
        "from" => "January 2006",
        "to" => "May 2006",
        "points" => array(
          "Wrote a tool in Qt to create a user friendly tool to generate student lessons and quizzes"
        )
      )
    )
  );
}
header("Content-type: text/json");
$dylan = new Dylan();
echo json_encode($dylan, JSON_PRETTY_PRINT);
?>