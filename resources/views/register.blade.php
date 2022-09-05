{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        .badan {
            /* background: linear-gradient(150.73deg, #0485FC 5%, #00F0FF 50.06%, #03f9af 65.83%, #05FF0F 100%); */
            background: linear-gradient(115.53deg, #0047FF 0%, #00FFC2 70%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 20px);
        }
        .GG {
            background-color: white;
            filter: opacity(900%);
            opacity: 0.5;
            width: 500px;
            height: 320px;
            border-radius: 30px;
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        p{
            font-family: 'Balthazar';
            font-size: 30px;
            text-align: center;
        }

        .Username input{
            background: #D9D9D9;
            border-radius: 15px;
            padding: .5rem .75rem;
            width: 300px;
        }

        .Password input{
            background: #D9D9D9;
            border-radius: 15px;
            padding: .5rem .75rem;
            width: 300px;
        }
        .Checkbox {
            margin-top: 10px;
            margin-right: 40%;
        }
        
        .buttonlogin {
            background: linear-gradient(115.53deg, #0047FF 0%, #00FFC2 70%);
            padding: 5px;
            margin-top: 3px;
            width: 300px;
            border-radius: 30px;
            text-align: center;
            text-decoration: none;
        }
        a {
            background: linear-gradient(115.53deg, #0047FF 0%, #00FFC2 70%);
            padding: 3.6px;
            margin-top: 10px;
            width: 290px;
            border-radius: 30px;
            text-align: center;
            text-decoration: none;
            outline-color: black;
            outline-width: 2px;
            outline-style: solid;
        }

        .buttonlogin:hover, a:hover{
            color: white;
        }
    </style>
</head>
<body class="badan">
    <form class="GG" method="POST" action="{{ route('home.postRegister')}}">
        @csrf
        <center><p>Create New Account</p></center>
        <div class="Username" style="text-align: center;">
            <label for="inputEmail4"></label><br>
            <input type="text" placeholder="Name" id="username" name="name">
        </div>
        <div class="Username" style="text-align: center;">
            <label for="inputEmail4"></label><br>
            <input type="text" placeholder="Username" id="username" name="username">
        </div>
  
        <div class="Password" style="text-align: center;">
            <label for="inputPassword4"></label><br>
            <input type="password" placeholder="Password" id="password" name="password">
        </div>

        <div class="Checkbox">
            <input type="checkbox" id="checkbox" name="checkbox">
            <label for="inputCheckbox4">Remember Me</label>
        </div>
        <br>
        <button type="submit" class="buttonlogin">Create</button>
        <a href="{{ url('guru')}}">Back</a>
    </form>
    <a href="{{ url('/guru')}}" class="buttonlogin" type="submit">Login</a><br>
</body>
</html> --}}