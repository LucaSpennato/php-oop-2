<?

require_once __DIR__ . '/User.php';
class Registered extends User{
    private $userName;
    private $lastName;

    function __construct($_userName, $_lastName)
    {
        $this->userName = $_userName;
        $this->lastName = $_lastName;
    }

    // getter 
    public function getUserName(){
        return $this->userName;
    }

    public function getDiscounted(){
        $total = parent::getCartTotal();
        return $total * 0.8;
    }

    public function getLastName(){
        return $this->lastName;
    }
}