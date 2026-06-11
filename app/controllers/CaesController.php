<?php

require_once __DIR__ . '/../dao/CaesDAO.php';

class CaesController
{

    public function listarCaesDonoApi(int $donoId): void
    {

        try {
           $caes = (new CaesDAO())->listarCaesDono($donoId);

            $dataResponse = [
                "success" => true,
                "message" => "Operação realizada com sucesso",
                "data" => [
                "caes" => $caes
                ]
            ];

            Utils::jsonResponse($dataResponse);
            exit;
            
        
        } catch (Exception $e) {
            $dataResponse = [
                "success" => false,
                "message" => $e->getMessage(),
                "data" => []
            ];

            Utils::jsonResponse($dataResponse, 400);
            exit;
        }
        

    }

    public function createCaoApi(int $donoId): void
    {
        $input = json_decode(file_get_contents('php://input'), true);
       
        try {
            $nome = $_POST["nome"] ?? null;
            $raca = $_POST["raca"] ?? null;
            $idade = $_POST["idade"] ?? null;
            $estado = $_POST["estado"] ?? null;
            $peso = $_POST["peso"] ?? null;
            $sexo = $_POST["sexo"] ?? null;
            $esterilizado = $_POST["esterilizado"] ?? null;


            $user = (new UserDAO())->findById($donoId);


            if (!$user || !$nome || !$raca || !$idade || !$estado || !$peso || !$sexo || !$esterilizado ) {
                echo json_encode(["error" => "Dados inválidos ou usuário não encontrado."],400);
                return;
            }

            (new CaesDAO())->createCao($_POST, $donoId);

            $dataResponse = [
                "success" => true,
                "message" => "Cão criado com sucesso",
                "data" => []
            ];

            Utils::jsonResponse($dataResponse);
            exit;
            
        
        } catch (Exception $e) {
            $dataResponse = [
                "success" => false,
                "message" => $e->getMessage(),
                "data" => []
            ];

            Utils::jsonResponse($dataResponse, 400);
            exit;
        }
    }

}