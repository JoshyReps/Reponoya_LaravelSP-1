<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Add</title>
    <style>

        * {
            box-sizing: border-box
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center
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

        form {
            width: 50%;
        }

        .input {
            padding: .5rem;
            margin: .25rem;
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .input label {
            font-size: 1.25rem;
        }

        .input input {
            width: 50%;
            font-size: 1rem;
            padding: .5rem;
            border: none;
            border-bottom: 1.5px solid black;
        }

        button {
            background-color: #123456;
            padding: .35rem 1rem;
            border-radius: 100px;
            color : white;
            text-decoration: none;
            margin: 2rem;
            font-size: 1.15rem;
            margin-bottom : 0
        }

        p {
            opacity: .5;
            font-style: italic;
        }

    </style>
</head>
<body>

    <x-navbar></x-navbar>
    <x-title>Student Add</x-title>

    <form action="/addstudent" method="POST" id="studentForm">
        @csrf
        <div class="input">
            <label for="name">Name</label>
            <input type="text" placeholder="Name..." name="name" id="name" form="studentForm">
        </div>
        <div class="input">
            <label for="email">Email</label>
             <input type="email" placeholder="Email..." name="email" id="email" form="studentForm">
        </div>
        <div class="input">
            <label for="course">Course</label>
             <input type="text" placeholder="E.g BSCS" name="course" id="course" form="studentForm">

        </div>
        <div class="input">
            <label for="year">Year</label>
            <input type="text" placeholder="E.g 1" name="year" id="year" form="studentForm">
        </div>
        <button type="submit" form="studentForm">Add Student</button>
        
    </form>
    <p>Currently Does not Work D:</p>

</body>
</html>
