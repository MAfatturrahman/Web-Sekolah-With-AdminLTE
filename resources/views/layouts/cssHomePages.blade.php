<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sekolah</title>
    <style>
        body {
            background-color: whitesmoke;
        }

        .judul {
            justify-content: center;
            display: flex;
            font-size: 40px;
            text-decoration: none;
            margin-top: 40px;
            margin-left: 50%;
            margin-right: 50%;
            color: black;
        }

        .judul:hover {
            color: #111;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #007bff;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 12px;
            color: whitesmoke;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: black;
        }

        .isi-navbar a:hover {
            color: white;
            background-color: #2a91ff;
            margin-left: 5px;
            margin-right: 17px;
            border-radius: 10px;
        }

        .login {
            font-size: 24px;
            text-decoration: none;
            color: white;
        }

        .login:hover {
            color: black;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        .img {
            width: 100%;
            height: calc(100vh - 52px);
            background-image: url('https://p4.wallpaperbetter.com/wallpaper/663/236/8/hallway-window-school-door-wallpaper-preview.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: rgb(0, 0, 0);
        }

        .img h1 {
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 8px 32px 0 rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(3.5px);
            -webkit-backdrop-filter: blur(4.5px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            padding: 1rem;
        }

        .body-top p {
            color: gray;
            margin-bottom: 20px;
        }

        .body-top-space h3 {
            text-align: center;
            border-bottom-style: solid;
            border-bottom-color: #007bff;
            border-bottom-width: 50%;
            color: black;
            margin-bottom: 20px;
        }

        .my_card {
            display: flex;
            width: 100%;
            height: 10%;
            padding: .8rem;
            margin-top: 40px;
            margin-bottom: 40px;
            gap: .5rem;
            border-radius: 8px;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
        }

        .my_card_misi {
            display: flex;
            width: 100%;
            height: 10%;
            padding: .8rem;
            margin-top: 40px;
            margin-bottom: 40px;
            gap: .5rem;
            border-radius: 8px;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
        }

        .card_thumbnail {
            width: 30%;
            height: 100%;
        }

        .card_thumbnail img {
            width: 100%;
            border-radius: 5px;
            height: 100%;
            object-fit: cover
        }

        .card_content {
            width: 70%;
            height: 100%;
        }

        .card_title {
            font-size: 1.5rem;
        }

        .card_description {
            font-size: .8rem;
        }

        .sambutan {
            background-color: #545454;
            width: 100%;
            padding: 2% 5%;
        }

        .title-sambutan {
            color: white;
            font-size: 20px;
            text-align: center;
        }

        .sambutan p {
            color: white;
        }

        .footer {
            width: 100%;
            background-color: #007bff;
            padding-bottom: 10px;
            padding-top: 20px;
            padding-left: 45%;
            padding-right: 45%;
        }

        .footer p {
            font-size: 15px;
            text-align: center;
            color: white
        }

        .footer p:hover {
            color: black;
        }
    </style>
</head>

<body>

</body>

</html>
