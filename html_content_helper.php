<?php
/*
 * this file is used to generate output content as html.
 * it use some structured data to know about the curent context
 * the route can be set to session context (current session context) or bypassed to the script as a $_POST or $_GET 
 * other way of passing must be set
 * this way is required for using only one js and only one css according to best compatibility with search engines
 * 
 * 
 * it parse any template used, collect any link tag, script tag and pass to the css_helper.php object to construct respective data
 * also it can use a cache for css generated and js generated.
 * 
 * also, it had to reuse some codeparts between calls so the caching mechanism is not as easy to implement (at first at the first thought)
 * 
 * another goal: if "debug mode" it must generate all inline html or css generated by js
 */
require_once 'config.php';
require_once 'css_helper.php';
require_once 'js_helper.php';

require_once 'lib\bootstrap.php';

run();