<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/db/conexao.php';

class usuario
{
    public  $id_usuario;
    public  $nome;
    public  $nascimento;
    public  $cpf;
    public  $genero;
    public  $telefone;
    public  $email;
    public  $senha;
    public  $img_usuario;
    public  $nivel_acesso;

    public function __construct($id_usuario = false)
    {
        if ($id_usuario) {
            $this->id_usuario = $id_usuario;
            $this->carregar();
        }
    }


    public function carregar()
    {
        $query = "SELECT * FROM usuarios WHERE id_usuario = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id_usuario);
        $stmt->execute();
        /* ao encontrar ela cria um array e depois atribui todos os valores restantes ao objeto */
        $id_usuario = $stmt->fetch();
        $this->nome = $id_usuario['nome'];
        $this->nascimento = $id_usuario['nascimento'];
        $this->cpf = $id_usuario['cpf'];
        $this->genero = $id_usuario['genero'];
        $this->telefone = $id_usuario['telefone'];
        $this->email = $id_usuario['email'];
        $this->senha = $id_usuario['senha'];
        $this->img_usuario = $id_usuario['img_usuario'];
        $this->nivel_acesso = $id_usuario['nivel_acesso'];
    }

    public function criar()
    {
        $query = "INSERT INTO usuarios (nome, nascimento, cpf, genero, telefone, email,senha, img_usuario) VALUES  (:nome, :nascimento, :cpf, :genero, :telefone, :email, :senha,:img_usuario)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':nascimento', $this->nascimento);
        $stmt->bindValue(':cpf', $this->cpf);
        $stmt->bindValue(':genero', $this->genero);
        $stmt->bindValue(':telefone', $this->telefone);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':senha', $this->senha);
        $stmt->bindValue(':img_usuario', $this->img_usuario);
        $stmt->execute();
        $id_usuario = $conexao->lastInsertId();
        return $id_usuario;
    }

    public static function listar()
    {
        $query = "SELECT * FROM usuarios";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }

    public function editar()
    {
        $query = "UPDATE usuarios SET nome = :nome, nascimento = :nascimento, cpf = :cpf, genero = :genero, telefone = :telefone, email = :email,senha=:senha,img_usuario=:img_usuario,nivel_acesso=:nivel_acesso  WHERE id_usuario = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':nascimento', $this->nascimento);
        $stmt->bindValue(':cpf', $this->cpf);
        $stmt->bindValue(':genero', $this->genero);
        $stmt->bindValue(":telefone", $this->telefone);
        $stmt->bindValue(":email", $this->email);
        $stmt->bindValue(":senha", $this->senha);
        $stmt->bindValue(":img_usuario", $this->img_usuario);
        $stmt->bindValue(":nivel_acesso", $this->nivel_acesso);
        $stmt->execute();
    }

    public function deletar()
    {
        $query = "DELETE FROM usuarios WHERE id_usuario = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id_usuario);
        $stmt->execute();
    }

    public static function logar($email, $senha)
    {
        $query = "SELECT * FROM Usuarios WHERE email = :email";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        $registro = $stmt->fetch();


        if (isset($registro['id_usuario']) && password_verify($senha, $registro['senha'])) {
            session_start();
            $_SESSION['usuario']['id_usuario'] = $registro['id_usuario'];
            $_SESSION['usuario']['nome'] = $registro['nome'];
            $_SESSION['usuario']['email'] = $registro['email'];
            $_SESSION['usuario']['nivel_acesso'] = $registro['nivel_acesso'];
            header("Location: /adote_me/index.php");
            exit();
        } else {
            setcookie('msg', 'Email ou Senha Incorreto!', time() + 10, '/adote_me/');
            setcookie('tipo', 'perigo', time() + 10, '/adote_me/');

            header("Location: /adote_me/views/login.php");
            exit();
        }
    }

    public static function listarMeusPets($id_usuario)
    {
        $query = "SELECT u.*, p.* FROM Pets p JOIN Usuarios u ON p.id_usuario = u.id_usuario WHERE u.id_usuario = :id AND adotado = 0";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $id_usuario);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }

    public static function meuEndereco($id_usuario){
        $query = "SELECT e.* FROM Usuarios u JOIN Enderecos e ON u.id_usuario = e.id_usuario WHERE u.id_usuario = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $id_usuario);
        $stmt->execute();
        $endereco = $stmt->fetch();
        return $endereco;
    }
}
