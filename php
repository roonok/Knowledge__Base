:::  Procedure Calling Function 

public function p_callProcedure($name , $params= array()){
        if (empty($params)) 
{
            $sql = "CALL $name()";
                    } 
                        else 
{
            $sql = "CALL $name(";
            foreach ($params as $param) {
                              $sql .= "'" . $param . "',";
                        }
            $sql .= ")";
            $sql = substr($sql, 0, -2) . ')';
        }
                $result=mysqli_query($this->con,$sql);
    
        while($row = mysqli_fetch_array($result)){
            array_push($return_row,$row);
        }
        return $return_row;
    }
    
    
::: Implode
                Array এর element গুলার মদ্ধে কমা ADD করে দিয়ে একটা String বানায়।
                $array = array('lastname', 'email', 'phone');
                $comma_separated = implode(",", $array);
                echo $comma_separated; // lastname,email,phone
                arrey_keys()
                Tutorial link : https://www.youtube.com/watch?v=nqVHdVCvnSU
                Array structure :  “key” => “value”
                Array এর Key গুলাকে সুধু নিয়ে আশবে । Value গুলা কে আনবে নাহ 

::: Associative array 

:::  Mysql_fetch_row 
        একটা Row Return করবে । 

::: Array Key : 0 থেকে শুরু হবে এরপর জতগুলা Column Select হবে তত পর্যন্ত যাবে key Value

::: Mysql_fetch_assoc 
        একটা Row Return করবে as an associative array হিসাবে। 
        Array এর key হবে Column এর নাম গুলা ।



::: SQL_injection 
        Stripslashes : কোন string এর মদ্ধে কনো slash(‘/’) থাকলে সেইটা সে বাদ করে দেয়।

::: Mysql_real_escape_string : 
        Sql statement এর মদ্ধে যে character গুলা use করা হয় সেই character গুলা যদি কনো String এর মদ্ধে পায় তাহলে সেইগুলা escape করে দেয়।

:::  .=  (Concatenation assignment operator) 
        $txt1 = "Hello" , $txt2 = " world!" , এবং  $txt1 .=  $txt2; 
        এইটা মানে হচ্ছে > "Hello" এবং  " world!" একসাথে Hello world হয়ে $txt1 এ জমা হবে । 

::: Substr
        $rest = substr("abcdef", 0, -1);  // returns "abcde"
        echo substr('abcdef', 1, 3);  // bcdz
        This means that > শেষ থেকে ১ টা index বাদ দিয়ে বাকি সব দেখাবে
        substr(“string”,starting from , কোন পাশ থেকে কতটা বাদ যাবে)


::: Regular Expression In PHP :
        Link :  https://www.youtube.com/watch?v=3o0i1b5TOLA

:::  ^ (carrots) → Match the beginning of the String
        $ → Match the end of the string
        ^ and $ together → Match the entire String

::: Character Classes → 
        [0-9] → any Number
        [a-z] → any LowerCase Number
        [A-Z] → any Uppercase Number
        [\f\t\r\n] → WhiteSpace
        [^0-9] → Not Any Number
        Example :
                ^[0-9][a-z]$ → Match any String জেগুলা শুরু হবে নাম্বার দিয়ে এবং জার মধ্যে LowerCase Letter আছে  
                ^[^0-9][A-Z]$ → Match any String জেগুলা কোন নাম্বার দিয়ে শুরু হয় নাই এবং জার মধ্যে Capital Letter আছে
                ^z{1,3}$ → Match any String জেগুলার প্রথমে z(১ বার Z) অথবা zz(২ বার Z) অথবা zzz(৩ বার Z) আছে । 

