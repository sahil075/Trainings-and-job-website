-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 08:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories_table`
--

CREATE TABLE `categories_table` (
  `Category_ID` int(8) NOT NULL,
  `Category_Name` varchar(255) NOT NULL,
  `Category_Desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories_table`
--

INSERT INTO `categories_table` (`Category_ID`, `Category_Name`, `Category_Desc`) VALUES
(1, 'Web Development', 'Built highly interactive and responsive website using cutting edge web technologies Web development '),
(2, 'Android App Development', 'Android software development is the process by which applications are created for devices running the Android operating system. '),
(3, 'Python', 'Python is an interpreted high-level general-purpose programming language. Its design philosophy emphasizes code readability. '),
(4, 'Digital Marketing', 'Digital marketing is the component of marketing that utilizes internet and online based digital technologies'),
(5, 'Advanced Excel', 'Excel is used by almost every business in the world and being good at it will take you far in your career.'),
(6, 'Data Analytics', 'Data analysis is a process of inspecting, cleansing, transforming, and modelling data with the goal of discovering useful information'),
(7, 'Machine Learning', 'Machine learning (ML) is the study of computer algorithms that can improve automatically through experience and by the use of data.'),
(8, 'Deep Learning', 'Deep learning (also known as deep structured learning) is part of a broader family of machine learning methods based on artificial.'),
(9, 'AutoCAD', 'AutoCAD is a commercial computer-aided and drafting software application. Developed and marketed by Autodesk'),
(10, 'AutoCAD 3D', 'Autocad has functionalities for 3D modelling, but it should be the last in the list of 3D modelling software. '),
(11, 'Graphic Design', 'Graphic design is the profession and academic discipline whose activity consists in projecting visual communications '),
(12, 'UI/UX Design', 'user interface design (UI) and user experience design (UX) Master here the typography, color, wireframing, and more ');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(8) NOT NULL,
  `comment_by` int(8) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(8) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_by`, `comment_content`, `thread_id`, `comment_time`) VALUES
(1, 3, 'Hello mihir, please send me your github link i will send sol.', 1, '2021-10-22 23:52:22'),
(2, 3, 'Just send me code on github and your github account link', 2, '2021-10-23 00:14:27'),
(3, 1, 'Hello atharva, one solution is try to make css inline if it is not huge may if it work.', 3, '2021-10-23 00:57:11'),
(4, 8, 'Just send me your code in my personal number and i will take care of it.', 4, '2021-10-23 19:15:11'),
(5, 1, 'hello riya please visit my website http://codewithmihir.com', 6, '2021-10-24 00:24:58'),
(6, 2, '', 7, '2021-10-25 00:34:43'),
(7, 2, 'Okk ', 7, '2021-10-25 00:34:56'),
(8, 2, 'Okk i understood your error just install new extension', 7, '2021-10-25 00:35:24'),
(9, 4, 'You can use inline style sheet rather than another one', 8, '2021-10-25 00:57:40'),
(10, 1, 'jffj', 9, '2021-10-25 10:49:33'),
(11, 9, 'You can use inline css', 10, '2021-10-25 10:55:31'),
(12, 2, 'you can use inline CSS it may help', 11, '2021-10-25 11:21:23');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sno` int(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pno` int(10) NOT NULL,
  `desc1` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `name`, `email`, `pno`, `desc1`) VALUES
