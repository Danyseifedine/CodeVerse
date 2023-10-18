-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2023 at 07:43 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeverse`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'new post', 'hello world', '16957078713043.jpg', '2023-09-26 02:57:51', '2023-09-26 02:57:51'),
(2, 2, 'ashgda', 'ajsgdasjd', '16957106937117.jpg', '2023-09-26 03:44:53', '2023-09-26 03:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` bigint UNSIGNED NOT NULL,
  `with_Title_section_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `First_Title_section_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Second_Title_section_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_Title_section_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description_Title_section_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Title_section_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description_Title_section_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Special_Title_1_section_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Special_text_1_section_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Special_Title_2_section_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Special_text_2_section_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Special_Title_3_section_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Special_text_3_section_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Special_Title_4_section_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Special_text_4_section_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Special_image_section_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `box_1_image_section_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `box_1_text_section_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `box_2_image_section_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `box_2_text_section_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `box_3_image_section_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `box_3_text_section_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `box_4_image_section_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `box_4_text_section_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `box_5_image_section_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `box_5_text_section_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `with_Title_section_1`, `First_Title_section_1`, `Second_Title_section_1`, `third_Title_section_1`, `Description_Title_section_1`, `Title_section_2`, `Description_Title_section_2`, `Special_Title_1_section_2`, `Special_text_1_section_2`, `Special_Title_2_section_2`, `Special_text_2_section_2`, `Special_Title_3_section_2`, `Special_text_3_section_2`, `Special_Title_4_section_2`, `Special_text_4_section_2`, `Special_image_section_2`, `box_1_image_section_3`, `box_1_text_section_3`, `box_2_image_section_3`, `box_2_text_section_3`, `box_3_image_section_3`, `box_3_text_section_3`, `box_4_image_section_3`, `box_4_text_section_3`, `box_5_image_section_3`, `box_5_text_section_3`, `created_at`, `updated_at`) VALUES
