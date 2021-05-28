<?php
class User
{
    public $name;
    public $lastname;
    public $email;
    private $validated_email = false;
    public $nickname;
    private $premium = false;
    private $created_at;

    function __construct($email, $nickname)
    {
        if (!User::isValidMail($email)) {
            die();
        }
        $this->email = $email;
        $this->nickname = $nickname;
        $this->created_at = date("Y-m-d H:i:s");
    }
    public function upgradeMembership()
    {
        $this->premium = true;
    }
    public function validateMail()
    {
        $this->validated_email = true;
    }
    public static function randomNickname()
    {
        #poi vediamo;
    }
    public static function isValidMail($email)
    {
        return strpos($email, '@') && strpos($email, '.');
    }
}

$users = [
    'carlito' => new User(
        $email = 'carlitoilmito@htomail.com',
        $nickname = 'carlizio',
        $name = "Carlo",
        $lastname = "Ancelotti"
    ),
    'filo' => new User(
        $email = 'fmontani81@gmail.com',
        $nickname = 'johnwatson',
        $name = 'Filippo',
        $lastname = 'Montani'
    ),
    'walter' => new User(
        $email = 'walterveltroni@alice.it',
        $nickname = 'wwwalter'
    )

];

var_dump($users);

?>

<?php ?>
<?php ?>
<?php ?>