(1, 'Mihir', 'Mihirnarkar19@gmail.com', 874674, 'My laptop is not working. Please give me some solution');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(8) NOT NULL,
  `cname` varchar(40) NOT NULL,
  `cdesc` varchar(255) NOT NULL,
  `cimg` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(8) NOT NULL,
  `job_name` varchar(100) NOT NULL,
  `job_desc` varchar(255) NOT NULL,
  `job_date` datetime NOT NULL DEFAULT current_timestamp(),
  `job_salary` varchar(40) NOT NULL,
  `job_applyby` datetime NOT NULL DEFAULT current_timestamp(),
  `company_name` varchar(60) NOT NULL,
  `job_dest` varchar(40) NOT NULL,
  `company_desc` varchar(500) NOT NULL,
  `activity_int1` varchar(100) NOT NULL,
  `activity_int2` varchar(100) NOT NULL,
  `activity_int3` varchar(100) NOT NULL,
  `job_skill1` varchar(30) NOT NULL,
  `job_skill2` varchar(30) NOT NULL,
  `job_skill3` varchar(30) NOT NULL,
  `job_skill4` varchar(30) NOT NULL,
  `job_require1` varchar(100) NOT NULL,
  `job_require2` varchar(100) NOT NULL,
  `job_require3` varchar(100) NOT NULL,
  `job_require4` varchar(100) NOT NULL,
  `job_require5` varchar(100) NOT NULL,
  `job_opening` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_name`, `job_desc`, `job_date`, `job_salary`, `job_applyby`, `company_name`, `job_dest`, `company_desc`, `activity_int1`, `activity_int2`, `activity_int3`, `job_skill1`, `job_skill2`, `job_skill3`, `job_skill4`, `job_require1`, `job_require2`, `job_require3`, `job_require4`, `job_require5`, `job_opening`) VALUES
(1, 'Android App Developer', 'Mumbai, Fresher job', '2021-09-21 11:45:02', '3.5 to 3.7LPA', '2021-10-12 11:49:59', 'StudyCloud', 'Mumbai', 'StudyCloud aims to develop, implement, and conduct various technology-backed programs for school and college students. We believe that learning is important for a student\'s success in academics and life. ', 'Hiring since July 2019', ' 285 opportunities posted', '15 candidates hired', 'Java', 'Flutter', 'Kotlin', 'Hasura', ' Are passionate about the problem we are trying to solve', 'Have a Git or portfolio to showcase your projects', 'Comfortable with Kotlin', ' Knowledge of basic backend operations', ' Eager to not just engineer an app but build a product', 1),
(2, 'Software Engineer - Flutter/Dart', 'Indore, The hiring for this job will be online and the company will provide work from home/deferred joining till the current COVID-19 situation improves', '2021-09-29 11:45:02', '3 to 6LPA', '2021-10-13 11:49:59', 'Shipsy', 'Indore', 'At Shipsy, we aspire to be at the forefront of technology with next-generation products that change the way logistics is managed and positively impact millions of people. Over the past 6 years, Shipsy has gained a dominant share in the domestic logistics space with over 30% of the India courier/express industry flowing through our system. This platform processes over 1.5 million transactions a day across these customers.', 'Hiring since October 2018', '4 opportunities posted', '3 candidates hired', 'Algorithms', 'Data structures', 'Python', 'Java', 'Experience designing interactive applications', 'Understanding of algorithms and data structures', 'Ability to develop software in JavaScript, Python, Scala, Java, or other programming languages', ' Excellent knowledge of databases, SQL, and non-SQL technologies is a plus', 'Experience in developing web applications using at least one popular web framework is a plus', 4),
(3, 'Front End Developer', 'Kolkata, Fresher Job', '2021-09-29 11:45:02', '4 to 4.5LPA', '2021-11-09 11:49:59', 'Gloify', 'Kolkata', 'Gloify is a product-based company that creates technological solutions for diverse industries. We have been dedicated to creating simple products that solve complex business needs. Our product suite comprises enterprise-level as well as small-medium business market solutions. From the discovery to post-deployment support, we deal with all the phases of business deployment to ensure that we help our associates rise.', 'Hiring since September 2017', ' 83 opportunities posted', '31 candidates hired', 'HTML', 'CSS', 'jQuery', 'React native and reactJS ', 'Working with ReactJS or Angular to design, develop and debug web applications', 'Integrating back-end services with ReactJS/Angular/JavaScript-based front end needs', 'Working with the team to manage, optimize and customize multiple web applications', 'Creating and maintaining technical documentation', 'Consistent performer', 2),
(4, 'Content Writing', 'Work From Home', '2021-09-30 08:03:58', '1 to 3LPA', '2021-10-10 21:03:58', 'Goodera', 'WorkFromHome', 'Goodera is a state-of-the-art technology platform that helps companies measure and communicate the impact and ROI of CSR, sustainability, and volunteering initiatives. Currently, more than 200 corporates (24 in Fortune 500), including P&G, Target, Dell, GAP, Abbott, and Amazon are using the Goodera platform across more than 70 countries.', ' Hiring since January 2021', '54 opportunities posted', '25 candidates hired', 'Creative Writing', 'Blogging', 'MS-Word', 'Digital marketing', 'Create new content across multiple formats (blogs, whitepapers, articles, and e-books)', 'Work on creating case studies and success stories as part of the client testimonial section', ' Support in implementing the social media strategy', ' Work on creative campaign planning for Goodera standardized events', 'Support in creating campaign collaterals - videos, posts, testimonials, and other marketing pieces', 2),
(5, 'Full Stack Developer\r\n', 'Fresher Job, sion', '2021-09-30 23:22:29', '3 to 3.2 LPA', '2021-09-30 23:22:29', 'Qtesters', 'Sion', 'Qtesters is a service and product-based company. We help startups in providing bug reports to track and organize the bugs.', '\r\nHiring since August 2021', '\r\n12 opportunities posted', '0 candidates hired', 'JavaScript', 'MongoDB', 'Node.js', 'ReactJS', ' Working on frontend and backend development', 'Working on platforms like Bootstrap, JavaScript, ReactJS, Node.js, and MongoDB', 'Working on full-stack development', 'Hardworking and consistent', 'Should be hands-on with Hooks', 2);

-- --------------------------------------------------------

--
-- Table structure for table `jobapply`
--

CREATE TABLE `jobapply` (
  `sno` int(8) NOT NULL,
  `full_name` varchar(80) NOT NULL,
  `email` varchar(40) NOT NULL,
  `fresher` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `hour` varchar(255) NOT NULL,
  `exp` varchar(255) NOT NULL,
  `jobapply` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobapply`
