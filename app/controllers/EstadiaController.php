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
}