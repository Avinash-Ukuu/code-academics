/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - code_academics
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`code_academics` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `code_academics`;

/*Table structure for table `activity_logs` */

DROP TABLE IF EXISTS `activity_logs`;

CREATE TABLE `activity_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action` text DEFAULT NULL,
  `module` varchar(255) DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `action_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `activity_logs` */

insert  into `activity_logs`(`id`,`action`,`module`,`module_id`,`message`,`action_by`,`created_at`,`updated_at`) values 
(1,'created','leave',1,'Archana has created leave from \'2024-06-11\' to \'2024-06-11\'',6,'2024-06-11 05:06:21','2024-06-11 05:06:21'),
(2,'created','leave',3,'Raman has created leave from \'2024-06-13\' to \'2024-06-15\'',2,'2024-06-11 06:07:56','2024-06-11 06:07:56'),
(3,'created','leave',6,'Raman has created leave from \'2024-06-12\' to \'2024-06-12\'',2,'2024-06-11 06:20:40','2024-06-11 06:20:40'),
(4,'created','leave',8,'Raman has created leave from \'2024-06-12\' to \'2024-06-12\'',2,'2024-06-12 05:23:23','2024-06-12 05:23:23'),
(5,'created','leave',9,'Raman has created leave from \'2024-06-12\' to \'2024-06-12\'',2,'2024-06-12 05:23:42','2024-06-12 05:23:42'),
(6,'created','leave',10,'Raman has created leave from \'2024-06-13\' to \'2024-06-13\'',2,'2024-06-12 05:30:38','2024-06-12 05:30:38'),
(7,'created','leave',11,'Raman has created leave from \'2024-06-13\' to \'2024-06-13\'',2,'2024-06-12 05:31:19','2024-06-12 05:31:19'),
(8,'created','student',6,'Lakhvinder Singh has register ',2,'2024-06-17 10:17:34','2024-06-17 10:17:34');

/*Table structure for table `blogs` */

DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `publish_type` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `blog_created_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `blogs` */

