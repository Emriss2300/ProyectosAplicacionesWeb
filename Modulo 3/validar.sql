-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2023 a las 02:24:41
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
(6, '2023-07-18', 'La degradación institucional de Chile', 'Durante muchos años, tanto antes de la era de los autoritarismos sudamericanos de la década del 70 como después de iniciadas las transiciones a la democracia en los 90 (la así llamada tercera ola de la democratización según Huntington), Chile llegó a ser reconocido -junto a Uruguay- como la joya del continente (un calificativo que se declinó como los “ingleses” o los “suizos” de esta zona del sur global). Razones no faltaban: estabilidad democrática medida en décadas, sistema de partidos con alta penetración nacional y legitimado, apego a las reglas del pluralismo y del juego democrático, a lo que se sumaron (una vez iniciada la transición a la democracia en 1990) elogios a la capacidad de negociación de las élites chilenas. Pero, así como había buenas razones para elogiar el estado de la democracia antes del golpe de Estado de 1973 en Chile en perspectiva de historia larga, también había malas razones y olvidos inducidos por una verdadera mitología.\r\n\r\n¿La estabilidad democrática chilena? Sí, aunque hasta cierto punto y siempre y cuando no se olvide que hubo un golpe de Estado en 1927, un levantamiento militar en las postrimerías del gobierno de Eduardo Frei Montalva en 1969 (el así llamado tacnazo), una prohibición artera mediante una ley maldita del Partido Comunista durante una década (lo que se tradujo en la cancelación de su inscripción legal durante el gobierno de Gabriel González Videla, una especie de macartismo blando que supuso pérdidas de cargos y persecución a connotados militantes, como por ejemplo al poeta y posterior Premio Nobel de Literatura Pablo Neruda).\r\n\r\nejemplo de actualizacion', 'images/64b75442dec2f_SLTNXZDTEFGSFFPCKPNWF6UHSY.jpg'),
(7, '2023-07-16', 'Temblor hoy, domingo 16 de julio en Chile: revisa el epicentro y magnitud', 'Un sismo de mayor intensidad se registró en horas de la noche en la zona centro-sur del país y afectó entre las regiones del Maule y Los Ríos.\r\n\r\nEl evento se suma otro movimiento menor ocurrido durante la tarde. Con un suelo altamente sísmico, resulta fundamental conocer los detalles de cada temblor que se presente, cuyos detalles son comunicados por Sismología.\r\n\r\nTemblor hoy, domingo 16 de julio en Chile\r\n\r\nDe acuerdo a lo indicado por el Centro Sismológico Nacional de la Universidad de Chile, se han registrado los siguientes sismos este domingo 16 de julio:\r\n\r\n23:05 horas\r\n\r\nSismo de magnitud 6.6, con epicentro a 50 kilómetros al noreste de Lonquimay y a 207 km. de profundidad.\r\n\r\nMinutos después del movimiento telúrico, se informó que “SHOA indica que las características del sismo NO reúnen las condiciones necesarias para generar un tsunami en las costas de Chile”.', 'images/64b75b44d3b59_AA19hhM7.jpg'),
(8, '2023-07-18', 'Neme critica “Gran Hermano” y defiende situación de Bigotes: “Te juro que me indigna”', 'José Antonio Neme criticó en duros términos el reality show “Gran Hermano”, que actualmente emite Chilevisón, y aseguró, con respecto a la situación de Bigotes (el perrito en la casa estudio que ha sido víctima de maltrato por algunos participantes), “me indigna”.\r\n\r\nEl conductor de “Mucho Gusto” realizó estas declaraciones en su programa “Déjate caer con Neme”, en Radio Infinita, donde arremetió contra el formato de reality show y, en partcular, el que actualmente está transmitendo Chilevisión, tal como se aprecia en el video de TikTok.\r\n\r\nEn efecto, en “Gran Hermano” un grupo de personas de diferentes edades se encerraron en una casa, que a la vez es un esudio de televisión, y realizan su vida cotidiana con la mirada atenta de cámaras que emiten este contenido (las 24 horas del día) por la señal digital Pluto TV y, en un resumen e interacción con sus conductores, a las 23 horas por Chilevisión.\r\n\r\n“No veo mucha televisión, ni menos realities”, partió aclarando Neme. Ahora, respecto al formato de reality show, el periodista señaló que “encerrar gente en una casa, lo hicieron hace 25 o 30 años y vienen haciendo la misma cosa. Encerrar gente para mostrar sus miserias (...) verlos en pijamas, escupirse, pelearse, andar en pantuflas, tener sexo, tomar medicamentos... Perdón, yo no le veo ninguna gracia”.\r\n\r\nSin embargo, más allá de sus objeciones, la situación de Bigotes lo hizo reflexionar. “No sé cómo apareció un perrito en la casa, tienen una mascota, un perrito, como mestizo Y algo pasó ayer o anteayer. Creo que lo golpearon, que lo maltrataron, porque el perrito es muy inquieto. Parece que molestó a un participante que le pegó un mantazo, que lo hizo llorar”, inidicó el rostro de Mega.\r\n\r\n“Que se encierren unos pelotudos por plata ya lo encuentro una estupidez. Pero allá cada cual lo que quiere hacer con su vida. Pero que encierren animales y, más encima, los maltraten, no sé, a mí te juro que me indigna”, se sinceró el profesional.', 'images/64b75d33da963_AA1e36yg.jpg'),
(9, '2023-07-04', 'Organizaciones emplazan a Rosalía a no ceder su nombre a popular bebida \"nociva para la salud\"', 'La Alianza por la Salud Alimentaria, entidad que reúne a diversas organizaciones mexicanas, emplazaron a la cantante española Rosalía a no promocionar productos ultraprocesados que son nocivos para la salud; todo esto luego de ceder su nombre a un nuevo refresco.\r\n\r\n“Le hacemos un llamado a tomar conciencia sobre el tipo de publicidad que está realizando y las implicaciones que tiene sobre la población, sobre todo si esto implica que sus recomendaciones o uso de imagen están enfocadas en productos que no son saludables y contribuyen a agravar los problemas de salud que vivimos en nuestro país”, expusieron en una carta abierta dirigida a la artista.\r\n\r\nLee también...: Youtuber peruano recreó concierto de Rosalía \"al pie de la letra\" porque la artista no visitó su país\r\n\r\nEl pasado 28 de abril, Rosalía ofreció un concierto gratuito en el Zócalo de Ciudad de México que congregó a 160.000 personas, lo que, de acuerdo con las organizaciones, prueba su influencia entre la población mexicana.\r\n\r\nPor ello, insisten en la carta, le piden a la cantante “tomar conciencia sobre este tipo de publicidad y sus implicaciones en la población, en especial sobre los jóvenes, las niñas y los niños, al tratarse de productos que dañan su salud”.\r\n\r\nMéxico, puntualiza la Alianza por la Salud Alimentaria, encabeza una de las tasas más altas de obesidad con el 40 % de los niños con sobrepeso, y enfermedades crónicas a nivel mundial: cerca de 150.000 personas mueren cada año a causa de la diabetes y 220.000 por enfermedades cardiovasculares.', 'images/64b75ffb93874_AA1e2zBr.jpg'),
(10, '2023-07-19', 'Confirman estreno en Chile de \"Sound of Freedom\", la polémica película que divide a Estados Unidos', '“Sound of Freedom”, la polémica película protagonizada por Jim Caviezel sobre una red de explotación sexual infantil, agendó su estreno en Chile tras días de controversia internacional.\r\n\r\nEl debate alrededor del filme, que cuenta la historia de un agente gubernamental que desmantela una red de tráfico sexual infantil, radica en que su argumento ha sido vinculado a la teoría de la conspiración de QAnon, de la cual han hecho eco diversos grupos de ultraderecha de Estados Unidos.\r\nDicha conspiración aludía a un supuesto complot del que estaba siendo víctima el expresidente republicano Donald Trump por parte de una elite pederasta y ligada al Partido Demócrata, luego de “enfrentarse” a una red de pedofilia ligada, incluso, a cultos satánicos.\r\nEl estreno del filme, tal como podía preverse, ha dividido a medios de comunicación estadounidenses: mientras algunos la identifican directamente como un producto enfocado a los seguidores de QAnon, otros (sobre todo medios conservadores) han alabado el filme y relevado los hechos que retrata.\r\nLa revista Rolling Stone, tal como recoge el portal de BBC, definió el filme como “un thriller teñido de QAnon sobre el tráfico de niños que está diseñado para apelar a la conciencia de un boomer adicto a la conspiración”; mientras que National Review, por su parte, señaló: “No es ‘paranoico’ o ‘cercano a QAnon’ llamar una muy necesaria atención sobre horrores que son muy reales”.\r\nLejos de cualquier complot izquierdista (principal argumento qde la teoría de QAnon), el protagonista de la película está basado en el agente Timothy Ballard, exfuncionario del Departamento de Seguridad Nacional de Estados Unidos y fundador de la Operation Underground Railroad (OUR), dedicada a combatir el tráfico de personas.\r\n\r\nEl actor Mel Gilbson, afín a las ideas del conservadurismo estadounidense, alabó la realización del filme. “Uno de los problemas más perturbadores de nuestro mundo hoy es el tráfico humano, y particularmente el tráfico de niños”,s eñaló. “El primer paso para erradicar este crimen es creando conciencia, vayan a ver Sound of Freedom”, agregó.\r\n\r\nTras su estreno en EE.UU el 4 de julio,”Sound of Freedom”, aún sin fecha de estreno en Chile, recaudó 14.2 millones de dólares en su primer fin de semana, superando los 11.7 millones de “Indiana Jones y el dial del destino” en el mismo periodo de tiempo.', 'images/64b87cde7e324_AA1e5xWd.jpg'),
(11, '2023-07-19', 'Carabineros detuvo a seis sujetos en procedimientos por robo de madera en Vilcún y Lautaro', 'Esta tarde Carabineros llevó a cabo dos procedimientos que dejaron como resultado a seis personas detenidas, las cuales fueron sorprendidas robando madera en las comunas de Vilcún y Lautaro, en la Región de La Araucanía.\r\n\r\nEl primer procedimiento se registró en la Ruta S-221, en Vilcún, específicamente en el Fundo Brasil, donde sujetos fueron sorprendidos por personal forestal mientras cortaban y cargaban pino industrial en un camión.\r\n\r\nEl prefecto de Carabieros de Cautín, coronel Álvaro Martínez, informó que personal policial concurrió \"al lugar, procediendo a la detención de dos personas al no poder estas acreditar la procedencia de la madera. En tanto, un tercer sujeto fue detenido por conducción en estado de ebriedad\".\r\nEl segundo procedimiento se llevó a cabo en la ruta S-155, en el sector Cruce Los Aromos, en Lautaro, lugar al que arribó el personal policial tras diversas denuncias de barricadas. Allí fueron detenidos tres sujetos, quienes se encontraban robando madera desde un predio particular del sector.\r\n\r\nEl coronel Martínez señaló que, tras la acción de los individuos, \"un poste de alumbrado público resultó destruido al caer sobre este un árbol cortado por los antisociales para bloquear el tránsito vehicular\".\r\n\r\nPor instrucción del Ministerio Público, todos los detenidos quedaron a disposición del tribunal correspondiente.', 'images/64b87d602f9b2_AA1e5N29.jpg');

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
(7, 'Usuario6', '1234');

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
  MODIFY `id_noticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
