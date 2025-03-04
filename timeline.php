<?php include 'header.php'; ?>

<style>
    .hiddenForNow {
        display: none;
    }

    .tlcontainer {
        padding: 1em;
    }

    .timeline {
        position: relative;
        overflow: auto;
    }

    .timeline:before {
        content: '';
        position: absolute;
        height: 100%;
        width: 5px;
        background: #dddddd;
        left: 0;
    }

    .timeline h2 {
        background: #dddddd;
        max-width: 6em;
        margin: 0 auto 1em;
        padding: 0.5em;
        text-align: center;
        position: relative;
        clear: both;
    }

    .timeline ul {
        list-style: none;
        padding: 0 0 0 1em;
        z-index: 1;
    }

    .timeline li {
        background: #dddddd;
        padding: 1em;
        margin-bottom: 1em;
        position: relative;
    }

    .timeline li:before {
        content: '';
        width: 0;
        height: 0;
        border-top: 1em solid #dddddd;
        border-left: 1em solid transparent;
        position: absolute;
        left: -1em;
        top: 0;
    }

    .timeline h3 {
        margin-top: 0;
    }

    .timeline time {
        font-style: italic;
    }

    @media screen and (min-width: 40em) {
        .tlcontainer {
            /*max-width: 1000px;*/
            margin: 0 auto;
        }

        .timeline:before {
            left: 50%;
        }

        .timeline ul {
            padding-left: 0;
            /*max-width: 700px;*/
            margin: 0 auto;
        }

        .timeline li {
            width: 47%;
        }

        .timeline li:nth-child(even) {
            float: right;
            margin-top: 2em;
        }

        .timeline li:nth-child(odd) {
            float: left;
        }

        .timeline li:nth-child(odd):before {
            border-top: 1em solid #dddddd;
            border-right: 1em solid transparent;
            right: -1em;
            left: auto;
        }

        .timeline li:nth-of-type(2n+1) {
            clear: both;
        }
    }
</style>

