    <!DOCTYPE html>
    <head>
        <title>Login Form</title> 
    </head>
    <body>
        <span href="#" class="btn btn-default" id="toggle-login">Log in</span>
        <div id="login">
            <h1>Log in</h1>
            <form>
                <input type="userID" placeholder="UserID" />
                <input type="password" placeholder="Password" />
                <input type="submit" value="Log in" />
            </form>
        </div>
        <script>
            $('#toggle-login').click(function(){
                $('#login').toggle();
            });
        </script> 
    </body>
</html>