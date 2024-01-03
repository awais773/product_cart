<?php

namespace App\Services;

use GuzzleHttp\Client;

class ReepayService
{
    private $publicKey;
    private $privateKey;
    private $client;

    public function __construct()
    {
        $this->publicKey = config('services.reepay.public_key');
        $this->privateKey = config('services.reepay.private_key');
        $this->client = new Client([
            'base_uri' => 'https://api.reepay.com/v1/',
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode("{$this->publicKey}:{$this->privateKey}"),
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    public function createPayment(array $data)
    {
        try {
            $response = $this->client->post('payments', ['json' => $data]);
    
            // Log successful response
            \Log::info('Reepay API Response: ' . $response->getBody()->getContents());
    
            return json_decode($response->getBody()->getContents(), true);
        } catch (\Exception $e) {
            // Log exception
            \Log::error('Reepay API Error: ' . $e->getMessage());
    
            // Handle exceptions (e.g., log errors, throw custom exceptions)
            return ['error' => $e->getMessage()];
        }
    }
    
    
}