::: Special Pattern Characters 
        . → any Non newline character
        ? → Previous Character Is optional
        * → Matches the previous element ZERO or More Time
        + → Matches the previous element ONE or More Time
        | → Logical Or এর মত কাজ করে 
        Example →  ^\-?[0-9]{0, }\.?[0-9]{0, }$

                Explanation: String এর প্রথমে একটা ‘-’ থাকবে । এরপরের ‘?’ দিয়ে বুঝাচ্ছে যে আগের ‘-’ টা Optional. এরপর [0-9] এর মধ্যে সংখ্যা জিরো বা তারচে বেশি আছে কিনা সেইটা খুঁজবে এরপর আবার একটা Dot খুঁজবে। ‘?’ আর ‘.’ এর আগে ‘\’ দেয়া হয় কারন সেইগুলা হচ্ছে এক একটা Literal. ‘^’ প্রথমে আর ‘$’ শেষ এ দেয়া মানে আমরা একটা ExacT match খুজতেসি । 
        ^(L|Th)ink$ → Link or Think খুঁজবে String এর মধ্যে ।  

::: Valid Constant names 
        define(“constant_name”,”value”)
        const constantName= “value”;


::: Constant vs variable in php

        Variable  Vs  Constant
        Defining system -     Public $variable vs  Const consTantName
        Access modifier -     Public or private vs Default public
        Changing Issue   -     Can be changed vs Cannot be changed
        $                         -     $variableName vs No $ needed
        Access System    -      $this->attributeName vs classname::constantName


:::  Magical PHP Constant 
        Total Number : 8
        Start হয় ডাবল UnderScore দিয়ে (__)
        
:::  ‘->’ php তে এই চিহ্ন কে বলা হয় Object Operator
        একটা ক্লাস এর Object তৈরি করা
        $objectname = new classname     
        
:::  Accessing an object of a class 
        $object_name_of_the_class->methodName()

:::  Accessing a Property(variable) of a class 
        $object_name_of_the_class->propertyname

:::  $this → কোন একটা ফাংশন এ থাকা অবস্থায় যদি সেই ফাংশন এর কোন Attribute or method Access or print করতে চাই তাহলে এইটা ইউজ করা যাবে

:::  Session vs cookie → 
        The concept is storing persistent data across page loads for a web visitor. Cookies store it directly on the client. Sessions use a cookie as a key of sorts, to associate with the data that is stored on the server side.

       1. stored on server  vs stored on web-browser
       2.Safer vs Not very safe, since hackers can reach and get your information
       3. Expiration can not be set, session variables will be expired when users close the browser. (nowadays it is stored for 24 minutes as default in php)
           vs
        Expiration can be set (see setcookies() for more information)
       
       
::: Array_key_exists → a function checks if key is present on the array.
::: Array_key_exists (যে key check করো সেইটার নাম , কোন Array তে Check করবো সেই Array)

::: php stact-queue →  https://www.sitepoint.com/php-data-structures-1/


::: Use of Tarnary Operator :
    $a_k = isset($_GET['api_key']) ? $_GET['api_key'] : NULL;
    
    
        function checkmydate($date) 
            {
                 $tempDate = explode('-', $date);
                  $array_index_count = count($tempDate);
        // counting the index number of array
                  //print_r($array_index_count);
                  if($array_index_count>2)
                  {
                      return checkdate($tempDate[1], $tempDate[2], $tempDate[0]);    
                  }
                  else
                  {
                      return false;
                  }

            }
            

