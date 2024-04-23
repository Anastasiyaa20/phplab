<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Інформація про космос</title>
    <link rel="stylesheet" href="index.css"> <!-- Підключення зовнішнього CSS-файлу -->
</head>
<body>

    <h1>Космос</h1>

    <?php
        $description = "Космос - це нескінченний простір, що включає в себе планети, зорі, галактики та інші космічні об'єкти.";
        $behavior = "Космічні об'єкти взаємодіють між собою за допомогою сил гравітації та інших фізичних процесів.";
        $social_interaction = "Люди вивчають космос за допомогою космічних апаратів та телескопів, співпрацюючи між собою у міжнародних космічних місіях.";
        $threats = "Космос стикається з різними загрозами, такими як астероїди, супернові вибухи та космічне сміття.";
    ?>

    <p><?php echo $description; ?></p>

    <h2>Опис</h2>
    <p><?php echo $behavior; ?></p>

    <h2>Дослідження космосу</h2>
    <p><?php echo $social_interaction; ?></p>

    <h2>Загрози</h2>
    <p><?php echo $threats; ?></p>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Інформація про космос</p>
    </footer>
</body>
</html>
