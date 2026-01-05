<?php
class ProfessorService {
    private $professor;
    private $conexao;

    public function __construct(Professor $professor, Conexao $conexao) {
        $this->conexao = $conexao->conectar();
        $this->professor = $professor;
    }

    public function inserir() {
        $query = 'INSERT INTO professor (nome, idade, disciplina, foto) VALUES (?, ?, ?, ?)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->professor->__get('nome'));
        $stmt->bindValue(2, $this->professor->__get('idade'));
        $stmt->bindValue(3, $this->professor->__get('disciplina'));
        $stmt->bindValue(4, $this->professor->__get('foto'));

        if ($stmt->execute()) {
            $diretorio = 'fotoProfessor' . DIRECTORY_SEPARATOR;
            move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio . $this->professor->__get('foto'));
        }
    }

    public function recuperar() {
        $query = 'SELECT id, nome, idade, disciplina, foto FROM professor';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function recuperarPorId($id) {
        $query = 'SELECT id, nome, idade, disciplina, foto FROM professor WHERE id = ?';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); // retorna array com 1 professor
    }

    public function alterar() {
        $query = 'UPDATE professor SET nome = ?, idade = ?, disciplina = ?, foto = ? WHERE id = ?';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->professor->__get('nome'));
        $stmt->bindValue(2, $this->professor->__get('idade'));
        $stmt->bindValue(3, $this->professor->__get('disciplina'));
        $stmt->bindValue(4, $this->professor->__get('foto'));
        $stmt->bindValue(5, $this->professor->__get('id'));

        if ($stmt->execute()) {
            if ($_SESSION['foto'] != $this->professor->__get('foto')) {
                $caminhoFotoAntiga = 'fotoProfessor' . DIRECTORY_SEPARATOR . $_SESSION['foto'];
                if (file_exists($caminhoFotoAntiga)) {
                    unlink($caminhoFotoAntiga);
                }
                $diretorio = 'fotoProfessor' . DIRECTORY_SEPARATOR;
                move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio . $this->professor->__get('foto'));
            }
        }
    }

    public function excluir() {
        $query = 'DELETE FROM professor WHERE id = ?';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->professor->__get('id'));

        if ($stmt->execute()) {
            $caminhoFoto = 'fotoProfessor' . DIRECTORY_SEPARATOR . $_SESSION['foto'];
            if (file_exists($caminhoFoto)) {
                unlink($caminhoFoto);
            }
        }
    }

    public function pesquisar() {
        $query = 'SELECT id, nome, idade, disciplina, foto FROM professor LIMIT 5';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}