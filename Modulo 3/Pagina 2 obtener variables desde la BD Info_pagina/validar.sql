-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2023 a las 06:52:56
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
(13, '2023-07-19', 'Declaraciones y fotos dan cuenta de ', 'La investigación que desarrolla la Fiscalía Metropolitana Centro Norte por el delito de cohecho presuntamente cometido por el alcalde de Recoleta, Daniel Jadue (PC), al mando de la Asociación Chilena de Farmacias Populares (Achifarp), contiene declaraciones, conversaciones de WhatsApp y fotografías como antecedentes.', 'images/AA1e5gK4.jpg'),
(14, '2023-07-05', 'Gobernador Regional ante paralización de obras en Carretera del Cobre: “Esto no es responsabilidad del gobierno regional, sino que del Ministerio”', 'Aún paralizada se encuentra la esperada ampliación de la Ruta H-27 “Carretera El Cobre”, proyecto que tuvo su génesis a fines del primer gobierno del expresidente Sebastián Piñera en el año 2020. Obra que contempla  2,1 kilómetros de doble vía, el cual comienza en Avenida Bomberos Villalobos en la capital regional hasta el cruce San Joaquín de los Mayos en Machalí que espera unir por el costado sur ambas comunas con el fin de descongestionar el complejo tráfico de la zona.\r\n\r\nPero esto ha tomado un nuevo giro, puesto que si hace algunas semanas mencionábamos que la empresa contratista -ante el alza de sus insumos-  exigía más presupuesto para poder continuar con los trabajos, ante lo cual finalmente se llegó a un acuerdo, accediendo el gobierno regional a suplementar el presupuesto con poco más de 2 mil millones de pesos. Por lo mismo, se esperaba que continuaran con  las obras a partir del pasado martes 11 de julio, pero dicha fecha no se cumplió y actualmente los trabajos se encuentran totalmente paralizados.\r\n\r\nPor lo mismo, es que el gobernador Pablo Silva, señaló “cuando se aprobaron estos recursos la empresa debía partir el 11 de julio, después nos señalaron que el día lunes 17 de julio”.\r\n\r\nCon respecto si ha tenido comunicación directa con la empresa destaca que “ se supone que tenía una reunión hoy (martes) con la empresa para que nos cuenten si van a iniciar las obras o sino para que aprobamos una cantidad de recursos si no se van a continuar”.\r\n\r\nAdemás, mencionó que “vamos a esperar hasta este miércoles (ayer) para saber si iniciaron o no sino para tomar nuevas determinaciones con respecto a si asignamos o revertimos este acuerdo porque nos parece indignante que una obra que estaba financiada por el gobierno regional donde ahora colocamos recursos adicionales donde no nos han llegado facturas para pagar, creemos que debemos empatizar con la molestia de los usuarios, de los emprendedores y alumnos que hay en esos colegios de alrededor. Vamos a esperar la respuesta del Ministerio de Obras Públicas para ver qué decisión tomamos con respecto a esto.\r\n\r\nEsto no es responsabilidad del gobierno regional, sino que del ministerio pero vamos en ayuda del financiamiento para que esto funcione más rápida pero aún así no sucede por eso nuestra molestia”.\r\n\r\nAgregar que el día de ayer (martes) se llevó a cabo una reunión en la Seremia del MOP O’Higgins, entre la empresa a cargo  y el Director regional de Vialidad, Maurice Dintrans.', 'images/64b8a8ed768ef_R.png'),
(15, '2023-07-19', '¿Aliados progresistas?: Boric y Lula, una relación que parece tensionarse tras nuevo choque en una cita internacional', '\"No me siento ofendido\", aseguró el Presidente Gabriel Boric al arribar a la ciudad de París. Tras un viaje de tres horas en tren desde Ginebra hasta la capital francesa, el Mandatario decidió abordar públicamente la valoración que hizo su par de Brasil, Luiz Inácio Lula da Silva, respecto al discurso que vertió en el plenario de la Cumbre Celac-UE. En una declaración que trascendió este miércoles, Lula aludió a la \"ansiedad\" y a la \"juventud\" de Boric el llamado que el Presidente chileno hizo a sus homólogos de América Latina de condenar categóricamente la invasión de Rusia sobre Ucrania, conflicto que hasta pasado el almuerzo de cierre del cónclave birregional, era un escollo para zanjar la declaración conjunta entre ambas partes.\r\n', 'images/64b8a95679e8f_file_20230719173438.jpg'),
(16, '2023-07-19', 'Bolsa de Santiago sigue sin freno y vuelve a cerrar en máximos históricos: IPSA supera los 6.300 puntos', 'La Bolsa de Santiago no detiene su buena racha y siguió alcanzando máximos históricos, superando por primera vez la barrera de los 6.300 puntos, acoplándose a la tendencia de Wall Street, que también cerró con números verdes', 'images/64b8a9bbeeebb_file_20230719171630.jpg'),
(17, '2023-07-19', '“Es humanitario”: Presos de Punta Peuco podrían irse para la casa con polémica enmienda del Partido Republicano', 'La propuesta, que se discutirá en el Consejo Constitucional, fue defendida a pie firme por “el profesor” Luis Silva.\r\n\r\nErasmo Tauran\r\nMiércoles, 19 de julio de 202316:34 hs\r\nRonchas sacó la enmienda presentada por el Partido Republicano en el Consejo Constitucional que busca dejar escrito en la nueva Constitución una norma que permitiría liberar a los presos de Punta Peuco.\r\n\r\nLa iniciativa, que deberá ser debatida en el Consejo que, propone que “las personas mayores de 75 años de edad o que padezcan enfermedades terminales, cumplirán la prisión preventiva, presidio o reclusión en su domicilio”.\r\n\r\nCabe de cajón que serían muchos los condenados por violaciones a los derechos humanos que librarían con esta disposición, incluido Miguel Krassnoff, sentenciado a más de 1.000 años de cárcel por horrores de la dictadura.', 'images/64b8aa0c33f8e_ITUFYV2Y7JCPDLCO6LX3F552SA.jpg'),
(20, '2023-07-20', ' Chile: temblor de magnitud 3.2 en Pica.', 'Chile es uno de los países con mayor actividad sísmica del mundo, por lo que es importante estar alerta ante cualquier movimiento telúrico, Un temblor de magnitud 3.2 ocurrió este miércoles 19 de julio en la ciudad chilena de Pica, de acuerdo con la más reciente información del Centro Sismológico Nacional (CSN). Según los reportes oficiales preliminares, el movimiento telúrico comenzó a las 00:48 (hora local), se originó a 30.0 kilómetros al Sureste de dicha localidad y tuvo una profundidad de 116.0 kilómetros. La coordenadas del epicentro del sismo, según el CNS, fueron a -20.628 grados de latitud y -69.078 grados de longitud. Recuerda que ante cualquier terremoto sigue información únicamente de fuentes oficiales, evita caer en rumores o noticias falsas. Tras un sismo, checa tu hogar en búsqueda de posibles afectaciones, utiliza tu celular únicamente en caso de emergencia, evita saturar las líneas telefónicas, no prendas cerillos o velas hasta asegurarte que no hay alguna fuga de gas. Es importante mencionar que tras un movimiento telúrico importante, se pueden presentar réplicas, por lo que es importante estar alerta. actualizacion...', 'images/64b8bd693e8a9_th.jpg');

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
(8, 'Usuario7', '1234');

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
  MODIFY `id_noticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
