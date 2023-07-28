-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-07-2023 a las 06:49:22
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `validar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_pagina`
--

CREATE TABLE `info_pagina` (
  `id` int(11) NOT NULL,
  `idioma` varchar(250) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `contenido` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `info_pagina`
--

INSERT INTO `info_pagina` (`id`, `idioma`, `titulo`, `contenido`) VALUES
(1, 'Español', 'El cachorro del cazador', 'Érase una vez un perro cazador que tuvo descendencia. Un buen día, uno de sus cachorros pensó que era el momento de empezar a valerse por sí mismo y decidió salir solo de cacería. Tras olisquear durante bastante rato sin mucho éxito empezó a encontrarse cansado y decidió buscar un lugar para refugiarse. Tras merodear unos instantes, encontró la madriguera de una liebre y empezó a ladrar ante ella. La liebre, algo temerosa y desconcertada por el extraño ruido que hacía los ladridos del cachorro, se asomó a ver qué ocurría y cuando lo vio desde lejos le dijo: \'¿Qué es ese ruido? Si ni siquiera sabes ladrar. Eres un cachorro. Debería darte pena ladrar así\'. El pequeño perro se acercó un poco más y volvió a intentar ladrar para ganarse el respeto y la liebre se rió a carcajadas de él. Tras unos minutos, el cachorro se aproximó un poco más a la liebre y puso más énfasis y energía en su ladrido. La liebre lo observaba y seguía haciéndole gracia los intentos del pequeño por hacerse respetar. En un incontrolable ataque de risa, la liebre cayó de espaldas al suelo y el cachorro se abalanzó sobre ella y le dio un bocado. Pese al susto, la liebre herida salió corriendo y aún desde la lejanía, seguía diciéndole al cachorro que tampoco mordía como un verdadero cazador.'),
(2, 'Ingles', 'The hunter\'s puppy.', 'Once upon a time, there was a hunting dog that had offspring. One day, one of his puppies thought it was time to start fending for himself and decided to go hunting alone. After sniffing around for a while without much success, he started to get tired and decided to look for a place to take shelter. After prowling for a few moments, he found a hare\'s burrow and began barking at it. The hare, somewhat afraid and confused by the strange noise of the puppy\'s barks, peeked out to see what was happening, and when she saw him from a distance, she said, \'What is that noise? You can\'t even bark properly. You\'re just a puppy. You should be ashamed to bark like that.\' The little dog approached a bit closer and tried barking again to earn respect, but the hare burst into laughter at him. After a few minutes, the puppy approached a bit closer to the hare and put more emphasis and energy into his bark. The hare watched him and continued to find the little one\'s attempts to assert himself amusing. In an uncontrollable fit of laughter, the hare fell backward to the ground, and the puppy pounced on her and took a bite. Despite the fright, the injured hare ran away, still from a distance, telling the puppy that he didn\'t bite like a true hunter either.'),
(3, 'Francés', 'Le chiot du chasseur.', 'Il était une fois un chien de chasse qui eut une portée. Un beau jour, l\'un de ses chiots pensa qu\'il était temps de se débrouiller seul et décida de partir à la chasse en solitaire. Après avoir fouillé pendant un moment sans grand succès, il commença à se fatiguer et décida de chercher un endroit pour se réfugier. Après avoir rôdé quelques instants, il trouva le terrier d\'un lièvre et se mit à aboyer devant. Le lièvre, quelque peu effrayé et déconcerté par le bruit étrange des aboiements du chiot, se pencha pour voir ce qui se passait et, quand elle le vit de loin, lui dit : \'Quel est ce bruit ? Tu ne sais même pas aboyer correctement. Tu n\'es qu\'un chiot. Tu devrais avoir honte d\'aboyer ainsi.\' Le petit chien s\'approcha un peu plus et essaya à nouveau d\'aboyer pour gagner le respect, mais le lièvre éclata de rire devant lui. Après quelques minutes, le chiot s\'approcha un peu plus près du lièvre et mit davantage d\'accent et d\'énergie dans son aboiement. Le lièvre l\'observait et trouvait toujours amusantes les tentatives du petit chien de se faire respecter. Dans un fou rire incontrôlable, le lièvre tomba sur le dos et le chiot se précipita sur lui et lui donna un coup de dent. Malgré la frayeur, le lièvre blessé s\'enfuit en courant et même de loin, il continuait à dire au chiot qu\'il ne mordait pas non plus comme un vrai chasseur.'),
(4, 'Alemán', 'Das Junge des Jägers', 'Es war einmal ein Jagdhund, der Nachwuchs hatte. Eines schönen Tages dachte einer seiner Welpen, es sei an der Zeit, sich selbst zu versorgen, und beschloss, alleine auf die Jagd zu gehen. Nachdem er eine ganze Weile erfolglos geschnüffelt hatte, wurde er müde und beschloss, einen Unterschlupf zu finden. Nachdem er ein paar Augenblicke herumgeschlichen hatte, fand er einen Hasenbau und begann ihn anzubellen. Der Hase, etwas ängstlich und beunruhigt über das seltsame Geräusch, das das Bellen des Welpen verursachte, beugte sich hinaus, um zu sehen, was los war, und als er es von weitem sah, sagte er: „Was ist das für ein Geräusch?“ Wenn Sie nicht einmal wissen, wie man bellt. Du bist ein Welpe. Es sollte dir leid tun, so zu bellen.‘ Der kleine Hund kam etwas näher und versuchte erneut zu bellen, um sich Respekt zu verschaffen, und der Hase lachte ihn laut aus. Nach ein paar Minuten rückte das Junge etwas näher an den Hasen heran und legte mehr Nachdruck und Energie auf sein Bellen. Der Hase beobachtete ihn und amüsierte sich weiterhin über die Versuche des kleinen Jungen, respektiert zu werden. In einem unkontrollierbaren Lachanfall fiel der Hase rücklings zu Boden und das Junge stürzte sich auf sie und biss hinein. Trotz des Schreckens rannte der verwundete Hase davon und sagte dem Welpen sogar aus der Ferne immer wieder, dass er auch nicht wie ein echter Jäger beiße.'),
(5, 'Catalán', 'El cadell del caçador', 'Hi havia una vegada un gos caçador que va tenir descendència. Un bon dia, un dels seus cadells va pensar que era el moment de començar a valdre\'s per si mateix i va decidir sortir només de cacera. Després d\'olisquejar durant força estona sense gaire èxit va començar a trobar-se cansat i va decidir buscar un lloc per refugiar-se. Després de rondar uns instants, va trobar el cau d\'una llebre i va començar a bordar davant seu. La llebre, una mica temorosa i desconcertada per l\'estrany soroll que feia els lladrucs del cadell, va treure el cap a veure què passava i quan el va veure des de lluny li va dir: \'Què és aquest soroll? Si ni tan sols saps bordar. Ets un cadell. T\'hauria de fer pena bordar així\'. El petit gos es va acostar una mica més i va tornar a intentar bordar per guanyar-se el respecte i la llebre va riure a riallades d\'ell. Després d\'uns minuts, el cadell es va aproximar una mica més a la llebre i va posar més èmfasi i energia al lladruc. La llebre ho observava i seguia fent-li gràcia els intents del nen per fer-se respectar. En un incontrolable atac de riure, la llebre va caure d\'esquena a terra i el cadell s\'hi va abalançar i li va fer un mos. Tot i l\'ensurt, la llebre ferida va sortir corrent i encara des de la llunyania, seguia dient-li al cadell que tampoc mossegava com un veritable caçador.'),
(6, 'Hawaiano', 'Ke keiki hahai holoholona', 'I ka wā kahiko, aia kekahi ʻīlio hahai holoholona he keiki. I kekahi lā maikaʻi, ua manaʻo kekahi o kāna mau ʻīlio ʻo ia ka manawa e hoʻomaka ai e mālama iā ia iho a ua hoʻoholo e hele i ka hahai holoholona. Ma hope o ka honi ʻana no kekahi manawa me ka pōmaikaʻi ʻole, ua hoʻomaka ʻo ia e luhi a hoʻoholo e ʻimi i kahi e malu ai. Ma hope o ka holoholo ʻana no kekahi mau manawa, ua loaʻa iā ia kahi lua hare a hoʻomaka ʻo ia e ʻuhu ma laila. ʻO ka hare, me ka makaʻu a me ka hopohopo i ka walaʻau ʻē a ka ʻīlio hae, ʻo ia ka hilinaʻi e ʻike i ka mea e hana nei a i kona ʻike ʻana mai kahi mamao aku, ʻōlelo ʻo ia: \'He aha kēlā walaʻau? Inā ʻaʻole ʻoe i ʻike i ka ʻuala. He ʻīlio ʻoe. Minamina paha ʻoe i ka ʻōhule ʻana pēlā.\' Hoʻokokoke iki mai ka ʻīlio liʻiliʻi a hoʻāʻo e ʻō hou i mea e mahalo ai a ʻakaʻaka nui ka hare iā ia. Ma hope o kekahi mau minuke, neʻe iki ke keiki i ka hare a hāʻawi i ka manaʻo nui a me ka ikaika i loko o kona ʻili. Ua nānā ka hare iā ia a hoʻomau i ka leʻaleʻa i nā hoʻāʻo a ke keiki liʻiliʻi e mahalo ʻia. I loko o ka ʻakaʻaka hiki ʻole ke kāohi ʻia, hāʻule ka hare i hope i ka lepo a lele ka ʻōpio iā ia a nahu. ʻOiai ʻo ka makaʻu, ua holo ka hare ʻeha a ma kahi lōʻihi aku, e haʻi mau ana i ka ʻīlio ʻaʻole ʻo ia i nahu e like me ka hahai holoholona maoli.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticias` int(11) NOT NULL,
  `fecha_noticias` date NOT NULL,
  `titular_noticia` varchar(255) NOT NULL,
  `descripcion_noticia` longtext NOT NULL,
  `imagen_ruta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticias`, `fecha_noticias`, `titular_noticia`, `descripcion_noticia`, `imagen_ruta`) VALUES
(33, '2023-07-26', 'Nueva Constitución: ¿Rumbo al Rechazo?', 'Una serie de advertencias dan cuenta del mal rumbo que estaría tomando el proceso constitucional en marcha, y que arriesga un nuevo voto en contra de parte de la ciudadanía en diciembre. Aún estamos a tiempo de enmendarlo, describen en columna para CIPER dos académicos y analistas: «Ya debería iniciarse un diálogo que permita construir un camino alternativo para darles un cauce responsable a la crisis de legitimidad y las demandas no resueltas de la ciudadanía.»\r\n\r\nEn el marco de la campaña hacia el plebiscito constitucional del 4 de septiembre, distintos sectores vinculados a la opción Rechazo plantearon que el proceso había fracasado porque este había sido capturado por un sector político en particular. Como alternativa, la gran mayoría del espectro político consensuó un nuevo proceso, alejado de «los excesos» del primero, y con doce bases que debían respetarse, con el objetivo de escribir un texto que esta vez sí representara al país y generara consenso transversal. No obstante, el actual Consejo Constitucional se ha mostrado reticente a la hora de integrar las distintas visiones que lo componen. Por otro lado, y en claro contraste con la Convención Constitucional, este ha operado alejado de la atención mediática, sin lograr despertar mayor interés por parte de una ciudadanía ya de por sí desafecta de la política. A esto se suman  las alarmas levantadas por múltiples encuestas sobre los posibles resultados del plebiscito del 17 de diciembre, las que muestran que el proceso constitucional corre el riesgo de fracasar y ahondar todavía más la crisis por la cual atraviesan la política chilena y todas sus instituciones.', 'images/64c33737430c2_republicanos-1-2048x1366.jpeg'),
(34, '2023-07-27', 'Qué tiene que ver la crisis climática con la psicología', 'Nuevas palabras vinculan cómo las personas enfrentan los profundos y apremiantes problemas medioambientales desde la salud mental: ‘ecoansiedad’, ‘ecoemociones’ y ‘solastalgia’ son algunos conceptos que nos hablan del enfrentamiento personal y comunitario a un contexto que es hoy altamente desafiante. En columna para CIPER, la directora de la Escuela de Psicología de la Universidad Diego Portales describe sus alcances, en medio de las olas de calor, incendios masivos y desertificación que han pasado a ser parte de la pauta de noticias.', 'images/64c3377969500_Screen-Shot-2023-07-26-at-05.31.20.png'),
(35, '2023-07-27', 'Impacto de subsidios y recuperación post pandemia: Las razones que habrían impulsado la caída de la pobreza  ', 'Fuente: Emol.com\r\nSegún la Casen, la pobreza por ingresos bajó de 10,7% a 6,5% al comparar este año con 2020. En tanto, la multidimensional, también registró una línea de descenso al compararla con 2017.\r\n\r\nUna disminución de la pobreza por ingresos, pero también multidimensional fue lo que arrojó la última encuesta Casen -aplicada entre el 1 de noviembre de 2022 y el 2 de febrero de este año-, que este jueves fue presentada por el Ministerio de Desarrollo Social, junto al Centro de Microdatos de la Universidad de Chile. En el caso de la pobreza por ingresos ésta se sitúa en un 6,5% (correspondiente a 1.292.521 personas), mientras que en 2020, ésta fue de un 10,7%; en tanto, la pobreza multidimensional fue de 16,9%, mientras que al compararla con 2017 -último año donde se consideraron todos los criterios para este análisis en particular-, la cifra fue de 20,3%.\r\n', 'images/64c337de091c9_file_20230727173206.jpg'),
(36, '2023-07-25', 'Ejército interviene en la defensa de capitán y realiza pruebas balísticas a su favor en proceso por la muerte de un manifestante', 'Tres años y nueve meses después de la muerte del joven Romario Veloz por disparos de militares en octubre de 2019, se inicia el juicio oral. Abogados de su familia dicen que en la defensa del capitán imputado ha intervenido el Ejército y que se presentarán pericias balísticas realizadas por una entidad de la misma rama castrense. La Contraloría desestimó estos reclamos e indicó que hay normas que establecen que los efectivos militares pueden ser defendidos por sus instituciones. Pero, especialistas en derechos humanos señalan que esas normas deben aplicarse sólo en aquellos casos en que el funcionario es víctima de una agresión, no cuando es el imputado de un crimen.', 'images/64c338227eae1_web-romario.png'),
(37, '2023-07-11', 'Fiscalía abrió investigación por tráfico de influencias en el Ministerio de Energía: indaga nexos con empresas eléctricas', 'La investigación se inició por una denuncia anónima que apuntó a contactos irregulares entre funcionarios del gabinete del exministro de Energía, Claudio Huepe, y representantes de las generadoras de electricidad durante la tramitación del proyecto de ley que en 2022 estabilizó las cuentas de la luz. Una lobista de la empresa Engie es exfuncionaria de la Subsecretaría de Energía, donde fue compañera de trabajo con la principal asesora de Huepe en la tramitación del proyecto. El gremio que agrupa a esas empresas, Generadoras de Chile, reconoció a CIPER que pudieron existir conversaciones vía mensajería instantánea con funcionarios para “comentar correcciones puntuales de términos técnicos y financieros mal empleados o escritos erróneamente en el proyecto”, aunque descartaron irregularidades.', 'images/64c3384c26813_web-energia.png'),
(38, '2023-06-28', 'Jefa de planificación sanitaria del Minsal durante la pandemia: “Con la poca información que teníamos se tomaron las mejores decisiones posibles”', 'Johanna Acevedo fue jefa de la División de Planificación Sanitaria del Ministerio de Salud entre 2020 y 2022. Ante la fiscalía aseguró que al inicio de la pandemia el gabinete del entonces ministro Jaime Mañalich tenía un sistema propio para contar a los contagiados, que difería de los criterios que utilizaban los equipos expertos. Ahora, al conversar con CIPER acerca de la serie de reportajes “Correos de la pandemia”, agrega contexto a sus afirmaciones: su evaluación sobre cómo el Minsal enfrentó la emergencia es positiva. Ella asegura que las diferencias entre las autoridades políticas y los equipos especializados se limitó a una inicial divergencia de criterios. En todo caso, afirma que con los meses la postura de los técnicos se impuso.', 'images/64c3387ee4cce_Entrevista-Johanna-Acevedo.png'),
(39, '2023-07-27', 'Agrupación Folclórica Hueyel de Rancagua Vuelve a las Pistas!!!', 'Después de un mes de inactividad y llenos de energía, la agrupación folclórica hueyel chile vuelve a su actividad, con nueva sede de ensayo, calendario de presentaciones y un nuevo logo artístico, se comenzara a trabajar para lograr nuevamente y como en antaño la representación del país en una nueva cita internacional. ', 'images/64c339086c9b1_Fondo Negro 2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parrafos`
--

CREATE TABLE `parrafos` (
  `id` int(11) NOT NULL,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `parrafos`
--

INSERT INTO `parrafos` (`id`, `texto`) VALUES
(1, 'Un poco de nuestra historia\": Desde el día 7 de agosto de 2007, a las 19:00 horas, la \"Agrupación Folclórica Hueyel de Rancagua\" comenzó sus funciones. Desde ese día,  hemos integrado a niños y jóvenes de la Sexta Región de nuestro país, provenientes de diferentes comunas, quienes se han unido y aprendido en nuestras filas con el fin de cultivar danzas y costumbres de nuestro país y el extranjero. Hemos mostrado nuestra danza nacional dentro y fuera del territorio nacional, incluso en el extranjero en los años 2011 y 2013. Actualmente, nuestra directora general es la señora Lucila Ortiz, destacada folclorista valdiviana arraigada en las tradiciones del campo sur de nuestro país. Nuestro profesor actual es Francisco Núñez, folclorista rancagüino. A lo largo de estos 15 años, hemos tenido más de 930 presentaciones, más de 9 giras y más de 5000 horas de ensayo. Más de 170 bailarines han pasado por nuestras filas, convirtiéndonos en una de las cunas de bailarines folclóricos en Rancagua. Hemos proporcionado a otras agrupaciones bailarines funcionales y llenos de la chispa de la superación personal. En el año 2018, logramos, por primera vez en la historia de nuestra región, que una agrupación folclórica rancagüina participara en la entrada folclórica más importante de Santiago, para el pueblo boliviano residente en Chile. Como agrupación chilena, fuimos reconocidos como bailarines capacitados para desarrollar la danza del caporal y representarla. Actualmente, en 2019, Hueyel de Rancagua forma parte de la Filial Oficial Rancagua de Tobas Nueva Raíz Andina Arica, siendo la primera agrupación folclórica en ser filial de Tobas en la Región. Les abrazamos y esperamos que la manifestación de alegría al bailar de nuestra agrupación sea del agrado de todos ustedes.\r\n                \r\n            Agrupación Folclórica Hueyel de Rancagua'),
(2, 'Nuestra Agrupación folclórica actualmente tiene 15 años de trayectoria, dada la pandemia del Covid-19, los ensayos se vieron truncados por más de 8 meses, lo que hizo difícil recuperar cuadros que históricamente estaban listos en la agrupación.\r\n        '),
(3, 'Nuestra institución es sin fines de lucro y busca la difusión del folclór en sus diferentes manifestaciones, siendo parte de la Unión Nacional De Folclóristas.'),
(4, 'Sus tres dirigentes artísticos, Francisco Núñez, Lucila Ortiz, Fernanda Núñez, hemos trabajado incansablemente para el desarrollo cultural de cientos de niños y jóvenes de la región, apoyando a la cultura tradicional.'),
(5, 'Hoy mas que nunca hueyel de rancagua esta en vias de desarrollo, implementando nuevas actividades a su repertorio y planificando una nueva convocatoria para bailarines '),
(6, 'Este marte se confirmo el nuevo cambio de sede para los ensayos de la agrupacion, dando por finalizada la búsqueda desarrolladas por mas de 6 meses para lograr el objetivo, hoy hueyel tendrá nueva casa de estudio. ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`) VALUES
(2, 'Usuario', '1234'),
(3, 'Usuario2', '1234'),
(4, 'Usuario3', '1234'),
(5, 'Usuario4', '1234'),
(6, 'Usuario5', '1234'),
(7, 'Usuario6', '1234'),
(8, 'Usuario7', '1234'),
(9, 'Hueyel', '2300'),
(10, 'Usuarioe', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `info_pagina`
--
ALTER TABLE `info_pagina`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticias`);

--
-- Indices de la tabla `parrafos`
--
ALTER TABLE `parrafos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `info_pagina`
--
ALTER TABLE `info_pagina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `parrafos`
--
ALTER TABLE `parrafos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