insert  into `blogs`(`id`,`title`,`slug`,`description`,`meta_keywords`,`content`,`publish_type`,`image`,`blog_created_at`,`created_at`,`updated_at`) values 
(1,'Top IT Courses to Boost Your Career in 2025','top-it-courses-to-boost-your-career-in-2025','The IT industry is evolving rapidly, and staying updated with the latest skills is essential for career growth. Whether you’re a beginner or an experienced professional, enrolling in the right IT course can open doors to exciting opportunities. In this blog, we’ll explore some of the best IT courses to help you advance in your career.','IT courses, best IT courses, web development, cybersecurity, data science, artificial intelligence, cloud computing, AWS courses, DevOps training, UI/UX design, programming courses, software development, learn coding, tech skills, career in IT','<h2 data-start=\"449\" data-end=\"487\" class=\"\"><strong data-start=\"452\" data-end=\"485\">1. Full-Stack Web Development</strong></h2><p data-start=\"488\" data-end=\"508\" class=\"\"><strong data-start=\"488\" data-end=\"506\">Why Choose It?</strong></p><ul data-start=\"509\" data-end=\"625\">\r\n<li data-start=\"509\" data-end=\"572\" class=\"\">\r\n<p data-start=\"511\" data-end=\"572\" class=\"\">High demand for web developers in startups and enterprises.</p>\r\n</li>\r\n<li data-start=\"573\" data-end=\"625\" class=\"\">\r\n<p data-start=\"575\" data-end=\"625\" class=\"\">Covers both front-end and back-end technologies.</p>\r\n</li>\r\n</ul><p data-start=\"627\" data-end=\"663\" class=\"\"><strong data-start=\"627\" data-end=\"661\">Key Technologies You’ll Learn:</strong></p><ul data-start=\"664\" data-end=\"788\">\r\n<li data-start=\"664\" data-end=\"706\" class=\"\">\r\n<p data-start=\"666\" data-end=\"706\" class=\"\">Frontend: HTML, CSS, JavaScript, React</p>\r\n</li>\r\n<li data-start=\"707\" data-end=\"758\" class=\"\">\r\n<p data-start=\"709\" data-end=\"758\" class=\"\">Backend: Node.js, PHP, Python (Django), Laravel</p>\r\n</li>\r\n<li data-start=\"759\" data-end=\"788\" class=\"\">\r\n<p data-start=\"761\" data-end=\"788\" class=\"\">Databases: MySQL, MongoDB</p>\r\n</li>\r\n</ul><h2 data-start=\"790\" data-end=\"833\" class=\"\"><strong data-start=\"793\" data-end=\"831\">2. Cybersecurity &amp; Ethical Hacking</strong></h2><p data-start=\"834\" data-end=\"854\" class=\"\"><strong data-start=\"834\" data-end=\"852\">Why Choose It?</strong></p><ul data-start=\"855\" data-end=\"1000\">\r\n<li data-start=\"855\" data-end=\"928\" class=\"\">\r\n<p data-start=\"857\" data-end=\"928\" class=\"\">Growing demand for cybersecurity experts due to rising cyber threats.</p>\r\n</li>\r\n<li data-start=\"929\" data-end=\"1000\" class=\"\">\r\n<p data-start=\"931\" data-end=\"1000\" class=\"\">Lucrative job opportunities in both government and private sectors.</p>\r\n</li>\r\n</ul><p data-start=\"1002\" data-end=\"1027\" class=\"\"><strong data-start=\"1002\" data-end=\"1025\">Key Topics Covered:</strong></p><ul data-start=\"1028\" data-end=\"1132\">\r\n<li data-start=\"1028\" data-end=\"1083\" class=\"\">\r\n<p data-start=\"1030\" data-end=\"1083\" class=\"\">Network Security, Malware Analysis, Ethical Hacking</p>\r\n</li>\r\n<li data-start=\"1084\" data-end=\"1132\" class=\"\">\r\n<p data-start=\"1086\" data-end=\"1132\" class=\"\">Penetration Testing, Cryptography, Firewalls</p>\r\n</li>\r\n</ul><h2 data-start=\"1134\" data-end=\"1184\" class=\"\"><strong data-start=\"1137\" data-end=\"1182\">3. Data Science &amp; Artificial Intelligence</strong></h2><p data-start=\"1185\" data-end=\"1205\" class=\"\"><strong data-start=\"1185\" data-end=\"1203\">Why Choose It?</strong></p><ul data-start=\"1206\" data-end=\"1316\">\r\n<li data-start=\"1206\" data-end=\"1259\" class=\"\">\r\n<p data-start=\"1208\" data-end=\"1259\" class=\"\">AI and Data Science are the future of technology.</p>\r\n</li>\r\n<li data-start=\"1260\" data-end=\"1316\" class=\"\">\r\n<p data-start=\"1262\" data-end=\"1316\" class=\"\">High-paying job opportunities in various industries.</p>\r\n</li>\r\n</ul><p data-start=\"1318\" data-end=\"1343\" class=\"\"><strong data-start=\"1318\" data-end=\"1341\">Key Topics Covered:</strong></p><ul data-start=\"1344\" data-end=\"1485\">\r\n<li data-start=\"1344\" data-end=\"1404\" class=\"\">\r\n<p data-start=\"1346\" data-end=\"1404\" class=\"\">Python for Data Science, Machine Learning, Deep Learning</p>\r\n</li>\r\n<li data-start=\"1405\" data-end=\"1485\" class=\"\">\r\n<p data-start=\"1407\" data-end=\"1485\" class=\"\">Data Visualization, AI-based Applications, Natural Language Processing (NLP)</p>\r\n</li>\r\n</ul><h2 data-start=\"1487\" data-end=\"1541\" class=\"\"><strong data-start=\"1490\" data-end=\"1539\">4. Cloud Computing (AWS, Azure, Google Cloud)</strong></h2><p data-start=\"1542\" data-end=\"1562\" class=\"\"><strong data-start=\"1542\" data-end=\"1560\">Why Choose It?</strong></p><ul data-start=\"1563\" data-end=\"1671\">\r\n<li data-start=\"1563\" data-end=\"1610\" class=\"\">\r\n<p data-start=\"1565\" data-end=\"1610\" class=\"\">Businesses are shifting to cloud platforms.</p>\r\n</li>\r\n<li data-start=\"1611\" data-end=\"1671\" class=\"\">\r\n<p data-start=\"1613\" data-end=\"1671\" class=\"\">High demand for cloud professionals with certifications.</p>\r\n</li>\r\n</ul><p data-start=\"1673\" data-end=\"1698\" class=\"\"><strong data-start=\"1673\" data-end=\"1696\">Key Certifications:</strong></p><ul data-start=\"1699\" data-end=\"1805\">\r\n<li data-start=\"1699\" data-end=\"1736\" class=\"\">\r\n<p data-start=\"1701\" data-end=\"1736\" class=\"\">AWS Certified Solutions Architect</p>\r\n</li>\r\n<li data-start=\"1737\" data-end=\"1769\" class=\"\">\r\n<p data-start=\"1739\" data-end=\"1769\" class=\"\">Microsoft Azure Fundamentals</p>\r\n</li>\r\n<li data-start=\"1770\" data-end=\"1805\" class=\"\">\r\n<p data-start=\"1772\" data-end=\"1805\" class=\"\">Google Cloud Associate Engineer</p>\r\n</li>\r\n</ul><h2 data-start=\"1807\" data-end=\"1847\" class=\"\"><strong data-start=\"1810\" data-end=\"1845\">5. DevOps &amp; Software Automation</strong></h2><p data-start=\"1848\" data-end=\"1868\" class=\"\"><strong data-start=\"1848\" data-end=\"1866\">Why Choose It?</strong></p><ul data-start=\"1869\" data-end=\"1995\">\r\n<li data-start=\"1869\" data-end=\"1925\" class=\"\">\r\n<p data-start=\"1871\" data-end=\"1925\" class=\"\">Helps in faster software development and deployment.</p>\r\n</li>\r\n<li data-start=\"1926\" data-end=\"1995\" class=\"\">\r\n<p data-start=\"1928\" data-end=\"1995\" class=\"\">In-demand skill for software engineers and system administrators.</p>\r\n</li>\r\n</ul><p data-start=\"1997\" data-end=\"2028\" class=\"\"><strong data-start=\"1997\" data-end=\"2026\">Key Tools &amp; Technologies:</strong></p><ul data-start=\"2029\" data-end=\"2118\">\r\n<li data-start=\"2029\" data-end=\"2071\" class=\"\">\r\n<p data-start=\"2031\" data-end=\"2071\" class=\"\">Docker, Kubernetes, Jenkins, Terraform</p>\r\n</li>\r\n<li data-start=\"2072\" data-end=\"2118\" class=\"\">\r\n<p data-start=\"2074\" data-end=\"2118\" class=\"\">CI/CD Pipelines, Git, Linux Administration</p>\r\n</li>\r\n</ul><h2 data-start=\"2120\" data-end=\"2168\" class=\"\"><strong data-start=\"2123\" data-end=\"2166\">6. UI/UX Design &amp; Front-End Development</strong></h2><p data-start=\"2169\" data-end=\"2189\" class=\"\"><strong data-start=\"2169\" data-end=\"2187\">Why Choose It?</strong></p><ul data-start=\"2190\" data-end=\"2322\">\r\n<li data-start=\"2190\" data-end=\"2262\" class=\"\">\r\n<p data-start=\"2192\" data-end=\"2262\" class=\"\">High demand in the digital marketing and web development industries.</p>\r\n</li>\r\n<li data-start=\"2263\" data-end=\"2322\" class=\"\">\r\n<p data-start=\"2265\" data-end=\"2322\" class=\"\">Essential for creating user-friendly websites and apps.</p>\r\n</li>\r\n</ul><p data-start=\"2324\" data-end=\"2355\" class=\"\"><strong data-start=\"2324\" data-end=\"2353\">Key Tools &amp; Technologies:</strong></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><ul data-start=\"2356\" data-end=\"2420\">\r\n<li data-start=\"2356\" data-end=\"2383\" class=\"\">\r\n<p data-start=\"2358\" data-end=\"2383\" class=\"\">Figma, Adobe XD, Sketch</p>\r\n</li>\r\n<li data-start=\"2384\" data-end=\"2420\" class=\"\">\r\n<p data-start=\"2386\" data-end=\"2420\" class=\"\">HTML, CSS, JavaScript, Bootstrap</p></li></ul>','publish','blog_1743672439.png','2025-04-03 09:27:19','2025-04-03 09:27:19','2025-04-03 09:27:19'),
(2,'Learn to Code in 2025: Why Code Academics is the Best Place to Start Your Programming Journey','learn-to-code-in-2025-why-code-academics-is-the-best-place-to-start-your-programming-journey','Learn coding in 2025 with Code Academics. Master web development, UI/UX, and more with project-based learning & expert mentorship. Join now!','learn to code 2025, codeacademics.in, best coding institute India, full stack web development course, programming for beginners, coding career in India, code academics in jalandhar, code academics institute  jalandhar','<h3 data-start=\"502\" data-end=\"521\" class=\"\" style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">Introduction</h3><p><br></p><p data-start=\"523\" data-end=\"919\" class=\"\">In today’s tech-driven world,&nbsp;<span data-start=\"553\" data-end=\"608\" style=\"font-weight: bolder;\">learning to code is one of the most valuable skills</span>&nbsp;you can acquire. Whether you\'re a student, a job seeker, or a professional looking to upskill, programming knowledge opens doors to high-paying careers and creative freedom. At&nbsp;<span data-start=\"786\" data-end=\"832\" style=\"font-weight: bolder;\"><a data-start=\"788\" data-end=\"830\" rel=\"noopener\" target=\"_new\" class=\"\" href=\"https://codeacademics.in/\">Code Academics</a></span>, we make coding simple, structured, and exciting—even if you\'re starting from scratch.</p><hr data-start=\"921\" data-end=\"924\" class=\"\"><h3 data-start=\"926\" data-end=\"964\" class=\"\" style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">Why Coding Is Important in 2025</h3><p><br></p><p data-start=\"966\" data-end=\"1195\" class=\"\">The global job market is evolving rapidly. Automation, artificial intelligence, web development, and data science are becoming central to every industry. This means&nbsp;<span data-start=\"1131\" data-end=\"1176\" style=\"font-weight: bolder;\">coding isn’t just for tech people anymore</span>—it\'s for everyone.</p><h4 data-start=\"1197\" data-end=\"1240\" class=\"\" style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">Top reasons to learn coding this year:</h4><ul data-start=\"1241\" data-end=\"1467\"><li data-start=\"1241\" data-end=\"1282\" class=\"\"><p data-start=\"1243\" data-end=\"1282\" class=\"\">?‍?&nbsp;<span data-start=\"1249\" data-end=\"1282\" style=\"font-weight: bolder;\">High-paying job opportunities</span></p></li><li data-start=\"1283\" data-end=\"1317\" class=\"\"><p data-start=\"1285\" data-end=\"1317\" class=\"\">?&nbsp;<span data-start=\"1288\" data-end=\"1317\" style=\"font-weight: bolder;\">Remote freelance projects</span></p></li><li data-start=\"1318\" data-end=\"1367\" class=\"\"><p data-start=\"1320\" data-end=\"1367\" class=\"\">?&nbsp;<span data-start=\"1323\" data-end=\"1367\" style=\"font-weight: bolder;\">Entrepreneurship through apps &amp; websites</span></p></li><li data-start=\"1368\" data-end=\"1417\" class=\"\"><p data-start=\"1370\" data-end=\"1417\" class=\"\">?&nbsp;<span data-start=\"1373\" data-end=\"1417\" style=\"font-weight: bolder;\">Boost logical thinking &amp; problem-solving</span></p></li><li data-start=\"1418\" data-end=\"1467\" class=\"\"><p data-start=\"1420\" data-end=\"1467\" class=\"\">?‍?&nbsp;<span data-start=\"1426\" data-end=\"1467\" style=\"font-weight: bolder;\">In-demand skills for college &amp; career</span></p></li></ul><hr data-start=\"1469\" data-end=\"1472\" class=\"\"><h3 data-start=\"1474\" data-end=\"1517\" class=\"\" style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">What Makes Code Academics Stand Out?</h3><p><br></p><p data-start=\"1519\" data-end=\"1726\" class=\"\">At&nbsp;<span data-start=\"1522\" data-end=\"1540\" style=\"font-weight: bolder;\"><a href=\"https://codeacademics.in/\" target=\"_blank\">Code Academics</a></span>, our mission is to&nbsp;<span data-start=\"1560\" data-end=\"1604\" style=\"font-weight: bolder;\">build the future of tech talent in India</span>&nbsp;and beyond. We offer&nbsp;<span data-start=\"1626\" data-end=\"1646\" style=\"font-weight: bolder;\">industry-focused</span>,&nbsp;<span data-start=\"1648\" data-end=\"1674\" style=\"font-weight: bolder;\">project-based learning</span>&nbsp;that equips you with job-ready skills from day one.</p><h4 data-start=\"1728\" data-end=\"1764\" class=\"\" style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">Features that make us unique:</h4><ul data-start=\"1765\" data-end=\"2054\"><li data-start=\"1765\" data-end=\"1828\" class=\"\"><p data-start=\"1767\" data-end=\"1828\" class=\"\"><span data-start=\"1767\" data-end=\"1794\" style=\"font-weight: bolder;\">Beginner to Pro roadmap</span>&nbsp;– Start from zero, go full-stack.</p></li><li data-start=\"1890\" data-end=\"1949\" class=\"\"><p data-start=\"1892\" data-end=\"1949\" class=\"\"><span data-start=\"1892\" data-end=\"1915\" style=\"font-weight: bolder;\">Real-world projects</span>&nbsp;– Build actual websites and apps.</p></li><li data-start=\"1950\" data-end=\"2003\" class=\"\"><p data-start=\"1952\" data-end=\"2003\" class=\"\"><span data-start=\"1952\" data-end=\"1966\" style=\"font-weight: bolder;\">Mentorship</span>&nbsp;– 1-on-1 doubt solving and feedback.</p></li><li data-start=\"2004\" data-end=\"2054\" class=\"\"><p data-start=\"2006\" data-end=\"2054\" class=\"\"><span data-start=\"2006\" data-end=\"2028\" style=\"font-weight: bolder;\">Affordable pricing</span>&nbsp;– Learn more, spend less.</p></li></ul><hr data-start=\"2056\" data-end=\"2059\" class=\"\"><h3 data-start=\"2061\" data-end=\"2085\" class=\"\" style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">Courses We Offer</h3><p><br></p><p data-start=\"2087\" data-end=\"2208\" class=\"\">At&nbsp;<a data-start=\"2090\" data-end=\"2132\" rel=\"noopener\" target=\"_new\" class=\"\" href=\"https://codeacademics.in/\">Code Academics</a>, we offer structured and guided courses designed to make you&nbsp;<span data-start=\"2194\" data-end=\"2207\" style=\"font-weight: bolder;\">job-ready</span>:</p><ul data-start=\"2210\" data-end=\"2536\"><li data-start=\"2210\" data-end=\"2266\" class=\"\"><p data-start=\"2212\" data-end=\"2266\" class=\"\"><span data-start=\"2212\" data-end=\"2236\" style=\"font-weight: bolder;\">Frontend Development</span>: HTML, CSS, JavaScript, React</p></li><li data-start=\"2267\" data-end=\"2315\" class=\"\"><p data-start=\"2269\" data-end=\"2315\" class=\"\"><span data-start=\"2269\" data-end=\"2292\" style=\"font-weight: bolder;\">Backend Development</span>: PHP, Laravel, Node.js</p></li><li data-start=\"2316\" data-end=\"2348\" class=\"\"><p data-start=\"2318\" data-end=\"2348\" class=\"\"><span data-start=\"2318\" data-end=\"2348\" style=\"font-weight: bolder;\">Full-Stack Web Development</span></p></li><li data-start=\"2349\" data-end=\"2400\" class=\"\"><p data-start=\"2351\" data-end=\"2400\" class=\"\"><span data-start=\"2351\" data-end=\"2367\" style=\"font-weight: bolder;\">UI/UX Design</span>: Figma, Adobe XD, Design systems</p></li><li data-start=\"2401\" data-end=\"2449\" class=\"\"><p data-start=\"2403\" data-end=\"2449\" class=\"\"><span data-start=\"2403\" data-end=\"2422\" style=\"font-weight: bolder;\">Database &amp; APIs</span>: MySQL, MongoDB, REST APIs</p></li><li data-start=\"2450\" data-end=\"2536\" class=\"\"><p data-start=\"2452\" data-end=\"2536\" class=\"\"><span data-start=\"2452\" data-end=\"2485\" style=\"font-weight: bolder;\">Soft Skills + Career Training</span>: Resume building, interviews, freelancing guidance</p></li></ul><hr data-start=\"3146\" data-end=\"3149\" class=\"\"><h3 data-start=\"3151\" data-end=\"3193\" class=\"\" style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">Tools &amp; Technologies You’ll Master</h3><p><br></p><p data-start=\"3195\" data-end=\"3228\" class=\"\">Our training gives you access to:</p><ul data-start=\"3229\" data-end=\"3367\"><li data-start=\"3229\" data-end=\"3249\" class=\"\"><p data-start=\"3231\" data-end=\"3249\" class=\"\">Visual Studio Code</p></li><li data-start=\"3250\" data-end=\"3264\" class=\"\"><p data-start=\"3252\" data-end=\"3264\" class=\"\">Git &amp; GitHub</p></li><li data-start=\"3265\" data-end=\"3282\" class=\"\"><p data-start=\"3267\" data-end=\"3282\" class=\"\">Figma for UI/UX</p></li><li data-start=\"3283\" data-end=\"3308\" class=\"\"><p data-start=\"3285\" data-end=\"3308\" class=\"\">Postman for API testing</p></li><li data-start=\"3309\" data-end=\"3342\" class=\"\"><p data-start=\"3311\" data-end=\"3342\" class=\"\">Local &amp; online deployment tools</p></li><li data-start=\"3343\" data-end=\"3367\" class=\"\"><p data-start=\"3345\" data-end=\"3367\" class=\"\">Google Chrome DevTools</p></li></ul><hr data-start=\"3369\" data-end=\"3372\" class=\"\"><h3 data-start=\"3374\" data-end=\"3396\" class=\"\" style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">Ready to Start?</h3><p><br></p><p></p><p data-start=\"3398\" data-end=\"3654\" class=\"\">Don’t wait for the \"right time.\"&nbsp;<span data-start=\"3431\" data-end=\"3488\" style=\"font-weight: bolder;\">Start learning today and build the future you deserve</span>. Visit&nbsp;<a data-start=\"3496\" data-end=\"3548\" rel=\"noopener\" target=\"_new\" class=\"\" href=\"https://codeacademics.in/\">https://codeacademics.in</a>&nbsp;and explore our course list, or message us on Instagram @codeacademics to get a free career consultation!</p>','publish','blog_1743998322.png','2025-04-07 03:58:42','2025-04-07 03:58:42','2025-04-07 03:58:42');

