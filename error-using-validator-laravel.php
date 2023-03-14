<?php
$v = Validator::make($data, $rules, $msg);
        if(! $v->fails()){
            $pps->save();
            echo 'ok';
        } else{
            $errors = $v->messages()->get('*');
            foreach($errors as $err){
                echo $err[0] . '<br>';
                
            }
        }

?>
