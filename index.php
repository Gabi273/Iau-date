<?php
    include ('inc/header.php');
?>

    <form action="signup.php" method="POST">
        <input type="text" name="first" placeholder="Nume" required>
        <input type="text" name="last" placeholder="Prenume" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="pass" placeholder="Parola" required>
        <input type="submit" name="submit" value="Submit">
    </form>

<?php
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

foreach($result as $row){
        ?>
        <div class="container-grid">
            <p>Nume: <?php echo $row['name'];?></p>
            <p>Prenume: <?php echo $row['last'];?></p>
            <p>Email: <?php echo $row['email'];?></p>
            <p>Parola: <?php echo $row['pass'];?></p>
        </div>
        <?php               
}
?>

<?php
    include ('inc/footer.php');
?>
