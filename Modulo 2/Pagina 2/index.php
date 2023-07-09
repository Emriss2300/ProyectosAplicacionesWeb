<!DOCTYPE html>
<html>
<head>
    <title>Cuento</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <?php
    // Definir variables del cuento en español
    $titulo = "El cachorro del cazador"; 
    $contenido = "Érase una vez un perro cazador que tuvo descendencia. Un buen día, uno de sus cachorros pensó que era el momento de empezar a valerse por sí mismo y decidió salir solo de cacería. Tras olisquear durante bastante rato sin mucho éxito empezó a encontrarse cansado y decidió buscar un lugar para refugiarse. Tras merodear unos instantes, encontró la madriguera de una liebre y empezó a ladrar ante ella.
    La liebre, algo temerosa y desconcertada por el extraño ruido que hacía los ladridos del cachorro, se asomó a ver qué ocurría y cuando lo vio desde lejos le dijo: '¿Qué es ese ruido? Si ni siquiera sabes ladrar. Eres un cachorro. Debería darte pena ladrar así'.
    El pequeño perro se acercó un poco más y volvió a intentar ladrar para ganarse el respeto y la liebre se rió a carcajadas de él.
    Tras unos minutos, el cachorro se aproximó un poco más a la liebre y puso más énfasis y energía en su ladrido. La liebre lo observaba y seguía haciéndole gracia los intentos del pequeño por hacerse respetar. En un incontrolable ataque de risa, la liebre cayó de espaldas al suelo y el cachorro se abalanzó sobre ella y le dio un bocado. Pese al susto, la liebre herida salió corriendo y aún desde la lejanía, seguía diciéndole al cachorro que tampoco mordía como un verdadero cazador.
    ";

    // Verificar si se ha seleccionado un idioma diferente
    if (isset($_POST['idioma'])) {
        $idioma = $_POST['idioma'];

        // Traducciones del cuento
        if ($idioma == 'espanol') {
            $titulo = "El cachorro del cazador";
            $contenido = "Érase una vez un perro cazador que tuvo descendencia. Un buen día, uno de sus cachorros pensó que era el momento de empezar a valerse por sí mismo y decidió salir solo de cacería. Tras olisquear durante bastante rato sin mucho éxito empezó a encontrarse cansado y decidió buscar un lugar para refugiarse. Tras merodear unos instantes, encontró la madriguera de una liebre y empezó a ladrar ante ella.
            La liebre, algo temerosa y desconcertada por el extraño ruido que hacía los ladridos del cachorro, se asomó a ver qué ocurría y cuando lo vio desde lejos le dijo: '¿Qué es ese ruido? Si ni siquiera sabes ladrar. Eres un cachorro. Debería darte pena ladrar así'.
            El pequeño perro se acercó un poco más y volvió a intentar ladrar para ganarse el respeto y la liebre se rió a carcajadas de él.
            Tras unos minutos, el cachorro se aproximó un poco más a la liebre y puso más énfasis y energía en su ladrido. La liebre lo observaba y seguía haciéndole gracia los intentos del pequeño por hacerse respetar. En un incontrolable ataque de risa, la liebre cayó de espaldas al suelo y el cachorro se abalanzó sobre ella y le dio un bocado. Pese al susto, la liebre herida salió corriendo y aún desde la lejanía, seguía diciéndole al cachorro que tampoco mordía como un verdadero cazador.";
        } elseif ($idioma == 'ingles') {
            $titulo = "The hunter's puppy.";
            $contenido = "Once upon a time, there was a hunting dog that had offspring. One day, one of his puppies thought it was time to start fending for himself and decided to go hunting alone. After sniffing around for a while without much success, he started to get tired and decided to look for a place to take shelter. After prowling for a few moments, he found a hare's burrow and began barking at it.

            The hare, somewhat afraid and confused by the strange noise of the puppy's barks, peeked out to see what was happening, and when she saw him from a distance, she said, 'What is that noise? You can't even bark properly. You're just a puppy. You should be ashamed to bark like that.'
            
            The little dog approached a bit closer and tried barking again to earn respect, but the hare burst into laughter at him.
            
            After a few minutes, the puppy approached a bit closer to the hare and put more emphasis and energy into his bark. The hare watched him and continued to find the little one's attempts to assert himself amusing. In an uncontrollable fit of laughter, the hare fell backward to the ground, and the puppy pounced on her and took a bite. Despite the fright, the injured hare ran away, still from a distance, telling the puppy that he didn't bite like a true hunter either.";
        } elseif ($idioma == 'frances') {
            $titulo = "Le chiot du chasseur.";
            $contenido = "Il était une fois un chien de chasse qui eut une portée. Un beau jour, l'un de ses chiots pensa qu'il était temps de se débrouiller seul et décida de partir à la chasse en solitaire. Après avoir fouillé pendant un moment sans grand succès, il commença à se fatiguer et décida de chercher un endroit pour se réfugier. Après avoir rôdé quelques instants, il trouva le terrier d'un lièvre et se mit à aboyer devant.

Le lièvre, quelque peu effrayé et déconcerté par le bruit étrange des aboiements du chiot, se pencha pour voir ce qui se passait et, quand elle le vit de loin, lui dit : 'Quel est ce bruit ? Tu ne sais même pas aboyer correctement. Tu n'es qu'un chiot. Tu devrais avoir honte d'aboyer ainsi.'

Le petit chien s'approcha un peu plus et essaya à nouveau d'aboyer pour gagner le respect, mais le lièvre éclata de rire devant lui.

Après quelques minutes, le chiot s'approcha un peu plus près du lièvre et mit davantage d'accent et d'énergie dans son aboiement. Le lièvre l'observait et trouvait toujours amusantes les tentatives du petit chien de se faire respecter. Dans un fou rire incontrôlable, le lièvre tomba sur le dos et le chiot se précipita sur lui et lui donna un coup de dent. Malgré la frayeur, le lièvre blessé s'enfuit en courant et même de loin, il continuait à dire au chiot qu'il ne mordait pas non plus comme un vrai chasseur.";
        }
    }
    ?>

    <h2><?php echo $titulo; ?></h2>
    <div class="container">
        <img src="imagen1.jpg" alt="Imagen del cuento">
        <p class="contenido"><?php echo $contenido; ?></p>
    </div>

    <form method="POST">
        <label for="idioma">Selecciona un idioma:</label>
        <select name="idioma" id="idioma">
            <option value="espanol">Español</option>
            <option value="ingles">Inglés</option>
            <option value="frances">Francés</option>
        </select>
        <button type="submit">Cambiar idioma</button>
    </form>
</body>
</html>
