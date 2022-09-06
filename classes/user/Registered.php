<?

require_once __DIR__ . '/User.php';
class Registered extends User{
    private $userName;
    private $lastName;
    private $discount;

    function __construct($_userName, $_lastName)
    {
        $this->userName = $_userName;
        $this->lastName = $_lastName;
    }

    // getter 
    public function getUserName(){
        return $this->userName;
    }

    public function getDiscount(){
        return $this->discount;
    }

    public function getLastName(){
        return $this->lastName;
    }

    // setter
    private function setDiscount($_discount){
        $_discount = 20;
        $this->discount = $_discount;
    }
}