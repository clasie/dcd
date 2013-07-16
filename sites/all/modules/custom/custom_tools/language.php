<?php
/**
 * Language detection
 */
class Language {
	
	static public function isFrench(){
		
		//caches global drupal value
		global $language_url;
		
		//catches the language
		$language = $language_url->language;
		
		//language url test
		if(preg_match('/fr/', strtolower(trim($language)))){
			
			//is french
			return true;
			
		}else{
			
			//not french
			return false;
		}
	}
}