-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 19 2023 г., 04:37
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lara_breeze`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `journal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `name`, `surname`, `title`, `journal`, `page`, `created_at`, `updated_at`) VALUES
(1, 'Ольга 123', 'Агеева', 'Как Сибирячок весну встречал', 'Сибирячок 2-2008', '14-15 стр.', NULL, '2023-05-14 18:22:29'),
(2, 'Еле1', 'Анохина', 'Чудо-чадо', 'Сибирячок 2016-2', '26-27', NULL, '2023-04-05 09:43:23'),
(10, 'Авдеева-Полевая Е.', 'sqrf', 'Царь-девица', 'Сибирячок 2009-3', '22-23', NULL, '2023-01-23 01:34:16'),
(11, 'Авенариус В.', '', 'В родном гнезде', 'Сибирячок 2009-2', '8 - 11 с', NULL, NULL),
(12, 'Аверченко А.', '', 'Экзаменационная задача', 'Сибирячок 2011-2', '15-17', NULL, NULL),
(13, 'Агеева О.', '', 'Как Сибирячок весну встречал', 'Сибирячок 2008-2', '14-15', NULL, NULL),
(14, 'Агеева О.', '', 'На горе стоят качели', 'Сибирячок 2008-4', '16', NULL, NULL),
(15, 'Агеева С.Н.', '', 'Для чего кабарге клыки', 'Сибирячок 2007-3', '18-20', NULL, NULL),
(16, 'Агеева С.Н.', '', 'Таежный чай', 'Сибирячок 2006-6', '28', NULL, NULL),
(17, 'Агеева С.Н.', '', 'Загадка весны', 'Сибирячок 2006-2', '28-29', NULL, NULL),
(18, 'Агеева С.Н.', '', 'Как выдра спасла утят', 'Сибирячок 2008-3', '28-29', NULL, NULL),
(19, 'Агеева С.Н.', '', 'О том, как сорока на лису обиделась', 'Сибирячок 2008-6', '18-21', NULL, NULL),
(20, 'Аким Я.Л.', '', 'Моя родня', 'Сибирячок 2008-4', '1', NULL, NULL),
(21, 'Аксёнова О.', '', 'Девочка Аныс', 'Сибирячок 2014-6', '24-25', NULL, NULL),
(22, 'Алексеев С.', '', 'Сказка старого капрала', 'Сибирячок 2012-1', '8-9с.', NULL, NULL),
(23, 'Алексеев С.', '', 'Новая должность', 'Сибирячок 2012-1', '10-11 с.', NULL, NULL),
(24, 'Алексеев С.', '', 'Фили', 'Сибирячок 2012-1', '12-13 с.', NULL, NULL),
(25, 'Алексеев С.', '', 'Тарутино', 'Сибирячок 2012-1', '13-14', NULL, NULL),
(26, 'Алтаузен Д.', '', 'Родина только одна', 'Сибирячок 2012-2', '5', NULL, NULL),
(27, 'Андреев Л.', '', 'Петька на даче', 'Сибирячок 2011-4', '5-9 с.', NULL, NULL),
(28, 'Андрейчук А.', '', 'Щенок', 'Сибирячок 2015-3', '13', NULL, NULL),
(29, 'Анина С.', '', 'Страх. Песенка. Тапки. У моей сестрёнки', 'Сибирячок 2006-2', '4 1 6 9', NULL, NULL),
(30, 'Анина С.', '', 'Картошка. Уши. Крошка. Мышонок. Расчёска', 'Сибирячок 2006-5', '12', NULL, NULL),
(31, 'Анина С.', '', 'Незнакомец. Белым-бело', 'Сибирячок 2009-6', '26', NULL, NULL),
(32, 'Анина С.', '', 'Жизнелюб', 'Сибирячок 2012-3', '25', NULL, NULL),
(33, 'Анина С.', '', 'Душа', 'Сибирячок 2008-5', '24-25', NULL, NULL),
(34, 'Анищенко И.', '', 'Ёлка', 'Сибирячок 2016-6', '20-21', NULL, NULL),
(35, 'Анохина Е. С.', '', 'Чудо-чадо', 'Сибирячок 2016-2', '26-27', NULL, NULL),
(36, 'Анохина Е.С.', '', 'Карусели. Обиняки', 'Сибирячок 2008-3', '22-23', NULL, NULL),
(37, 'Анохина Е.С.', '', 'Добрый пёс. Чистая правда', 'Сибирячок 2009-6', '20-21', NULL, NULL),
(38, 'Анохина Е.С.', '', 'Заразили', 'Сибирячок 2011-6', '27', NULL, NULL),
(39, 'Анохина Е.С.', '', 'Знакомая картина', 'Сибирячок 2011-6', '27', NULL, NULL),
(40, 'Анохина Е.С.', '', 'Я рисую маму', 'Сибирячок 2012-3', '24', NULL, NULL),
(41, 'Анохина Е.С.', '', 'Лужас', 'Сибирячок 2013-3', '38', NULL, NULL),
(42, 'Анохина Е.С.', '', 'Великолепный дуэт. Пополам', 'Сибирячок 2014-3', '24-25', NULL, NULL),
(43, 'Анохина Е.С.', '', 'В гости к бабушке', 'Сибирячок 2015-3', '2', NULL, NULL),
(44, 'Аношко А.', '', 'Образ первого учителя', 'Сибирячок 2014-5', '2', NULL, NULL),
(45, 'Арапова З.', '', 'Весна', 'Сибирячок 2008-2', '10', NULL, NULL),
(46, 'Артемьева Е.', '', 'Подарки от всей души', 'Сибирячок 2010-5', '26-27', NULL, NULL),
(47, 'Артемьева М.', '', 'Загадки', 'Сибирячок 2008-5', '28', NULL, NULL),
(48, 'Артемьева М.', '', 'А у нашего ежа. Варежки. Бараны. Перепел', 'Сибирячок 2009-2', '6-7с.', NULL, NULL),
(49, 'Архипкин Б.', '', 'Девочка на льду', 'Сибирячок 2008-1', '21', NULL, NULL),
(50, 'Асламова С.Н.', '', 'Земля на зёрнышке стоит. Сценарий фольклорного праздника', 'Сибирячок 2007-4', '28-31', NULL, NULL),
(51, 'Асламова С.Н.', '', 'К 200-летию М. Ю. Лермонтова (1814-1841)', 'Сибирячок 2014-3', '8-11 с.', NULL, NULL),
(52, 'Асламова С.Н.', '', 'Морская царевна', 'Сибирячок 2014-1', '14-16', NULL, NULL),
(53, 'Асламова С.Н.', '', 'Лермонтовский ангел продолжает свой полёт', 'Сибирячок 2014-1', '18-19', NULL, NULL),
(54, 'Асламова С.Н.', '', 'Иосиф Уткин', 'Сибирячок 2014-1', '19', NULL, NULL),
(55, 'Асламова С.Н.', '', 'Парус', 'Сибирячок 2014-1', '21', NULL, NULL),
(56, 'Асламова С.Н.', '', '15 лет! Полёт нормальный!', 'Сибирячок 2006-1', '2-я обл.-1', NULL, NULL),
(57, 'Асламова С.Н.', '', 'Искусство видеть мир', 'Сибирячок 2008-5', '2-я обл.', NULL, NULL),
(58, 'Асламова С.Н.', '', 'На тракторе. Кроссик', 'Сибирячок 2007-4', '26', NULL, NULL),
(59, 'Асламова С.Н.', '', 'Осенний кросворд с картинками', 'Сибирячок 2011-5', '3 обл.', NULL, NULL),
(60, 'Асламова С.Н.', '', 'Ёлка с загадками', 'Сибирячок 2014-1', '7', NULL, NULL),
(61, 'Асламова С.Н.', '', 'Как Шито-Крыто открыл \"Зверьпечать\"', 'Сибирячок 2010-5', '30-31', NULL, NULL),
(62, 'Асламова С.Н.', '', 'Параша Сибирячка', 'Сибирячок 2006-5', '30-31', NULL, NULL),
(63, 'Асламова С.Н.', '', 'Музыка красок бересты', 'Сибирячок 2010-1', '26-27', NULL, NULL),
(64, 'Асламова С.Н.', '', 'Ай, ребята, пойте - только гусли стройте!', 'Сибирячок 2014-1', '17', NULL, NULL),
(65, 'Асламова С.Н.', '', 'Казачья колыбельная песня', 'Сибирячок 2014-1', '13', NULL, NULL),
(66, 'Асламова С.Н.', '', 'Большой теремок Сибирячка', 'Сибирячок 2006-1', '10-11 с.', NULL, NULL),
(73, 'Авдеева-Полевая Е.', '1', 'Царь-девица', 'Сибирячок 2009-3', '22-23', '2023-01-23 00:30:39', '2023-01-23 00:30:39'),
(74, 'Авдеева-Полевая Е.', '1', 'Царь-девица', 'Сибирячок 2009-3', '22-23', '2023-01-23 00:31:22', '2023-01-23 00:31:22');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Благотворительная подписка', NULL, NULL),
(2, 'Индивидуальная подписка', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `children`
--

CREATE TABLE `children` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `journal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `execution` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `designers`
--

CREATE TABLE `designers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `journal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dismis`
--

CREATE TABLE `dismis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_journal` bigint(20) UNSIGNED DEFAULT NULL,
  `id_worker` bigint(20) UNSIGNED DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `id_worker` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `name`, `date`, `id_worker`, `created_at`, `updated_at`) VALUES
