



<label for="category">Category: </label>
<select class="" name="category">



<?php
$categories = ['- -', 'Animals', 'Trump', 'Creepy', 'Anime', '-'];

foreach ($categories as $category) { ?>
    <option
        <?php
        if ($category === $row["category"]) {
            echo "selected='selected'";
        }
        ?>
        value="<?=$category?>"><?=$category?></option>
<?php } ?>


</select>


<label for="displayable">Displayable: </label>
<select class="" name="displayable">

    <?php
    $displayable = ['- -', 'Yes', 'No'];

    foreach ($displayable as $displayable) { ?>
        <option
            <?php
            if ($displayable === $row["displayable"]) {
                echo "selected='selected'";
            }
            ?>
            value="<?=$displayable?>"><?=$displayable?></option>
    <?php } ?>

</select>



