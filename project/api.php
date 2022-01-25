<?php
class Api
{
    // private $apiKey = "OT18kUoMTgi3Kxa1eTaO1rQrkXDfu2djx9xfJbYy";
    // private $apiUrl = "https://api.nasa.gov/planetary/apod?api_key=";
    private $apiKey = "random/";
    private $apiUrl = "https://source.unsplash.com/";

    private $api;

    private $quoteApiUrl = "https://quotes15.p.rapidapi.com/quotes/random/?language_code=en";
    private $quoteApiKey = "396322c866mshdb64f84aca71b1dp1ff18bjsndd2a8a8b0c5d";
    private $quoteApi;


    private $headers = array();


    public function __construct()
    {

        $this->api = $this->apiUrl . $this->apiKey;
        $this->quoteApi = $this->quoteApiUrl;

        $this->headers[] = "X-RapidAPI-Host: quotes15.p.rapidapi.com";
        $this->headers[] = 'X-RapidAPI-Key: ' . $this->quoteApiKey;
    }
    public function getApiImage()
    {
        /* $json_data = file_get_contents($this->api);
        $responseData = json_decode($json_data);
        $imgUrl = $responseData->url; 
        return $imgurl*/
        // return $data;
        return $this->api;
    }
    public function getApiQuote()
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->quoteApi,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => $this->headers,
        ]);
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $responseData = json_decode($response);
            $quote = $responseData->content;
            $obj = $responseData->originator;
            $name = $obj->name;

            return [
                $quote,
                $name
            ];
        }
    }
}
