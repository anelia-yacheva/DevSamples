<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Title</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h1>Показва валутите</h1>
    <div class="row">
        <div class="col-lg-9 col-lg-offset-3">
            <!--    =========    тук извежда резултатите ============== -->
            <div class="col-lg-12" id="results"></div>
            <div id="loader_message"></div>
            <!--    =========   ============= ============== -->
        </div>
    </div>
</div>

<script type="text/javascript">

    var busy = false;
    var limit = 15
    var offset = 0;

// ======================== Ajax функцията ================================== //
    function displayDatabaseRecords(limit, offset) {
        $.ajax({
            type: "GET",
            async: false,
            url: "currency.php",
            data: "limit=" + limit + "&offset=" + offset,
            cache: false,
            beforeSend: function() {
                $("#loader_message").html("").hide();
            },
            success: function(result) {

                $("#results").append(result);

                if (result === "") {
                    $("#loader_message").html('<button class="btn btn-default" type="button">Няма повече записи</button>').show()
                } else {
                    $("#loader_message").html('<button class="btn btn-default" type="button">' +
                        '<img src="loader.gif" alt="" width="24" height="24"> Зареждат се още ... </button>').show();
                }
                window.busy = false;

            }
        });
    }
// ======================================================================================================================================
    $(document).ready(function() {
        // първоначално зареждане на резултатите
        if (busy == false) {
            busy = true;

            displayDatabaseRecords(limit, offset);
        }
        // показва при скролиране
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() > $("#results").height() && !busy) {
                busy = true;
                offset = limit + offset;

                // нарочно забавя зареждането
                setTimeout(function() {
                    displayDatabaseRecords(limit, offset);
                    }, 500);

                console.log(offset);
                // displayDatabaseRecords(limit, offset);

            }
        });

    });

</script>

</body>

</html>