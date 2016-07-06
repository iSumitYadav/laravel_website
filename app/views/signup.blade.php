<html>
    <head>
        <title>Login</title>
    </head>
    
    <body>
        {{Form::open(array('url'=>'add_usr'))}}
        
        {{Form::label('usr_name', 'User Name :')}}
        {{Form::text('usr_name')}}
        <br>
        {{Form::label('pswd', 'Passwrod :&nbsp;&nbsp;&nbsp;')}}
        {{Form::password('pswd')}}
        <br>
        {{Form::submit('Sign Up')}}
        <br>
        {{Form::close()}}
    </body>
</html>