<section id="banner">
    <div class="content">
        <header>
            <h1>Timeline</h1>
            <p>Experimental timeline page</p>
        </header>

        <div class="tlcontainer">
            <div class="timeline">

            <h2 class="">Spring 2022</h2>

                <ul class="">

                    <li>
                        <h3>Spring 2022 Classes</h3>
                        <p>I am teaching 1 section of CS498 Software Engineering II, my immersive learning course called Digitizing Muncie and DSCI 689 Capstone in Data Science course this semester.</p>
                        <time>August 2021</time>
                    </li>

                </ul>

            <h2 class="">Fall 2021</h2>

                <ul class="">

                    <li>
                        <h3>CS&H Blog Post</h3>
                        <p>My community outreach efforts are features in a <a href="https://blogs.bsu.edu/csh/2021/10/12/possibility-through-partnership-computer-science-in-the-muncie-community/" target="_blank">blogpost in the College of Sciences and Humanities page</a>.</p>
                        <time>October 2021</time>
                    </li>

                    <li>
                        <h3>Capstone Alumni Panel</h3>
                        <p>I organized <a href="https://commcenter.bsu.edu/message/computer-science-capstone-alumni-panel-friday-17th-at-3-00-pm" target="_blank">a panel of Capstone alumni</a> for our students.</p>
                        <time>September 2021</time>
                    </li>

                    <li>
                        <h3>Digitizing Muncie - Elevate Higher Ed Grant</h3>
                        <p>The immersive learning course I will teach in Spring got supported by the ENT Center and the <a href="https://eda.gov/success-stories/innovation-entrepreneurship/stories/elevate-ventures.htm" target="_blank">Elevate Higher Ed Grant</a> worth of $50,000 along with my colleague Krystal Geyer. <a href="https://www.ballstatedailynews.com/article/2021/10/news-ball-state-awarded-50000-to-create-a-new-tech-based-entrepreneurship-course" target="_blank">BSU Daily News Article</a>.</p>
                        <time>September 2021</time>
                    </li>

                    <li>
                        <h3>Fall 2021 Classes</h3>
                        <p>I am teaching 1 section of CS495 Software Engineering I this semester.</p>
                        <time>August 2021</time>
                    </li>

                    <li>
                        <h3>Elevate Nexus</h3>
                        <p>I was a panelist at the Future of Entrepreneurship Education</a> session of the Elevate Nexus Conference. <a href="images/elevate-nexus.jpg" target="_blank">Picture 1</a>, <a href="images/elevate-nexus2.jpg" target="_blank">picture 2</a>.</p>
                        <time>August 2021</time>
                    </li>
                </ul>

            <h2 class="">Summer 2021</h2>

                <ul class="">

                    <li>
                        <h3>Paper Talks</h3>
                        <p>Erman Pattuk (Sr. Software Engineer at Google) and I have talked about <a href="https://dl.acm.org/doi/10.1145/3365438.3410959" target="_blank">one of my papers</a> on <a href="https://www.youtube.com/watch?v=Ldn_NN7sL2Q" target="_blank">Youtube live</a> (in Turkish).</p>
                        <time>August 2021</time>
                    </li>

                    <li>
                        <h3>2021 Outstanding Community Partner Award</h3>
                        <p>President Mearns and I have <a href="images/accutech-present.jpg" target="_blank">presented the award to Accutech</a>. The event is featured on <a href="https://www.bsu.edu/news/press-center/archives/2021/08/accutech-honored-as-2021-outstanding-community-partner" target="_blank">BSU News</a>, <a href="http://www.munciejournal.com/2021/08/accutech-honored-as-2021-ball-state-university-outstanding-community-partner/" target="_blank">Muncie Journal</a>, and  <a href="https://www.thestarpress.com/story/life/2021/08/10/accutech-honored-2021-ball-state-outstanding-community-partner/5537674001/" target="_blank">Star Press</a>.</p>
                        <time>August 2021</time>
                    </li>

                    <li>
                        <h3>Startup Weekend 3.0</h3>
                        <p>I am in the organization committee of the <a href="https://event.techstars.com/event/1d7H7nQEdJ" target="_blank">Startup Weekend Muncie 3.0</a>.</p>
                        <time>July 2021</time>
                    </li>

                    <li>
                        <h3>Immersive Learning Training</h3>
                        <p>I got <a href="docs/2021-immersive-learning-cert.png" target="_blank">my immersive learning certification</a> after a week of training.</p>
                        <time>July 2021</time>
                    </li>

                    <li>
                        <h3>Elevate Nexus</h3>
                        <p>I will be a <a href="images/nexus.png" target="_blank">panelist at the Future of Entrepreneurship Education</a> session of <a href="https://www.elevateventures.com/entrepreneurs/investment-funding/elevate-nexus/elevate-nexus-conference" target="_blank">the Elevate Nexus Conference</a>.</p>
                        <time>July 2021</time>
                    </li>

                    <li>
                        <h3>Immersive Learning</h3>
                        <p>My immersive learning course proposal called <a href="images/digitizing-muncie.png" target="_blank">Digitizing Muncie: One Tech Startup at a Time</a> is accepted and funded $6,280 for Spring'22.</p>
                        <time>June 2021</time>
                    </li>

                    <li>
                        <h3>MDEforALL Project</h3>
                        <p>I have hired two undergraduate students for my ASPIRE grant project.</p>
                        <time>May 2021</time>
                    </li>

                    <li>
                        <h3>DSM Program Committee</h3>
                        <p>I will serve in the <a href="https://2021.splashcon.org/committee/dsm-2021-papers-program-committee" target="_blank">program committee of the DSM Workshop 2021 (Domain-Specific Modeling) at SPLASH 2021</a>.</p>
                        <time>May 2021</time>
                    </li>

                </ul>
            </h2>

            <h2 class="">Spring 2021</h2>

                <ul class="">

                    <li>
                        <h3>The 2nd Capstone Showcase</h3>
                        <p>Our wonderful students presented their Capstone Projects in the 2nd Annual Capstone Showcase I have hosted. You can find a recording of the showcase <a href="https://www.youtube.com/watch?v=mJk1ZxcK0N4" target="_blank">here</a>.</p>
                        <time>April 2021</time>
                    </li>

                    <li>
                        <h3>Fireside Chats</h3>
                        <p>As part of our Capstone Courses, I have moderated three fireside chats with people from industry: <a href="https://youtu.be/3v_M9W7Bwf4" target="_blank">Erman Pattuk (Sr. Software Engineer at Google)</a>, <a href="https://youtu.be/1McHp0UESic" target="_blank">Nurettin Dag (Director of Engineering, Stealth Mode Startup)</a>, and <a href="https://youtu.be/Sw3XtAxOQaQ" target="_blank">Emre Koc (CTO at dresden.vision)</a>.</p>
                        <time>April 2021</time>
                    </li>

                    <li>
                        <h3>2021 Outstanding Community Partner Award</h3>
                        <p>My partnership with <a href="https://www.trustasc.com/" target="_blank">Accutech Systems Corporation</a> has been recognized as <a target="_blank" href="images/accutech.png">the 2021 Outstanding Community Partner Award</a> by our university 🎉</p>
                        <time>March 2021</time>
                    </li>

                    <li>
                        <h3>East Central Indiana Science Fair</h3>
                        <p>I served as a judge at <a
                                href="https://www.bsu.edu/academics/collegesanddepartments/biology/activities-opportunities/east-central-indiana-science-fair"
                                target="_blank">East Central Indiana Science Fair</a> and graded the projects of future scientists.</p>
                        <time>February 2021</time>
                    </li>

                    <li>
                        <h3>Jr Faculty Research Grant</h3>
                        <p>My exploration project about the use of model-driven engineering in CS Education is funded through my university's <a href="https://www.bsu.edu/about/administrativeoffices/sponsored-projects-administration/aspire/faculty/junior-faculty-program" target="_blank">Jr Faculty Research Program</a> for the amount of $15,000.</p>
                        <time>January 2021</time>
                    </li>

                    <li>
                        <h3>MODELS Workshop Chair</h3>
                        <p>I will serve as the workshop chair at <a href="https://conf.researchr.org/committee/models-2021/models-2021-organizing-committee" target="_blank">MODELS'21 (International Conference on Model Driven Engineering Systems and Languages)</a>.</p>
                        <time>January 2021</time>
                    </li>

                    <li>
                        <h3>ICSE Artifact Evaluation Program Committee</h3>
                        <p>I will serve in the <a href="https://conf.researchr.org/track/icse-2021/icse-2021-Artifact-Evaluation" target="_blank">program committee of the ICSE 2021 (International Conference on Software Engineering)</a>.</p>
                        <time>January 2021</time>
                    </li>

                    <li>
                        <h3>Spring 2021 Classes</h3>
                        <p>I am teaching 3 sections of CS498 Software Engineering II this semester.</p>
                        <time>January 2021</time>
                    </li>

                </ul>

            <h2 class="">Fall 2020</h2>

                <ul class="">

                    <li>
                        <h3>Departmental Colloquium</h3>
                        <p>I have presented my externship experience at EduSource in a departmental colloquium. If you are interested, <a target="_blank" href="https://www.youtube.com/watch?v=fu5L8npHzHU">here is a video recording of it</a>.</p>
                        <time>November 2020</time>
                    </li>

                    <li>
                        <h3>Paper Presentation</h3>
                        <p>I have <a target="_blank" href="images/models-talk.jpg">presented</a> our vision paper that aims to replace the building blocks of block-based programming environments with model-driven alternatives at <a target="_blank" href="https://conf.researchr.org/home/models-2020">MODELS Conference 2020</a>.</p>
                        <time>October 2020</time>
                    </li>

                    <li>
                        <h3>From Graduation to Corporation</h3>
                        <p>I moderated a talk by AccuTech Lead Architect Trey Gourley on Zoom titled <em>From Graduation to Corporation</em> for my current Capstone Students. <a target="_blank" href="https://www.youtube.com/watch?v=bcgOL_7hSZ8">Here is a recording of it.</a> (because of technical difficulties Trey had to re-record it by himself)</p>
                        <time>September 2020</time>
                    </li>

                    <li>
                        <h3>Industry Talk from Capstone Alumni</h3>
                        <p>I chaired a panel by my previous year Capstone Students on Zoom for my current Capstone Students. <a target="_blank" href="https://www.youtube.com/watch?v=q90xWFPsJiQ">Here is a recording of it.</a></p>
                        <time>September 2020</time>
                    </li>

                     <li>
                        <h3>Software Workshop (postponed)</h3>
                        <p>I am giving a workshop about <a href="https://customsoftware.eventbrite.com/" target="_blank">custom software</a> at the Innovation Connector.</p>
                        <time>September 2020</time>
                    </li>

                    <li>
                        <h3>Fall 2020 Classes</h3>
                        <p>I am teaching 3 sections of CS495 Software Engineering I this semester. I also work with two students in the CS699 Reading and Honors class for my research project.</p>
                        <time>August 2020</time>
                    </li>
                
                </ul>

                <h2 class="">Summer 2020</h2>

                <ul class="">

                    <li>
                        <h3>Project Funded</h3>
                        <p>My project about visualizing any software is funded by the affiliates of S<sup>2</sup>ERC ($52,900).</p>
                        <time>August 2020</time>
                    </li>

                    <li>
                        <h3>SoSyM Editorial</h3>
                        <p>We have published the <a href="https://doi.org/10.1007/s10270-020-00818-1" target="_blank">new
                                editorial</a>.</p>
                        <time>July 2020</time>
                    </li>

                    <li>
                        <h3>MODELS Paper Accepted</h3>
                        <p>Our paper titled <em>A Model-driven Alternative to Programming in Blocks using Rule-based Transformations</em> is accepted at <a href="https://conf.researchr.org/track/models-2020/models-2020-technical-track#Call-for-papers"
                                target="_blank">MODELS Conference</a> New Ideas & Vision Papers Track.
                        </p>
                        <time>July 2020</time>
                    </li>

                    <li>
                        <h3>Extenship</h3>
                        <p>I started my externship with <a href="https://www.edusource.us"
                                target="_blank">EduSource</a>. I am observing the company and interviewing with employees to incorporate best practices in the industry in my Capstone classes.
                        </p>
                        <time>July 2020</time>
                    </li>

                    <li>
                        <h3>S2ERC Showcase</h3>
                        <p>I presented my project proposal of visualizing any software at <a href="https://www.serc.net/sc2020s_virtual-showcase-info/"
                                target="_blank">S2ERC Showcase</a>.
                        </p>
                        <time>June 2020</time>
                    </li>

                    <li>
                        <h3>VSTOP</h3>
                        <p>I am taking the responsibility of the <a href="https://www.bsu.edu/academics/centersandinstitutes/bowencenter/vstop" target="_blank">VSTOP</a> project (software aspect) as a faculty fellow in the summer to plan for the future of the software.</p>
                        <time>May 2020</time>
                    </li>

                </ul>
                
                    <h2 class="">Spring 2020</h2>

                <ul class="">

                    <li>
                        <h3>The Capstone Showcase</h3>
                        <p><a
                                href="capstone-showcase.php"
                                target="_blank">The Capstone Showcase</a> is on April 23rd at 2 p.m. </p>
                        <time>April 2020</time>
                    </li>

                     <li>
                        <h3>Externship</h3>
                        <p>I am awarded with an <a
                                href="https://www.bsu.edu/about/administrativeoffices/careercenter/programs-services/faculty-externship-program"
                                target="_blank">externship</a> stipend for this summer to shadow industry professionals and adopt best practices in my courses.</p>
                        <time>March 2020</time>
                    </li>

                    <li>
                        <h3>East Central Indiana Science Fair</h3>
                        <p>I served at the Scientific Review Committee of <a
                                href="https://www.bsu.edu/academics/collegesanddepartments/biology/activities-opportunities/east-central-indiana-science-fair"
                                target="_blank">East Central Indiana Science Fair</a> and judged the projects of future scientists.</p>
                        <time>February 2020</time>
                    </li>

                    <li>
                        <h3>SoSyM Editorial</h3>
                        <p>We have published the <a href="https://doi.org/10.1007/s10270-020-00778-6" target="_blank">new
                                editorial</a>.</p>
                        <time>January 2020</time>
                    </li>
                    
                    <li>
                        <h3>US-RSE</h3>
                        <p>I will attend <a href="https://us-rse.org/2019-11-14-april-2020-workshop/"
                                target="_blank">the First US Research Software Engineer Association Workshop</a> at Princeton University in April 2020, all expenses covered by the association (Thanks). We will work together for the future of US-RSE.</p>
                        <time>January 2020</time>
                    </li>

                    <li>
                        <h3>Skills Infusion</h3>
                        <p>I am participating <a href="https://www.bsu.edu/about/administrativeoffices/careercenter/programs-services/skills-infusion-program"
                                target="_blank">Skills Infusion</a> program to update my Capstone Syllabus, which will lead to an Externship in Summer 2020.</p>
                        <time>January 2020</time>
                    </li>

                    <li>
                        <h3>Spring 2020 Classes</h3>
                        <p>I am giving a <a href="teaching.php?id=cs495fall19"
                                target="_blank">CS222</a> class and two sections of Capstone this semester: <a href="teaching.php?id=cs495fall19"
                                target="_blank">CS498</a>.</p>
                                <p>I also have an MSc student to work on our research project about Block-based MDE (<a href="teaching.php?id=cs495fall19"
                                target="_blank">CS699</a>).</p>
                        <time>January 2020</time>
                    </li>

                </ul>

                <h2 class="">Fall 2019</h2>

                <ul class="">
                    
                    <li>
                        <h3>CS Art Show</h3>
                        <p>I judged at <a
                            href="http://www.cs.bsu.edu/homepages/dllargent/cs120/artShow/2019Fall/index.html"
                            target="_blank">CS120 Art Show</a>.</p>
                        <time>October 2019</time>
                    </li>

                    <li>
                        <h3>INFORMS Annual Meeting 2019</h3>
                        <p>We have organized the <a href="http://www.cs.bsu.edu/~hergin/softwarematters/" target="_blank">Software Matters</a> session in the annual meeting and presented two studies we completed with my colleague, <a
                                href="http://myavuz.people.ua.edu/" target="_blank">Dr. Mesut
                                Yavuz</a>.</p>
                        <time>October 2019</time>
                    </li>

                    <li>
                        <h3>CCSC Midwest</h3>
                        <p>I presented my paper titled <em>Instructor-formed Capstone Teams Based on Interest and Technical Experience: The Road to Success</em> at <a href="https://www.ccsc.org/midwest/" target="_blank">Consortium for Computing Sciences in Colleges: Midwest Conference</a>.</p>
                        <time>October 2019</time>
                    </li>

                     <li>
                        <h3>1MC</h3>
                        <p>I presented the <a href="http://www.capstoneconnector.com/" target="_blank">Capstone Connector</a> at the <a
                                href="https://www.1millioncups.com/muncie/presentations/capstone-connector-27195"
                                target="_blank">1 Million Cups Muncie Edition</a>.</p>
                        <time>September 2019</time>
                    </li>

                     <li>
                        <h3>Coaching at Startup Weekend</h3>
                        <p>I will coach at <a
                                href="http://communities.techstars.com/usa/muncie-in-usa/startup-weekend/14880"
                                target="_blank">Startup Weekend Muncie 2.0</a>.</p>
                        <time>August 2019</time>
                    </li>

                    <li>
                        <h3>Fall 2019 Classes</h3>
                        <p>I am giving a graduate class and two sections of Capstone this semester: <a href="teaching.php?id=cs690fall19"
                                target="_blank">CS690</a> and <a href="teaching.php?id=cs495fall19"
                                target="_blank">CS495</a>.</p>
                        <time>August 2019</time>
                    </li>

                    <li>
                        <h3>MODELS 2020</h3>
                        <p>
                        I will serve as artifact evaluation cochair in the Model Driven Engineering Languages and Systems Conference 2020 (Canada).
                        </p>
                        <time>August 2019</time>
                    </li>

                </ul>
                
                <h2 class="">Summer 2019</h2>

                <ul class="">

                     <li>
                        <h3>Educators Symposium Paper Accepted</h3>
                        <p>The paper I have written with the graduate students in my MDE class titled <em>A Study of Modeling Perception in a First-Time Modeling Class</em> is accepted at the <a href="https://modelsconf19.org/?page_id=1147" target="_blank">MODELS Educators Symposium</a>.
                        </p>
                        <time>July 2019</time>
                    </li>

                    <li>
                        <h3>The Innovation Showcase</h3>
                        <p>I will judge at the regionals of <a href="http://theinnovationshowcase.com/" target="_blank">the Innovation Showcase</a> on July 23rd, 2019.
                        </p>
                        <time>July 2019</time>
                    </li>

                    <li>
                        <h3>S2ERC Showcase</h3>
                        <p>I presented my two presentations remotely at <a href="https://www.serc.net/sc2019s_showcase-info/"
                                target="_blank">S2ERC Showcase</a>.
                        </p>
                        <time>June 2019</time>
                    </li>

                    <li>
                        <h3>Capstone Connector</h3>
                        <p>We have created the <a href="/capstone-connector.php"
                                target="_blank">Capstone Connector</a>. It is a special program under <a
                                href="http://innovationconnector.com/" target="_blank">Innovation
                                Connector</a> that targets to connect student capstone teams with real
                            clients.
                            I am the founder and the director.
                        </p>
                        <time>May 2019</time>
                    </li>

                    <li>
                        <h3>CCSC Paper Accepted</h3>
                        <p>My paper titled <em>Instructor-formed Capstone Teams Based on Interest and
                                Technical Experience: The Road to Success</em> is accepted to the 2019
                            edition
                            of <a href="https://www.ccsc.org/midwest/" target="_blank">Consortium for
                                Computing Sciences in Colleges Midwest Conference</a> and will be
                            published in <a href="https://dl.acm.org/pub.cfm?id=J420"
                                target="_blank">The Journal of Computing Sciences in
                                Colleges</a>.</p>
                        <time>May 2019</time>
                    </li>

                    <li>
                        <h3>Undergrad Hiring</h3>
                        <p>I hired my first undergraduate student using my own external project grant to
                            work together in my research
                            project with Raytheon.</p>
                        <time>May 2019</time>
                    </li>

                    <li>
                        <h3>AWS</h3>
                        <p>I am selected as one of the <a
                                href="https://aws.amazon.com/blogs/publicsector/aws-educate-announces-its-inaugural-cloud-ambassador-cohort/"
                                target="_blank">AWS Educate Faculty Ambassador</a>.</p>
                        <time>May 2019</time>
                    </li>
                </ul>


                <h2 class="">Spring 2019</h2>

                <ul class="">

                    <li>
                        <h3>MODELSWARD</h3>
                        <p>I am at the program committee of <a
                                href="http://www.modelsward.org/ProgramCommittee.aspx"
                                target="_blank">MODELSWARD 2020 Conference</a>.</p>
                        <time>April 2019</time>
                    </li>

                    <li>
                        <h3>CS Art Show</h3>
                        <p>I judged at <a
                                href="http://www.cs.bsu.edu/homepages/dllargent/cs120/artShow/2019Spring/index.html"
                                target="_blank">CS120 Art Show</a>.</p>
                        <time>March 2019</time>
                    </li>

                    <li>
                        <h3>Cardinal Hackathon</h3>
                        <p>I am judging at the <a
                                href="https://www.eventbrite.com/e/the-cardinal-hackathon-tickets-55314336670?aff=ebdssbdestsearch&fbclid=IwAR1isNRRzFIK7MFxv44_8zTU1tA5KRbm7NPKbdG4ZKuWuQAN1z86iYsEVHM"
                                target="_blank">Cardinal Hackathon</a> organized at the Innovation
                            Connector.</p>
                        <time>March 2019</time>
                    </li>

                    <li>
                        <h3>SoSyM Editorial</h3>
                        <p>We have published the <a href="https://rdcu.be/bnYhY" target="_blank">new
                                editorial</a>.</p>
                        <time>February 2019</time>
                    </li>

                    <li>
                        <h3>Science Fair Judging</h3>
                        <p>I judged at the <a
                                href="http://cms.bsu.edu/academics/collegesanddepartments/biology/researchandcommunity/ecisciencefair">East
                                Central Indiana Science Fair</a>. I was assigned to find the best
                            projects in Intel Talent Search, Computer Science and Broadcom MASTERS
                            program.</p>
                        <time>February 2019</time>
                    </li>

                    <li>
                        <h3>MODELS Social Media Chair</h3>
                        <p>I am now in the organizing committee of <a
                                href="https://modelsconf19.org/?page_id=30" target="_blank">MODELS
                                Conference 2019</a> and will be serving as the social media chair
                            until
                            and during the conference. <a href="https://twitter.com/modelsconf"
                                target="_blank" class="icon fa-twitter"><span
                                    class="label">Twitter</span></a></p>
                        <time>February 2019</time>
                    </li>

                    <li>
                        <h3>SoSyM Editorial</h3>
                        <p>We have published the <a href="https://rdcu.be/bh0k4" target="_blank">first
                                editorial</a> that I also contributed a bit and I am introduced as
                            assistant editor.</p>
                        <time>January 2019</time>
                    </li>

                    <li>
                        <h3>Spring 2019 Classes</h3>
                        <p>I am giving two classes this semester: <a href="teaching.php?id=cs498spring19"
                                target="_blank">CS498</a> and <a href="teaching.php?id=cs439-539spring19"
                                target="_blank">CS439-539</a>. This latter class is about my
                            research
                            area.</p>
                        <time>January 2019</time>
                    </li>
                    <li>
                        <h3>INFORMS Computing Society</h3>
                        <p>We have presented two talks with my colleague <a
                                href="http://myavuz.people.ua.edu/" target="_blank">Dr. Mesut
                                Yavuz</a>
                            at the <a
                                href="https://sites.google.com/vols.utk.edu/2019icsconference/home"
                                target="_blank">INFORMS Computing Society Conference</a>.</p>
                        <time>January 2019</time>
                    </li>
                </ul>



                <h2 class="">Fall 2018</h2>

                <ul class="">
                    <li>
                        <h3>INFORMS Computing Society</h3>
                        <p>Our two talks with my colleague <a href="http://myavuz.people.ua.edu/"
                                target="_blank">Dr. Mesut Yavuz</a> are accepted to the <a
                                href="https://sites.google.com/vols.utk.edu/2019icsconference/home"
                                target="_blank">INFORMS Computing Society Conference</a>.</p>
                        <time>November 2018</time>
                    </li>

                    <li>
                        <h3>East Central Indiana Science Fair</h3>
                        <p>I am serving at the Scientific Review Committee of <a
                                href="https://www.bsu.edu/academics/collegesanddepartments/biology/activities-opportunities/east-central-indiana-science-fair"
                                target="_blank">East Central Indiana Science Fair</a> which will
                            take
                            place on February 16, 2019.</p>
                        <time>November 2018</time>
                    </li>

                    <li>
                        <h3>CS Art Show</h3>
                        <p>I judged at <a
                                href="http://www.cs.bsu.edu/homepages/dllargent/cs120/artShow/2018Fall/index.html"
                                target="_blank">CS120 Art Show</a>.</p>
                        <time>November 2018</time>
                    </li>

                    <li>
                        <h3>Industry-Academy Partnership</h3>
                        <p>I started working on a project worth of $38,000 for Raytheon about
                            reverse
                            engineering problems from Ada to fUML.</p>
                        <time>October 2018</time>
                    </li>
                    <li>
                        <h3>Project Provider</h3>
                        <p>Our main project provider for Fall 2018 Software Requirement and Design
                            class
                            is <a href="http://www.my-trs.com/" target="_blank">TRS LLC</a> in Indy.
                        </p>
                        <time>October 2018</time>
                    </li>
                    <li>
                        <h3>Coaching at Startup Weekend</h3>
                        <p>I have coached at <a
                                href="http://communities.techstars.com/usa/muncie-in-usa/startup-weekend/12733"
                                target="_blank">Startup Weekend Muncie</a>.</p>
                        <time>October 2018</time>
                    </li>
                    <li>
                        <h3>Paper Review</h3>
                        <p>I reviewed a couple papers for <a href="https://sigcse2019.sigcse.org/"
                                target="_blank">ACM SIG-CSE 2019 Conference</a>.</p>
                        <time>September 2018</time>
                    </li>
                    <li>
                        <h3>RSE Webinar</h3>
                        <p>I presented my first webinar at <a
                                href="https://rse.ac.uk/events/rse-webinar-series/#previous"
                                target="_blank">Research Software Engineering Webinar Series</a>. It
                            is
                            about object-oriented design for scientists.</p>
                        <time>August 2018</time>
                    </li>

                    <li>
                        <h3>Journal on Software and Systems Modeling</h3>
                        <p>I will start serving as assistant editor for the <a
                                href="http://www.sosym.org/" target="_blank">Journal on Software and
                                Systems Modeling</a>.</p>
                        <time>August 2018</time>
                    </li>
                    <li>
                        <h3>Fall 2018 Classes</h3>
                        <p>I am giving one graduate class <a href="teaching.php?id=cs691fall18" target="_blank">CS691</a> and
                            a
                            section of <a href="teaching.php?id=cs495fall18" target="_blank">BSc Software Capstone Project
                                CS495</a>. I am also mentoring an MSc Software Capstone Project at
                            <a href="teaching.php?id=cs695fall18" target="_blank">CS695</a>.</p>
                        <time>August 2018</time>
                    </li>
                    <li>
                        <h3>Muncie Community Schools</h3>
                        <p>I helped students on the first day of schools at <a
                                href="http://sms.muncie.k12.in.us/" target="_blank">Muncie Southside
                                Middle School</a> to show support that Ball State will take good
                            care of
                            them.</p>
                        <time>August 2018</time>
                    </li>
                </ul>

                <h2>Summer 2018</h2>

                <ul>
                    <li>
                        <h3>Coaching at Startup Weekend</h3>
                        <p>I will be coaching at <a
                                href="http://communities.techstars.com/usa/muncie-in-usa/startup-weekend/12733"
                                target="_blank">Startup Weekend Muncie</a> in October.</p>
                        <time>July 2018</time>
                    </li>
                    <li>
                        <h3>Journal Paper Accepted</h3>
                        <p>Our paper with <a href="http://myavuz.people.ua.edu/" target="_blank">Dr.
                                Mesut Yavuz</a> titled <em>Advanced Constraint Propagation for the
                                Combined
                                Car Sequencing and Level Scheduling Problem</em> is accepted and
                            will be
                            published in <a
                                href="https://www.journals.elsevier.com/computers-and-operations-research"
                                target="_blank">Computers & Operations Research Journal</a>.</p>
                        <time>July 2018</time>
                    </li>
                    <li>
                        <h3>Project Provider</h3>
                        <p>Our main project provider for Fall 2018 Software Engineering class will
                            be Two Cats Cafe
                            in
                            Muncie.</p>
                        <time>June 2018</time>
                    </li>
                    <li>
                        <h3>S2ERC Showcase</h3>
                        <p>I attended <a href="https://www.serc.net/sc2018s_showcase-info/"
                                target="_blank">S2ERC Showcase</a> to present my early-funded
                            project.
                        </p>
                        <time>May 2018</time>
                    </li>
                </ul>


                <h2>Spring 2018</h2>

                <ul>
                    <li>
                        <h3>CS Art Show</h3>
                        <p>I judged at <a
                                href="http://www.cs.bsu.edu/homepages/dllargent/cs120/artShow/2018Spring/index.html"
                                target="_blank">CS120 Art Show</a>.</p>
                        <time>March 2018</time>
                    </li>
                    <li>
                        <h3>ACM SIGCSE</h3>
                        <p>I attended to the <a href="https://sigcse2018.sigcse.org/"
                                target="_blank">ACM SIG-CSE 2018 Conference</a> in Baltimore,
                            Maryland.
                        </p>
                        <time>February 2018</time>
                    </li>
                    <li>
                        <h3>Science Fair Judging</h3>
                        <p>I judged at the <a
                                href="http://cms.bsu.edu/academics/collegesanddepartments/biology/researchandcommunity/ecisciencefair">East
                                Central Indiana Science Fair</a>. I was assigned for 5 projects in
                            "Engineering & Robotics". <a
                                href="docs/2018_03_16_service_award_for_science_fair_judging.jpg"
                                target="_blank">I received a service award.</a></p>
                        <time>February 2018</time>
                    </li>
                    <li>
                        <h3>Colloquium</h3>
                        <p>I presented my first colloquium in my department. It is about the idea of
                            what is beyond code. <a target="_blank"
                                href="https://blog.objectivelook.net/is-there-life-after-code-86345967be9">You
                                can check out slides here.</a></p>
                        <time>February 2018</time>
                    </li>
                    <li>
                        <h3>Industry-Academy Partnership</h3>
                        <p>I will start an industry-academy cooperation project worth of $52,200
                            with
                            BeulahWorks, LLC. in early May. I will investigate the modeling adoption
                            in
                            the industry and its effects on the code abstraction.</p>
                        <time>February 2018</time>
                    </li>
                    <li>
                        <h3>Capstone Project</h3>
                        <p>We are working on a project about Bus Shuttle Logs with <a
                                href="http://cms.bsu.edu/about/administrativeoffices/facilities"
                                target="_blank">Facilities Planning and Management</a> of our
                            university
                            for the Capstone Project (CS695).</p>
                        <time>January 2018</time>
                    </li>
                    <li>
                        <h3>Spring 2018 Classes</h3>
                        <p>I am giving two classes this semester: <a href="teaching.php?id=cs222spring18"
                                target="_blank">CS222</a> and <a href="teaching.php?id=cs693spring18"
                                target="_blank">CS693</a>. I am also mentoring an MSc Software
                            Capstone
                            Project at <a href="teaching.php?id=cs695spring18" target="_blank">CS695</a>.</p>
                        <time>January 2018</time>
                    </li>
                </ul>

                <h2>Fall 2017</h2>

                <ul>
                    <li>
                        <h3>Paper Review</h3>
                        <p>I reviewed a paper for <a href="https://link.springer.com/journal/10270"
                                target="_blank">Journal of Software and Systems Modeling</a>.</p>
                        <time>December 2017</time>
                    </li>
                    <li>
                        <h3>Travel Grant</h3>
                        <p>I am awarded with a travel grant to <a
                                href="https://sigcse.org/sigcse/programs/travel-grants/awards"
                                target="_blank">ACM SIG-CSE 2018 Conference</a>.</p>
                        <time>November 2017</time>
                    </li>
                    <li>
                        <h3>S2ERC Showcase</h3>
                        <p>I attended <a href="https://www.serc.net/sc2017f_showcase-info/"
                                target="_blank">S2ERC Showcase</a> to present a poster about
                            model-driven engineering.</p>
                        <time>November 2017</time>
                    </li>
                    <li>
                        <h3>CS Art Show</h3>
                        <p>I judged at <a
                                href="http://www.cs.bsu.edu/homepages/dllargent/cs120/artShow/2017Fall/results.html"
                                target="_blank">CS120 Art Show</a>.</p>
                        <time>November 2017</time>
                    </li>
                    <li>
                        <h3>Paper Review</h3>
                        <p>I reviewed a couple papers for <a href="https://sigcse2018.sigcse.org/"
                                target="_blank">ACM SIG-CSE 2018 Conference</a>.</p>
                        <time>September 2017</time>
                    </li>
                    <li>
                        <h3>Fall 2017 Classes</h3>
                        <p>I am giving two graduate classes this semester: <a href="teaching.php?id=cs691fall17"
                                target="_blank">CS691</a> and <a href="teaching.php?id=cs692fall17"
                                target="_blank">CS692</a>.</p>
                        <time>August 2017</time>
                    </li>
                    <li>
                        <h3>New Job</h3>
                        <p>I started as an assistant professor at <a href="http://www.cs.bsu.edu"
                                target="_blank">computer science department</a> of <a
                                href="http://www.bsu.edu" target="_blank">Ball State University</a>.
                        </p>
                        <time>August 2017</time>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>


<?php include 'footer.php'; ?>