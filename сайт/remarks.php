<?php
    include('tpl/header.php');
    include('tpl/nav.php');
?>
<main class="flex">
    <h2>Send your remark</h2>
    <form action="save_remarks.php" method="post">
        <p>
            <label>Message theme:<br></label>
            <textarea name="topic" cols="35" rows="1"></textarea>
        </p>
        <p>
            <label>Message:<br></label>
            <textarea name="text" cols="35" rows="6"></textarea>
        </p>
        <p class="submit-btn">
            <input class="btn" type="submit" name="submit" value="Сохранить">
        </p>
    </form>
</main>
<?php
    include('tpl/footer.php');
?>