(1, 'With ', 'CODEⓋERSE', 'Unlock Your Front-End Potential\r\n', 'Creative Code Solutions\r\n', 'Welcome to CodeVerse, your hub for front-end creativity. Build, test, and explore web development with our vast collection of code snippets and tools. Join our community and turn your coding visions into reality.\r\n', 'What\'s Special\r\n\r\n', 'Here\'s some things that are special about us that will make your experience easier in CodeVerse:\r\n\r\n', 'Ad-Free\r\n', 'Ad-free coding experience. Uninterrupted focus on your projects. Enhance your productivity and creativity.\r\n\r\n', 'Free Components\r\n', 'Explore our vast collection of free components. Enhance your projects without breaking the bank.\r\n\r\n', 'User Picks\r\n', 'Discover personalized component suggestions tailored to your needs. Elevate your coding experience effortlessly.\r\n\r\n', 'Share Your Creations\r\n', 'Join our coding community, share your components, and inspire fellow developers worldwide.\r\n\r\n', './images/section-2.svg', './images/tailwind.png', 'Tailwind', './images/css.png', 'Css', './images/sass.png', 'Sass', './images/bootstrap.png', 'Bootstrap', './images/react.png', 'React', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(26, '2023_09_21_104453_create_snippets_table', 7),
(27, '2023_09_21_105649_add_status_to_snippets_table', 8),
(80, '2014_10_12_000000_create_users_table', 9),
(81, '2014_10_12_100000_create_password_reset_tokens_table', 9),
(82, '2019_08_19_000000_create_failed_jobs_table', 9),
(83, '2019_12_14_000001_create_personal_access_tokens_table', 9),
(84, '2023_09_15_113722_create_home_table', 9),
(85, '2023_09_17_141817_create_messages_table', 9),
(86, '2023_09_19_053223_create_blogs_table', 9),
(87, '2023_09_21_110403_create_snippets_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `snippets`
--

CREATE TABLE `snippets` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','published','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `snippets`
--

INSERT INTO `snippets` (`id`, `user_id`, `title`, `description`, `image`, `code`, `category`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tailwind CSS Sign in', 'Form', '16957055523569.png', '<!-- component -->\r\n<div class=\"bg-[#F9FAFB] h-screen w-screen flex items-center\">\r\n        <div class=\"h-max mx-auto flex flex-col items-center\">\r\n            <img class=\"h-[40px] w-[47px] mb-5\" src=\"https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600\" alt=\"\">\r\n            <h1 class=\"text-xl font-bold text-center pb-10\">Sign in to your account</h1>\r\n            <div class=\"bg-white shadow-xl p-10 flex flex-col gap-4 text-sm\">\r\n                <div>\r\n                    <label class=\"text-gray-600 font-bold inline-block pb-2\" for=\"email\">Email</label>\r\n                    <input class=\"border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2\" type=\"email\" name=\"email\" placeholder=\"mehedi@jaman.com\">\r\n                </div>\r\n                <div>\r\n                    <label class=\"text-gray-600 font-bold inline-block pb-2\" for=\"password\">Password</label>\r\n                    <input class=\"border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2\" type=\"password\" name=\"password\" placeholder=\"******\">\r\n                </div>\r\n                <div class=\"flex\">\r\n                    <div class=\"w-1/2\">\r\n                        <input type=\"checkbox\" name=\"remeberMe\">\r\n                        <label for=\"remeberMe\">Remeber me</label>\r\n                    </div>\r\n                    <div class=\"w-1/2\">\r\n                        <a class=\"font-bold text-blue-600\" href=\"\">Forgot password ?</a>\r\n                    </div>\r\n                </div>\r\n                <div>\r\n                    <input class=\"bg-[#4F46E5] w-full py-2 rounded-md text-white font-bold cursor-pointer hover:bg-[#181196]\" type=\"submit\" value=\"Login\" >\r\n                </div>\r\n                <div>\r\n                    <p class=\"text-center\">Or continue with</p>\r\n                </div>\r\n                <div class=\"flex gap-4\">\r\n                    <button class=\"bg-[#1D9BF0] w-1/2 py-1 rounded-md text-white font-bold cursor-pointer hover:bg-[#181196]\">Twitter</button>\r\n                    <button class=\"bg-[#24292F] w-1/2 py-1 rounded-md text-white font-bold cursor-pointer hover:bg-[#181196]\">Github</button>\r\n                </div>\r\n            </div>\r\n            <p class=\"text-sm text-gray-500 mt-10\">Not a member? <a href=\"#\" class=\"text-[#4F46E5] font-bold\">Start a 14 day free trial</a></p>\r\n        </div>\r\n    </div>', 'Tailwind', 'rejected', '2023-09-26 02:19:12', '2023-09-26 02:19:57'),
(2, 1, 'Tailwind CSS Pricing', 'Pricing', '16957057099130.png', '<!-- component -->\r\n<section>\r\n	<div class=\"container max-w-full mx-auto py-24 px-6\">\r\n		<h1\r\n		class=\"text-center text-4xl text-black font-medium leading-snug tracking-wider\"\r\n		>\r\n		Pricing\r\n	</h1>\r\n	<p class=\"text-center text-lg text-gray-700 mt-2 px-6\">\r\n		Sed ut perspiciatis unde omnis iste natus error sit voluptatem\r\n		accusantium doloremque laudantium, totam rem aperiam.\r\n	</p>\r\n	<div\r\n	class=\"h-1 mx-auto bg-indigo-200 w-24 opacity-75 mt-4 rounded\"\r\n	></div>\r\n\r\n	<div class=\"max-w-full md:max-w-6xl mx-auto my-3 md:px-8\">\r\n		<div\r\n		class=\"relative block flex flex-col md:flex-row items-center\"\r\n		>\r\n		<div\r\n		class=\"w-11/12 max-w-sm sm:w-3/5 lg:w-1/3 sm:my-5 my-8 relative z-0 rounded-lg shadow-lg md:-mr-4\"\r\n		>\r\n		<div\r\n		class=\"bg-white text-black rounded-lg shadow-inner shadow-lg overflow-hidden\"\r\n		>\r\n		<div\r\n		class=\"block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6\"\r\n		>\r\n		<h1\r\n		class=\"text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide\"\r\n		>\r\n		Hobby \r\n	</h1>\r\n	<h2 class=\"text-sm text-gray-500 text-center pb-6\">FREE</h2>\r\n	\r\n	Stripe offers everything needed to run an online business\r\n	at scale. Get in touch for details.\r\n</div>\r\n\r\n<div class=\"flex flex-wrap mt-3 px-6\">\r\n	<ul>\r\n		<li class=\"flex items-center\">\r\n			<div\r\n			class=\" rounded-full p-2 fill-current text-green-700\"\r\n			>\r\n			<svg\r\n			class=\"w-6 h-6 align-middle\"\r\n			width=\"24\"\r\n			height=\"24\"\r\n			viewBox=\"0 0 24 24\"\r\n			fill=\"none\"\r\n			stroke=\"currentColor\"\r\n			stroke-width=\"2\"\r\n			stroke-linecap=\"round\"\r\n			stroke-linejoin=\"round\"\r\n			>\r\n			<path\r\n			d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"\r\n			></path>\r\n			<polyline\r\n			points=\"22 4 12 14.01 9 11.01\"\r\n			></polyline>\r\n		</svg>\r\n	</div>\r\n	<span class=\"text-gray-700 text-lg ml-3\"\r\n	>No setup</span\r\n	>\r\n</li>\r\n<li class=\"flex items-center\">\r\n	<div\r\n	class=\" rounded-full p-2 fill-current text-green-700\"\r\n	>\r\n	<svg\r\n	class=\"w-6 h-6 align-middle\"\r\n	width=\"24\"\r\n	height=\"24\"\r\n	viewBox=\"0 0 24 24\"\r\n	fill=\"none\"\r\n	stroke=\"currentColor\"\r\n	stroke-width=\"2\"\r\n	stroke-linecap=\"round\"\r\n	stroke-linejoin=\"round\"\r\n	>\r\n	<path\r\n	d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"\r\n	></path>\r\n	<polyline\r\n	points=\"22 4 12 14.01 9 11.01\"\r\n	></polyline>\r\n</svg>\r\n</div>\r\n<span class=\"text-gray-700 text-lg ml-3\"\r\n>No setups</span\r\n>\r\n</li>\r\n<li class=\"flex items-center\">\r\n	<div\r\n	class=\" rounded-full p-2 fill-current text-green-700\"\r\n	>\r\n	<svg\r\n	class=\"w-6 h-6 align-middle\"\r\n	width=\"24\"\r\n	height=\"24\"\r\n	viewBox=\"0 0 24 24\"\r\n	fill=\"none\"\r\n	stroke=\"currentColor\"\r\n	stroke-width=\"2\"\r\n	stroke-linecap=\"round\"\r\n	stroke-linejoin=\"round\"\r\n	>\r\n	<path\r\n	d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"\r\n	></path>\r\n	<polyline\r\n	points=\"22 4 12 14.01 9 11.01\"\r\n	></polyline>\r\n</svg>\r\n</div>\r\n<span class=\"text-gray-700 text-lg ml-3\">Speed</span>\r\n</li>\r\n</ul> \r\n</div>  \r\n<div class=\"block flex items-center p-8  uppercase\">\r\n	<button\r\n	class=\"mt-3 text-lg font-semibold \r\n	bg-black w-full text-white rounded-lg \r\n	px-6 py-3 block shadow-xl hover:bg-gray-700\"\r\n	>\r\n	Select\r\n</button>\r\n</div>\r\n</div>\r\n</div>\r\n<div\r\nclass=\"w-full max-w-md sm:w-2/3 lg:w-1/3 sm:my-5 my-8 relative z-10 bg-white rounded-lg shadow-lg\"\r\n>\r\n<div\r\nclass=\"text-sm leading-none rounded-t-lg bg-gray-200 text-black font-semibold uppercase py-4 text-center tracking-wide\"\r\n>\r\nMost Popular\r\n</div>\r\n<div\r\nclass=\"block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6\"\r\n>\r\n<h1\r\nclass=\"text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide\"\r\n>\r\nExpert\r\n</h1>\r\n<h2 class=\"text-sm text-gray-500 text-center pb-6\"><span class=\"text-3xl\">€19</span> /mo</h2> \r\n\r\nStripe offers everything needed to run an online business at\r\nscale. Get in touch for details.\r\n</div>\r\n<div class=\"flex pl-12 justify-start sm:justify-start mt-3\">\r\n	<ul>\r\n		<li class=\"flex items-center\">\r\n			<div\r\n			class=\"rounded-full p-2 fill-current text-green-700\"\r\n			>\r\n			<svg\r\n			class=\"w-6 h-6 align-middle\"\r\n			width=\"24\"\r\n			height=\"24\"\r\n			viewBox=\"0 0 24 24\"\r\n			fill=\"none\"\r\n			stroke=\"currentColor\"\r\n			stroke-width=\"2\"\r\n			stroke-linecap=\"round\"\r\n			stroke-linejoin=\"round\"\r\n			>\r\n			<path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"></path>\r\n			<polyline points=\"22 4 12 14.01 9 11.01\"></polyline>\r\n		</svg>\r\n	</div>\r\n	<span class=\"text-gray-700 text-lg ml-3\">No setup</span>\r\n</li>\r\n<li class=\"flex items-center\">\r\n	<div\r\n	class=\" rounded-full p-2 fill-current text-green-700\"\r\n	>\r\n	<svg\r\n	class=\"w-6 h-6 align-middle\"\r\n	width=\"24\"\r\n	height=\"24\"\r\n	viewBox=\"0 0 24 24\"\r\n	fill=\"none\"\r\n	stroke=\"currentColor\"\r\n	stroke-width=\"2\"\r\n	stroke-linecap=\"round\"\r\n	stroke-linejoin=\"round\"\r\n	>\r\n	<path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"></path>\r\n	<polyline points=\"22 4 12 14.01 9 11.01\"></polyline>\r\n</svg>\r\n</div>\r\n<span class=\"text-gray-700 text-lg ml-3\"\r\n>Hidden fees</span\r\n>\r\n</li>\r\n<li class=\"flex items-center\">\r\n	<div\r\n	class=\" rounded-full p-2 fill-current text-green-700\"\r\n	>\r\n	<svg\r\n	class=\"w-6 h-6 align-middle\"\r\n	width=\"24\"\r\n	height=\"24\"\r\n	viewBox=\"0 0 24 24\"\r\n	fill=\"none\"\r\n	stroke=\"currentColor\"\r\n	stroke-width=\"2\"\r\n	stroke-linecap=\"round\"\r\n	stroke-linejoin=\"round\"\r\n	>\r\n	<path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"></path>\r\n	<polyline points=\"22 4 12 14.01 9 11.01\"></polyline>\r\n</svg>\r\n</div>\r\n<span class=\"text-gray-700 text-lg ml-3\">Original</span>\r\n</li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"block flex items-center p-8  uppercase\">\r\n	<button\r\n	class=\"mt-3 text-lg font-semibold \r\n	bg-black w-full text-white rounded-lg \r\n	px-6 py-3 block shadow-xl hover:bg-gray-700\"\r\n	>\r\n	Select\r\n</button>\r\n</div>\r\n</div>\r\n<div\r\nclass=\"w-11/12 max-w-sm sm:w-3/5 lg:w-1/3 sm:my-5 my-8 relative z-0 rounded-lg shadow-lg md:-ml-4\"\r\n>\r\n<div\r\nclass=\"bg-white text-black rounded-lg shadow-inner shadow-lg overflow-hidden\"\r\n>\r\n<div\r\nclass=\"block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6\"\r\n>\r\n<h1\r\nclass=\"text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide\"\r\n>\r\nEnteprise\r\n</h1>\r\n<h2 class=\"text-sm text-gray-500 text-center pb-6\">€39 /mo</h2> \r\n\r\nStripe offers everything needed to run an online business\r\nat scale. Get in touch for details.\r\n</div>\r\n<div class=\"flex flex-wrap mt-3 px-6\">\r\n	<ul>\r\n		<li class=\"flex items-center\">\r\n			<div\r\n			class=\" rounded-full p-2 fill-current text-green-700\"\r\n			>\r\n			<svg\r\n			class=\"w-6 h-6 align-middle\"\r\n			width=\"24\"\r\n			height=\"24\"\r\n			viewBox=\"0 0 24 24\"\r\n			fill=\"none\"\r\n			stroke=\"currentColor\"\r\n			stroke-width=\"2\"\r\n			stroke-linecap=\"round\"\r\n			stroke-linejoin=\"round\"\r\n			>\r\n			<path\r\n			d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"\r\n			></path>\r\n			<polyline\r\n			points=\"22 4 12 14.01 9 11.01\"\r\n			></polyline>\r\n		</svg>\r\n	</div>\r\n	<span class=\"text-gray-700 text-lg ml-3\"\r\n	>Electric</span\r\n	>\r\n</li>\r\n<li class=\"flex items-center\">\r\n	<div\r\n	class=\" rounded-full p-2 fill-current text-green-700\"\r\n	>\r\n	<svg\r\n	class=\"w-6 h-6 align-middle\"\r\n	width=\"24\"\r\n	height=\"24\"\r\n	viewBox=\"0 0 24 24\"\r\n	fill=\"none\"\r\n	stroke=\"currentColor\"\r\n	stroke-width=\"2\"\r\n	stroke-linecap=\"round\"\r\n	stroke-linejoin=\"round\"\r\n	>\r\n	<path\r\n	d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"\r\n	></path>\r\n	<polyline\r\n	points=\"22 4 12 14.01 9 11.01\"\r\n	></polyline>\r\n</svg>\r\n</div>\r\n<span class=\"text-gray-700 text-lg ml-3\"\r\n>Monthly</span\r\n>\r\n</li>\r\n<li class=\"flex items-center\">\r\n	<div\r\n	class=\" rounded-full p-2 fill-current text-green-700\"\r\n	>\r\n	<svg\r\n	class=\"w-6 h-6 align-middle\"\r\n	width=\"24\"\r\n	height=\"24\"\r\n	viewBox=\"0 0 24 24\"\r\n	fill=\"none\"\r\n	stroke=\"currentColor\"\r\n	stroke-width=\"2\"\r\n	stroke-linecap=\"round\"\r\n	stroke-linejoin=\"round\"\r\n	>\r\n	<path\r\n	d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"\r\n	></path>\r\n	<polyline\r\n	points=\"22 4 12 14.01 9 11.01\"\r\n	></polyline>\r\n</svg>\r\n</div>\r\n<span class=\"text-gray-700 text-lg ml-3\"\r\n>No setup</span\r\n>\r\n</li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"block flex items-center p-8  uppercase\">\r\n	<button\r\n	class=\"mt-3 text-lg font-semibold \r\n	bg-black w-full text-white rounded-lg \r\n	px-6 py-3 block shadow-xl hover:bg-gray-700\"\r\n	>\r\n	Select\r\n</button>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', 'Tailwind', 'published', '2023-09-26 02:21:49', '2023-09-26 02:22:00'),
(3, 1, 'Button Component', 'Button', '16957061941570.png', '<div class=\"w-screen h-screen flex items-center justify-center bg-gray-100\">\r\n  <div class=\"w-full mx-auto py-16\">\r\n    <!-- Title -->\r\n    <h1 class=\"text-3xl text-center font-bold mb-6\">\r\n      Button Component (Default)\r\n    </h1>\r\n    <!-- End Title -->\r\n\r\n    <!-- Default -->\r\n    <div\r\n      class=\"bg-white px-6 py-4 my-3 w-3/4 mx-auto shadow rounded-md flex items-center\"\r\n    >\r\n    <div class=\"w-full text-center mx-auto\">\r\n      <button\r\n        type=\"button\"\r\n        class=\"border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline\"\r\n      >\r\n        Primary\r\n      </button>\r\n      <button\r\n        type=\"button\"\r\n        class=\"border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline\"\r\n      >\r\n        Success\r\n      </button>\r\n      <button\r\n        type=\"button\"\r\n        class=\"border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline\"\r\n      >\r\n        Error\r\n      </button>\r\n      <button\r\n        type=\"button\"\r\n        class=\"border border-yellow-500 bg-yellow-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-yellow-600 focus:outline-none focus:shadow-outline\"\r\n      >\r\n        Warning\r\n      </button>\r\n      <button\r\n        type=\"button\"\r\n        class=\"border border-teal-500 bg-teal-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-teal-600 focus:outline-none focus:shadow-outline\"\r\n      >\r\n        Info\r\n      </button>\r\n      <button\r\n        type=\"button\"\r\n        class=\"border border-gray-700 bg-gray-700 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline\"\r\n      >\r\n        Dark\r\n      </button>\r\n      <button\r\n        type=\"button\"\r\n        class=\"border border-gray-200 bg-gray-200 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-300 focus:outline-none focus:shadow-outline\"\r\n      >\r\n        Light\r\n      </button>\r\n      </div>\r\n    </div>\r\n    <!-- End Default -->\r\n  </div>\r\n</div>', 'Tailwind', 'published', '2023-09-26 02:29:54', '2023-09-26 02:30:35'),
(5, 2, 'social media', 'Carousel', '16957100264368.png', '<!-- component -->\r\n<style>\r\n@import url(\"https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap\");\r\n\r\n.break-inside {\r\n  -moz-column-break-inside: avoid;\r\n  break-inside: avoid;\r\n}\r\n\r\nbody {\r\n  display: flex;\r\n  align-items: center;\r\n  justify-content: space-between;\r\n  flex-direction: column;\r\n  min-height: 100vh;\r\n  font-family: \"Roboto\", sans-serif;\r\n}\r\n</style>\r\n\r\n\r\n<!-- Example -->\r\n\r\n\r\n<!-- Wrapper-->\r\n  <div class=\"wrapper pt-10 px-8 flex flex-col items-center\">\r\n    <!-- Card-->\r\n      <article class=\"mb-4 break-inside p-6 rounded-xl bg-white dark:bg-slate-800 flex flex-col bg-clip-border sm:w-3/6 w-full\">\r\n        <div class=\"flex pb-6 items-center justify-between\">\r\n          <div class=\"flex\">\r\n            <a class=\"inline-block mr-4\" href=\"#\">\r\n              <img class=\"rounded-full max-w-none w-12 h-12\" src=\"https://randomuser.me/api/portraits/men/35.jpg\" />\r\n            </a>\r\n            <div class=\"flex flex-col\">\r\n              <div>\r\n                <a class=\"inline-block text-lg font-bold dark:text-white\" href=\"#\">Wade Warren</a>\r\n              </div>\r\n              <div class=\"text-slate-500 dark:text-slate-300 dark:text-slate-400\">\r\n                July 17, 2018\r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n        <h2 class=\"text-3xl font-extrabold dark:text-white\">\r\n          Web Design templates Selection\r\n        </h2>\r\n        <div class=\"py-4\">\r\n          <div class=\"flex justify-between gap-1 mb-1\">\r\n            <a class=\"flex\" href=\"#\">\r\n              <img class=\"max-w-full rounded-tl-lg\"\r\n                src=\"https://images.pexels.com/photos/92866/pexels-photo-92866.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260\" />\r\n            </a>\r\n            <a class=\"flex\" href=\"#\">\r\n              <img class=\"max-w-full\"\r\n                src=\"https://images.pexels.com/photos/247929/pexels-photo-247929.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260\" />\r\n            </a>\r\n            <a class=\"flex\" href=\"#\">\r\n              <img class=\"max-w-full rounded-tr-lg\"\r\n                src=\"https://images.pexels.com/photos/631522/pexels-photo-631522.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260\" />\r\n            </a>\r\n          </div>\r\n          <div class=\"flex justify-between gap-1\">\r\n            <a class=\"flex\" href=\"#\">\r\n              <img class=\"max-w-full rounded-bl-lg\"\r\n                src=\"https://images.pexels.com/photos/1429748/pexels-photo-1429748.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260\" />\r\n            </a>\r\n            <a class=\"flex\" href=\"#\">\r\n              <img class=\"max-w-full rounded-br-lg\"\r\n                src=\"https://images.pexels.com/photos/69020/pexels-photo-69020.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260\" />\r\n            </a>\r\n          </div>\r\n        </div>\r\n        <p class=\"dark:text-slate-200\">\r\n          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do\r\n          eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n        </p>\r\n        <div class=\"py-4\">\r\n          <a class=\"inline-flex items-center\" href=\"#\">\r\n            <span class=\"mr-2\">\r\n              <svg class=\"fill-rose-600 dark:fill-rose-400\" style=\"width: 24px; height: 24px;\" viewBox=\"0 0 24 24\">\r\n                <path\r\n                  d=\"M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z\">\r\n                </path>\r\n              </svg>\r\n            </span>\r\n            <span class=\"text-lg font-bold\">34</span>\r\n          </a>\r\n        </div>\r\n        <div class=\"relative\">\r\n          <input\r\n            class=\"pt-2 pb-2 pl-3 w-full h-11 bg-slate-100 dark:bg-slate-600 rounded-lg placeholder:text-slate-600 dark:placeholder:text-slate-300 font-medium pr-20\"\r\n            type=\"text\" placeholder=\"Write a comment\" />\r\n          <span class=\"flex absolute right-3 top-2/4 -mt-3 items-center\">\r\n            <svg class=\"mr-2\" style=\"width: 26px; height: 26px;\" viewBox=\"0 0 24 24\">\r\n              <path fill=\"currentColor\"\r\n                d=\"M20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12M22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12M10,9.5C10,10.3 9.3,11 8.5,11C7.7,11 7,10.3 7,9.5C7,8.7 7.7,8 8.5,8C9.3,8 10,8.7 10,9.5M17,9.5C17,10.3 16.3,11 15.5,11C14.7,11 14,10.3 14,9.5C14,8.7 14.7,8 15.5,8C16.3,8 17,8.7 17,9.5M12,17.23C10.25,17.23 8.71,16.5 7.81,15.42L9.23,14C9.68,14.72 10.75,15.23 12,15.23C13.25,15.23 14.32,14.72 14.77,14L16.19,15.42C15.29,16.5 13.75,17.23 12,17.23Z\">\r\n              </path>\r\n            </svg>\r\n            <svg class=\"fill-blue-500 dark:fill-slate-50\" style=\"width: 24px; height: 24px;\" viewBox=\"0 0 24 24\">\r\n              <path d=\"M2,21L23,12L2,3V10L17,12L2,14V21Z\"></path>\r\n            </svg>\r\n          </span>\r\n        </div>\r\n        <!-- Comments content -->\r\n        <div class=\"pt-6\">\r\n          <!-- Comment row -->\r\n          <div class=\"media flex pb-4\">\r\n            <a class=\"mr-4\" href=\"#\">\r\n              <img class=\"rounded-full max-w-none w-12 h-12\" src=\"https://randomuser.me/api/portraits/men/82.jpg\" />\r\n            </a>\r\n            <div class=\"media-body\">\r\n              <div>\r\n                <a class=\"inline-block text-base font-bold mr-2\" href=\"#\">Leslie Alexander</a>\r\n                <span class=\"text-slate-500 dark:text-slate-300\">25 minutes ago</span>\r\n              </div>\r\n              <p>Lorem ipsum dolor sit amet, consectetur.</p>\r\n              <div class=\"mt-2 flex items-center\">\r\n                <a class=\"inline-flex items-center py-2 mr-3\" href=\"#\">\r\n                  <span class=\"mr-2\">\r\n                    <svg class=\"fill-rose-600 dark:fill-rose-400\" style=\"width: 22px; height: 22px;\"\r\n                      viewBox=\"0 0 24 24\">\r\n                      <path\r\n                        d=\"M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z\">\r\n                      </path>\r\n                    </svg>\r\n                  </span>\r\n                  <span class=\"text-base font-bold\">12</span>\r\n                </a>\r\n                <button class=\"py-2 px-4 font-medium hover:bg-slate-50 dark:hover:bg-slate-700 rounded-lg\">\r\n                  Repply\r\n                </button>\r\n              </div>\r\n            </div>\r\n          </div>\r\n          <!-- End comments row -->\r\n          <!-- comments row -->\r\n          <div class=\"media flex pb-4\">\r\n            <a class=\"inline-block mr-4\" href=\"#\">\r\n              <img class=\"rounded-full max-w-none w-12 h-12\" src=\"https://randomuser.me/api/portraits/women/76.jpg\" />\r\n            </a>\r\n            <div class=\"media-body\">\r\n              <div>\r\n                <a class=\"inline-block text-base font-bold mr-2\" href=\"#\">Tina Mills</a>\r\n                <span class=\"text-slate-500 dark:text-slate-300\">3 minutes ago</span>\r\n              </div>\r\n              <p>Dolor sit ameteiusmod consectetur adipiscing elit.</p>\r\n              <div class=\"mt-2 flex items-center\">\r\n                <a class=\"inline-flex items-center py-2 mr-3\" href=\"#\">\r\n                  <span class=\"mr-2\">\r\n                    <svg class=\"fill-rose-600 dark:fill-rose-400\" style=\"width: 22px; height: 22px;\"\r\n                      viewBox=\"0 0 24 24\">\r\n                      <path\r\n                        d=\"M12.1 18.55L12 18.65L11.89 18.55C7.14 14.24 4 11.39 4 8.5C4 6.5 5.5 5 7.5 5C9.04 5 10.54 6 11.07 7.36H12.93C13.46 6 14.96 5 16.5 5C18.5 5 20 6.5 20 8.5C20 11.39 16.86 14.24 12.1 18.55M16.5 3C14.76 3 13.09 3.81 12 5.08C10.91 3.81 9.24 3 7.5 3C4.42 3 2 5.41 2 8.5C2 12.27 5.4 15.36 10.55 20.03L12 21.35L13.45 20.03C18.6 15.36 22 12.27 22 8.5C22 5.41 19.58 3 16.5 3Z\">\r\n                      </path>\r\n                    </svg>\r\n                  </span>\r\n                  <span class=\"text-base font-bold\">0</span>\r\n                </a>\r\n                <button class=\"py-2 px-4 font-medium hover:bg-slate-50 dark:hover:bg-slate-700 rounded-lg\">\r\n                  Repply\r\n                </button>\r\n              </div>\r\n            </div>\r\n          </div>\r\n          <!-- End comments row -->\r\n          <!-- More comments -->\r\n          <div class=\"w-full\">\r\n            <a href=\"#\"\r\n              class=\"py-3 px-4 w-full block bg-slate-100 dark:bg-slate-700 text-center rounded-lg font-medium hover:bg-slate-200 dark:hover:bg-slate-600 transition ease-in-out delay-75\">Show\r\n              more comments</a>\r\n          </div>\r\n          <!-- End More comments -->\r\n        </div>\r\n        <!-- End Comments content -->\r\n      </article>\r\n  </div>\r\n  <!-- End Wrapper-->\r\n\r\n  <!-- Footer-->\r\n  <footer class=\"w-full flex justify-center flex-col py-4 text-center mt-14\">\r\n    <p class=\"mb-1\">\r\n      Built by\r\n      <a class=\"font-medium underline\" href=\"https://codepen.io/frankuxui\">\r\n        Frank Esteban</a>\r\n    </p>\r\n    <p class=\"dark:text-white mb-3\">\r\n      Contact me on the different platforms and social networks\r\n    </p>\r\n    <div class=\"flex items-center justify-center\">\r\n      <a class=\"w-12 h-12 flex justify-center items-center rounded-full hover:bg-slate-300 transition dark:hover:bg-slate-800 dark:text-white\"\r\n        href=\"https://codepen.io/frankuxui\" target=\"__blank\">\r\n        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"\r\n          version=\"1.1\" viewBox=\"0 0 24 24\">\r\n          <path fill=\"currentColor\"\r\n            d=\"M8.21 12L6.88 12.89V11.11L8.21 12M11.47 9.82V7.34L7.31 10.12L9.16 11.36L11.47 9.82M16.7 10.12L12.53 7.34V9.82L14.84 11.36L16.7 10.12M7.31 13.88L11.47 16.66V14.18L9.16 12.64L7.31 13.88M12.53 14.18V16.66L16.7 13.88L14.84 12.64L12.53 14.18M12 10.74L10.12 12L12 13.26L13.88 12L12 10.74M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12M18.18 10.12C18.18 10.09 18.18 10.07 18.18 10.05L18.17 10L18.17 10L18.16 9.95C18.15 9.94 18.15 9.93 18.14 9.91L18.13 9.89L18.11 9.85L18.1 9.83L18.08 9.8L18.06 9.77L18.03 9.74L18 9.72L18 9.7L17.96 9.68L17.95 9.67L12.3 5.91C12.12 5.79 11.89 5.79 11.71 5.91L6.05 9.67L6.05 9.68L6 9.7C6 9.71 6 9.72 6 9.72L5.97 9.74L5.94 9.77L5.93 9.8L5.9 9.83L5.89 9.85L5.87 9.89L5.86 9.91L5.84 9.95L5.84 10L5.83 10L5.82 10.05C5.82 10.07 5.82 10.09 5.82 10.12V13.88C5.82 13.91 5.82 13.93 5.82 13.95L5.83 14L5.84 14L5.84 14.05C5.85 14.06 5.85 14.07 5.86 14.09L5.87 14.11L5.89 14.15L5.9 14.17L5.92 14.2L5.94 14.23C5.95 14.24 5.96 14.25 5.97 14.26L6 14.28L6 14.3L6.04 14.32L6.05 14.33L11.71 18.1C11.79 18.16 11.9 18.18 12 18.18C12.1 18.18 12.21 18.15 12.3 18.1L17.95 14.33L17.96 14.32L18 14.3L18 14.28L18.03 14.26L18.06 14.23L18.08 14.2L18.1 14.17L18.11 14.15L18.13 14.11L18.14 14.09L18.16 14.05L18.16 14L18.17 14L18.18 13.95C18.18 13.93 18.18 13.91 18.18 13.88V10.12M17.12 12.89V11.11L15.79 12L17.12 12.89Z\">\r\n          </path>\r\n        </svg>\r\n      </a>\r\n      <a class=\"w-12 h-12 flex justify-center items-center rounded-full hover:bg-slate-300 transition dark:hover:bg-slate-800 dark:text-white\"\r\n        href=\"https://codesandbox.io/u/frankuxui\" target=\"__blank\">\r\n        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"\r\n          version=\"1.1\" viewBox=\"0 0 24 24\">\r\n          <path fill=\"currentColor\"\r\n            d=\"M2 6l10.455-6L22.91 6 23 17.95 12.455 24 2 18V6zm2.088 2.481v4.757l3.345 1.86v3.516l3.972 2.296v-8.272L4.088 8.481zm16.739 0l-7.317 4.157v8.272l3.972-2.296V15.1l3.345-1.861V8.48zM5.134 6.601l7.303 4.144 7.32-4.18-3.871-2.197-3.41 1.945-3.43-1.968L5.133 6.6z\">\r\n          </path>\r\n        </svg>\r\n      </a>\r\n      <a class=\"w-12 h-12 flex justify-center items-center rounded-full hover:bg-slate-300 transition dark:hover:bg-slate-800 dark:text-white\"\r\n        href=\"https://github.com/frankuxui\" target=\"__blank\">\r\n        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"\r\n          version=\"1.1\" viewBox=\"0 0 24 24\">\r\n          <path fill=\"currentColor\"\r\n            d=\"M12,2A10,10 0 0,0 2,12C2,16.42 4.87,20.17 8.84,21.5C9.34,21.58 9.5,21.27 9.5,21C9.5,20.77 9.5,20.14 9.5,19.31C6.73,19.91 6.14,17.97 6.14,17.97C5.68,16.81 5.03,16.5 5.03,16.5C4.12,15.88 5.1,15.9 5.1,15.9C6.1,15.97 6.63,16.93 6.63,16.93C7.5,18.45 8.97,18 9.54,17.76C9.63,17.11 9.89,16.67 10.17,16.42C7.95,16.17 5.62,15.31 5.62,11.5C5.62,10.39 6,9.5 6.65,8.79C6.55,8.54 6.2,7.5 6.75,6.15C6.75,6.15 7.59,5.88 9.5,7.17C10.29,6.95 11.15,6.84 12,6.84C12.85,6.84 13.71,6.95 14.5,7.17C16.41,5.88 17.25,6.15 17.25,6.15C17.8,7.5 17.45,8.54 17.35,8.79C18,9.5 18.38,10.39 18.38,11.5C18.38,15.32 16.04,16.16 13.81,16.41C14.17,16.72 14.5,17.33 14.5,18.26C14.5,19.6 14.5,20.68 14.5,21C14.5,21.27 14.66,21.59 15.17,21.5C19.14,20.16 22,16.42 22,12A10,10 0 0,0 12,2Z\">\r\n          </path>\r\n        </svg>\r\n      </a>\r\n      <a class=\"w-12 h-12 flex justify-center items-center rounded-full hover:bg-slate-300 transition dark:hover:bg-slate-800 dark:text-white\"\r\n        href=\"https://twitter.com/frankuxui\" target=\"__blank\">\r\n        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"\r\n          version=\"1.1\" viewBox=\"0 0 24 24\">\r\n          <path fill=\"currentColor\"\r\n            d=\"M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z\">\r\n          </path>\r\n        </svg>\r\n      </a>\r\n      <a class=\"w-12 h-12 flex justify-center items-center rounded-full hover:bg-slate-300 transition dark:hover:bg-slate-800 dark:text-white\"\r\n        href=\"https://dribbble.com/frankuxui\" target=\"__blank\">\r\n        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"\r\n          version=\"1.1\" viewBox=\"0 0 24 24\">\r\n          <path fill=\"currentColor\"\r\n            d=\"M13.01 13.188c.617 1.613 1.072 3.273 1.361 4.973-2.232.861-4.635.444-6.428-.955 1.313-2.058 2.989-3.398 5.067-4.018zm-.53-1.286c-.143-.32-.291-.638-.447-.955-1.853.584-4.068.879-6.633.883l-.01.17c0 1.604.576 3.077 1.531 4.223 1.448-2.173 3.306-3.616 5.559-4.321zm-3.462-5.792c-1.698.863-2.969 2.434-3.432 4.325 2.236-.016 4.17-.261 5.791-.737-.686-1.229-1.471-2.426-2.359-3.588zm7.011.663c-1.117-.862-2.511-1.382-4.029-1.382-.561 0-1.102.078-1.621.21.873 1.174 1.648 2.384 2.326 3.625 1.412-.598 2.52-1.417 3.324-2.453zm7.971-1.773v14c0 2.761-2.238 5-5 5h-14c-2.762 0-5-2.239-5-5v-14c0-2.761 2.238-5 5-5h14c2.762 0 5 2.239 5 5zm-4 7c0-4.418-3.582-8-8-8s-8 3.582-8 8 3.582 8 8 8 8-3.582 8-8zm-6.656-1.542c.18.371.348.745.512 1.12 1.439-.248 3.018-.233 4.734.049-.084-1.478-.648-2.827-1.547-3.89-.922 1.149-2.16 2.055-3.699 2.721zm1.045 2.437c.559 1.496.988 3.03 1.279 4.598 1.5-1.005 2.561-2.61 2.854-4.467-1.506-.261-2.883-.307-4.133-.131z\">\r\n          </path>\r\n        </svg>\r\n      </a>\r\n    </div>\r\n  </footer>', 'Tailwind', 'published', '2023-09-26 03:33:46', '2023-10-02 13:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int NOT NULL DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Testing', 'testing@gmail.com', 'testtest', NULL, 2, 'inactive', '2023-09-26 02:15:02', '2023-10-02 13:54:30'),
(2, 'Codeverse', 'codeverse@gmail.com', '$2y$10$TaIotWNdtqha9miOwgMQK.M5Soat73APm271SfgBN4XlphpiADWHq', '16957098457811.jpg', 2, 'active', '2023-09-26 02:54:53', '2023-09-26 03:30:45'),
(3, 'snickerdoo', 'danysmo12353535@gmail.com', '$2y$10$HcEf3ICwWfMDKkYU1YVQgut/pf7D/8W.GdPOWg9E8cbvhDx//igYW', NULL, 0, 'active', '2023-10-17 03:57:01', '2023-10-17 03:57:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `snippets`
--
ALTER TABLE `snippets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `snippets_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `snippets`
--
ALTER TABLE `snippets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `snippets`
--
ALTER TABLE `snippets`
  ADD CONSTRAINT `snippets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
