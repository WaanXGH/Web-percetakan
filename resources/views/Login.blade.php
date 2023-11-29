<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link rel="stylesheet" href="{{asset('css/login-register.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    width: 100%;
    min-height: 100vh;
    background-position: center;
    background-image: url(https://i.pinimg.com/originals/a8/05/4b/a8054bd49daa169530dcb99b0c606a66.gif);
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    width: 400px;
    min-height: 400px;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(8px);
    border-radius: 5px;
    box-shadow: 0 10px 5px rgba(0,0,0,.3);
    padding: 40px 30px;

}

.container .login-text {
    color: #111;
    font-weight: 500;
    font-size: 1.1rem;
    text-align: center;
    margin-bottom: 20px;
    display: block;
    text-transform: capitalize;
}






.container .login-email .input-group {
   border-bottom: 2px solid white;
    margin-bottom: 25px;
}

.container .login-email .input-group input {
   
    width: 100%;
    height: 90%;
    /* border: 2px solid #e7e7e7; */
    
    border: none;
    padding: 15px 25px;
    border-radius: 30px;
    font-size: 1rem;
    background: transparent;
    outline: none;
    transition: .3s;
}

.container .login-email .input-group input:focus, .container .login-email .input-group input:valid {
    border-color: #a29bfe;
}

.container .login-email .input-btn .btn {
    display: block;
    width: 100%;
    padding: 15px 20px;
    text-align: center;
    border: none;
    background: #a29bfe;
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #FFF;
    cursor: pointer;
    transition: .3s;
    margin-bottom: 15px;
    box-shadow: 0 7px 5px rgba(0,0,0,.3);
}

.container .login-email .input-btn .btn:hover {
    transform: translateY(-5px);
    background: #6c5ce7;
}

.login-register-text {
    
    color: #111;
    font-weight: 600;
}

.login-register-text a {
    text-decoration: none;
    color: #6c5ce7;
}

@media (max-width: 430px) {
    .container {
        width: 300px;
    }
    
}
.input-group i{
    position: absolute;
    left: 84%;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
}

    </style>
</head>

<body>
<div class="container">
        @if ($errors -> any()) 
        <div class="alter alter-denger">
            <ul>@foreach($errors -> all() as $item )
                <li>{{$item}}</li>
                @endforeach
            </ul>
        @endif
            
        <form action="" method="POST" class="login-email">
            @csrf
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">

                <i class='bx bx-envelope' ></i>
                <input type="email" placeholder="Email" name="email">
               
            </div>
            <div class="input-group">
                <i class='bx bx-lock-alt' ></i>
                <input type="password" placeholder="Password" name="password">
            </div>
            <div class="input-btn">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Don't have an account? <a href="">Register Here</a></p>
           
        </form>
    </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-heart-eyes" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z"/></svg>
</body>

</html>