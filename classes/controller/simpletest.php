<?php defined('SYSPATH') or die('No direct script access.');

require Kohana::find_file('vendor', 'simpletest/autorun');


class Controller_SimpleTest extends Controller {
  
  function action_index() {
    if(Kohana::$environment == 'development'){
      $this->runall();  
    }
  }

  
  function runall() {

  	//find test files
  	$files = $views = Kohana::list_files('tests');

  	//exclude paths
  	$excludes = Kohana::config('simpletest.exclude_dirs');

  	foreach($excludes as $exclude){

  		if(isset($files[$exclude])){
  			unset($files[$exclude]);
  		}
  	}

  	//run files
  	foreach($files as $file){
  		$ext = strtolower( substr($file, -3) );
  		if($ext == 'php'){
  			$this->run($file);
  		}
  		
  	}

  }

  
  function run ( $testFile ) {

  	require($testFile);

  }
  

}