/*Table structure for table `course_durations` */

DROP TABLE IF EXISTS `course_durations`;

CREATE TABLE `course_durations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `duration` varchar(60) DEFAULT NULL,
  `mrp` decimal(10,2) DEFAULT NULL,
  `fix_price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `course_durations` */

insert  into `course_durations`(`id`,`course_id`,`duration`,`mrp`,`fix_price`,`created_at`,`updated_at`) values 
(36,9,'3',35000.00,30000.00,'2025-03-31 06:37:00','2025-03-31 06:37:00'),
(38,5,'3',35000.00,3000.00,'2025-03-31 06:38:32','2025-03-31 06:38:32'),
(39,5,'6',45000.00,40000.00,'2025-03-31 06:38:32','2025-03-31 06:38:32'),
(40,5,'9',55000.00,50000.00,'2025-03-31 06:38:32','2025-03-31 06:38:32'),
(41,3,'3',12000.00,10000.00,'2025-03-31 06:38:40','2025-03-31 06:38:40'),
(42,4,'6',25000.00,20000.00,'2025-03-31 06:38:52','2025-03-31 06:38:52'),
(43,4,'9',35000.00,30000.00,'2025-03-31 06:38:52','2025-03-31 06:38:52'),
(44,8,'3',45000.00,40000.00,'2025-03-31 06:39:12','2025-03-31 06:39:12'),
(45,7,'3',45000.00,40000.00,'2025-03-31 06:39:28','2025-03-31 06:39:28'),
(47,11,'45',5000.00,4999.00,'2025-08-07 07:23:26','2025-08-07 07:23:26'),
(51,6,'3',45000.00,40000.00,'2025-08-08 06:11:41','2025-08-08 06:11:41'),
(52,10,'3',35000.00,30000.00,'2025-08-08 06:12:45','2025-08-08 06:12:45');

