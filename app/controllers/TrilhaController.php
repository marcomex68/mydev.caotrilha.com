<?php

require_once __DIR__ . '/../dao/TrilhaDAO.php';
require_once __DIR__ . '/../models/Trilha.php';
require_once __DIR__ . '/../utils/Utils.php';

class TrilhaController
{
    public function listarTrilhasDonoApi(int $donoId): void
    {
        $trilhas = (new TrilhaDAO())->listarTrilhasDono($donoId);

        Utils::jsonResponse([
            "success" => true,
            "message" => "OK",
            "data" => ["trilhas" => $trilhas]
        ]);
    }

    public function createTrilhaApi(int $donoId): void
    {
        try {
            $input = json_decode(file_get_contents("php://input"), true);

            $trilha = new Trilha(
                0,
                $input['nome'] ?? '',
                (float)($input['kms'] ?? 0),
                $input['localidade'] ?? ''
            );

            (new TrilhaDAO())->createTrilha($trilha, $donoId);

            Utils::jsonResponse([
                "success" => true,
                "message" => "Criado",
                "data" => []
            ]);

        } catch (Exception $e) {
            Utils::jsonResponse([
                "success" => false,
                "message" => $e->getMessage(),
                "data" => []
            ], 400);
        }
    }

    public function detalheTrilhaApi(int $id): void
    {
        $trilha = (new TrilhaDAO())->detalheTrilha($id);

        if (!$trilha) {
            Utils::jsonResponse([
                "success" => false,
                "message" => "Não encontrada",
                "data" => []
            ], 404);
            return;
        }

        Utils::jsonResponse([
            "success" => true,
            "message" => "OK",
            "data" => ["trilha" => $trilha]
        ]);
    }
}