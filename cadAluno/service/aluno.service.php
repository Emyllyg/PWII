<?php
class AlunoService {
    private $aluno;
    private $conexao;

    public function __construct(Aluno $aluno, Conexao $conexao) {
        $this->conexao = $conexao->conectar();
        $this->aluno = $aluno;
    }

    public function inserir() {
        $query = 'INSERT INTO aluno (nome, idade, serie, foto) VALUES (?, ?, ?, ?)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->aluno->__get('nome'));
        $stmt->bindValue(2, $this->aluno->__get('idade'));
        $stmt->bindValue(3, $this->aluno->__get('serie'));
        $stmt->bindValue(4, $this->aluno->__get('foto'));

        if ($stmt->execute()) {
            $diretorio = 'fotoAluno' . DIRECTORY_SEPARATOR;
            move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio . $this->aluno->__get('foto'));
        }
    }

    public function recuperar() {
        $query = 'SELECT id, nome, idade, serie, foto FROM aluno';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function recuperarPorId($id) {
        $query = 'SELECT id, nome, idade, serie, foto FROM aluno WHERE id = ?';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); // retorna array com 1 aluno
    }

    public function alterar() {
        $query = 'UPDATE aluno SET nome = ?, idade = ?, serie = ?, foto = ? WHERE id = ?';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->aluno->__get('nome'));
        $stmt->bindValue(2, $this->aluno->__get('idade'));
        $stmt->bindValue(3, $this->aluno->__get('serie'));
        $stmt->bindValue(4, $this->aluno->__get('foto'));
        $stmt->bindValue(5, $this->aluno->__get('id'));

        if ($stmt->execute()) {
            if ($_SESSION['foto'] != $this->aluno->__get('foto')) {
                $caminhoFotoAntiga = 'fotoAluno' . DIRECTORY_SEPARATOR . $_SESSION['foto'];
                if (file_exists($caminhoFotoAntiga)) {
                    unlink($caminhoFotoAntiga);
                }
                $diretorio = 'fotoAluno' . DIRECTORY_SEPARATOR;
                move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio . $this->aluno->__get('foto'));
            }
        }
    }

    public function excluir() {
        $query = 'DELETE FROM aluno WHERE id = ?';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->aluno->__get('id'));

        if ($stmt->execute()) {
            $caminhoFoto = 'fotoAluno' . DIRECTORY_SEPARATOR . $_SESSION['foto'];
            if (file_exists($caminhoFoto)) {
                unlink($caminhoFoto);
            }
        }
    }

    public function pesquisar() {
        $query = 'SELECT id, nome, idade, serie, foto FROM aluno LIMIT 5';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}