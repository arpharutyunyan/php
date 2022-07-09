<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>

        <form action="">

            <label for="name"> Enter name: </label><br><br>
            <input type="text" name="name"><br><br>
        
            <input type="button" id="button" value="Button"><br><br>

            

        </form>

        <script>

            $("#button").click(function()
                {
                    $.ajax("file.php",
                        {
                            success: function(data){
                                alert("AJAX call was successful!");
                                alert("Data from the server" + data);
                            },
                            error: function(){
                                alert('There was some error performing the AJAX call!');
                            }
                        }
                    );
                }
            )

        </script>
        
    </body>
</html>