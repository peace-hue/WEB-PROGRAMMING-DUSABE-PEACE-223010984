<?php
$conn = new mysqli("localhost", "root", "", "student_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$first = $_POST['first_name'];
$last = $_POST['last_name'];

$day = $_POST['day'];
$month_text = $_POST['month'];
$year = $_POST['year'];

$months = [
    "Jan"=>"01", "Feb"=>"02", "Mar"=>"03", "Apr"=>"04", "May"=>"05", "Jun"=>"06",
    "Jul"=>"07", "Aug"=>"08", "Sep"=>"09", "Oct"=>"10", "Nov"=>"11", "Dec"=>"12"
];
$month_num = isset($months[$month_text]) ? $months[$month_text] : "01";
$dob = "$year-$month_num-$day";

$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'] ?? '';
$address = $_POST['address'];
$city = $_POST['city'];
$pin = $_POST['pin_code'];
$state = $_POST['state'];
$country = $_POST['country'];

$hobbies = "";
if(isset($_POST['hobbies'])){
    $hobbies = implode(", ", $_POST['hobbies']);
}

$course = $_POST['course'] ?? '';

$class10_board = $_POST['board1'];
$class10_perc  = $_POST['perc1'];
$class10_year  = $_POST['year1'];

$class12_board = $_POST['board2'];
$class12_perc  = $_POST['perc2'];
$class12_year  = $_POST['year2'];

$grad_board    = $_POST['board3'];
$grad_perc     = $_POST['perc3'];
$grad_year     = $_POST['year3'];

$master_board  = $_POST['board4'];
$master_perc   = $_POST['perc4'];
$master_year   = $_POST['year4'];


$sql = "INSERT INTO students 
(first_name, last_name, dob, email, mobile, gender, address, city, pin_code, state, country, hobbies, course, 
class10_board, class10_percentage, class10_year, 
class12_board, class12_percentage, class12_year, 
grad_board, grad_percentage, grad_year, 
master_board, master_percentage, master_year)
VALUES 
('$first', '$last', '$dob', '$email', '$mobile', '$gender', '$address', '$city', '$pin', '$state', '$country', '$hobbies', '$course', 
'$class10_board', '$class10_perc', '$class10_year', 
'$class12_board', '$class12_perc', '$class12_year', 
'$grad_board', '$grad_perc', '$grad_year', 
'$master_board', '$master_perc', '$master_year')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registration Successful!'); window.location.href='index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
