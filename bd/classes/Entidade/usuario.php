<?php

class Usuario {

    private $nome;
    private $email;
    private $telefone;
    private $senha;
    private $imagem;
    private $cpf;
    private $dataNascimento;
    private $cidade;
    private $estado;
    private $rua;
    private $bairro;
    private $cep;
    private $status;
    private $perfil;

    function getCpf() {
        return $this->cpf;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getSenha() {
        return $this->senha;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getDataNascimento() {
        return $this->dataNascimento;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getRua() {
        return $this->rua;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCep() {
        return $this->cep;
    }

    function getStatus() {
        return $this->status;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }
}
?>