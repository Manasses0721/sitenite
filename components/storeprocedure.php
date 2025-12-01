<?php
// procedures_setup.php
// Execute este arquivo UMA VEZ para criar todas as Stored Procedures do sistema
include("../conexao.php");

// Função auxiliar para executar múltiplas queries
function executarProcedure($conn, $sql, $nome) {
    if ($conn->multi_query($sql)) {
        echo "✓ Procedure '$nome' criada com sucesso!<br>";
        while ($conn->more_results() && $conn->next_result()) {;} // limpa buffer
    } else {
        echo "✗ Erro ao criar '$nome': " . $conn->error . "<br>";
    }
}

// 1. LISTAR usuários e colaboradores (UNION)
$sql = "
DELIMITER $$
CREATE OR REPLACE PROCEDURE listarPessoas()
BEGIN
    SELECT nome, 'Usuario' AS tipo FROM tbusuarios
    UNION
    SELECT nome, 'Colaborador' AS tipo FROM tbcolaborador;
END$$
DELIMITER ;";
executarProcedure($conn, $sql, "listarPessoas");

// 2. LOGIN do administrador (busca pelo nome)
$sql = "
DELIMITER $$
CREATE OR REPLACE PROCEDURE loginAdmin(IN nomeBusca VARCHAR(100))
BEGIN
    SELECT id, nome, senha
    FROM tbadmin
    WHERE nome = nomeBusca;
END$$
DELIMITER ;";
executarProcedure($conn, $sql, "loginAdmin");

// 3. Listar notícias com dados do admin
$sql = "
DELIMITER $$
CREATE OR REPLACE PROCEDURE listarNoticias()
BEGIN
    SELECT n.id, n.titulo, n.conteudo, a.nome AS autor, n.data
    FROM tbnoticias n
    LEFT JOIN tbadmin a ON a.id = n.id_admin
    ORDER BY n.data DESC;
END$$
DELIMITER ;";
executarProcedure($conn, $sql, "listarNoticias");

// 4. Buscar notícia por ID
$sql = "
DELIMITER $$
CREATE OR REPLACE PROCEDURE buscarNoticia(IN noticiaId INT)
BEGIN
    SELECT n.*, a.nome AS autor
    FROM tbnoticias n
    LEFT JOIN tbadmin a ON a.id = n.id_admin
    WHERE n.id = noticiaId;
END$$
DELIMITER ;";
executarProcedure($conn, $sql, "buscarNoticia");

// 5. Cadastrar usuário
$sql = "
DELIMITER $$
CREATE OR REPLACE PROCEDURE cadastrarUsuario(IN p_nome VARCHAR(100), IN p_email VARCHAR(100), IN p_senha VARCHAR(100))
BEGIN
    INSERT INTO tbusuarios (nome, email, senha)
    VALUES (p_nome, p_email, p_senha);
END$$
DELIMITER ;";
executarProcedure($conn, $sql, "cadastrarUsuario");

// 6. Remover usuário por ID
$sql = "
DELIMITER $$
CREATE OR REPLACE PROCEDURE deletarUsuario(IN userId INT)
BEGIN
    DELETE FROM tbusuarios WHERE id = userId;
END$$
DELIMITER ;";
executarProcedure($conn, $sql, "deletarUsuario");

// 7. Listar administradores com filtro de ID
$sql = "
DELIMITER $$
CREATE OR REPLACE PROCEDURE listarAdminsFiltrados(IN minId INT)
BEGIN
    SELECT id, nome, senha FROM tbadmin WHERE id > minId;
END$$
DELIMITER ;";
executarProcedure($conn, $sql, "listarAdminsFiltrados");

echo "<hr><b>Todas as procedures foram processadas.</b>";
?>
