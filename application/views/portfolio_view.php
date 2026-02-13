<div class="div-portfolio">
    <div class="div-title">
        <p>
            Портфолио
        </p>
    </div>
    <img class="img-portfolio" src="/images/portfolio.png" alt="image">


    <div class="div-info">
        <?php
            foreach($data as $row)
            {
                echo '<p class="p-year">' . $row['Year'] . '</p>';
                echo '<p class="p-site">' . $row['Site'] . '</p>';
                echo '<p class="p-descript">' . $row['Description'] . '</p>';
                echo '<hr class="hr-line">';
            }
        ?>
    </div>
</div>