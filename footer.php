<footer>
    <h2>follow me <a href="https://www.instagram.com/heartofhelen/" target="_blank"><b>@heartofhelen</b></a></h2>

    <div id="footer-sidebar" class="secondary">
        <div id="footer-center">
            <?php
                if(is_active_sidebar('footer-center')){
                    dynamic_sidebar('footer-center');
                }
            ?>
        </div>
    </div>

</footer>