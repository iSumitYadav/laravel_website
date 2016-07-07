<html>
    <head>
        <title>Sign Up</title>
        <style type='text/css'>
            body{
                text-align: center;
                margin: 50px;
            }
        </style>
    </head>
    
    <body>
        {{Form::open(array('url'=>'add_usr'))}}
        
        {{Form::label('usr_name', 'User Name :')}}
        {{Form::text('usr_name')}}
        <br>
        {{Form::label('pswd', 'Passwrod &nbsp;&nbsp;&nbsp;:')}}
        {{Form::password('pswd')}}
        <br>
        {{Form::label('email', 'E-mail &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:')}}
        {{Form::password('email')}}
        <br>
        {{Form::submit('Sign Up')}}
        <br>
        {{Form::close()}}
    </body>
</html>