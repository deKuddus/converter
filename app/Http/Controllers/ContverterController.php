<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\helper\Whois;
use Illuminate\Http\Request;
use MikeMcLin\WpPassword\Facades\WpPassword;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Response\QrCodeResponse;

class ContverterController extends Controller
{
    public function md5generator(Request $request){

    	return md5($request->md5_plaintext);
    }


    public function bcryptGenertor(Request $request){
    	$options = [
    		'cost' => 12,
		];
		return  password_hash($request->bcrypt_palinText, PASSWORD_BCRYPT);
    }

    public function removeCharacterFromString(Request $request){

    	$string = $request->given_text;
        $removal_word = $request->removal_word;
		return $sentence = str_replace($removal_word, '', $string);
    }

    public function generateWordpressPassword(Request $request){

        return $hashed_password = WpPassword::make($request->given_string);
    }

    //text conversion function area

    public function upperCaseConversion(Request $request){
        return strtoupper($request->normal_text);
    }


    public function lowerCaseConversion(Request $request){

        return strtolower($request->normal_text);
    }

    public function sentanceCaseConversion(Request $request){

        $string = $request->normal_text;
        $sentences = preg_split('/([.?!]+)/', $string, -1,PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE); 
        $new_string = ''; 
        foreach ($sentences as $key => $sentence) 
        { 
            $new_string .= ($key & 1) == 0? 
            ucfirst(trim($sentence)) : 
            $sentence.' '; 
        } 
        return trim($new_string); 
    }



    public function capitalizedCaseConversion(Request $request){
        mb_internal_encoding('UTF-8'); 
        $string = $request->normal_text;
        return $this->ucwords_specific( mb_strtolower($string, 'UTF-8'), "-'");

        
    }

    public function ucwords_specific ($string, $delimiters = '', $encoding = NULL) 
    { 
        if ($encoding === NULL) { $encoding = mb_internal_encoding();} 

        if (is_string($delimiters)) 
        { 
            $delimiters =  str_split( str_replace(' ', '', $delimiters)); 
        } 

        $delimiters_pattern1 = array(); 
        $delimiters_replace1 = array(); 
        $delimiters_pattern2 = array(); 
        $delimiters_replace2 = array(); 
        foreach ($delimiters as $delimiter) 
        { 
            $uniqid = uniqid(); 
            $delimiters_pattern1[]   = '/'. preg_quote($delimiter) .'/'; 
            $delimiters_replace1[]   = $delimiter.$uniqid.' '; 
            $delimiters_pattern2[]   = '/'. preg_quote($delimiter.$uniqid.' ') .'/'; 
            $delimiters_replace2[]   = $delimiter; 
        } 

        // $return_string = mb_strtolower($string, $encoding); 
        $return_string = $string; 
        $return_string = preg_replace($delimiters_pattern1, $delimiters_replace1, $return_string); 

        $words = explode(' ', $return_string); 

        foreach ($words as $index => $word) 
        { 
            $words[$index] = mb_strtoupper(mb_substr($word, 0, 1, $encoding), $encoding).mb_substr($word, 1, mb_strlen($word, $encoding), $encoding); 
        } 

        $return_string = implode(' ', $words); 

        $return_string = preg_replace($delimiters_pattern2, $delimiters_replace2, $return_string); 

        return $return_string; 
    }

    public function textFindAndReplace(Request $request){
       
        $string = $request->given_string;
        $searchTerms = explode(" ",$request->removal_string);
        $replacements = explode(" ",$request->final_word);
        return str_replace( $searchTerms, $replacements, $string );
    }


    public function removeAllSpace(Request $request){
       
       return preg_replace('/\s+/', '',$request->given_string);
    }


    public function removeAllExtraSpace(Request $request){

      return preg_replace('/\s+/S', " ", $request->given_string);
    }

    public function base64Decode(Request $request){
        
        return base64_decode($request->normal_string_to_decode);
         
    }

    public function base64encode(Request $request){
        
        return base64_encode($request->normal_string_to_encode);
    }

    public function findMyIp(Request $request)
    {
       if(!empty(request())){
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $ip = $_SERVER['REMOTE_ADDR'];
            }

            return $ip;
       }
    }

    public function getHttpHeader(Request $request)
    {
         $url = $request->url;
        
        //print_r(get_headers($url));

        print_r(get_headers($url, 1));
    }


    public function domainWhoIs(Request $request)
    {
        $url = $request->url;
        $whois = new  Whois();
        echo $whois->whoislookup($url);
    }


    public function calculateAge(Request $request)
    { 
         $birthday = $request->dob;
         $interval = @date_diff(date_create($birthday), date_create('today'));
         return $interval->format('You are %y years, %m months, %d days old.');
    }

    public function makeQrcode(Request $request)
    {
        // Create a basic QR code
        $qrCode = new QrCode($request->inputText);
        $qrCode->setSize(300);

        // Set advanced options
        $qrCode->setWriterByName('png');
        $qrCode->setMargin(10);
        $qrCode->setEncoding('UTF-8');
        $qrCode->setErrorCorrectionLevel(new ErrorCorrectionLevel(ErrorCorrectionLevel::HIGH));
        $qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0]);
        $qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);

        $qrCode->setLogoSize(150, 200);
        $qrCode->setRoundBlockSize(true);
        $qrCode->setValidateResult(false);
        $qrCode->setWriterOptions(['exclude_xml_declaration' => true]);

        // Directly output the QR code
        header('Content-Type: '.$qrCode->getContentType());
        echo "<img src= '".$qrCode->writeString()."'>";

        // Save it to a file
        $qrCode->writeFile(__DIR__.'/qrcode.png');

    }

    public function imageToBase64(Request $request)
    {
        $image_url = $request->image_url;
        // Get the image and convert into string 
        $img = file_get_contents($image_url); 
          
        // Encode the image string data into base64 
        $data = base64_encode($img); 
          
        // Display the output 
        echo $data; 
    }


    
}
