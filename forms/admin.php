<html>

<head>
    <meta charset="utf-8">
    <link href="css/admin.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="outer">
        <div class="inner">
            <div class="list_lable">
                <p>Оставленные заявки</p>
            </div>
            <form action="" method="POST">
                <div class="list">
                    <table>
                        <?
                        include("php/creating.php");
                        ?>
                    </table>
                </div>
            </form>
        </div>
    </div>


</body>

</html>