(1, 'Квиз', '2023-05-15 20:10:59', 1, NULL, NULL),
(2, 'Семейный клуб', '2023-05-22 15:22:24', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `event_to_journals`
--

CREATE TABLE `event_to_journals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_journal` bigint(20) UNSIGNED DEFAULT NULL,
  `id_event` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` bigint(20) UNSIGNED DEFAULT NULL,
  `is_okay` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `event_to_journals`
--

INSERT INTO `event_to_journals` (`id`, `id_journal`, `id_event`, `amount`, `is_okay`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 10, 1, NULL, NULL),
(2, 2, 1, 10, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `journals`
--

CREATE TABLE `journals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `journals`
--

INSERT INTO `journals` (`id`, `name`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Сибирячок 3-2023', 'Кол-во 4к', 100, NULL, NULL),
(2, 'Сибирячок 2-2023', 'Кол-во 4к', 100, NULL, NULL),
(3, 'Сибирячок 1-2023', 'Кол-во 4к', 100, NULL, NULL),
(4, 'Сибирячок 6-2022', 'Кол-во 4к', 100, NULL, NULL),
(5, 'Сибирячок 5-2022', 'Кол-во 4к', 100, NULL, NULL),
(6, 'Сибирячок 4-2022', 'Кол-во 4к', 100, NULL, NULL),
(7, 'Сибирячок 3-2022', 'Кол-во 4к', 100, NULL, NULL),
(8, 'Сибирячок 2-2022', 'Кол-во 4к', 100, NULL, NULL),
(9, 'Сибирячок 1-2022', 'Кол-во 4к', 100, NULL, NULL),
(10, 'Сибирячок 6-2021', 'Кол-во 4к', 100, NULL, NULL),
(11, 'Сибирячок 5-2021', 'Кол-во 4к', 100, NULL, NULL),
(12, 'Сибирячок 4-2021', 'Кол-во 4к', 100, NULL, NULL),
(13, 'Сибирячок 3-2021', 'Кол-во 4к', 100, NULL, NULL),
(14, 'Сибирячок 2-2021', 'Кол-во 4к', 100, NULL, NULL),
(15, 'Сибирячок 1-2021', 'Кол-во 4к', 100, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2014_10_12_110000_create_workers_table', 1),
(3, '2014_10_12_120000_create_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_12_23_035103_create_authors_table', 1),
(7, '2023_01_18_041202_create_designers_table', 1),
(8, '2023_01_24_032006_create_children_table', 1),
(9, '2023_05_13_053553_create_journals_table', 1),
(10, '2023_05_13_053652_create_categories_table', 1),
(11, '2023_05_13_053809_create_storerooms_table', 1),
(12, '2023_05_13_053928_create_subscribers_table', 1),
(13, '2023_05_13_053929_create_subscribs_table', 1),
(14, '2023_05_13_053954_create_solds_table', 1),
(15, '2023_05_13_054001_create_events_table', 1),
(16, '2023_05_13_054012_create_event_to_journals_table', 1),
(17, '2023_05_13_054031_create_dismis_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `solds`
--

CREATE TABLE `solds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_workers` bigint(20) UNSIGNED DEFAULT NULL,
  `id_journal` bigint(20) UNSIGNED DEFAULT NULL,
  `id_subsc` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` bigint(20) UNSIGNED DEFAULT NULL,
  `price` bigint(20) UNSIGNED DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `solds`
--

INSERT INTO `solds` (`id`, `id_workers`, `id_journal`, `id_subsc`, `amount`, `price`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 1, 100, '2023-05-14 15:20:46', NULL, NULL),
(3, 1, 2, NULL, 1, 100, '2023-05-14 15:21:53', NULL, NULL),
(4, 5, 9, 3, 1, 100, '2023-05-15 02:25:30', '2023-05-14 18:25:47', '2023-05-14 18:25:47'),
(5, 1, 1, NULL, 3, NULL, '2023-05-18 10:12:31', NULL, NULL),
(7, 1, 2, NULL, 153, NULL, NULL, NULL, NULL),
(8, 1, 9, NULL, 568, NULL, NULL, NULL, NULL),
(9, 1, 12, NULL, 58, NULL, NULL, NULL, NULL),
(10, NULL, 15, NULL, 123, NULL, NULL, NULL, NULL),
(11, NULL, 1, 3, 2, NULL, '2023-05-18 09:55:16', '2023-05-18 01:57:43', '2023-05-18 01:57:43'),
(12, NULL, 1, 3, 2, NULL, '2023-05-18 09:55:16', '2023-05-18 01:59:44', '2023-05-18 01:59:44');

-- --------------------------------------------------------

--
-- Структура таблицы `storerooms`
--

CREATE TABLE `storerooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` bigint(20) UNSIGNED DEFAULT NULL,
  `id_journal` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `storerooms`
--

INSERT INTO `storerooms` (`id`, `amount`, `id_journal`, `created_at`, `updated_at`) VALUES
(1, 2000, 1, NULL, NULL),
(2, 2000, 2, NULL, NULL),
(3, 2000, 3, NULL, NULL),
(4, 2000, 4, NULL, NULL),
(5, 2000, 5, NULL, NULL),
(6, 2000, 6, NULL, NULL),
(7, 1000, 10, NULL, NULL),
(8, 2000, 9, NULL, NULL),
(9, 2000, 12, NULL, NULL),
(10, 4000, 11, NULL, NULL),
(11, 4000, 13, NULL, NULL),
(12, 4000, 7, NULL, NULL),
(13, 4000, 8, NULL, NULL),
(14, 4000, 14, NULL, NULL),
(15, 4000, 15, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `subscribers`
--

INSERT INTO `subscribers` (`id`, `name`, `adress`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Юрий Толмаков', 'Южная 34б', '+79526125545', 'yrjh@mail.ru', NULL, NULL),
(2, 'Петр Некифоров', '4247 Nibh Ave', '+7 914 8476 67 23', 'lacus.aliquam@icloud.com', NULL, '2023-05-13 22:58:47'),
(3, 'Kim Anthony', '531-4579 Sem Avenue', '+7 951 5518 66 45', 'vulputate.posuere@hotmail.com', NULL, NULL),
(4, 'Dustin Bridges', '272-256 Vitae Rd.', '+7 925 8168 20 68', 'in.condimentum@yahoo.org', NULL, NULL),
(5, 'Dustin Bridges', '272-256 Vitae Rd.', '+7 925 8168 20 68', 'in.condimentum@yahoo.org', NULL, NULL),
(6, 'Iris Conway', 'Ap #912-7752 Felis Rd.', '+7 938 6721 17 83', 'massa.non@google.org', NULL, NULL),
(7, 'Maryam Hunter', '9815 Nam Street', '+7 956 5582 34 51', 'interdum.enim@ya.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `subscribs`
--

CREATE TABLE `subscribs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_subscribers` bigint(20) UNSIGNED DEFAULT NULL,
  `id_categories` bigint(20) UNSIGNED DEFAULT NULL,
  `id_workers` bigint(20) UNSIGNED DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `subscribs`
--

INSERT INTO `subscribs` (`id`, `id_subscribers`, `id_categories`, `id_workers`, `date_start`, `date_end`, `adress`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, '2023-02-20 15:11:20', '2023-04-22 17:59:49', 'Вампилова 256', 1, NULL, NULL),
(2, 2, 1, NULL, '2023-04-22 17:59:49', '2023-04-22 17:59:49', 'Вампилова 2', 1, NULL, NULL),
(3, 3, 2, 1, '2023-05-14 15:08:00', '2023-10-14 15:08:00', 'Забирает в редакции', 1, '2023-05-13 23:12:45', '2023-05-13 23:12:45');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_worker` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `id_worker`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Алёнин Даниил Юрьевич', 'alyonindaniil@yandex.ru', NULL, '$2y$10$pZ1WhW5eLlVmE14Nm9LUtuRu.D.liJF6jeK.0VcWckZ8najAW5sTG', 'admin', 1, NULL, '2023-05-13 22:49:25', '2023-05-14 18:28:39'),
(3, 'Давыдова Валерия', 'lera@ya.ru', NULL, '$2y$10$wD3MC9uWn4YALzMNnWqJJe6dO3KX5/fggkaxOlkF3bGn4m0OYSVL.', 'user', 4, NULL, '2023-05-14 00:58:14', '2023-05-14 00:58:14'),
(4, 'Цыганов Евгений', 'evgen@ya.ru', NULL, '$2y$10$DiY4PC7BuTejI9Kltwy8NOz7kP77/TqEXkQyuDT2mow2DDUio/Fp6', 'buh', 3, NULL, '2023-05-14 01:19:42', '2023-05-14 01:19:42'),
(5, 'Арина Озерных', 'arina@ya.ru', NULL, '$2y$10$srK1mbLspbdxg2RDad35N.RCphdotsd4wEvOgFUoBWQ.srM4i2iqW', NULL, NULL, NULL, '2023-05-14 18:25:24', '2023-05-14 18:25:24');

-- --------------------------------------------------------

--
-- Структура таблицы `workers`
--

CREATE TABLE `workers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `workers`
--

INSERT INTO `workers` (`id`, `fio`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Алёнин Даниил Юрьевич', 'Администратор', NULL, NULL),
(2, 'Тихонова Татьяна Николаевна', 'Гл. редактор', NULL, NULL),
(3, 'Цыганов Евгений Юрьевич', 'Ведущий экономист', NULL, NULL),
(4, 'Давыдова Валерия Сергеевна', 'Заместитель Главного редактора', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `designers`
--
ALTER TABLE `designers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dismis`
--
ALTER TABLE `dismis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dismiss_journal_idx` (`id_journal`),
  ADD KEY `dismiss_worker_idx` (`id_worker`);

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscrip_worker_idx` (`id_worker`);

--
-- Индексы таблицы `event_to_journals`
--
ALTER TABLE `event_to_journals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_journal_idx` (`id_journal`),
  ADD KEY `journal_event_idx` (`id_event`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `solds`
--
ALTER TABLE `solds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solds_id_workers_foreign` (`id_workers`),
  ADD KEY `solds_journal_idx` (`id_journal`),
  ADD KEY `solds_subscrips_idx` (`id_subsc`);

--
-- Индексы таблицы `storerooms`
--
ALTER TABLE `storerooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `storeroom_journal_idx` (`id_journal`);

--
-- Индексы таблицы `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscribs`
--
ALTER TABLE `subscribs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscrip_subscribers_idx` (`id_subscribers`),
  ADD KEY `subscrip_categories_idx` (`id_categories`),
  ADD KEY `subscrip_workers_idx` (`id_workers`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `user_worker_idx` (`id_worker`);

--
-- Индексы таблицы `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `children`
--
ALTER TABLE `children`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `designers`
--
ALTER TABLE `designers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dismis`
--
ALTER TABLE `dismis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `event_to_journals`
--
ALTER TABLE `event_to_journals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `journals`
--
ALTER TABLE `journals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `solds`
--
ALTER TABLE `solds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `storerooms`
--
ALTER TABLE `storerooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `subscribs`
--
ALTER TABLE `subscribs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `workers`
--
ALTER TABLE `workers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `dismis`
--
ALTER TABLE `dismis`
  ADD CONSTRAINT `dismiss_journal_fk` FOREIGN KEY (`id_journal`) REFERENCES `journals` (`id`),
  ADD CONSTRAINT `dismiss_worker_fk` FOREIGN KEY (`id_worker`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `subscrip_worker_fk` FOREIGN KEY (`id_worker`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `event_to_journals`
--
ALTER TABLE `event_to_journals`
  ADD CONSTRAINT `event_journal_fk` FOREIGN KEY (`id_journal`) REFERENCES `journals` (`id`),
  ADD CONSTRAINT `journal_event_fk` FOREIGN KEY (`id_event`) REFERENCES `events` (`id`);

--
-- Ограничения внешнего ключа таблицы `solds`
--
ALTER TABLE `solds`
  ADD CONSTRAINT `solds_id_workers_foreign` FOREIGN KEY (`id_workers`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `solds_journal_fk` FOREIGN KEY (`id_journal`) REFERENCES `journals` (`id`),
  ADD CONSTRAINT `solds_subscrips_fk` FOREIGN KEY (`id_subsc`) REFERENCES `subscribs` (`id`);

--
-- Ограничения внешнего ключа таблицы `storerooms`
--
ALTER TABLE `storerooms`
  ADD CONSTRAINT `storeroom_journal_fk` FOREIGN KEY (`id_journal`) REFERENCES `journals` (`id`);

--
-- Ограничения внешнего ключа таблицы `subscribs`
--
ALTER TABLE `subscribs`
  ADD CONSTRAINT `subscrip_categories_fk` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subscrip_subscribers_fk` FOREIGN KEY (`id_subscribers`) REFERENCES `subscribers` (`id`),
  ADD CONSTRAINT `subscrip_workers_fk` FOREIGN KEY (`id_workers`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_worker_fk` FOREIGN KEY (`id_worker`) REFERENCES `workers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
