<?php
require_once "conexao.php";

<<<<<<< HEAD
=======
echo "<link rel='stylesheet' href='css/style3.css'>";

>>>>>>> 1b58698 (VS 1.4)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try {

<<<<<<< HEAD
        //  Capturando e limpando dados do formulário
=======
        // Capturando dados
>>>>>>> 1b58698 (VS 1.4)
        $nome      = trim($_POST["nm_nome"] ?? "");
        $endereco  = trim($_POST["ds_endereco"] ?? "");
        $telefone  = trim($_POST["nr_telefone"] ?? "");
        $email     = trim($_POST["ds_email"] ?? "");

<<<<<<< HEAD
        // checkbox: se não vier marcado → 0
        $estcivil  = isset($_POST["ds_estcivil"]) ? 1 : 0;

        //  Validação simples (didática)
        if ($nome == "") {
            die("O nome é obrigatório.");
        }
       
=======
        // Checkbox
        $estcivil = isset($_POST["ds_estcivil"]) ? 1 : 0;

        // Validação
        if ($nome == "") {
            die("O nome é obrigatório.");
        }

        // SQL
>>>>>>> 1b58698 (VS 1.4)
        $sql = "INSERT INTO tb_clientes
                (nm_nome, ds_endereco, nr_telefone, ds_email, ds_estcivil)
                VALUES
                (:nome, :endereco, :telefone, :email, :estcivil)";

<<<<<<< HEAD
        /*
        prepare -> é um método do PHP Data Objects (PDO) que prepara uma consulta SQL para execução, retornando um objeto
        
        O bindParam() no PHP PDO é um método usado para vincular (associar) uma variável PHP a um marcador nomeado (:nome) ou de interrogação (?) em uma consulta SQL preparada
        
        */ 


        $stmt = $pdo->prepare($sql);

        //  Bind dos parâmetros
=======
        $stmt = $pdo->prepare($sql);

        // Bind
>>>>>>> 1b58698 (VS 1.4)
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":endereco", $endereco);
        $stmt->bindParam(":telefone", $telefone);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":estcivil", $estcivil, PDO::PARAM_INT);

<<<<<<< HEAD
        //Executa
        $stmt->execute();

        echo "Cliente cadastrado com sucesso!";
        

    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }

} else {
    echo "Erro no envio do formulário.";
=======
        // Executa
        $stmt->execute();

        echo "
        <div class='container'>
            <h1>✅ Cliente cadastrado!</h1>

            <p>
                O cliente foi salvo com sucesso no banco de dados.
            </p>
            <a href='index.html' class='btn'>
                Voltar
            </a>

            <a href='lista-clientes.php' class='btn'>
                Ver Clientes
            </a>
        </div>
        ";

    } catch (PDOException $e) {

        echo "
        <div class='container erro'>
            <h1>❌ Erro ao cadastrar</h1>

            <p>{$e->getMessage()}</p>

            <a href='index.html' class='btn'>
                Voltar
            </a>
        </div>
        ";
    }

} else {

    echo "
    <div class='container erro'>
        <h1>⚠ Erro</h1>

        <p>Erro no envio do formulário.</p>

        <a href='index.html' class='btn'>
            Voltar
        </a>
    </div>
    ";
>>>>>>> 1b58698 (VS 1.4)
}
?>