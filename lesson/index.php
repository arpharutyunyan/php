<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>

        <form action="users.php" method="GET">

            <label for="number"> Enter number: </label><br><br>
            <input type="number" name="number" id="number"><br><br>
        
            <input type="button" id="button" value="Button"><br><br>

        </form>

        <div id="php_result"></div>

        <script>

            $("#button").click(function()
                {
                    let num = $("#number").val();  // get number from html form

                    $.get('users.php?age=' + num,  // request the url from that whant to get data
                        
                        function(data){

                            $('#php_result').html(data); // add result to the div
                        },
                         
                        
                    );
                }
            )

        </script>
        
    </body>
</html>