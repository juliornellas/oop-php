<?php

echo '<h1>OOP PHP</h1><hr>';

//Classe abstrata não pode ser abstrata
class Customer{
    // public $id = 1; //Pode setar um valor default
    // private $id = 1; //ao instanciar no customer o id fica inacessivel ao acesso direto de fora da classe, assim como protected
    public $id = 1;
    protected $name; //Protected para ter Acesso pela herança
    private $email;
    public $balance;

    //função que executará automaticamente ao instanciar um objeto
    public function __construct($id, $name, $email, $balance)
    {
        //Vc já assina, linka as propriedades ao objeto aos valores recebidos pelas variaveis
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->balance = $balance;
        echo 'O objeto foi instanciado! <br />';
        // echo '<pre>';
        // var_dump($this);
        // echo '</pre>';
    }

    // private function getCustomer($id){
    public function getCustomer($id){
        // $this->id = $id; //para acessar a propriedade ID da Classe
        // return $this->id;
        // return "Valor enviado: $id.
        //         <br/>This->id: $this->id.";
    }

    public function getEmail(){
        return $this->email;
    }

    public function Nome(){
        return $this->name;
    }

    //Construct e destruct são comumente chamados de métodos magicos
    // public function __destruct()
    // {
    //     echo '<br />Destruct function';
    // }
}

//Instanciar
// $customer = new Customer;
// $customer = new Customer(13, 'Tiradentes','tira@dentes.com','Aposentado');

// echo $customer->id; //Como private, ERRO
// echo $customer->getCustomer(13); //Como private, Erro
// echo $customer->name;
// echo '<br>';
// echo $customer->getEmail();
// echo '<br>';
// echo $customer->Nome().' - Customer';
// echo '<br>';


class Subscriber extends Customer{
    public $plan;

    public function __construct($id, $email, $name, $balance, $plan)
    {
        parent::__construct($id, $email, $name, $balance);
        $this->plan = $plan;
    }

    public function getName(){
        return $this->name;
    }
}

$subscriber = new Subscriber(13,'Tiradentes','tira@dentes.com','Aposentado','Pro');

echo $subscriber->getName();
echo '<br>';
echo $subscriber->getEmail();


echo '<hr />';
echo 'Métodos e Propriedades Estáticas';
echo '<br />';

class User{
    public $username;
    public $password;
    // private static $passwordLength = 5; //Estatico é bom para atributos que não serão variaveis
    public static $passwordLength = 5; //Estatico é bom para atributos que não serão variaveis

    public static function getPasswordLength(){
        return self::$passwordLength; //qd usa STATIC não se usa THIS e sim SELF
    }
}

echo User::$passwordLength;
// echo User::getPasswordLength();

?>