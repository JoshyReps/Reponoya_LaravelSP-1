

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/index', function () {

        $conn = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'), env('DB_DATABASE'));
        if (!$conn) {
            echo("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM Student";
        $result = mysqli_query($conn, $sql);
        $samples = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
    return view('students.index', ["samples" => $samples]);
});


Route::get('/show/student/{id}', function ($id) {

    $conn = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'), env('DB_DATABASE'));
    if (!$conn) {
        echo("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM Student";
    $result = mysqli_query($conn, $sql);
    $samples = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // $samples = [
    //     1 => ["id" => 1, "name" => "Alice", "course" => "BSCS", "email" => "alice@gmail.cm", "year" => 2],
    //     2 => ["id" => 2, "name" => "Mewtwo", "course" => "BSIT", "email" => "mewtwo@gmail.com", "year" => 3],
    //     3 => ["id" => 3, "name" => "Hotdog", "course" => "BSIT", "email" => "hotdog@yahoo.com", "year" => 2],
    //     4 => ["id" => 4, "name" => "Plencia", "course" => "BSN", "email" => "plencia@gmail.com", "year" => 1],
    // ];

    $student = $samples[$id] ?? abort(404);

    return view('students.show', compact('student'));
});



Route::get('/add', function () {
    return view('students.create');
});

Route::get('/edit/{id}', function ($id) {

    $conn = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'), env('DB_DATABASE'));
    if (!$conn) {
        echo("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM Student";
    $result = mysqli_query($conn, $sql);
    $samples = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $student = $samples[$id] ?? abort(404);

    return view('students.edit', compact('student'));
});

Route::post('/addstudent', function () {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $year = $_POST['year'];

    $conn = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'), env('DB_DATABASE'));
    if (!$conn) {
        echo("Connection failed: " . mysqli_connect_error());
    } else {
        $stmt = $conn->prepare("INSERT INTO Student (name, course, email, year) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $name, $course, $email, $year);
        $stmt->execute();
        echo "New record created successfully";
        $stmt->close();
        $conn->close();
    }

    return redirect('/index');
});