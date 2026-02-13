<div class="div-comments">
    <div class="div-title">
        <p>
            Отзывы
        </p>
    </div>
    <img class="img-comments" src="/images/comments.png" alt="image">


    <div class="div-comment">
        <?php
            foreach($data as $row)
            {
                echo '<p class="p-name">' . $row['Name'] . '</p>';
                echo '<p class="p-date">' . $row['Date'] . '</p>';
                echo '<p class="p-comments">' . $row['Comments'] . '</p>';
                echo '<hr class="hr-line">';
            }
        ?>
    </div>
</div> 