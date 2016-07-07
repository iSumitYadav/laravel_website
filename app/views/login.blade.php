<html>
    <head>
        <title>Login</title>
        <style type='text/css'>
            body{
                text-align: center;
                margin: 50px;
            }
        </style>
    </head>
    <body>
        {{ Form::open(array('url'=>'loggedIn'))}}
            {{Form::label('usr_name', 'UserName :')}}
            {{Form::text('usr_name')}}
            <br>
            {{Form::label('pswd', 'Password &nbsp;&nbsp;:')}}
            {{Form::password('pswd')}}
            <br>
            {{Form::submit('Login')}}
            <br>
        {{ Form::close()}}
    </body>
</html>