/*Table structure for table `courses` */

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `courses` */

insert  into `courses`(`id`,`name`,`slug`,`added_by`,`description`,`image`,`is_active`,`created_at`,`updated_at`) values 
(3,'web development','web-development',1,'Building robust and scalable websites tailored to your needs using the latest technologies to ensure seamless performance and functionality.',NULL,1,'2025-03-31 12:08:40','2025-03-31 06:38:40'),
(4,'web design','web-design',1,'Crafting visually stunning and user-friendly designs that captivate and engage your audience. We transform ideas into impactful web experiences.',NULL,1,'2025-03-31 12:08:52','2025-03-31 06:38:52'),
(5,'ui and ux design','ui-and-ux-design',1,'Designing intuitive and innovative user experiences that enhance customer satisfaction and drive engagement across all digital platforms.',NULL,1,'2025-03-31 12:08:32','2025-03-31 06:38:32'),
(6,'video editing','video-editing',1,'Ensuring your digital presence is safe with advanced web security solutions that protect your data and maintain trust.','course_1754633501.png',1,'2025-08-08 11:41:41','2025-08-08 06:11:41'),
(7,'digital marketing','digital-marketing',1,'Boosting your online visibility and helping you reach your target audience with tailored strategies in SEO, social media, and more.',NULL,1,'2025-03-31 12:09:28','2025-03-31 06:39:28'),
(8,'graphic designing','graphic-designing',1,'Developing efficient and scalable software solutions with expert coding practices to meet your unique business requirements.',NULL,1,'2025-03-31 12:09:12','2025-03-31 06:39:12'),
(9,'mobile app development','mobile-app-development',1,'Empowering your business with intuitive and high-performing mobile applications for Android and iOS.',NULL,1,'2025-03-31 06:37:00','2025-03-31 06:37:00'),
(10,'basic computer','basic-computer',1,'Empowering businesses to sell online with customized, scalable, and user-friendly e-commerce platforms. From design to deployment, we deliver seamless shopping experiences that drive conversions.','course_1754633565.png',1,'2025-08-08 11:42:45','2025-08-08 06:12:45'),
(11,'45 days training','45-days-training',1,'45 days training','course_1754551406.png',1,'2025-08-07 07:23:26','2025-08-07 07:23:26');

