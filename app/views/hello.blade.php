<html>
    <head>
        <title>Site</title>
        <style type="text/css">
            body{
                text-align: center;
                margin: 50px;
            }
            Form{
                margin: 25px;
            }
        </style>
    </head>
    <body>
        {{ 'Welcome to Site' }}
        {{Form::open(array('url'=>'login'))}}
            {{Form::submit('Login')}}
        {{Form::close()}}
        <br>
        {{Form::open(array('url'=>'signup'))}}
            {{Form::submit('Sign Up')}}
        {{Form::close()}}
    </body>
</html>
