
CREATE TABLE `department` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `factory_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension_m2` int(11) NOT NULL,
  `number_employees` int(11) NOT NULL,
  `responsible` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `department`
--

INSERT INTO `department` (`id`, `name`, `factory_id`, `type`, `extension_m2`, `number_employees`, `responsible`) VALUES
(1, 'INCOMING MATERIAL', 0, '', 0, 0, ''),
(2, 'PACKING AND SHIPPING', 0, '', 0, 0, ''),
(3, 'CUTTING', 0, '', 0, 0, ''),
(4, 'MILLING', 0, '', 0, 0, ''),
(5, 'PLANING', 0, '', 0, 0, ''),
(6, 'SANDING AND POLISHING', 0, '', 0, 0, ''),
(7, 'DRILLING', 0, '', 0, 0, ''),
(8, 'ASSEMBLY', 0, '', 0, 0, ''),
(9, 'DRYING', 0, '', 0, 0, ''),
(10, 'SPRAY FINISHING', 0, '', 0, 0, ''),
(11, 'STOCK', 0, '', 0, 0, ''),
(12, 'CLEANING', 0, '', 0, 0, ''),
(13, 'QUALITY CONTROL', 0, '', 0, 0, ''),
(14, 'REPAIR CENTER', 0, '', 0, 0, ''),
(15, 'MEANS OF TRANSPORT', 0, '', 0, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `input`
--

CREATE TABLE `input` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `input`
--

INSERT INTO `input` (`id`, `type`, `description`, `task_id`) VALUES
(1, 'RAW MATERIAL', 'Walden wood boards', 2),
(2, 'RAW MATERIAL', 'Wooden boards', 12),
(3, 'RAW MATERIAL', 'Cherry wood', 22),
(4, 'ASSEMBLY', 'Assembled chair', 7),
(5, 'ASSEMBLY', 'Assembled door', 17),
(6, 'ASSEMBLY', 'Assembled desk', 27),
(7, 'RAW MATERIAL', 'Wooden boards and leather', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `machine`
--

CREATE TABLE `machine` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `line_id` int(10) UNSIGNED NOT NULL,
  `cell_id` int(10) UNSIGNED NOT NULL,
  `dimension_m2` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `machine`
--

INSERT INTO `machine` (`id`, `department_id`, `line_id`, `cell_id`, `dimension_m2`, `weight`, `name`, `type`, `description`) VALUES
(1, 1, 0, 0, 0, 0, 'LIFTER 1', '', ''),
(2, 2, 0, 0, 0, 0, 'PACKING MACHINE 1', '', ''),
(3, 4, 0, 0, 0, 0, 'SPINDLE MOULDER', '', ''),
(4, 4, 0, 0, 0, 0, 'MILLING MACHINE', '', ''),
(5, 12, 0, 0, 0, 0, 'DUST COLLECTOR', '', ''),
(6, 3, 0, 0, 0, 0, 'PRECISION SAW MACHINE', '', ''),
(7, 4, 0, 0, 0, 0, 'SINK MACHINE', '', ''),
(8, 5, 0, 0, 0, 0, 'PLANER MOULDER', '', ''),
(9, 6, 0, 0, 0, 0, 'SANDING MACHINE 1', '', ''),
(10, 6, 0, 0, 0, 0, 'POLISH MACHINE 1', '', ''),
(11, 6, 0, 0, 0, 0, 'SANDING MACHINE 2', '', ''),
(12, 6, 0, 0, 0, 0, 'POLISH MACHINE 2', '', ''),
(13, 6, 0, 0, 0, 0, 'GRINDING MACHINE', '', ''),
(14, 7, 0, 0, 0, 0, 'DRILLING MACHINE 1', '', ''),
(15, 7, 0, 0, 0, 0, 'DRILLING MACHINE 2', '', ''),
(16, 8, 0, 0, 0, 0, 'GLUE SPREADER', '', ''),
(17, 8, 0, 0, 0, 0, 'ASSEMBLY MACHINE 1', '', ''),
(18, 8, 0, 0, 0, 0, 'ASSEMBLY MACHINE 2', '', ''),
(19, 8, 0, 0, 0, 0, 'ASSEMBLY PRESS', '', ''),
(20, 8, 0, 0, 0, 0, 'GLUING MACHINE', '', ''),
(21, 9, 0, 0, 0, 0, 'DRYING MACHINE 1', '', ''),
(22, 9, 0, 0, 0, 0, 'DRYING MACHINE 2', '', ''),
(23, 10, 0, 0, 0, 0, 'SANDING MACHINE', '', ''),
(24, 10, 0, 0, 0, 0, 'SPRAY MACHINE', '', ''),
(25, 11, 0, 0, 0, 0, 'LIFTER 2', '', ''),
(26, 15, 0, 0, 0, 0, 'TRUCK 1', '', ''),
(27, 15, 0, 0, 0, 0, 'TRUCK 2', '', ''),
(28, 15, 0, 0, 0, 0, 'TRUCK 3', '', ''),
(29, 2, 0, 0, 0, 0, 'PACKING MACHINE 2', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(22, '2014_10_12_000000_create_users_table', 1),
(23, '2014_10_12_100000_create_password_resets_table', 1),
(24, '2017_11_27_160217_table_tooling', 1),
(25, '2017_11_27_160721_table_task', 1),
(26, '2017_11_27_161601_table_process', 1),
(27, '2017_11_27_161911_table_output', 1),
(28, '2017_11_27_162310_table_operations', 1),
(29, '2017_11_27_163151_table_machine', 1),
(30, '2017_11_27_163630_input', 1),
(31, '2017_11_27_163945_department', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operations`
--

CREATE TABLE `operations` (
  `id` int(10) UNSIGNED NOT NULL,
  `program_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cutter_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos_mag` int(11) NOT NULL,
  `z_min` double NOT NULL,
  `work_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos_table` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `step_xy` double NOT NULL,
  `step_z` double NOT NULL,
  `profile_offset` double NOT NULL,
  `sgross_offset` double NOT NULL,
  `plane_offset` double NOT NULL,
  `rpm` int(11) NOT NULL,
  `ava` int(11) NOT NULL,
  `task_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `output`
--

CREATE TABLE `output` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `output`
--

INSERT INTO `output` (`id`, `type`, `description`, `task_id`) VALUES
(1, 'ASSEMBLY', 'Assembled chair', 6),
(2, 'ASSEMBLY', 'Assembled door', 16),
(3, 'ASSEMBLY', 'Assembled desk', 26),
(4, 'PACKED PRODUCT', 'Packed chair', 10),
(5, 'PACKED PRODUCT', 'Packed door', 20),
(6, 'PACKED PRODUCT', 'Packed desk', 30),
(7, 'RAW MATERIAL', 'Acquired wooden boards and leather', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `process`
--

CREATE TABLE `process` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` date NOT NULL,
  `end_Time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `process`
--

INSERT INTO `process` (`id`, `name`, `start_time`, `end_Time`) VALUES
(1, 'CHAIR WITH ARMRESTS', '2017-05-01', '2017-05-16'),
(2, 'SLIDING DOOR', '2017-04-20', '2017-04-30'),
(3, 'WRITING DESK', '2017-05-16', '2017-05-30'),
(4, 'DINING TABLE', '2017-06-01', '2017-06-14'),
(5, 'Prueba edited', '2017-11-30', '2017-11-30'),
(6, 'prueba session', '2017-11-29', '2017-11-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `task`
--

CREATE TABLE `task` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL,
  `setup` double(9,4) NOT NULL,
  `cycletime` double(9,4) NOT NULL,
  `process_id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `machine_id` int(10) UNSIGNED NOT NULL,
  `tooling_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `task`
--

INSERT INTO `task` (`id`, `name`, `description`, `start_time`, `end_time`, `setup`, `cycletime`, `process_id`, `department_id`, `machine_id`, `tooling_id`) VALUES
(1, 'Acquiring wooden boards and leather edited', 'Acquisition of raw material from the relative department <span style=\"background-color: rgb(255, 255, 0);\">EDITED</span>', '2017-05-01', '2017-05-01', 1.0000, 20.0000, 1, 1, 1, 17),
(2, 'Seat, back, armrests and legs cutting', 'Cutting of the components of the chair from the raw material', '2017-05-02', '2017-05-04', 3.0000, 120.7000, 1, 3, 4, 1),
(3, 'Parts planing', 'Planing of the component previously cutted', '2017-05-05', '2017-05-06', 2.0000, 75.0000, 1, 5, 8, 4),
(4, 'Polishing of seat, back, armrests and legs', '', '2017-05-08', '2017-05-09', 4.0000, 200.0000, 1, 6, 10, 14),
(5, 'Drilling of the seat and the back', '', '2017-05-07', '2017-05-08', 1.5000, 130.0000, 1, 7, 14, 9),
(6, 'Assembly of the parts', 'Assemblying of the components previously drilled and polished', '2017-05-09', '2017-05-10', 5.5000, 180.0000, 1, 8, 17, 12),
(7, 'Spray finishing of the assembled product', 'Coating of the assembled product with spray finish', '2017-05-10', '2017-05-11', 4.2000, 250.5000, 1, 10, 24, 15),
(8, 'Drying and cleaning of the product', 'Operations to dry and clean the finished chair', '2017-05-12', '2017-05-14', 5.5000, 300.0000, 1, 9, 22, 19),
(9, 'Quality control of the chair', '', '2017-05-14', '2017-05-15', 0.0000, 0.0000, 1, 13, 0, 0),
(10, 'Packing and shipping of the chair', '', '2017-05-15', '2017-05-16', 2.0000, 140.0000, 1, 2, 29, 0),
(11, 'Acquiring wooden boards and metal details', 'Acquisition of raw material from the relative department', '2017-05-20', '2017-04-20', 1.0000, 10.0000, 2, 1, 1, 0),
(12, 'Doors cutting', 'Cutting of the components of the door from the raw material', '2017-04-21', '2017-04-21', 3.5000, 140.0000, 2, 3, 3, 3),
(13, 'Parts milling', 'Sawmilling of the component previously cutted', '2017-04-22', '2017-04-23', 1.5000, 175.0000, 2, 4, 4, 3),
(14, 'Polishing of doors', '', '2017-04-23', '2017-04-25', 2.3000, 110.0000, 2, 6, 12, 0),
(15, 'Drilling of the holes for the handle and the spind', '', '2017-04-25', '2017-04-26', 1.5000, 160.0000, 2, 7, 14, 9),
(16, 'Assembly of the handle and the pins', '', '2017-04-26', '2017-04-26', 2.5000, 80.0000, 2, 8, 19, 10),
(17, 'Spray finishing of the product', 'Coating of the product with spray finish', '2017-04-27', '2017-04-28', 2.0000, 150.6000, 2, 10, 0, 15),
(18, 'Drying and cleaning of the door', 'Operations to dry and clean the finished door', '2017-04-28', '2017-04-28', 4.7000, 50.0000, 2, 9, 21, 17),
(19, 'Quality control of the sliding door', '', '2017-04-29', '2017-04-30', 0.0000, 0.0000, 2, 13, 0, 0),
(20, 'Packing and shipping of the door', '', '2017-04-30', '2017-04-30', 3.0000, 80.0000, 2, 2, 2, 2),
(21, 'Acquiring wood', 'Acquisition of raw material from the relative department', '2017-05-16', '2017-05-16', 1.0000, 5.5000, 3, 1, 1, 0),
(22, 'Cutting of the table and the legs of the desk', 'Cutting of the components of the desk from the raw material', '2017-05-17', '2017-05-18', 3.5000, 140.0000, 3, 3, 3, 3),
(23, 'Parts planing', 'Planing of the component previously cutted', '2017-05-18', '2017-05-19', 1.5000, 156.0000, 3, 4, 3, 5),
(24, 'Polishing of table and legs', '', '2017-05-19', '2017-05-20', 2.7000, 110.0000, 3, 6, 12, 0),
(25, 'Drilling of the holes for the assebly operations', '', '2017-05-21', '2017-05-21', 1.5000, 160.0000, 3, 7, 14, 9),
(26, 'Assembly of the desk and the legs', 'Mounting the table of the desk above the legs', '2017-05-22', '2017-05-23', 2.5000, 80.0000, 3, 8, 16, 18),
(27, 'Spray finishing of the product', 'Coating of the product with spray finish', '2017-05-23', '2017-05-25', 2.0000, 140.0000, 3, 10, 0, 14),
(28, 'Cleaning of the desk', 'Operations to clean the finished desk', '2017-05-26', '2017-05-28', 4.7000, 59.0000, 3, 12, 5, 17),
(29, 'Quality control of the writing desk', '', '2017-05-29', '2017-05-29', 0.0000, 0.0000, 3, 13, 0, 0),
(30, 'Packing and shipping of desk', 'Operations to pack and send the product', '2017-05-30', '2017-05-30', 4.9000, 110.0000, 3, 2, 29, 0),
(31, 'Prueba final', '<p>esto es unaprueba</p>', '2017-11-30', '2017-12-03', 4.5000, 3.5000, 1, 10, 15, 16),
(32, 'Acquiring wooden boards and leather Edited', 'Acquisition of raw material from the relative department Edited', '2017-05-01', '2017-05-01', 1.0000, 20.0000, 1, 1, 1, 17),
(33, 'Acquiring wooden boards and leather edited', 'Acquisition of raw material from the relative department <span style=\"background-color: rgb(255, 255, 0);\">EDITED</span>', '2017-05-01', '2017-05-01', 1.0000, 20.0000, 1, 1, 1, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tooling`
--

CREATE TABLE `tooling` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tooling`
--

INSERT INTO `tooling` (`id`, `name`, `description`) VALUES
(1, 'CIRCULAR BLADES', ''),
(2, 'PRESSURE BARREL', ''),
(3, 'CLEAVE SAW', ''),
(4, 'ADJUST SAW', ''),
(5, 'PLANER', ''),
(6, 'GRINDING TABLE', ''),
(7, 'GRINDSTONE', ''),
(8, 'ABRASIVE PAPER', ''),
(9, 'DRILLHEADS', ''),
(10, 'MONTAGE TABLE', ''),
(11, 'PRESS FORM', ''),
(12, 'GLUE PUMP', ''),
(13, 'PLANING BENCH', ''),
(14, 'AEROTEMPER', ''),
(15, 'SPRAY GUN', ''),
(16, 'DRILLS', ''),
(17, 'COMPRESSOR', ''),
(18, 'SCREWS', ''),
(19, 'VACUUM CLEANER', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ccss', 'ccss@utp.edu.co', '$2y$10$4idihMmuyHiFykt29o3aLu4fmSQR125aRTICS6jcI672QAGx3K5Xi', NULL, '2017-11-29 09:22:23', '2017-11-29 09:22:23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_factory_id_index` (`factory_id`);

--
-- Indices de la tabla `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`id`),
  ADD KEY `input_task_id_foreign` (`task_id`);

--
-- Indices de la tabla `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `machine_department_id_index` (`department_id`),
  ADD KEY `machine_line_id_index` (`line_id`),
  ADD KEY `machine_cell_id_index` (`cell_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `operations`
--
ALTER TABLE `operations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `operations_task_id_foreign` (`task_id`);

--
-- Indices de la tabla `output`
--
ALTER TABLE `output`
  ADD PRIMARY KEY (`id`),
  ADD KEY `output_task_id_foreign` (`task_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_tooling_id_foreign` (`tooling_id`),
  ADD KEY `task_process_id_index` (`process_id`),
  ADD KEY `task_department_id_index` (`department_id`),
  ADD KEY `task_machine_id_index` (`machine_id`);

--
-- Indices de la tabla `tooling`
--
ALTER TABLE `tooling`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `input`
--
ALTER TABLE `input`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `machine`
--
ALTER TABLE `machine`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `operations`
--
ALTER TABLE `operations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `output`
--
ALTER TABLE `output`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `process`
--
ALTER TABLE `process`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `task`
--
ALTER TABLE `task`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `tooling`
--
ALTER TABLE `tooling`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `input`
--
ALTER TABLE `input`
  ADD CONSTRAINT `input_task_id_foreign` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`);

--
-- Filtros para la tabla `operations`
--
ALTER TABLE `operations`
  ADD CONSTRAINT `operations_task_id_foreign` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`);

--
-- Filtros para la tabla `output`
--
ALTER TABLE `output`
  ADD CONSTRAINT `output_task_id_foreign` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`);

--
-- Filtros para la tabla `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `task_machine_id_foreign` FOREIGN KEY (`machine_id`) REFERENCES `machine` (`id`),
  ADD CONSTRAINT `task_process_id_foreign` FOREIGN KEY (`process_id`) REFERENCES `process` (`id`),
  ADD CONSTRAINT `task_tooling_id_foreign` FOREIGN KEY (`tooling_id`) REFERENCES `tooling` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