/*Table structure for table `enquiries` */

DROP TABLE IF EXISTS `enquiries`;

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(60) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `education_level` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `enquiries` */

insert  into `enquiries`(`id`,`name`,`email`,`phone`,`date`,`course_id`,`education_level`,`source`,`notes`,`created_at`,`updated_at`) values 
(1,'komal','komal@gmail.com','8989898989','2025-03-28',5,'Undergraduate','Walk-in (Office Visit)','she interest in 3 moths course','2025-03-29 11:29:03','2025-03-29 05:10:15'),
(2,'Harsh','harsh@gmail.com','9898989898','2025-03-29',4,'Higher Secondary','Advertisement','he wants 6 month course','2025-03-29 05:12:52','2025-03-29 05:12:52');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_reset_tokens_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1);

/*Table structure for table `modules` */

DROP TABLE IF EXISTS `modules`;

CREATE TABLE `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `modules` */

insert  into `modules`(`id`,`name`,`created_at`,`updated_at`) values 
(1,'user','2024-03-11 13:13:35','2024-03-11 07:43:35'),
(3,'employee','2024-06-03 04:11:58','2024-06-03 04:11:58');

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `permission_role` */

DROP TABLE IF EXISTS `permission_role`;

CREATE TABLE `permission_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `permission_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `permission_role` */

insert  into `permission_role`(`id`,`role_id`,`permission_id`) values 
(3,3,4);

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`name`,`description`,`module_id`,`created_at`,`updated_at`) values 
(1,'management',NULL,1,'2024-03-11 13:14:32','2024-03-11 07:44:32'),
(4,'management',NULL,3,'2024-06-03 04:12:16','2024-06-03 04:12:16');

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `role_user` */

DROP TABLE IF EXISTS `role_user`;

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `role_user` */

insert  into `role_user`(`id`,`user_id`,`role_id`) values 
(3,4,3),
(7,2,3);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`description`,`created_at`,`updated_at`) values 
(1,'admin',NULL,'2024-03-11 07:41:11','2024-03-11 07:41:11'),
(3,'employee',NULL,'2024-05-10 15:46:24','2024-03-11 07:47:02');

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `settings` */

insert  into `settings`(`id`,`name`,`logo`,`created_at`,`updated_at`) values 
(1,'Code Academics','logo_1718347227.jpeg','2025-03-21 09:17:56','2025-03-21 03:47:56');

/*Table structure for table `student_courses` */

DROP TABLE IF EXISTS `student_courses`;

CREATE TABLE `student_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `monthly_payment` varchar(255) DEFAULT NULL,
  `course_fixed_price` varchar(60) DEFAULT NULL,
  `installment_months` varchar(60) DEFAULT NULL,
  `payment_mode` varchar(255) DEFAULT NULL,
  `course_duration` varchar(60) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `student_courses` */