--

INSERT INTO `jobapply` (`sno`, `full_name`, `email`, `fresher`, `work`, `role`, `phone`, `hour`, `exp`, `jobapply`) VALUES
(1, 'Mihir narkar', 'Mihirnarkar19@gmail.com', 'yes', 'yes', 'Because i have abilities', 7585785, 'yes', 'Yes earlier i work', 'Android App Developer'),
(2, 'Mihir narkar', 'Mihirnarkar19@gmail.com', 'yes', 'yes', 'Because i have abilities', 874674, 'yes', 'Yes earlier i work', 'Software Engineer - Flutter/Dart'),
(3, 'Jatin Tiwari', 'jatin@gmail.com', 'yes', 'yes', 'I have that abilities', 758579869, 'yes', 'Yes earlier i work', 'Content Writing'),
(4, 'Sahil Prashant Ambavale', 'sahilronaldo@gmail.com', 'yes', 'yes', 'Because i have abilities', 1234567891, 'yes', 'Yes earlier i work', 'Full Stack Developer'),
(5, 'New user', 'newuser@gmail.com', 'yes', 'yes', 'Because i have abilities', 1234567891, 'yes', 'yes somewhat', 'Full Stack Developer'),
(6, 'Uzair contractor', 'uzair@gmail.com', 'yes', 'yes', 'Because i have abilities', 81691, 'yes', 'Yes earlier i work', 'Software Engineer - Flutter/Dart'),
(7, 'New user', 'newuser1@gmail.com', 'yes', 'yes', 'Because i have abilities', 81691, 'yes', 'Yes earlier i work', 'Front End Developer'),
(8, 'Deepak ramchandra mali', 'deepakmali@gmail.com', 'yes', 'yes', 'I have done various courses', 1234567891, 'yes', 'Yes earlier i work', 'Android App Developer'),
(9, 'Deepak ramchandra mali', 'deepakmali@gmail.com', 'yes', 'yes', 'Because i have abilities', 874674, 'yes', 'Yes earlier i work', 'Full Stack Developer');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `Id` int(10) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `phone` int(10) NOT NULL,
  `location` varchar(20) NOT NULL,
  `education` varchar(200) NOT NULL,
  `job1` varchar(200) NOT NULL,
  `job2` varchar(60) NOT NULL,
  `internship1` varchar(200) NOT NULL,
  `internship2` varchar(60) NOT NULL,
  `academic` varchar(200) NOT NULL,
  `skills1` varchar(40) NOT NULL,
  `skills2` varchar(40) NOT NULL,
  `skills3` varchar(40) NOT NULL,
  `skills4` varchar(40) NOT NULL,
  `portfolio` varchar(200) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`Id`, `fname`, `phone`, `location`, `education`, `job1`, `job2`, `internship1`, `internship2`, `academic`, `skills1`, `skills2`, `skills3`, `skills4`, `portfolio`, `time`) VALUES
