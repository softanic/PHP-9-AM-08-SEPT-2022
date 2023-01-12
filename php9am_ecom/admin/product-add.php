<html>
    <head>

    </head>
    <body>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'php9am_ecom');
        $q = 'select * from categories';
        $res = mysqli_query($conn, $q);
        ?>
        <form action="action" method="get">
            <label>category</label>
            <select name="cat_id">
                <?php
                while ($cat = mysqli_fetch_array($res)) {
                    echo "<option value='{$cat['cat_id']}'>{$cat['cat_name']}</option>";
                }
                ?>
            </select>
            <input type="submit">
        </form>
    </body>
</html>