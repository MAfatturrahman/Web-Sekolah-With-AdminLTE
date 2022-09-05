<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Sekolah</title>
    <Style>
        .judul {
            justify-content: center;
            background-color: black;
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

        .body-top p {
            color: gray;
            margin-bottom: 20px;
        }

        .body-top-space h3 {
            text-align: left;
            border-bottom-style: solid;
            border-bottom-color: gold;
            border-bottom-width: 50%;
            color: black;
            margin-bottom: 20px;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 12px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
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

        .logout {
            font-size: 24px;
            text-decoration: none;
            color: black;
        }

        .my_card {
            display: flex;
            width: 100%;
            height: 10%;
            padding: .8rem;
            margin-bottom: 10px;
            gap: .5rem;
            border-radius: 8px;
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
            background-color: rgba(222, 222, 222, .5);
        }

        .card_thumbnail {
            width: 10%;
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

        .footer {
            width: 100%;
            background-color: black;
            padding-bottom: 10px;
            padding-top: 20px;
            padding-left: 45%;
            padding-right: 45%;
        }

        .footer p {
            font-size: 15px;
            text-align: center;
        }

        .footer p:hover {
            /* color: white; */

            color: white;
            font-size: 15px;
        }
    </Style>
</head>

<body>

</body>

</html>