(1, 'Mihir Narkar', 1234567891, 'Mumbai', 'Bachelor of engineering', 'Web development', 'Front end developer', 'Internshala HTML developer', 'Backend developer', '4 projects till now', 'Python', 'HTML', 'Java', 'PHP', 'None', '2021-10-18 00:44:56'),
(2, 'vaishali', 874674, 'mumbai', 'Bachelor of technology', ' Cloud computing sheep', 'AI generation', 'PHP comand', 'HTML frontend', '5 projects till now', 'Python', 'Java', 'HTML', 'Bootstrap', 'Nope', '2021-10-18 00:53:10'),
(3, 'Sahil Ambavale', 7585785, 'mumbai', 'Bachelor of engineering', 'Software developer', 'backend developer', 'html front end', 'java backend', '5 projects', 'java', 'html', 'css', 'php', 'github link', '2021-10-18 01:07:13'),
(4, 'Deepak Mali', 2147483647, 'Mumbai', 'Bachelor of commerce', ' Excel sheet', 'Marketing plan', 'Advance excel shispy', 'MS word micrsoft', '3 projects', 'Excel', 'Advance excel ', 'MS word', 'PPT', 'http://codewithdeepak.com', '2021-10-18 18:03:25'),
(5, 'Aryan Gogi', 2147483647, 'mumbai', 'Bachelor of technology', 'jjh', 'kngkgn', 'knjkf', 'kfjkfjf', 'dbfjbfjfj', 'jfjfhjfhfjhf', 'hgh', 'tu', 'kjkkj', 'kjdhjhdjd', '2021-10-20 19:10:39'),
(6, 'Jatin Tiwari', 84787857, 'Ghatkopar', 'Bachelor of engineering', 'Web development at kharghar', 'back end development at mirpur', 'hjddfhgd', 'kjfkjf', '4 projects', 'python', 'java', 'C++', 'HTML', 'http://codewithsahil.com', '2021-10-22 02:01:34'),
(7, 'Atharva', 7585785, 'Mumbai', 'Bachelor of engineering', 'Web development post', 'Python backend post', 'Internshala backend', 'School work in web development', '4 projects of front end and 1 projects of backend', 'Python', 'Web development', 'Bootstrap', 'PHP', 'http://www.codewithatharva.com', '2021-10-23 00:41:15'),
(8, 'Atharva', 7585785, 'Mumbai', 'Bachelor of engineering', 'Web development post', 'Python backend post', 'Internshala backend', 'School work in web development', '4 projects of front end and 1 projects of backend', 'Python', 'Web development', 'Bootstrap', 'PHP', 'http://www.codewithatharva.com', '2021-10-23 00:41:40'),
(9, 'Mihir Narkar', 7585785, 'mumbai', 'Bachelor of engineering', 'python development', 'software development', 'nopwe', 'nope', '4 projects and 1 real time project', 'python', 'java', 'C++', 'html', 'http://codewithmixxz.com', '2021-10-25 00:26:26'),
(10, 'Mihir Narkar', 7585785, 'mumbai', 'Bachelor of engineering', 'python development', 'software development', 'nopwe', 'nope', '4 projects and 1 real time project', 'python', 'java', 'C++', 'html', 'http://codewithmixxz.com', '2021-10-25 00:26:35'),
(11, 'Mihir Narkar', 7585785, 'mumbai', 'Bachelor of engineering', 'python development', 'software development', 'nopwe', 'nope', '4 projects and 1 real time project', 'python', 'java', 'C++', 'html', 'http://codewithmixxz.com', '2021-10-25 00:26:49'),
(12, 'New user', 1234567891, 'mumbai', 'Bachelor of engineering', 'front end development', 'back end development', 'python ', 'java', '4 project and 1 realt time', 'python', 'C++', 'HTML', 'php', 'Http://codewithmixxz.com', '2021-10-25 11:16:54');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(8) NOT NULL,
  `thread_title` varchar(100) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int(8) NOT NULL,
  `thread_user_id` int(8) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES
