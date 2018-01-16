<?php


$lang = $_POST['language'];
$code = $_POST['source_code'];
$in = $_POST['InputData'];
class HackApi
{
    //Setting up the Hackerearth API
    $hackerearth = array(
		'client_secret' => 'da4ef8ece51cd537d573503dcf569053e618bf9b', //(REQUIRED) Obtain this by registering your app at http://www.hackerearth.com/api/register/
        'time_limit' => '5',   //(OPTIONAL) Time Limit (MAX = 5 seconds )
        'memory_limit' => '262144'  //(OPTIONAL) Memory Limit (MAX = 262144 [256 MB])
	);

    private $config = Array();

    private $curled=""; // this is the data we receive from hackerearth!
    private $parameters=""; // the parameterised version.

    private $compile_url = "https://api.hackerearth.com/v3/code/compile/"; // end point of compilation
    private $run_url = "https://api.hackerearth.com/v3/code/run/"; // end point of running the source code

    public $id; // code_id on hackerearth
    public $message; // message. if any missing arguments.
    public $compile_status; // compilation error or OK
    public $run_status; // run status of the code
    public $output; // output of the code
    public $output_html; // html format of the output
    public $array_curl; // the entire json converted to array
    public $signal; // signal returned after run
    public $run_status_detail; // run_status_detail

    private function curl_it($url,$p,$n)
    {
   	 /*
   	 $url -> the url to curl.
   	 $parameters -> list of parameters to post.
   	 $n -> count of parameters.
   	 */
   	// Get cURL resource
	$curl = curl_init();
	// Seting some options
	curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url,
    CURLOPT_POST => 1,
    CURLOPT_CAINFO => 'cacert.pem',
    CURLOPT_SSL_VERIFYPEER => 'true',
    CURLOPT_ENCODING => 'UTF-8',
    CURLOPT_POSTFIELDS =>$p));


   	 $response = curl_exec($curl);
   	 $this->curled = json_decode($response,true);
    }

    public function init($lang,$code,$inp)
    {
   	 $id = "";
   	 $memory_used = "";
   	 $message = "";
   	 $compile_status = "";
   	 $run_status = "";
   	 $array_curl = "";
   	 $output = "";
   	 $output_html = "";
   	 $signal = "";
   	 $run_status_detail = "";
   	 //all values have been reset to avoid any discrepancies.

    //Feeding Data Into Hackerearth API
    $this->config['time']='5';	 	//(OPTIONAL) Your time limit in integer and in unit seconds
    $this->config['memory']='262144'; //(OPTIONAL) Your memory limit in integer and in unit kb
    $this->config['source']=stripslashes($code);    	//(REQUIRED) Your source code for which you want to use hackerEarth api
    $this->config['input']=$inp;     	//(OPTIONAL) Input against which you have to test your source code
    $this->config['language']= strtoupper($lang) ;   	//(REQUIRED) Choose any one of them
						 	// C, CPP, CPP11, CLOJURE, CSHARP, JAVA, JAVASCRIPT, HASKELL, PERL, PHP, PYTHON, RUBY

   	 // converting language to hackerearth friendly
     //building the entire parameter list.

      $this->parameters =  array(
        				'client_secret' => $this->hackerearth['client_secret'],
                        'time_limit' => $this->hackerearth['time_limit']||$this->config['time'],
        				'memory_limit' => $this->hackerearth['memory_limit']||$this->config['memory'],
        				'source' => $this->config['source'],
        				'input' => $this->config['input'],
                        'lang' => $this->config['language']
    )

    }
    // Iniitiate the variables. First Step.

    public function compile()
    {
   	 $this->curl_it($this->compile_url,$this->parameters,6);
   	 $this->parse_data(1);
    }
    //call this function to compile the code

    public function run()
    {
   	 $this->curl_it($this->run_url,$this->parameters,4);
   	 $this->parse_data(2);
    }
    //call this function to run the code

    private function parse_data($check)
    {
   	 $this->array_curl = $this->curled;
   	 $this->message = $this->curled['message'];
   	 if($this->message == "OK")
   	 {
   		 $this->id = $this->curled['code_id'];
   		 $this->compile_status = $this->curled['compile_status'];
   		 if($check==2)
   		 {
   			 $this->curled = $this->curled['run_status'];

   			 $this->time_used = $this->curled['time_used'];
   			 $this->run_status = $this->curled['status'];
   			 $this->run_status_detail = $this->curled['status_detail'];
   			 $this->memory_used = $this->curled['memory_used'];
   			 $this->output = $this->curled['output'];
   			 $this->output_html = $this->curled['output_html'];
   			 $this->signal = $this->curled['signal'];
   		 }
   	 }
    }

    public function Display()
    {
        echo $this->output;
    }

    //final call. get details
}


    $t = new HackApi;

    $t->init($lang,$code,$in);
    $t->compile();
    $t->run();
    $t->Display();

?>