insert  into `student_courses`(`id`,`student_id`,`course_id`,`added_by`,`monthly_payment`,`course_fixed_price`,`installment_months`,`payment_mode`,`course_duration`,`created_at`,`updated_at`) values 
(1,1,10,1,'6000.00','20000.00','3','installment','3','2025-08-07 07:58:24','2025-08-07 07:58:24'),
(2,2,5,1,'5000.00','15000.00','2','installment','3','2025-08-07 08:00:08','2025-08-07 08:00:08'),
(3,3,3,1,NULL,'10000.00',NULL,'full_pay','3','2025-08-07 08:30:45','2025-08-07 08:30:45');

/*Table structure for table `student_payments` */

DROP TABLE IF EXISTS `student_payments`;

CREATE TABLE `student_payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_course_id` int(11) DEFAULT NULL,
  `payment_mode` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `pay` varchar(60) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `student_payments` */

insert  into `student_payments`(`id`,`student_course_id`,`payment_mode`,`payment_method`,`pay`,`created_at`,`updated_at`) values 
(1,1,'installment','online','2000','2025-08-07 07:58:24','2025-08-07 07:58:24'),
(2,2,'installment','online','5000','2025-08-07 08:00:08','2025-08-07 08:00:08'),
(3,1,'installment','online','18000','2025-08-07 08:01:22','2025-08-07 08:01:22'),
(4,3,'full_pay','online','10000.00','2025-08-07 08:30:45','2025-08-07 08:30:45');

