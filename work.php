<?php $thisPage = 'work'; ?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Moling Guo - Work</title>
    <?php include 'pageHeader.php'; ?>
    <script type="text/javascript" src="js/galleria-1.4.2.js"></script>
    <script type="text/javascript" src="js/workpage.js"></script>
  </head>
  <body>
	<?php include 'nav.php'; ?>
	
  <div class="row work-filter">
    <ul class="button-group small-12 columns">
      <li><a class="button active" rel="all"><div class="marker"><i class="fi-marker"></i></div>All</a></li>
      <li><a class="button" rel="web"><div class="marker"><i class="fi-marker"></i></div>Web</a></li>
      <li><a class="button" rel="mobile"><div class="marker"><i class="fi-marker"></i></div>Mobile</a></li>
      <li><a class="button" rel="desktop"><div class="marker"><i class="fi-marker"></i></div>Desktop</a></li>
      <li><a class="button" rel="visual"><div class="marker"><i class="fi-marker"></i></div>Visual</a></li>
      <li><a class="button" rel="music"><div class="marker"><i class="fi-marker"></i></div>Music</a></li>
    </ul>
  </div>
	<div class="row">
    <div class="large-12 columns large-centered">
      <div class="row workPortfolio">
        <ul class="work-grid">
          <li class="medium-6 columns web">
            <div class="work-content">
              <div class="work-item">
                  <img src="img/work/display/hgse.png" alt="">
                  <div class="mask"><h2>HGSE New Website</h2></div>
                  <div class="foldCorner">
                    <svg width="3.5em" height="3.5em" viewBox="0 0 1 1" class="foldTriangle">
                      <polygon points="0,0 0,1 1,1" style="fill: rgb(59,59,59)" />
                    </svg>
                    <span class="icon-drupal infoIcon"></span>
                    <div class="infoOverlay">
                      <ul>
                        <li data-reveal-id="hgse"><span class="icon-search"></span><div><a>Detail</a></div></li>
                        <li><span class="icon-globe"></span><div>Website</div></li>
                        <li><span class="icon-drupal"></span><div>Drupal</div></li>
                        <li class="show-for-large-up"><i class="fi-calendar"></i><div>Jan - July 2014</div></li>
                        <li class="gotolink"><i class="fi-link"></i><div><a href="http://gse.harvard.edu" target="_blank">gse.harvard.edu</a></div></li>
                        <div id="hgse" class="reveal-modal revealblock" data-reveal>
                          <h1>Harvard Graduate School of Education Website Rebuild 2014</h1>
                          <a class="reveallink" target="_blank" href="http://gse.harvard.edu">http://gse.harvard.edu</a>
                          <div class="detail">
                            <p>A website rebuild project for Harvard Guaduate School of Education based on Drupal 7. The new website was launched on August 2014. I worked with the Web team, IT and Communications departments to assist with the development and launch of the new website. My work includes:</p>
                            <ul>
                              <li>
                                Drupal Site Building: set up the basic structure of the site, including content types, fields, views, blocks, menus, taxonomy terms and webforms. 
                              </li>
                              <li>
                                PHP Theming: created theme template files through converting static HTML to dynamic PHP pages which grab the data from Drupal database and display them in a proper format. 
                              </li>
                              <li>
                                Content Migration: migrated content from other platforms through XML feeds importing by XPath parser. Including directory of faculty, staff and offices imported from HGSE grid System; events imported from Trumba RSS; all old news posts from WordPress.
                              </li>
                              <li>
                                Menu Optimization: developed and optimized the functionality of main menu through JavaScript and PHP, including set up menu block, menu logic and build prototypes.
                              </li>
                              <li>
                                QA and Debugging: tested the website for different platforms and browsers and fixed issues reported by tickets.
                              </li>
                              <li>
                                Internal Documentation: wrote documentation and demonstration graphs of the work I've done for internal group as reference. 
                              </li>
                            </ul>
                          </div>
                          <div class="worksliderwrap show-for-large-up">
                            <div class="galleria hgse">
                              <img src="img/work/hgse/hgse3.jpg" alt="HGSE Homepage" />
                              <img src="img/work/hgse/hgse1.jpg" alt="HGSE Sample Designs in Web Room" />
                              <img src="img/work/hgse/hgse4.jpg" alt="Drupal Fields Rendering Demo Graph" />
                              <img src="img/work/hgse/hgse2.jpg" alt="Sample Documentation Graphs" />
                            </div>
                          </div>
                          <a class="close-reveal-modal">&#215;</a>
                        </div>
                      </ul>
                    </div>
                  </div>
              </div>
              
            </div>
          </li>
          <li class="medium-6 columns web mobile">
            <div class="work-content">
              <div class="work-item">
                <img src="img/work/display/catchmyt.png" alt="">
                <div class="mask"><h2>Catch My T - MBTA Tracker</h2></div>
                <div class="foldCorner">
                  <svg width="3.5em" height="3.5em" viewBox="0 0 1 1" class="foldTriangle">
                    <polygon points="0,0 0,1 1,1" style="fill: rgb(59,59,59)" />
                  </svg>
                  <span class="icon-js1 infoIcon"></span>
                  <div class="infoOverlay">
                    <ul>
                      <li data-reveal-id="mbta"><span class="icon-search"></span><div><a>Detail</a></div></li>
                      <li><span class="icon-globe"></span><div>Web App</div></li>
                      <li class="show-for-large-up"><span class="icon-apple"></span><div>Optimized for mobile</div></li>
                      <li><span class="icon-js1"></span><div>AngularJS, MBTA API</div></li>
                      <li class="show-for-large-up"><i class="fi-calendar"></i><div>Sept 2014</div></li>
                      <li class="gotolink"><i class="fi-link"></i><div><a href="http://molingguo.com/mbta" target="_blank">molingguo.com/mbta</a></div></li>
                      <div id="mbta" class="reveal-modal revealblock" data-reveal>
                          <h1>Catch My T - MBTA Subway Real-Time Tracker</h1>
                          <a class="reveallink" target="_blank" href="http://molingguo.com/mbta">http://molingguo.com/mbta</a>
                          <div class="detail">
                            <p>This is a project I made during the summer 2014, as an exercise to learn AngularJS and communicate with web services</p>
                            <ul>
                              <li>
                                AugularJS AJAX Request: it fetches real-time subway data from MBTA API through AngularJS HTTP request
                              </li>
                              <li>
                                Process Data: analyse, group and sort data for screen display
                              </li>
                              <li>
                                Bootstrap Theming: theming is based on Bootstrap, inspired by MBTA subway station signs
                              </li>
                              <li>
                                Mobile Optimization: it is a reponsive web app and designed for mobile display. 
                              </li>
                            </ul>
                          </div>
                          <div class="worksliderwrap show-for-large-up">
                            <div class="galleria mbta">
                              <img src="img/work/mbta/mbta1.jpg" data-description="Desktop View" />
                              <img src="img/work/mbta/mbta2.jpg" data-description="Mobile View" />
                            </div>
                          </div>
                          <a class="close-reveal-modal">&#215;</a>
                        </div>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="medium-6 columns desktop">
            <div class="work-content">
              <div class="work-item">
                <img src="img/work/display/dontstarve.png" alt="">
                <div class="mask"><h2>Don't Starve Game</h2></div>
                <div class="foldCorner">
                  <svg width="3.5em" height="3.5em" viewBox="0 0 1 1" class="foldTriangle">
                    <polygon points="0,0 0,1 1,1" style="fill: rgb(59,59,59)" />
                  </svg>
                  <span class="icon-terminal1 infoIcon"></span>
                  <div class="infoOverlay">
                    <ul>
                      <li><i class="fi-puzzle"></i><div>Game</div></li>
                      <li><span class="icon-file-css"></span><div>C++, SDL</div></li>
                      <li class="show-for-large-up"><i class="fi-calendar"></i><div>Nov-Dec 2014</div></li>
                      <!-- <li class="gotolink"><i class="fi-magnifying-glass"></i><div><a href="https://github.com/morning2139/dont_starve_text_game" target="_blank">Source Code</a></div></li> -->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="medium-6 columns mobile">
            <div class="work-content">
              <div class="work-item">
                <img src="img/work/display/musicene.png" alt="">
                <div class="mask"><h2>Musicene - iOS Music App</h2></div>
                <div class="foldCorner">
                  <svg width="3.5em" height="3.5em" viewBox="0 0 1 1" class="foldTriangle">
                    <polygon points="0,0 0,1 1,1" style="fill: rgb(59,59,59)" />
                  </svg>
                  <span class="icon-apple infoIcon"></span>
                  <div class="infoOverlay">
                    <ul>
                      <li data-reveal-id="musicene"><span class="icon-search"></span><div><a>Detail</a></div></li>
                      <li><span class="icon-apple"></span><div>iOS App</div></li>
                      <li class="show-for-large-up"><i class="fi-music"></i><div>Music/Sound Game</div></li>
                      <li><i class="fi-wrench"></i><div>Objective-C, Xcode</div></li>
                      <li class="show-for-large-up"><i class="fi-calendar"></i><div>Aug 2014</div></li>
                      <li class="gotolink"><i class="fi-link"></i><div><a href="https://github.com/morning2139/Musicene" target="_blank">Source Code</a></div></li>
                      <div id="musicene" class="reveal-modal revealblock" data-reveal>
                        <h1>Musicene - iOS Music App Prototype</h1>
                        <div class="detail">
                          <p>This is a project prototype I made during the summer 2014, the original project is from a non-technical music course but I just decided to make it technically, as an opportunity to learn and practice iOS development.</p>
                          <p>It's a music relax and game app: there is a given scene with background music playing and some components, they can be any types of stuff like the mountain, river, tree, windmill, and also animals like dog and cat. Each one has a natural sound attached so when you do different gestures to it, such as tap or swipe, it will play the sound and do some animation to be better merged into the background music and also the landscape scene. </p>
                          <ul>
                            <li>
                              AVFoundation Framework: use AVAudioPlayer to play all sounds
                            </li>
                            <li>
                              Dynamic Animator: implement animation like rain drop by gravity behavior and collision behavior
                            </li>
                            <li>
                              Gesture Recognizer: involves tap, rotation, swipe, pan gestures to play
                            </li>
                            <li>
                              UI/Design: images are made by Photoshop and Illustrator 
                            </li>
                          </ul>
                        </div>
                        <div class="worksliderwrap show-for-large-up">
                          <div class="galleria musicene">
                            <img src="img/work/musicene/musicene1.jpg" />
                            <img src="img/work/musicene/musicene2.jpg" />
                          </div>
                        </div>
                        <a class="close-reveal-modal">&#215;</a>
                      </div>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="medium-6 columns web">
            <div class="work-content">
              <div class="work-item">
                  <img src="img/work/display/walkingtheborder.png" alt="">
                  <div class="mask"><h2>Walking the Border</h2></div>
                  <div class="foldCorner">
                    <svg width="3.5em" height="3.5em" viewBox="0 0 1 1" class="foldTriangle">
                      <polygon points="0,0 0,1 1,1" style="fill: rgb(59,59,59)" />
                    </svg>
                    <span class="icon-globe infoIcon"></span>
                    <div class="infoOverlay">
                      <ul>
                        <li><span class="icon-globe"></span><div>Web Prototype</div></li>
                        <li><span class="icon-js1"></span><div>JavaScript</div></li>
                        <li><span class="icon-info"></span><div>Content by Luck Dittrich</div></li>
                        <li class="show-for-large-up"><i class="fi-calendar"></i><div>Dec 2014</div></li>
                        <li class="gotolink"><i class="fi-link"></i><div><a href="http://molingguo.com/walkingtheborder" target="_blank">Go to link</a></div></li>
                      </ul>
                    </div>
                  </div>
              </div>
            </div>
          </li>
          <li class="medium-6 columns web mobile">
            <div class="work-content">
              <div class="work-item">
                <img src="img/work/display/mobileadcampaign.png" alt="">
                <div class="mask"><h2>Mobile Ad Campaign - Guitar Center</h2></div>
                <div class="foldCorner">
                  <svg width="3.5em" height="3.5em" viewBox="0 0 1 1" class="foldTriangle">
                    <polygon points="0,0 0,1 1,1" style="fill: rgb(59,59,59)" />
                  </svg>
                  <span class="icon-apple infoIcon"></span>
                  <div class="infoOverlay">
                    <ul>
                      <li><span class="icon-globe"></span><div>Web Demo</div></li>
                      <li><span class="icon-js1"></span><div>JavaScript, Photoshop</div></li>
                      <li class="show-for-large-up"><i class="fi-calendar"></i><div>July 2014</div></li>
                      <li class="gotolink"><i class="fi-link"></i><div><a href="http://molingguo.com/campaign" target="_blank">molingguo.com/campaign</a></div></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="medium-6 columns web">
            <div class="work-content">
              <div class="work-item">
                  <img src="img/work/display/operations.png" alt="">
                  <div class="mask"><h2>HGSE Operations Website</h2></div>
                  <div class="foldCorner">
                    <svg width="3.5em" height="3.5em" viewBox="0 0 1 1" class="foldTriangle">
                      <polygon points="0,0 0,1 1,1" style="fill: rgb(59,59,59)" />
                    </svg>
                    <span class="icon-globe infoIcon"></span>
                    <div class="infoOverlay">
                      <ul>
                        <li><span class="icon-globe"></span><div>Website</div></li>
                        <li><i class="fi-wrench"></i><div>OpenScholar</div></li>
                        <li class="show-for-large-up"><i class="fi-calendar"></i><div>Jan 2014</div></li>
                        <li class="gotolink"><i class="fi-link"></i><div><a href="http://sites.gse.harvard.edu/operations" target="_blank">Website Link</a></div></li>
                      </ul>
                    </div>
                  </div>
              </div>
            </div>
          </li>
          <li class="medium-6 columns web">
            <div class="work-content">
              <div class="work-item">
                <img src="img/work/display/recording.png" alt="">
                <div class="mask"><h2>Music Recording Intro</h2></div>
                <div class="foldCorner">
                  <svg width="3.5em" height="3.5em" viewBox="0 0 1 1" class="foldTriangle">
                    <polygon points="0,0 0,1 1,1" style="fill: rgb(59,59,59)" />
                  </svg>
                  <span class="icon-globe infoIcon"></span>
                  <div class="infoOverlay">
                    <ul>
                      <li><span class="icon-globe"></span><div>Website</div></li>
                      <li><span class="icon-js1"></span><div>fullPage.js</div></li>
                      <li class="show-for-large-up"><i class="fi-calendar"></i><div>Dec 2013</div></li>
                      <li class="gotolink"><i class="fi-link"></i><div><a href="http://molingguo.com/recording" target="_blank">molingguo.com/recording</a></div></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="medium-6 columns desktop">
            <div class="work-content">
              <div class="work-item">
                <img src="img/work/display/gradebook.png" alt="">
                <div class="mask"><h2>Gradebook Software</h2></div>
                <div class="foldCorner">
                  <svg width="3.5em" height="3.5em" viewBox="0 0 1 1" class="foldTriangle">
                    <polygon points="0,0 0,1 1,1" style="fill: rgb(59,59,59)" />
                  </svg>
                  <span class="icon-web9 infoIcon"></span>
                  <div class="infoOverlay">
                    <ul>
                      <li><span class="icon-web9"></span><div>Software</div></li>
                      <li><span class="icon-java1"></span><div>Java</div></li>
                      <li class="show-for-large-up"><i class="fi-calendar"></i><div>Apr 2014</div></li>
                      <!-- <li class="gotolink"><i class="fi-magnifying-glass"></i><div><a href="#" target="_blank">Source Code</a></div></li> -->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="medium-6 columns desktop">
            <div class="work-content">
              <div class="work-item">
                <img src="img/work/display/frogger.png" alt="">
                <div class="mask"><h2>Frogger Game</h2></div>
                <div class="foldCorner">
                  <svg width="3.5em" height="3.5em" viewBox="0 0 1 1" class="foldTriangle">
                    <polygon points="0,0 0,1 1,1" style="fill: rgb(59,59,59)" />
                  </svg>
                  <span class="icon-java1 infoIcon"></span>
                  <div class="infoOverlay">
                    <ul>
                      <li><i class="fi-puzzle"></i><div>Game</div></li>
                      <li><span class="icon-java1"></span><div>Java</div></li>
                      <li class="show-for-large-up"><i class="fi-calendar"></i><div>Apr 2013</div></li>
                      <li class="gotolink"><i class="fi-magnifying-glass"></i><div><a href="https://github.com/morning2139/Frogger_Game_Java" target="_blank">Source Code</a></div></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="medium-6 columns desktop">
            <div class="work-content">
              <div class="work-item">
                <img src="img/work/display/roomescape.png" alt="">
                <div class="mask"><h2>Room Escape Game</h2></div>
                <div class="foldCorner">
                  <svg width="3.5em" height="3.5em" viewBox="0 0 1 1" class="foldTriangle">
                    <polygon points="0,0 0,1 1,1" style="fill: rgb(59,59,59)" />
                  </svg>
                  <span class="icon-flash7 infoIcon"></span>
                  <div class="infoOverlay">
                    <ul>
                      <li><i class="fi-puzzle"></i><div>Game</div></li>
                      <li><span class="icon-flash7"></span><div>ActionScript</div></li>
                      <li class="show-for-large-up"><i class="fi-calendar"></i><div>Apr 2013</div></li>
                      <li class="gotolink"><i class="fi-magnifying-glass"></i><div><a href="https://github.com/morning2139/RoomEscape_Action_Script" target="_blank">Source Code</a></div></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="medium-6 columns desktop">
            <div class="work-content">
              <div class="work-item">
                <img src="img/work/display/zombie.png" alt="">
                <div class="mask"><h2>Avoid Zombie Game</h2></div>
                <div class="foldCorner">
                  <svg width="3.5em" height="3.5em" viewBox="0 0 1 1" class="foldTriangle">
                    <polygon points="0,0 0,1 1,1" style="fill: rgb(59,59,59)" />
                  </svg>
                  <span class="icon-web9 infoIcon"></span>
                  <div class="infoOverlay">
                    <ul>
                      <li><i class="fi-puzzle"></i><div>Game</div></li>
                      <li><span class="icon-file-css"></span><div>C++, DirectX</div></li>
                      <li class="show-for-large-up"><i class="fi-calendar"></i><div>Mar 2013</div></li>
                      <li class="gotolink"><i class="fi-magnifying-glass"></i><div><a href="https://github.com/morning2139/AvoidZombie-Game" target="_blank">Source Code</a></div></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="medium-6 columns visual">
            <div class="work-content">
              <div class="work-item">
                <img src="img/work/display/wttww.png" alt="">
                <div class="mask"><h2>Welcome to the Working Week</h2></div>
                <div class="foldCorner">
                  <svg width="3.5em" height="3.5em" viewBox="0 0 1 1" class="foldTriangle">
                    <polygon points="0,0 0,1 1,1" style="fill: rgb(59,59,59)" />
                  </svg>
                  <span class="icon-camera infoIcon"></span>
                  <div class="infoOverlay">
                    <ul>
                      <li><i class="fi-video"></i><div>Lyric Video</div></li>
                      <li><i class="fi-wrench"></i><div>After Effects</div></li>
                      <li class="show-for-large-up"><i class="fi-calendar"></i><div>Mar 2013</div></li>
                      <li class="gotolink revealDetail" data-reveal-id="wttww"><i class="fi-magnifying-glass"></i><div><a>Play</a></div></li>
                      <div id="wttww" class="reveal-modal medium" data-reveal>
                        <h2>Welcome to the Working Week Lyric Video</h2>
                        <div class="flex-video">
                          <iframe width="420" height="315" src="//www.youtube.com/embed/vphnUj1-n0s" frameborder="0" allowfullscreen></iframe>    </div>    
                          <a class="close-reveal-modal">&#215;</a>
                        </div>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="medium-6 columns visual">
            <div class="work-content">
              <div class="work-item">
                <img src="img/work/display/stopmotion.png" alt="">
                <div class="mask"><h2>Stop Motion Video</h2></div>
                <div class="foldCorner">
                  <svg width="3.5em" height="3.5em" viewBox="0 0 1 1" class="foldTriangle">
                    <polygon points="0,0 0,1 1,1" style="fill: rgb(59,59,59)" />
                  </svg>
                  <span class="icon-camera infoIcon"></span>
                  <div class="infoOverlay">
                    <ul>
                      <li><i class="fi-video"></i><div>Video</div></li>
                      <li><i class="fi-wrench"></i><div>Photoshop, AfterEffects</div></li>
                      <li class="show-for-large-up"><i class="fi-calendar"></i><div>Feb 2013</div></li>
                      <li class="gotolink revealDetail" data-reveal-id="stopmotion"><i class="fi-magnifying-glass"></i><div><a>Play</a></div></li>
                      <div id="stopmotion" class="reveal-modal medium" data-reveal>
                        <h2>Stop Motion Video</h2>
                        <h3>This video is a course project for 4D Foundation. The background music is distorted from a original piece of music, the visual images are created by photoshop and arranged by After Effects.</h3>
                        <div class="flex-video">
                          <iframe width="420" height="315" src="//www.youtube.com/embed/2Dz56yVvXAA" frameborder="0" allowfullscreen></iframe>
                        </div>    
                        <a class="close-reveal-modal">&#215;</a>
                      </div>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="medium-6 columns visual">
            <div class="work-content">
              <div class="work-item">
                <img src="img/work/display/lasercut.png" alt="">
                <div class="mask"><h2>Rock Band - 3D Model</h2></div>
                <div class="foldCorner">
                  <svg width="3.5em" height="3.5em" viewBox="0 0 1 1" class="foldTriangle">
                    <polygon points="0,0 0,1 1,1" style="fill: rgb(59,59,59)" />
                  </svg>
                  <span class="icon-scissors infoIcon"></span>
                  <div class="infoOverlay">
                    <ul>
                      <li><span class="icon-scissors"></span><div>3D Paper Model</div></li>
                      <li><span class="icon-crop"></span><div>SketchUp, Laser Cut</div></li>
                      <li class="show-for-large-up"><i class="fi-calendar"></i><div>Mar 2012</div></li>
                      <!-- <li class="gotolink"><i class="fi-magnifying-glass"></i></li> -->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="medium-6 columns visual">
            <div class="work-content">
              <div class="work-item">
                <img src="img/work/display/paintbynumber.png" alt="">
                <div class="mask"><h2>Paint By Number Painting</h2></div>
                <div class="foldCorner">
                  <svg width="3.5em" height="3.5em" viewBox="0 0 1 1" class="foldTriangle">
                    <polygon points="0,0 0,1 1,1" style="fill: rgb(59,59,59)" />
                  </svg>
                  <span class="icon-painter11 infoIcon"></span>
                  <div class="infoOverlay">
                    <ul>
                      <li><span class="icon-painter11"></span><div>Painting</div></li>
                      <li><i class="fi-wrench"></i><div>Paint by number</div></li>
                      <li class="show-for-large-up"><i class="fi-calendar"></i><div>Aug 2014</div></li>
                      <!-- <li class="gotolink"><i class="fi-magnifying-glass"></i></li> -->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="medium-6 columns music">
            <div class="work-content">
              <div class="work-item">
                <img src="img/work/display/soyoung.png" alt="">
                <div class="mask"><h2>So Young 致青春</h2></div>
                <div class="foldCorner">
                  <svg width="3.5em" height="3.5em" viewBox="0 0 1 1" class="foldTriangle">
                    <polygon points="0,0 0,1 1,1" style="fill: rgb(59,59,59)" />
                  </svg>
                  <span class="icon-equalizer32 infoIcon"></span>
                  <div class="infoOverlay">
                    <ul>
                      <li><i class="fi-music"></i><div>Cover Song</div></li>
                      <li><i class="fi-wrench"></i><div>Piano, Guitar, Melodica</div></li>
                      <li class="show-for-large-up"><i class="fi-calendar"></i><div>June 2013</div></li>
                      <li class="gotolink revealDetail" data-reveal-id="soyoung"><i class="fi-play"></i><div><a>Play</a></div></li>
                      <div id="soyoung" class="reveal-modal small" data-reveal>
                          <h1>So Young - Cover Song</h1>
                          <h1>Piano, Guitar, Melodica, Vocal, Recording: Moling</h1>
                          <br>
                          <iframe width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/114595806&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=false"></iframe>
                          <a class="close-reveal-modal">&#215;</a>  
                      </div> 
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="medium-6 columns music end">
            <div class="work-content">
              <div class="work-item">
                <img src="img/work/display/ladydong.png" alt="">
                <div class="mask"><h2>Lady Dong 董小姐</h2></div>
                <div class="foldCorner">
                  <svg width="3.5em" height="3.5em" viewBox="0 0 1 1" class="foldTriangle">
                    <polygon points="0,0 0,1 1,1" style="fill: rgb(59,59,59)" />
                  </svg>
                  <span class="icon-equalizer32 infoIcon"></span>
                  <div class="infoOverlay">
                    <ul>
                      <li><i class="fi-music"></i><div>Cover Song</div></li>
                      <li class="show-for-large-up"><i class="fi-torsos"></i><div>with Xiang Fan</div></li>
                      <li><i class="fi-wrench"></i><div>Guitar, Piano</div></li>
                      <li class="show-for-large-up"><i class="fi-calendar"></i><div>Sept 2013</div></li>
                      <li class="gotolink revealDetail" data-reveal-id="ladydong"><i class="fi-play"></i><div><a>Play</a></div></li>
                      <div id="ladydong" class="reveal-modal small" data-reveal>
                          <h1>Lady Dong - Cover Song</h1>
                          <h1>Male Vocal, Acoustic Guitar: Xiang Fan</h1>
                          <h1>Female Vocal, Piano, Recording/Mixing: Moling Guo</h1>
                          <br>
                          <iframe width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/114596950&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=false"></iframe>
                          <a class="close-reveal-modal">&#215;</a>  
                      </div> 
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
	  </div>
  </div>
  <?php include 'siteFooter.php'; ?>
  <!-- BEGIN REVEAL PART -->
  <div id="soon" class="reveal-modal" data-reveal>
    <h1 class="comingsoon">COMING SOON!</h1>
    <a class="close-reveal-modal">&#215;</a>
  </div>
  <!-- <div id="fairyland" class="reveal-modal medium" data-reveal>
    <h2>Fairyland Video</h2>
    <div class="flex-video">
      <iframe width="420" height="315" src="//www.youtube.com/embed/3a9ml41V5RU" frameborder="0" allowfullscreen></iframe>    <a class="close-reveal-modal">&#215;</a>
  </div> -->
  <!--   END REVEAL -->
  </body>
</html>