::: File Upload in SQL

      HTML :
      <label class="btn btn-primary" for="my_file">
           <input id="my_file" type="file" name="photo" style="display:none;">
          Upload File
       </label>
      Getting the whole file
      $file = $_FILES['photo'];
      Getting the name of the uploaded file
       $uploaded_file_name = $file['name'];
      Getting the file Extension
      $file_type = $_FILES['photo']['type'];
      Checking for specific file type
      $allowed = array("application/pdf","application/vnd.ms-excel"); 
          if(in_array($file_type, $allowed)) 
              {
                               }

      Move Upload file to a specific location
      move_uploaded_file($_FILES['photo'] ['tmp_name'],"uploads/".$file_name']);
      
      
:::  Download file in PHP
        Getting the path
        $path= $_SERVER["DOCUMENT_ROOT"].'/project_name/sub_foldername/'.'uploads/';
        
        
:::  Download
        $path = $path.$filename;        
        header("Content-type:application/pdf");
        header('Content-Disposition: attachment; filename='.$filename); 
        readfile($path);                 
        exit();
        
        
::: Php 7.0 ini file path
        Command :  find / -name php.ini
        /etc/opt/remi/php70/php.ini
        
        

::: Cakephp te sob kichu app folder er moddhe theke 
::: Ei link a jete hobe_____ : http://textmechanic.com/text-tools/randomization-tools/random-string-generator/  . erpor j duita error dibe seita thik korte hobe.
::: App > config > core এর মদ্ধে salt থাকে । 
::: Lib folder er moddhe kono kichu edit kora jabe na
::: App folder er moddhe sob kichu thakbe
::: Database connection , core , boothspariing sob kichu CONFIG lagbe
::: Console command r tast thake console folder a
::: CONTROLLER ____ application controller , components thakbe eikhane
::: LIB _____ er moddhe library create korbo amra amader own kajer jonno.
::: VENDOR _____ er moddhe third party software thakbe.
::: App/controller folder er moddhe sob controller thakbe.
::: Controller Class hobe_____CamelCase
::: Controller  class er j kono Function/Action hobe_____camelCase
::: View er folder er nam hobe main controller j nam oi nam; sudhu “controller ” ei word ta hobe nah.
::: View folder er moddhe j    .ctp(cake template) file thakbe seigular nam hobe main controller       er j function theke oi view kaj kortese oi function er nam.
::: Model er name hobe  singular and CamelCase of your main controller name
::: Database er table name hobe correspond model name er plural and all lower case . Jodi model name PuffPastry.php hoy tahole database er table er name hobe puff_pastries
::: Debug korte hobe php tag er moddhe.
::: Function er onno nam ACTION
::: Input er khetre database table er Field name use korbe ; r create use korbe MODEL name
::: Layout thake 1 tai . R  er  moddhe bar bar view change hoy;  view change hoy corresponding controller er function er upore . couse protita active er nam a ekta kore view thakbe.
::: Link for the css javascript _____<script type="text/javascript" src="<?php echo $html->url('/js/jquery-1.2.3.min.js'); ?>"></script>
::: Layout এর মদ্ধেকার ctp আর কন্ট্রলার এর মদ্ধেকার ঝামেলা : জখন আমরা একটা action এর মদ্ধে  $this->layout='layout_name'; এইটা লিখি তখন অই layout টা লোড হবে । আর অই layout ফাইল এর মদ্ধে <?php echo $this->fetch('content')?> এইটা মানে হচ্ছে যে আমরা আমাদের main controller এর নাম দিয়ে view এর মদ্ধে যে Folder বানাইছি অইটার মদ্ধে আমরা যে action এ কাজ করতেসি অইটার নামে যে .ctp ফাইল আছে সেইটা লোড করবে 
::: $this->Form->create('User', array('type' => 'get')); এইখানে ‘User’ টা হচ্ছে Model Name. মানে হচ্ছে যে , এইটা UsersController er এর User মডেল।
::: $this->request->data[‘model name’][‘database Field Name’] 
::: Password Hash করার জন্য : $this->request->data['Item']['password'] = AuthComponent::password($this->request->data['Item']['password']);
::: Cake PHP model→ প্রতিটা টেবিল এর Againest এ একটা মডেল থাকবে । Model এ Define করে দিতে হবে যে : Model এর নাম কি হবে আর  সেই Model কোন টেবিল Use করবে ।  
        Example → 
        var $name = 'Prisoner';
        var $useTable = 'prisoner';
        অন্য modelএ যদি এই modelcall করতে হয় তাহলে এইখানে $name এ যে name দেয়া আছে সেই নামটা ব্যাবহার করতে হবে।
        আর $usetable এর মধ্যে সেই modelটা কোন Teble Use করবে সেইটা বলে দেয়া হয় । 
        Model এ কিছু PreDefined Variable আছে  

::: $hasMany → আমরা যে model(table) এ কাজ করতেসি সেই model এর সাথে অন্য কোণ model(table) এর যদি one to many relation থাকে তাইলে এইটা ইউজ করা হয় ।
Format :  
        var $hasMany = array(
              'Appointment_p' => array(
                'className' => 'যে Model এর সাথে রিলেশন আছে',
                'foreignKey' => “আমাদের বর্তমান টেবিলে যে foreign key আছে  সেই কলাম এর নাম ”,
                'dependent' => false,
                'conditions' => '',
                'fields' => '',
                'order' => '',
                'limit' => '',
                'offset' => '',
                'exclusive' => '',
                'finderQuery' => '',
                'counterQuery' => ''
              ),

::: $belongsTo →  আমরা যে model(table) এ কাজ করতেসি সেই model এর সাথে অন্য কোণ model(table) এর যদি  many to one  relation থাকে তাইলে এইটা ইউজ করা হয় ।
        Format :   
        var $belongsTo = array(
                'Prisoner_a' => array(
                    'className' => 'যে Model এর সাথে রিলেশন আছে',
                     'foreignKey' => “আমাদের বর্তমান টেবিলে যে foreign key আছে  সেই কলাম এর নাম ”,
                    'conditions' => '',
                    'fields' => '',
                    'order' => ''
                )
            );
            
            

#___________________________________________Laravel 5.4_____________________________________________________________

::: Tutorials :
        Scotch.to (https://scotch.io/tutorials?q=&page=1&dFR%5B_tags%5D%5B0%5D=laravel&fR%5Bauthor.verified%5D%5B0%5D=1&fR%5Bis_spam%5D%5B0%5D=0&fR%5Bstatus%5D%5B0%5D=published&hFR%5Bcategory%5D%5B0%5D=Tutorials&is_v=1)
        LaravelDaily (http://laraveldaily.com/)
        dunebook(https://www.dunebook.com/)
        
::: Artisan Clear Commands →
       → php artisan optimize
       → php artisan config:clear 
       → php artisan cache:clear 
       → php artisan route:cache
       → php artisan view:clear
       → composer dump-autoload
       → php artisan optimize & php artisan config:clear & php artisan cache:clear & php artisan route:cache & php artisan view:clear & composer dump-autoload

::: Link Storage Folder by Artisan Command → php artisan storage:link

::: Custom Error Page Configuration  
        → Php file Links
                → app\Exceptions\Handler.php | function Name : render
                → ProjectName\vendor\laravel\framework\src\Illuminate\Foundation\Exceptions\Handler.php | function name : render.
                
::: How to Update Composer →
        Delete composer.lock
        Run command update composer

::: Facade
        এইটা একটা ক্লাস যা একটা complex library কে wrap করে রাখে যারফলে clean and more readable interface Provide হয় ।
        ReferenceLink 1 → https://www.sitepoint.com/how-laravel-facades-work-and-how-to-use-them-elsewhere/
        ReferenceLink 2 → https://www.tutorialspoint.com/laravel/laravel_facades.htm
        
::: Redirect to another page after login 
        public function authenticated() { 
        if(auth()->user()->hasRole('admin')) 
        { 
         return redirect('/admin/dashboard'); } return redirect('/user/dashboard'); 
        }

::: Upload & Move file to a specific Directory → 
        → $path = $request->file('name of the input field in the Form');
        → $fullPath = $destinationPath.$path->getClientOriginalName(); // getting the file Name
        → $path->move($destinationPath,$path->getClientOriginalName());
        
::: Save Using Eliquent Model →
        → $data = $request->all();
        → AssosiateModelName ::: create([
            'database_FieldName' => $data['RespectiveFieldName_of_form'],
        ]);
        
::: htaccess problem, URL not found exception 
        Solve →
        → Open .htaccess from ../laravel/public/
        →       <IfModule mod_rewrite.c>
                <IfModule mod_negotiation.c>
                Options -MultiViews
                </IfModule>

                RewriteEngine On

                # Redirect Trailing Slashes...
                RewriteRule ^(.*)/$ /$1 [L,R=301]

                # Handle Front Controller...
                RewriteCond %{REQUEST_FILENAME} !-d
                RewriteCond %{REQUEST_FILENAME} !-f
                RewriteRule ^ index.php [L]
                </IfModule>
        
::: Laravel Eliquent Delete →
        $res=System::where('id',$tempRequest['id'])->delete();
        
::: Run Audio File →
        <audio src="FullFilePath" controls></audio>
    
