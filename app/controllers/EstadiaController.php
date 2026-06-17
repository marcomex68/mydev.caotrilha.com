<?php

require_once __DIR__ . '/../dao/EstadiasDAO.php';

class EstadiaController
{
    public function listarEstadiasApi($userId) {
        try {
            $estadia = (new EstadiasDAO())->listarEstadias();

            $dataResponse = [
                'success' => true,
                'message' => 'Estadias listadas com sucesso.',
                'data'    => $estadia
            ];
            Utils::jsonResponse($dataResponse);

        } catch (Exception $e) {
            $dataResponse = [
                'success' => false,
                'message' => 'Erro ao listar estadias: ' . $e->getMessage(),
                'data'    => []
             ];
            Utils::jsonResponse($dataResponse, 500);
        }
    }

    public function detalheEstadiaApi($userId, $estadiaId) {
        try {
            $estadia = (new EstadiasDAO())->detalheEstadia($estadiaId);

            if ($estadia) {
                $dataResponse = [
                    'success' => true,
                    'message' => 'Detalhes da estadia obtidos com sucesso.',
                    'data'    => $estadia
                ];
                Utils::jsonResponse($dataResponse);
            } else {
                $dataResponse = [
                    'success' => false,
                    'message' => 'Estadia não encontrada.',
                    'data'    => []
                ];
                Utils::jsonResponse($dataResponse, 404);
            }

        } catch (Exception $e) {
            $dataResponse = [
                'success' => false,
                'message' => 'Erro ao obter detalhes da estadia: ' . $e->getMessage(),
                'data'    => []
             ];
            Utils::jsonResponse($dataResponse, 500);
        }
    }
}