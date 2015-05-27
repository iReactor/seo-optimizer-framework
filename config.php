<?php
class AppContextConfig{
	public static $codeprefix="_1";
	public static $paths=array();
	public static function loadPaths(){
		$paths[AppContextConfig::$codeprefix."_jch"]="";
		$paths[AppContextConfig::$codeprefix."_bootstraplib"]="";
		$paths[AppContextConfig::$codeprefix."_assets"]="assets";
		$paths[AppContextConfig::$codeprefix."_assets_js"]="assets\js";
		$paths[AppContextConfig::$codeprefix."_assets_css"]="assets\css";
		$paths[AppContextConfig::$codeprefix."_extern_lib"]="lib";
		$paths[AppContextConfig::$codeprefix."_jch1"]="";
		$paths[AppContextConfig::$codeprefix."_jch2"]="";
		$paths[AppContextConfig::$codeprefix."_jch3"]="";
		$paths[AppContextConfig::$codeprefix."_jch4"]="";
		$paths[AppContextConfig::$codeprefix."_jch5"]="";
		$paths[AppContextConfig::$codeprefix."_jch6"]="";
		$paths[AppContextConfig::$codeprefix."_jch7"]="";
		$paths[AppContextConfig::$codeprefix."_jch8"]="";
		$paths[AppContextConfig::$codeprefix."_jch9"]="";
		$paths[AppContextConfig::$codeprefix."_jch10"]="";
		$paths[AppContextConfig::$codeprefix."_jch11"]="";
		$paths[AppContextConfig::$codeprefix."_jch12"]="";
	}

}

AppContextConfig::loadPaths();