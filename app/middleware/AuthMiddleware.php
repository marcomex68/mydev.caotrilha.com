<?php

require_once __DIR__ . "/../config/jwt.php";
require_once __DIR__ . "/../utils/Utils.php";

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Firebase\JWT\ExpiredException;
use Firebase\JWT\SignatureInvalidException;
use Firebase\JWT\BeforeValidException;

class AuthMiddleware
{
    public static function getUser()
    {
        try {
            $headers = getallheaders();
            $authHeader = $headers['Authorization']
                ?? $headers['authorization']
                ?? null;

            if (!$authHeader) {
                throw new Exception("Token não enviado");
            }

            if (!preg_match('/Bearer\s+(\S+)/i', $authHeader, $matches)) {
                throw new Exception("Formato do token inválido");
            }

            $token = $matches[1];

            $decoded = JWT::decode(
                $token,
                new Key(JwtConfig::$secret, 'HS256')
            );

            /**
             * 🔥 CORREÇÃO IMPORTANTE:
             * Nem todos os JWTs têm "data"
             * alguns têm payload direto
             */

            if (isset($decoded->data)) {
                return $decoded->data;
            }

            return $decoded;

        } catch (ExpiredException $e) {
            Utils::jsonResponse([
                'success' => false,
                'message' => "Token expirado",
                'data' => []
            ], 401);
            exit;

        } catch (SignatureInvalidException $e) {
            Utils::jsonResponse([
                'success' => false,
                'message' => "Assinatura do token inválida",
                'data' => []
            ], 401);
            exit;

        } catch (BeforeValidException $e) {
            Utils::jsonResponse([
                'success' => false,
                'message' => "Token ainda não é válido",
                'data' => []
            ], 401);
            exit;

        } catch (Exception $e) {
            Utils::jsonResponse([
                'success' => false,
                'message' => $e->getMessage(),
                'data' => []
            ], 401);
            exit;
        }
    }

    public static function check()
    {
        return self::getUser();
    }

    public static function isAdmin()
    {
        $u = self::getUser();

        return isset($u->role) && $u->role === 'admin';
    }

    public static function checkRole($role)
    {
        $u = self::getUser();

        if (!isset($u->role) || $u->role !== $role) {
            throw new Exception("sem acesso");
        }
    }
}