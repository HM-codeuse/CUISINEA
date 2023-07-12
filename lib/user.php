<?php 
function saveUser(PDO $pdo, string $last_name, string $first_name, string $email, string $hashedPassword) {
    $sql = "INSERT INTO users (`last_name`, `first_name`, `email`, `password`) VALUES (:last_name, :first_name, :email, :password)";
    $query = $pdo->prepare($sql);
    $query->bindParam(':last_name', $last_name, PDO::PARAM_STR);
    $query->bindParam(':first_name', $first_name, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
    return $query->execute();
}
?>