<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $uname= isset($_POST['uname']) ? $_POST['uname'] : 'Not provided';
    $date= isset($_POST['date']) ? $_POST['date'] : 'Not provided';
    $email= isset($_POST['email']) ? $_POST['email'] : 'Not provided';
    $tel= isset($_POST['tel']) ? $_POST['tel'] : 'Not provided';
    $pass= isset($_POST['pass']) ? $_POST['pass'] : 'Not provided';
    $gender= isset($_POST['gender']) ? $_POST['gender'] : 'Not provided';
    $area= isset($_POST['area']) ? implode(",", $_POST['area']) : 'Not provided';
    $country= isset($_POST['country']) ? $_POST['country'] : 'Not provided';
    $satis= isset($_POST['satis']) ? $_POST['satis'] : 'Not provided';
    $range= isset($_POST['range']) ? $_POST['range'] : 'Not provided';
}
echo "<table border='1' cellspacing='0'>";
echo "<tr><th>" ."Names". "</th>"."<th>". 'Date of birth'."</th>"."<th>".'Email'."</th>"."<th>".'Password'."</th>"."<th>".'Telephone'."<th>".'Gender'."</th>"."<th>".'Areas explored'."</th>"."<th>".'Country'."</th>"."<th>".'Level of satisfaction'."</th>"."<th>".'Rating of services'."</th>". "</th></tr>";
echo "<tr><td>" ."$uname". "</td>"."<td>". "$date"."</td>"."<td>"."$email"."</td>"."<td>"."$pass"."</td>"."<td>"."$tel"."<td>"."$gender"."</td>"."<td>"."$area"."</td>"."<td>"."$country"."</td>"."<td>"."$satis"."</td>"."<td>"."$range"."</td>". "</td></tr>"
?>