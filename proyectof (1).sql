-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2024 a las 20:12:22
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectof`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(127) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(127) NOT NULL,
  `lname` varchar(127) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `fname`, `lname`) VALUES
(1, 'elias', '$2y$10$H7obJEdmLzqqcPy7wQWhsOLUvrgzC8f1Y1or2Gxaza5z1PT0tvLy6', 'Elias', 'Abdurrahman');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE `asistencias` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `grade` varchar(50) NOT NULL,
  `asistencia` tinyint(1) DEFAULT 1,
  `no_asistencia` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asistencias`
--

INSERT INTO `asistencias` (`id`, `student_id`, `fecha`, `grade`, `asistencia`, `no_asistencia`) VALUES
(20, 5, '2024-11-28', '2', 0, 0),
(21, 5, '2024-11-28', '2', 0, 0),
(22, 5, '2024-11-28', '2', 0, 0),
(23, 5, '2024-11-28', '2', 0, 0),
(24, 8, '2024-11-28', '1', 0, 0),
(25, 9, '2024-11-28', '2', 0, 0),
(26, 10, '2024-11-28', '2', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grades`
--

CREATE TABLE `grades` (
  `grade_id` int(11) NOT NULL,
  `grade` varchar(31) NOT NULL,
  `grade_code` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grades`
--

INSERT INTO `grades` (`grade_id`, `grade`, `grade_code`) VALUES
(1, '101', '1'),
(2, '102', '1'),
(3, '201', '2'),
(4, '202', '2'),
(6, '301', '3'),
(7, '302', '3'),
(8, '401', '4'),
(9, '402', '4'),
(10, '501', '5'),
(11, '502', '5'),
(12, '601', '6'),
(13, '602', '6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `section` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `section`
--

INSERT INTO `section` (`section_id`, `section`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `username` varchar(127) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(127) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `grade` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `address` varchar(31) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_joined` timestamp NULL DEFAULT current_timestamp(),
  `parent_fname` varchar(127) NOT NULL,
  `parent_lname` varchar(127) NOT NULL,
  `parent_phone_number` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`student_id`, `username`, `password`, `fname`, `lname`, `grade`, `section`, `address`, `gender`, `email_address`, `date_of_birth`, `date_of_joined`, `parent_fname`, `parent_lname`, `parent_phone_number`) VALUES
(5, 'brayan', '$2y$10$JLB0QCrQqTAtksKCAkDiRu2CKxftJmV4jkpoGhFtuFWyY7MPSPFFe', 'Brayan', 'Mota', 2, 1, 'Berlin', 'Male', 'mot@mo.com', '2002-12-03', '2021-12-02 03:35:26', 'Doe', 'Mark', '09393'),
(8, 'wilo', '$2y$10$LPt3OKiMqxDAdPYryx8NzegjeYAUk6PCcnYcFLMffUR1d2v5O5HJ6', 'Juan Luis', 'Muciño', 1, 1, 'zinacantepec', 'Male', 'golosa69@gmail.com', '2006-06-14', '2024-11-08 20:29:06', 'Brayan', 'Mota', '012178454848'),
(9, 'chris', '$2y$10$Dbg9GEcs3buY/FSUaDjUEe2.f1pDsYojTdnHWXuWhMwh8a84oS7vy', 'christopher', 'nieto', 2, 1, 'zinacantepec', 'Male', 'bdhjbhb@gmail.com', '2007-05-01', '2024-11-10 23:54:10', 'maria', 'nieto', '5487021446444'),
(10, 'alex', '$2y$10$1EucjyoeR5jKCqE4yxjwzOq7wvlFOF29bb9ez6BxLQEBuvcPRXooW', 'alejandro', 'bernal', 2, 1, 'zinacantepec', 'Male', 'bxgsyugds@gmail.com', '2024-11-06', '2024-11-10 23:55:18', 'Mark', 'Doe', '4841215484');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subjects`
--

CREATE TABLE `subjects` (
  `materia_id` int(11) NOT NULL,
  `materia` varchar(31) NOT NULL,
  `materia_code` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `subjects`
--

INSERT INTO `subjects` (`materia_id`, `materia`, `materia_code`) VALUES
(3, 'Ingles V', 'Ing'),
(4, 'Fisica II', 'FSC'),
(5, 'Programacion', 'PO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `username` varchar(127) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(127) NOT NULL,
  `lname` varchar(127) NOT NULL,
  `subjects` varchar(31) NOT NULL,
  `grades` varchar(31) NOT NULL,
  `section` varchar(31) NOT NULL,
  `address` varchar(31) NOT NULL,
  `employee_number` int(11) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone_number` varchar(31) NOT NULL,
  `qualification` varchar(127) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email_address` varchar(256) NOT NULL,
  `date_of_joined` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `username`, `password`, `fname`, `lname`, `subjects`, `grades`, `section`, `address`, `employee_number`, `date_of_birth`, `phone_number`, `qualification`, `gender`, `email_address`, `date_of_joined`) VALUES
(1, 'oliver', '$2y$10$sHUKkZ3TVtLO4jcGCTDMgeOFx8Frq8OC58gjlY/LXPISsVC2DE6my', 'Oliver', 'Noah', '3', '1', '2', 'California, Los angeles', 97679, '2007-05-10', '094573990565', 'BSc', 'Male', 'oliver123@ol.com', '2024-10-03 21:33:09'),
(3, 'maritzalilandra', '$2y$10$Ou9vjFtpKbfJcQYbkic7GOAJ1ozhHc8EJtId.uMfhwXAWow5oN3mi', 'Maritza', 'Hernandez', '5', '1', '12', 'USA', 1929, '2000-01-10', '094573990565', 'BSc', 'Female', 'maritza145@gmail.com', '2024-10-03 21:33:09'),
(12, 'abas', '$2y$10$GpLI.2E9BLxPEc.QyM7g9uhgfAZh7N3N2P6hhaFp.dujsuLslwKZC', 'Abas', 'abs', '1', '12', '234', 'Berlin', 1929, '2014-02-09', '094573990565', 'BSc', 'Male', 'abas@ab.com', '2024-10-09 20:45:51'),
(14, 'luisdominguez', '$2y$10$hvGgBILu8XjW9zauCx4/weasyYb8BTh4EDJo/D.eXcZytT807cREG', 'luis', 'dominguez', '2', '2', '1', 'zinacantepec', 234, '2024-09-04', '1234567890', 'B', 'Male', 'luisdomin@h.com', '2024-10-10 14:22:25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indices de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indices de la tabla `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indices de la tabla `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`materia_id`);

--
-- Indices de la tabla `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `grades`
--
ALTER TABLE `grades`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `subjects`
--
ALTER TABLE `subjects`
  MODIFY `materia_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
