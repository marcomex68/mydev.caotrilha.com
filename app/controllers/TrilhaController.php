<?php

require_once __DIR__ . '/../dao/TrilhaDAO.php';

class TrilhaController
{

    public function listarTrilhasDonoApi(int $donoId): void
    {

        try {
           $trilhas = (new TrilhaDAO())->listarTrilhasDono($donoId);

            $dataResponse = [
                "success" => true,
                "message" => "Operação realizada com sucesso",
                "data" => [
                "trilhas" => $trilhas
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

    public function createTrilhaApi(int $donoId): void
    {
        try {
            $input = json_decode(file_get_contents('php://input'), true);

            $trilha = new Trilha(
                0,
                $input['nome'] ?? '',
                $input['kms'] ?? 0.0,
                $input['localidade'] ?? ''
            );

            (new TrilhaDAO())->createTrilha($trilha, $donoId);

            $dataResponse = [
                "success" => true,
                "message" => "Trilha criada com sucesso",
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