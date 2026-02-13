<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <style>

        * {
            box-sizing: border-box;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0rem 2.5rem;
            width: 100%;
            box-shadow: 5px 5px 15px #a7a7a7;
        }

        ul {
            display: flex;
            gap: 2rem;
        }

        li {
            list-style-type: none
        }

        h1 {
            margin: 5rem;
            margin-bottom: 2rem;
            text-align : center;
            font-size: 3.5rem
        }

        p {
            text-align: center;
            font-size: 1.25rem;
            padding: 0rem 1rem;
            width: 60%;
            font-style : italic;
        }

        p span {
            font-style : normal;
            font-size: 2rem
        }


    </style>
</head>
<body>
    {{-- <nav>
        <div>
            SPortal 📚📕
        </div>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/index">Students</a></li>
            <li><a href="/add">Add</a></li>
        </ul>
    </nav> --}}

    <x-navbar></x-navbar>
    <x-title>Student Portal</x-title>

    <p>
        <?php
            if(DB::connection()->getPdo()) {
                echo "Successfully connected to the database: ";
            }


            // $conn = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'), env('DB_DATABASE'));
            // if (!$conn) {
            //     echo("Connection failed: " . mysqli_connect_error());
            // }
            // $sql = "SELECT * FROM Student";
            // $result = mysqli_query($conn, $sql);
            // $students = mysqli_fetch_all($result, MYSQLI_ASSOC);
            // print_r($students);
        ?>
    </p>

    

    <p><span>"</span> In the student's portal, you'll find not only academic resources but also the tools to mold character, build discipline, and inspire growth. <span>"</span></p>
</body>
</html>
