<footer>
    <div class="container">
        <section class="act-assoc-bank">
            <section>
                <h3>Activities/Services</h3>
                <ul>
                    <?php
                    for ($i=0; $i < count($activities); $i++) { 
                    ?>

                    <li>
                        <?php echo $activities[$i]; ?>
                    </li>

                    <?php
                    }
                    ?>
                </ul>
            </section>
            <div class="vr"></div>
            <section>
                <h3>Association</h3>
                <ul>
                    <?php
                    for ($i=0; $i < count($associations); $i++) { 
                    ?>

                    <li>
                        <?php echo $associations[$i]; ?>
                    </li>

                    <?php
                    }
                    ?>
                </ul>
            </section>
            <div class="vr"></div>
            <section>
                <h3>Bank Reference</h3>
                <ul>
                    <?php
                    for ($i=0; $i < count($bankReference); $i++) { 
                    ?>

                    <li>
                        <?php echo $bankReference[$i]; ?>
                    </li>

                    <?php
                    }
                    ?>
                </ul>
            </section>
        </section>
        <span class="copyright">Copyright &copy; 2018 Novo Pacific Corp.<br></span> 
    </div>
    
</footer>