/*Table structure for table `students` */

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(60) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `tenth_document` varchar(255) DEFAULT NULL,
  `twelfth_document` varchar(255) DEFAULT NULL,
  `aadhaar_document` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `is_completed` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `students` */

insert  into `students`(`id`,`unique_id`,`first_name`,`last_name`,`email`,`mobile`,`user_id`,`father_name`,`tenth_document`,`twelfth_document`,`aadhaar_document`,`location`,`is_completed`,`created_at`,`updated_at`) values 
(1,'SBCA-250001','piyush','rai','piyush@gmail.com','9898989898',1,'test','Piyush_student_tenth_document.pdf','Piyush_student_twelfth_document.pdf','Piyush_student_aadhaar_document.pdf','jalandhar',1,'2025-08-07 13:56:47','2025-08-07 08:26:47'),
(2,'SBCA-250002','swati','singh','swati@gmail.com','9090909090',1,'test singh','Swati_student_tenth_document.pdf',NULL,NULL,'jalandhar',NULL,'2025-08-07 13:30:08','2025-08-07 08:00:08'),
(3,'SBCA-250003','gaurav','singh','gaurav@gmail.com','2323232323',1,'laal singh',NULL,NULL,NULL,'jalanhar',NULL,'2025-08-07 08:30:45','2025-08-07 08:30:45');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `super_admin` tinyint(1) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `contact_number` varchar(60) DEFAULT NULL,
  `10th_document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`super_admin`,`profile_pic`,`contact_number`,`10th_document`,`created_at`,`updated_at`) values 
(1,'aviansh','avinash@gmail.com',NULL,'$2y$10$JPA3yfsf7q5oToAiMia2NOXZYUu/OrlPgTMzHujiZbiKOObWJMjki',NULL,1,NULL,NULL,NULL,'2024-06-14 06:01:22','2024-06-14 06:01:22'),
(2,'lakhvinder singh','lakhvinder@gmail.com',NULL,'$2y$10$JPA3yfsf7q5oToAiMia2NOXZYUu/OrlPgTMzHujiZbiKOObWJMjki',NULL,NULL,'user_1718347473.jpg','0987654321',NULL,'2024-06-14 06:44:33','2024-06-14 06:45:13');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
