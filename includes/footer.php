        <div class="row">
            <div class="large-12 columns">
                <footer>
                    Copyright &copy; <?php echo (date('Y') == 2014) ? '2014' : '2014 - ' . date('Y'); ?> Buffalo Mountain Consulting | All Rights Reserved
                </footer>
            </div>
        </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/foundation.min.js"></script>
        <script>
            $(document).foundation();
            var bgImgHeight = $('.background-image').height();
            $('.logo-container').height(bgImgHeight);
        </script>
    </body>
</html>