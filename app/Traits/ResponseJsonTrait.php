<?php 

namespace App\Traits;
use Illuminate\Http\JsonResponse;

trait ResponseJsonTrait
{
    /**
     * Devolver os valores de uma chamada.
     *
     * @param mixed $data
     * @param int $statusCode
     * @param array $headers
     * @return JsonResponse
     */
    public function response(mixed $data, int $statusCode = 200, array $headers = []): JsonResponse
    {
        return response()->json($data, $statusCode, $headers);
    }

    /**
     * Devolver um erro.
     *
     * @param string $message
     * @param int $statusCode
     * @param array $headers
     * @return JsonResponse
     */
    public function error(string $message, int $statusCode = 400, array $headers = []): JsonResponse
    {
        return response()->json([
            'error' => $message,
        ], $statusCode, $headers);
    }
}