<?php
$title = 'Contact Buffalo Mountain Consulting';
include('includes/header.php');
$body = "Name: {$_POST['contact-name']}
Email: {$_POST['contact-email']}
Message: {$_POST['contact-message']}";
?>

        <form id="contact-form" action="contact.php" method="POST">
            <div class="row">
                <div class="large-8 large-offset-2 medium-8 medium-offset-2 small-12 columns">
                    <?php
                    if (!empty($_POST['contact-name']) && !empty($_POST['contact-email']) && !empty($_POST['contact-message'])) {
                        if (!filter_var($_POST['contact-email'], FILTER_VALIDATE_EMAIL)) {
                            echo '<div data-alert class="alert-box alert radius">
                                    Please enter a valid email address.
                                    <a href="#" class="close">&times;</a>
                                </div>';
                        } else {
                            mail("tommartin@yahoo.com", "Message from BuffaloMountainConsulting.com", "$body");
                            echo '<div data-alert class="alert-box success radius">
                                    Thank you for contacting Buffalo Mountain Consulting. Your message has been received.
                                    <a href="#" class="close">&times;</a>
                                </div>';
                        }
                    }
                    ?>
                    <h2>Contact</h2>
                    <label>Name
                        <input type="text" placeholder="Enter your name" name="contact-name" id="contact-name" />
                    </label>
                    <label>Email
                        <input type="text" placeholder="Enter your email address" name="contact-email" id="contact-email" />
                    </label>
                    <label>Message
                        <textarea name="contact-message" id="contact-message"></textarea>
                    </label>
                    <div>
                        <input type="submit" id="submit" name="submit" class="button" value="Submit" />
                    </div>
                </div>
            </div>
        </form>

<?php include('includes/footer.php'); ?>