<?

require_once __DIR__ . '/User.php';
class Registered extends User{
    protected $age;
    protected $address;
    private $discount;

    function __construct($_userName, $_lastName, $_creditCard, $_cart, $_age, $_address)
    {
        parent::__construct($_userName, $_lastName, $_creditCard, $_cart);
    }

    // getter 
    public function getAge(){
        return $this->age;
    }

    public function getAddress(){
        return $this->address;
    }

    public function getDiscount(){
        return $this->discount;
    }

    // setter
    private function setAge($_age){
        $this->age = $_age;
    }

    private function setAddress($_address){
        $this->address = $_address;
    }

    private function setDiscount($_discount){
        $_discount = 20;
        $this->discount = $_discount;
    }
}