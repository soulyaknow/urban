<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
*{
    box-sizing: border-box;
}
body{
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    font-weight: 400;
    color: #666666;
    background: #eaeff4;
}

.wrapper{
    margin: 0 auto;
    width: 100%;
    max-width: 1140px;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.container{
    position: relative;
    width: 100%;
    max-width: 600px;
    height: auto;
    display: flex;
    background: #ffffff;
    box-shadow: 0 0 5px #999999;
}
.login .col-left,
.login .col-right{
    padding: 30px;
    display: flex;
}
.login .col-left{
    width: 60%;
    clip-path: polygon(0 0, 0% 100%, 100% 0 );
    background: #44c7f5;
}
.login .col-right{
    padding: 60px 30px;
    width: 50%;
    margin-left: -10%;
}

@media(max-width: 575px){
    .login .container{
        flex-direction: column;
        box-shadow: none;
    }
    .login .col-left,
    .login .col-right{
     width: 100%;
     margin: 0;
     clip-path: none;
    }
    .login .col-right{
        padding: 30px;
    }

    
}


.login .login-text{
    position: relative;
    width: 100%;
    color: #ffffff;
}
.login .login-text h2{
    margin: 0 0 15px 0;
    font-size: 30px;
    font-weight: 700;
}
.login .login-text p{
    margin: 0 0 20px 0;
    font-size: 16px;
    font-weight: 500;
    line-height: 22px;
}

.login .login-text .btn{
    display: inline-block;
    padding: 7px 20px;
    font-size: 16px;
    letter-spacing: 1px;
    text-decoration: none;
    border-radius: 30px;
    color: #ffffff;
    outline: none;
    border: 1px solid #ffffff;
    box-shadow: inset 0 0 0 0 #ffffff;
    transition: .3s;
}
.login .login-text .btn:hover{
    color: #44c7f5;
    box-shadow: inset 150px 0 0 0  #ffffff;
}


.login .login-form{
    position: relative;
    width: 100%;
}
.login .login-form h2{
    margin: 0 0 15px 0;
    font-size: 22px;
    font-weight: 700;
}
.login .login-form p{
    margin: 0 0 10px 0;
    text-align: left;
    color: #666666;
    font-size: 15px;
}
.login .login-form p:last-child{
    margin: 0;
    padding-top: 3px;
}
.login .login-form p a{
    color: #44c7f5;
    font-size: 14px;
    text-decoration: none;
}
.login .login-form label {
    display: block;
    width: 100%;
    margin-bottom: 2px;
    letter-spacing: .5px;
}
.login .login-form p:last-child label{
    width: 60%;
    float: left;
}
.login .login-form label span{
    color: #ff574e;
    padding-left: 2px;
}
.login .login-form input{
    display: block;
    width: 100%;
    height: 35px;
    padding: 0 10px;
    outline: none;
    border: 1px solid #cccccc;
    border-radius: 30px;
}
.login .login-form select{
    display: block;
    width: 100%;
    height: 35px;
    padding: 0 10px;
    outline: none;
    border: 1px solid #cccccc;
    border-radius: 20px;
    color: #666666;
}
.login .login-form input:focus{
    border-color: #ff574e;
}
.login .login-form button,
.login .login-form input[type=submit] {
    display: inline-block;
    width: 100%;
    margin-top: 5px;
    color: #44c7f5;
    font-size: 16px;
    letter-spacing: 1px;
    cursor: pointer;
    background: transparent;
    border: 1px solid #44c7f5;
    border-radius: 30px;
    box-shadow: inset 0 0 0 0 #44c7f5;
    transition: .3s;
}
.login .login-form button:hover,
.login .login-form input[type=submit]:hover{
    color: #ffffff;
    box-shadow: inset 250px 0 0 0 #44c7f5;
}
</style>
<body>
    {{ $slot }}
</body>
</html>