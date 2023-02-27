<?php
class Person {
    private $name;
    private $email;

    public function setName( $name ) {
        $this->name = $name;
    }

    public function setEmail( $email ) {
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}

$person = new Person();
if ( isset( $_POST["name"] ) ) {
    $person->setName( $_POST["name"] );
}
else{
    $person->setName("Please Enter your name in Task 1\n");
}

if ( isset( $_POST["email"] ) ) {
    $person->setEmail( $_POST["email"] );
}
else{
    $person->setEmail("Please Enter your email in Task 1\n");
}

echo "Task 3\n";
echo "<p>Name: " . $person->getName() . "</p>";
echo "<p>Email: " . $person->getEmail() . "</p>";
?>