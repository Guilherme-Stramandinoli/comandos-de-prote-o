<?php 
declare(strict_types=1);

class Pessoas{
    
    private string $nome;
    private int $cpf;
    private string $email;

    public function __construct(string $nome, int $cpf, string $email){

        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;

    }
};


$guilherme = new Pessoas('guilherme', 78712545330, 'guilherme989@gmail.com');

class Produtos{ 

     private string $nome;
     private int $preco;
     private string $categoria;

     public function __construct(string $nome, int $preco, string $categoria)
     {
        $this->nome = $nome;
        if($preco <= 0) {
            $this->preco = 0;
        } else {
        $this->preco = $preco;
        }
        $this->categoria = $categoria;
     }
      
     public function pegarNome(){
        return $this->nome;
     }

     public function pegarpreco(){
        return $this->preco;
     }

     public function pegarcategoria(){
        return $this->categoria;
     }

     public function alterarValor(int $novoValor){
        $this->preco = $novoValor;
     }
};

$dobom = new Produtos('do bom', 15, 'leite');

echo $nome->pegarNome();
echo "<br>";  
echo $categoria->pegarcategoria();

$dobom->alterarValor(100);
echo "<br>";
echo $preco->pegarpreco();

class conta{
    private string $usuario;
    private int $dinheiro; 
    private int $senha;

     public function __construct(string $usuario, int $senha, int $dinheiro)
     {
        $this->usuario = $usuario;
        if($dinheiro <= 0) {
            $this->dinheiro = 0;
        } else {
        $this->dinheiro = $dinheiro;
        }
        $this->senha = $senha;
     }

     public function pegarUsuario(){
        return $this->usuario;
     }

     public function pegarSenha(){
        return $this->senha;
     }

     public function pegarDinheiro(){
        return $this->dinheiro;
     }
};

$bancomister = new conta('josemar santos', 8712, 25);
?>