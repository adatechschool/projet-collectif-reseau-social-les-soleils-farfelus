<?php
include "session.php"
?>
<img src="resoc.jpg" alt="Logo de notre réseau social" />
<?php
if (!$userId) {
?>
    <nav id="menu">
        <a href="news.php">Actualités</a>
        <a href="logout.php">Mur</a>
        <a href="logout.php">Flux</a>
        <a href="logout.php">Mots-clés</a>
    </nav>
    <nav id="user">
        <a href="#">Profil</a>
        <ul>
            <li><a href="logout.php">Paramètres</a></li>
            <li><a href="logout.php">Mes suiveurs</a></li>
            <li><a href="logout.php">Mes abonnements</a></li>
        </ul>
    </nav>
<?php } else {
?>
    <nav id="menu">
        <a href="news.php">Actualités</a>
        <a href="wall.php?user_id=<?php echo $userId ?>">Mur</a>
        <a href="feed.php?user_id=<?php echo $userId ?>">Flux</a>
        <a href="tags.php">Mots-clés</a>
    </nav>
    <nav id="user">
        <a href="#">Profil</a>
        <ul>
            <li><a href="settings.php?user_id=<?php echo $userId ?>">Paramètres</a></li>
            <li><a href="followers.php?user_id=<?php echo $userId ?>">Mes suiveurs</a></li>
            <li><a href="subscriptions.php?user_id=<?php echo $userId ?>">Mes abonnements</a></li>
            <li><a href="logout.php">Deconnexion</a></li>
        </ul>
    </nav>
<?php } ?>