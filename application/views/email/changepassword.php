<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <title>Password Update</title>

    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        /* text-align: center !important; */
    }

    .content {
        width: 500px;
        margin: auto;
        /* background: #c63c96; */
        padding-bottom: 20px;
    }

    .content-row {
        padding: 20px;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="content-row">
                <div class="col-lg-12">
                    <p>Dear <strong><?= $name ?></strong>,</p>

                    <p>This is a courtesy message to let you know
                        that your member-intlseaways password has been
                        successfuly changed. No response is needed.
                    </p>

                    <p>Thank you,
                        <br>
                        International Seaways, Inc.
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>