<?php
//Database Connection
$host = 'localhost';
$db = 'it30a_lab_db';
$user = 'root';
$pas = '';
$charset = 'utf8mb4';

$dsn = "msql:host=$host; dbname=$db; charset=$charset";

$option = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES=>false
];

try{
    $pdo = new PDO($dsn,$user,$pass,$option);
}catch(PDOExceptiom $e){
    die("Database connection failed" . $e->getMessage());
}

// Session
Session_start();

// Determin current section
$section = $_GET['action'] ?? '';

// CRUD Operations
$section = $_GET['action'] ?? '';

?>

<DOCTYPE html>
<html langs="en>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0";
    <title>LIBRARY SYSTEM</title>
</head>
<body>
    <h1>SIMPLE LIBRARY SYSTEM</h1>
    <nav>
        <a href="index.php?section=students">Students</a>
        <a href="index.php?section=books">books</a>
        <a href="index.php?section=borrow">borrow</a>
</nav>
<hr>
<?php if($section==='students'): ?>
    <h1>Students</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>              
                <th>Last Name</th>    
                <th>Course<th>    
                <th>Created At</th>    
                <th>Actions</th>
            <tr>
        <thead>
        <tbody>
            <?php foreach($students as $student): ?>
                <tr>
                    <td>
                        <?= htmlspecialchars($student['student_id']) ?>
                    </td>
                    <td>
                        <?= htmlspecialchars($student['student_first_name']) ?>
                    </td>
                    <td>
                        <?= htmlspecialchars($student['student_last_name']) ?>
                    </td>
                    <td>
                        <?= htmlspecialchars(student['student_course']) ?>
                    </td>
                    <td>
                        <?= htmlspecialchars(student['student_created_at']) ?>
                    </td>
                    <td>
                        <a>edit</a>
                        
                        <a>DELETE</a>
                    </td>
                    
                </tr>
            <?php endforeach?>
        </tbody>
    <table>
<?php endif; ?>
                        
       