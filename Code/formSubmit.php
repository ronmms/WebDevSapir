<?php
if (!isset($_POST["name"])) {
    ?>
<section id="contact-me" onkeyup="charsCount()">
        <h1>Contact me!</h1>
        <form method="post">
            <label>Full name:</label><br>
            <input name="name" type="text"><br>
            <label>Phone number:</label><br>
            <input name="phone" type="text"><br>
            <label>Email adress:</label><br>
            <input name="email" type="email"><br>
            <label>Enter your message here:</label><br>
            <textarea name="message" id="message" cols="34" rows="8"></textarea><br>
            <p id="remain-chars">remaining chars: 200</p>
            <input id="submit-button" type="submit" disabled>
        </form>
    </section>
<?php
} else {
    ?>
    <section id="contact-me">
        <h1>thanks <?php echo $_POST["name"] ?> </h1>
        <h5>phone: <?php echo $_POST["phone"] ?> </h5>
        <h5>email: <?php echo $_POST["email"] ?> </h5>
        <p>message: <br> 
        <?php echo $_POST["message"] ?> </p>
    </section>
<?php
}
?>
?>