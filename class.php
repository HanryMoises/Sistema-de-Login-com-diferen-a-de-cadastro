<?php

class Usuarios
{
    public $Conn;
    public $Email;
    public $Senha;
    public $Tipo;

    function Informacoes($email, $senha)
    {
        $this->Email = $email;
        $this->Senha = $senha;

        $this->Conexao();
        $conn = $this->Conn;
        $sql = "SELECT tipo_user FROM usuarios WHERE email_user='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $this->Tipo = $row['tipo_user'];
            }
        } else {
           return;
        }
        $conn->close();
    }

    function Conexao()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bd_usuarios";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $this->Conn = $conn;
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }

    function ValidarUsuario($email, $senha)
    {
        $this->Conexao();
        $sql = "SELECT * FROM usuarios";
        $conn = $this->Conn;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                if ($email == $row["email_user"] && $senha == $row["senha_user"]) {

                    header("location:processar.php");
                }
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    }
}
