<?php
    class userProfessor{

        private $id;
        private $usuario;
        private $senha;
        private $nome;
        private $email;
        private $cpf;
        private $telefone;
        private $numeroConselho;


    /**
     * userProfessor constructor.
     * @param $id
     * @param $usuario
     * @param $senha
     * @param $nome
     * @param $email
     * @param $cpf
     * @param $telefone
     * @param $numeroConselho
     */
    function __construct($id, $usuario, $senha, $nome, $email, $cpf, $telefone, $numeroConselho){


            $this->id = $id;
            $this->usuario = $usuario;
            $this->senha = $senha;
            $this->nome = $nome;
            $this->email = $email;
            $this->cpf = $cpf;
            $this->telefone = $telefone;
            $this->numeroConselho = $numeroConselho;

        }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getNumeroConselho()
    {
        return $this->numeroConselho;
    }

    /**
     * @param mixed $numeroConselho
     */
    public function setNumeroConselho($numeroConselho)
    {
        $this->numeroConselho = $numeroConselho;
    }

    }
?>