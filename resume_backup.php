<?php $thisPage = 'resume'; ?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Moling Guo - Resume</title>
    <?php include 'pageHeader.php'; ?>
  </head>
  <body>
	<?php include 'nav.php'; ?>
	
	<div class="row resume-tab">
  <div class="large-12 columns">
    <dl class="tabs vertical" data-tab>
    <dd class="active"><a href="#projects">Projects</a></dd>
      <dd><a href="#computer">Computer Knowledge</a></dd>
      <dd><a href="#workexperience">Work Experience</a></dd>
      <dd><a href="#education">Education</a></dd>
      <dd><a href="#additions">Additions</a></dd>
    </dl>
    <div class="tabs-content vertical">
      <div class="content active" id="projects">
        <div class="resume-section">
          <h3>Harvard Graduate School of Education Website Rebuild</h3>
          <h4>Co-Developer</h4>
          <ul>
            <li>Drupal Site Building -- Set up content types, fields, field collections, views, blocks, menus, taxonomy terms, webforms.</li>
            <li>Theming -- Theme Drupal template files using PHP to convert static HTML to dynamic; content including: homepage slider, academic program landing pages, faculty profile pages, news stories and topic landing page, library landing page, universal page, SPIFs.</li>
            <li>Content Migration -- Feeds import by XPath XML parser. Including import news stories from WordPress; import faculty, staff, course, office from GRID system; import events from trumba RSS.</li>
            <li>Menu Functionality Optimization -- set up menu using Drupal menu block, add some JavaScript and CSS to match expected functionality</li>
            <li>QA and Debugging -- QA on different browsers and platforms, fix issues.</li>
          </ul>
        </div>
        <div class="resume-section">
          <h3>Website: Introduction to Music Recording</h3>
          <h4>Developer</h4>
          <ul>
            <li>First website project, course project from Web Development Course</li>
          </ul>
        </div>
      </div>
      <div class="content" id="computer">
        <div class="resume-section">
          <h3>Languages</h3>
          <p>Java, HTML, CSS, JavaScript, PHP, SQL, Python, XML, C++, Processing, ActionScript, Scheme-Racket</p>
        </div>
        <div class="resume-section">
          <h3>Systems</h3>
          <p>Mac-OS, Windows, Linux</p>
        </div>
        <div class="resume-section">
          <h3>Frameworks/Software</h3>
          <p>jQuery, Drupal, Wordpress, Foundation, Ruby on Rails, MAMP, Adobe Creative Suite, Final Cut, Pro Tools, Garage Band, Google Sketch Up, Microsoft Office</p>
        </div>
      </div>
      <div class="content" id="workexperience">
        <div class="resume-section">
          <h3>Information Technology, Harvard Graduate School of Education</h3>
          <h4>Web Development Co-op Intern, January 2014 - August 2014</h4>
          <ul>
            <li>Assisted with the development and launch of the new Harvard Graduate School of Education website.</li>
            <li>Worked on site building, site theming, content migration. </li>
            <li>Oversaw Quality Assurance testing and bug tracking, including diagnosing, triaging, and resolving bugs.</li>
            <li>Assisted with the site building of Operations site of HGSE by operscholar.</li>
          </ul>
        </div>
        <div class="resume-section">
          <h3>College of Computer and Information Science, Northeastern University</h3>
          <h4>Tutor/Grader, September 2012 - Present</h4>
          <ul>
            <li>Tutor/Grader for course Discrete Structure, Logic and Computation</li>
            <li>Grader for course Object-Oriented Design</li>
            <li>Hold office hours to answer questions related to course. </li>
            <li>Graded homework, quiz, and exams</li>
          </ul>
          <h4>P2P Network Peer Mentor</h4>
          <ul>
            <li>Help incoming students transition to a new community by giving advice and tips, mainly through email</li>
          </ul>
        </div>
      </div>
      <div class="content" id="education">
        <div class="resume-section">
          <h3>Northeastern University, Boston, MA, September 2011 — Present</h3>
          <p>College of Computer and Information Science</p>
          <p>Candidate for a Bachelor of Science in Computer Science and Interactive Media  2016 </p>
          <p>Honors: GPA: 3.9/4.0, Dean’s List</p>
          <p>Relevant Courses: Object-Oriented Design | Algorithms and Data | Web Development | Database Design | Computer Graphics | Logic and Computation | Music Recording 1, 2</p>
          <p>Minor: Music Recording</p>
        </div>
        <div class="resume-section">
          <h3>Yali High School, Changsha, Hunan, China, 2007 — 2010</h3>
          <p>Honors/Activities: Honor Students | Physics Provincial Awards | Second Place in School Singing Competition</p>
        </div>
      </div>
      <div class="content" id="additions">
        <div class="resume-section">
          <h3>Language</h3>
          <p>Native Mandarin Chinese</p>
        </div>
        <div class="resume-section">
          <h3>Skills</h3>
          <p>Acoustic Guitar, Piano, Singing</p>
        </div>
        <div class="resume-section">
          <h3>Interests</h3>
          <p>Spicy food, Milk Tea, Parrots</p>
        </div>
      </div>
    </div>
    </div>
	</div>
	<?php include 'siteFooter.php'; ?>
  </body>
</html>