(1, 'Code input error', 'Somewhat indent error please anybody tell me', 1, 1, '2021-10-22 23:50:47'),
(2, 'Adding nav links to nav bar', 'I wanted to add home ,contact, and about us in my nav bar the buttons are there but it is not taking to the dedicated page', 1, 4, '2021-10-23 00:13:03'),
(3, 'Css style sheet error', 'I have two major error in CSS style sheet.Please if possible someone help me', 1, 7, '2021-10-23 00:54:36'),
(4, 'AutoCAD newbie', 'I am newbie in AutoCAD soo i dont no how to use new softwares', 10, 1, '2021-10-23 19:13:21'),
(5, 'Hello guys', 'Whats up', 1, 9, '2021-10-23 23:34:22'),
(6, 'I want to learn advanced excel in free', 'yaa thats it', 5, 10, '2021-10-24 00:23:11'),
(7, 'Php error code is not getting indent', 'I was not getting indent in my code written in php', 1, 1, '2021-10-25 00:33:12'),
(8, 'my style sheet is not working', 'my style sheet is not working', 1, 8, '2021-10-25 00:55:04'),
(9, 'Website crash because of CSS', 'Website crash because of CSS', 1, 9, '2021-10-25 10:48:51'),
(10, 'Website crash because of CSS', 'Website crash because of CSS', 1, 1, '2021-10-25 10:54:25'),
(11, 'Website crash because of CSS', 'Website crash because of CSS', 1, 10, '2021-10-25 11:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Sno` int(8) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Sno`, `email`, `pass`, `fname`, `lname`, `date`) VALUES
(1, 'Mihirnarkar19@gmail.com', '$2y$10$K/cn7995buFGPf1ku5yPPej3HAJyt6VH8JzIN6H2CejPCjuvmNlUO', 'Mihir', 'Narkar', '2021-10-24 11:47:33'),
(2, 'sahilronaldo@gmail.com', '$2y$10$XGal3AVgjvWhZIbg/XIpx.cdczfL/qfFqXkrxKoVKBD5Nx5PgTtcK', 'sahil', 'Ambavale', '2021-10-24 11:48:52'),
(3, 'satish@gmail.com', '$2y$10$QNJxxH7KIXGKQXYGnPfUheHEX3wvJY7LIzmeA.YyXIpOV0QmjCNrW', 'Satish', 'Anna', '2021-10-24 11:50:00'),
(4, 'jatin@gmail.com', '$2y$10$Fh1leFEZhZy1rekLUEifaOAAr0eoEDTQJ7gBhy8MrM.iCkR6l2ZRW', 'Jatin', 'Tiwari', '2021-10-24 11:50:32'),
(5, 'deepakmali@gmail.com', '$2y$10$LwluHYn83/hUi7QVsD1QF.bI3M4eqOvuYRNN75GcaS5d6iCPPXma6', 'Deepak', 'Mali', '2021-10-24 11:51:01'),
(6, 'riya@gmail.com', '$2y$10$hJacGN4x7RLwYJ4DL39aV.K1Tp0UPrtIANfr9cTkLJeHfN9YogCDe', 'Riya', 'Pangam', '2021-10-24 12:18:49'),
(7, 'jay.vanjare@gmail.com', '$2y$10$9.13VlcEGYsREa.frw.Kce1WnayiZhND2gb2IfrliUp0L0ZsGNuy2', 'Jay', 'Vanjare', '2021-10-24 12:26:13'),
(8, 'newuser@gmail.com', '$2y$10$7vT9pwduHvKSvRQTYbMObunB5PXldJZ5.D/4mqxU/3swBWJj6V6PO', 'New', 'User', '2021-10-25 00:44:19'),
(9, 'uzair@gmail.com', '$2y$10$FFFk18RRGBIpungPeMrqTOnEvX22GBfrbYteilvZKj6LRtihUpNSy', 'Uzair', 'Contractor', '2021-10-25 10:42:14'),
(10, 'newuser1@gmail.com', '$2y$10$Z7YxaZOUj4DNraqlbl9mmuzShOwD7Pf3XLpQU6ZiP6CMj2qyAfSui', 'New', 'User', '2021-10-25 11:13:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories_table`
--
ALTER TABLE `categories_table`
  ADD PRIMARY KEY (`Category_ID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `jobapply`
--
ALTER TABLE `jobapply`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories_table`
--
ALTER TABLE `categories_table`
  MODIFY `Category_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobapply`
--
ALTER TABLE `jobapply`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
