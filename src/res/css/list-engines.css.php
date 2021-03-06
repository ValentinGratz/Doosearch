<?php 
header("Content-type: text/css; charset: UTF-8"); 
require("../core/Core.php");
use Language\Lang;
Lang::setModule('search_engines');
?>

.closeListSearchEngines
{
	background: rgba(0,0,0,.3);
	cursor: pointer;
	
	position: fixed;
	top: 0px;
	bottom: 0px;
	left: 0px;
	right: 0px;
	
	transition-property: all;
	transition-duration: 1s;
	
	-webkit-transition-property: all;
	-webkit-transition-duration: 1s;
	
	-moz-transition-property: all;
	-moz-transition-duration: 1s;
	
	-o-transition-property: all;
	-o-transition-duration: 1s;
	
	-ms-transition-property: all;
	-ms-transition-duration: 1s;
}

.popupSearchEngines
{
	position: fixed;
    top: 15px;
	left: 15px;
	right: 15px;
	bottom: 15px;
	
	background: rgb(50,50,50);
    border: 1px solid #000000aa;
	text-align: left;
	padding: 0;
    font-size: 0;
	overflow: hidden;
	z-index: 15;
	border-radius: 5px;
    box-shadow: 0 3px 10px rgba(0,0,0,.3);
	
	transition-property: all;
	transition-duration: .3s;
	
	-webkit-transition-property: all;
	-webkit-transition-duration: .3s;
	
	-moz-transition-property: all;
	-moz-transition-duration: .3s;
	
	-o-transition-property: all;
	-o-transition-duration: .3s;
	
	-ms-transition-property: all;
	-ms-transition-duration: .3s;
}

/* Structure of the popup*/
.popupSearchEngines .top
{
	background: linear-gradient(top, rgba(0,0,0,.3), transparent);
	background: -webkit-linear-gradient(top, rgba(0,0,0,.3), transparent);
	background: -moz-linear-gradient(top, rgba(0,0,0,.3), transparent);
	background: -ms-linear-gradient(top, rgba(0,0,0,.3), transparent);
	background: -o-linear-gradient(top, rgba(0,0,0,.3), transparent);
    font-size: 0;
    text-align: left;
    z-index: 1;
    position: relative;
}

/*.popupSearchEngines .side
{
    position: absolute;
    bottom: 0;
    left: 0;
    top: 120px;
    
    overflow: auto;
    width: 200px;
}*/

.popupSearchEngines .center
{
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    top: 97px;
    
    overflow: auto;
	
	transition-property: all;
	transition-duration: .3s;
	
	-webkit-transition-property: all;
	-webkit-transition-duration: .3s;
	
	-moz-transition-property: all;
	-moz-transition-duration: .3s;
	
	-o-transition-property: all;
	-o-transition-duration: .3s;
	
	-ms-transition-property: all;
	-ms-transition-duration: .3s;
}

/* Title bar */
.popupSearchEngines .titleBar .left,
.popupSearchEngines .titleBar .right,
.popupSearchEngines .titleBar h4,
.popupSearchEngines .titleBar img
{
	display: inline-block;
    vertical-align: middle;
}

.popupSearchEngines .titleBar .left
{
	width: calc(100% - (48px * 3));
}

.popupSearchEngines .titleBar h4
{
	width: calc(100% - 70px);
}

.popupSearchEngines .titleBar .right
{
	float: right;
}

.popupSearchEngines .titleBar h4
{
	font-size: 14px;
    margin: 15px 10px;
    font-weight: normal;
    color: #fff;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.popupSearchEngines .titleBar img
{
	padding: 16px;
	height: 16px;
	width: 16px;
    cursor: pointer;
}

.popupSearchEngines .titleBar img:hover
{
	background: rgba(255,255,255,.3);
}

.popupSearchEngines .titleBar img:active,
.popupSearchEngines .titleBar img.checked
{
	background: rgba(0,0,0,.3);
}

/* Search bar */
.popupSearchEngines .searchBar
{
    background: #fff;
    border-radius: 5px;
    width: 500px;
    margin: 20px auto;
    margin-top: 0px;
    display: block;
    box-shadow: 0 3px 10px rgba(0,0,0,.3);
    overflow: hidden;
}

body.dark .popupSearchEngines .searchBar {background: #222;}

.popupSearchEngines .searchBar *
{
    display: inline-block;
    vertical-align: middle;
}

.popupSearchEngines .searchBar img
{
    padding: 16px;
    height: 16px;
    width: 16px;
	
	-webkit-filter: invert(85%);
	   -moz-filter: invert(85%);
		-ms-filter: invert(85%);
		 -o-filter: invert(85%);
		    filter: invert(85%);
}

body.dark .popupSearchEngines .searchBar img
{
	-webkit-filter: invert(0%);
	   -moz-filter: invert(0%);
		-ms-filter: invert(0%);
		 -o-filter: invert(0%);
		    filter: invert(0%);
}

.popupSearchEngines .searchBar input[type=text]
{
    border: none;
    background: transparent;
    color: #000;
    padding: 14px 0;
    width: calc(100% - 48px);
    margin: 0;
    font-size: 16px;
}

body.dark .popupSearchEngines .searchBar input[type=text]
{
    color: #fff;
}

.popupSearchEngines .searchBar .cleaner
{
    padding: 0;
    margin: 0;
    opacity: .5;
    border: none;
    background: transparent;
    display: none;
}

.popupSearchEngines .searchBar .cleaner:hover
{
    opacity: 1;
    border: none;
    background: transparent;
}

.popupSearchEngines .searchBar.withCleaner input
{
    width: calc(100% - 96px);
}

.popupSearchEngines .searchBar.withCleaner .cleaner
{
    display: inline-block;
}

/* Search engines items */
.popupSearchEngines .searchEngines
{
	padding: 20px;
	margin: 0;
	list-style: none;
	overflow-y: auto;
	
	transition-property: all;
	transition-duration: .3s;
	
	-webkit-transition-property: all;
	-webkit-transition-duration: .3s;
	
	-moz-transition-property: all;
	-moz-transition-duration: .3s;
	
	-o-transition-property: all;
	-o-transition-duration: .3s;
	
	-ms-transition-property: all;
	-ms-transition-duration: .3s;
}

.popupSearchEngines .searchEngines span
{
	/*background: rgba(0,0,0,.3);
	display: inline-block;*/
}

.popupSearchEngines .searchEngines li
{
	display: inline-block;
	margin: 3px;
	padding: 10px;
	padding-bottom: 5px;
	text-align: left;
	cursor: pointer;
	vertical-align: top;
	color: white;
	border-radius: 4px;
	
	transition-property: all;
	transition-duration: .2s;
	
	-webkit-transition-property: all;
	-webkit-transition-duration: .2s;
	
	-moz-transition-property: all;
	-moz-transition-duration: .2s;
	
	-ms-transition-property: all;
	-ms-transition-duration: .2s;
	
	-o-transition-property: all;
	-o-transition-duration: .2s;
}

.popupSearchEngines .searchEngines li#add-search-engine
{
	display: none;
}

.popupSearchEngines .searchEngines li:hover
{
	background: white;
	color: rgb(50,50,50);
    box-shadow: 0 3px 10px rgba(0,0,0,.3);
}

.popupSearchEngines .searchEngines li:active
{
    transform: scale(.9);
}

body.dark .popupSearchEngines .searchEngines li:hover
{
	background: #111;
	color: #fff;
    box-shadow: 0 3px 10px rgba(0,0,0,.3);
}

.popupSearchEngines .searchEngines li img
{
	height: 100px;
	width: 100px;
	border-radius: 4px;
    box-shadow: 0 3px 10px rgba(0,0,0,.3);
	
	transition-property: all;
	transition-duration: .5s;
	
	-webkit-transition-property: all;
	-webkit-transition-duration: .5s;
	
	-moz-transition-property: all;
	-moz-transition-duration: .5s;
	
	-o-transition-property: all;
	-o-transition-duration: .5s;
	
	-ms-transition-property: all;
	-ms-transition-duration: .5s;
}

.popupSearchEngines .searchEngines li:hover img
{
	border-radius: 0px;
	box-shadow: none;
}

.popupSearchEngines .searchEngines li p
{
	width: 100px;
	font-size: 14px;
	margin: 5px 0px;
	line-height: inherit;
    text-align: center;
    word-wrap: break-word;
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    -ms-hyphens: auto;
    -o-hyphens: auto;
    hyphens: auto;
}

.popupSearchEngines .searchEngines .disable
{
	opacity: .5;
}

.popupSearchEngines .searchEngines .new,
.popupSearchEngines .searchEngines .selected
{
	background: rgba(255,255,255,.2);
}

.popupSearchEngines .searchEngines .new p::before,
.popupSearchEngines .searchEngines .selected p::before
{
	content: "<?= Lang::getText("new"); ?>";
	min-width: 10px;
	font-size: 10px;
	margin: auto;
    padding-top: 5px;
	display: block;
}

.popupSearchEngines .searchEngines .selected p::before {content: '<?= Lang::getText("selected"); ?>';}

.popupSearchEngines .searchEngines .disable p::before
{
	content: "<?= Lang::getText("disabled"); ?>";
	min-width: 10px;
	font-size: 10px;
	margin: auto;
	display: block;
}

#actRemoveEngine {display: none;}

/* Moteurs sous forme de liste */

.list .searchEngines
{
	padding: 30px;
	text-align: left;
}

.list .searchEngines li
{
	padding: 5px;
	width: 350px;
}

.list .searchEngines li *
{
	display: inline-block;
	vertical-align: middle;
}

.list .searchEngines li img
{
	height: 40px;
	width: 40px;
	margin-right: 10px;
}

.list .searchEngines li p
{
	width: 280px;
	margin: 0px;
    font-size: 16px;
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
    text-align: left;
}

.list .searchEngines .new p::before,
.list .searchEngines .selected p::before {padding: 0;}

/* Context menu for search engine */
.central.menu {z-index: 15; display: none;}
.central .menuEngine
{
	background: #fff;
	padding: 30px;
    font-size: 0;
	border-radius: 10px;
    box-shadow: 0 3px 10px rgba(0,0,0,.3);
    text-align: center;
    vertical-align: middle;
    display: inline-block;
    z-index: 15;
    position: relative;
}

body.dark .central .menuEngine
{
    background: rgb(35,35,35);
    color: #fff;
}

.menuEngine .view
{
    margin-top: -100px;
}

.menuEngine .view img
{
    width: 100px;
    height: 100px;
    border-radius: 100px;
    box-shadow: 0 3px 10px rgba(0,0,0,.3);
    margin-bottom: 20px;
}

.menuEngine .view h5
{
    margin: 0;
    font-weight: normal;
    font-size: 16px;
}

.menuEngine .actions
{
    list-style: none;
    padding: 0px;
    margin-top: 20px;
}

.menuEngine .actions li
{
    display: inline-block;
    vertical-align: top;
    border: 1px solid transparent;
    border-radius: 5px;
    width: 90px;
    padding: 0 10px;
    cursor: pointer;
}

.menuEngine .actions li:hover
{
    border-color: grey;
    background: #eee;
}

.menuEngine .actions li:active
{
    border-color: black;
    background: #ddd;
}

body.dark .menuEngine .actions li:hover
{
    border-color: #444;
    background: #333;
}

body.dark .menuEngine .actions li:active
{
    border-color: #666;
    background: #555;
}

.menuEngine .actions li img
{
    width: 20px;
    height: 20px;
    margin-top: 10px;
}

body.dark .menuEngine .actions li img
{
	-webkit-filter: invert(100%);
	   -moz-filter: invert(100%);
		-ms-filter: invert(100%);
		 -o-filter: invert(100%);
		    filter: invert(100%);
}

.menuEngine .actions li p
{
    margin: 10px 0;
    font-size: 12px;
}

#actUnpinEngine
{
    display: none;
}

@media screen and (max-width: 1000px)
{
	.popupSearchEngines
	{
		padding: 0px;
		text-align: center;
        border-radius: 0;
        border: none;
        
        top: 0px;
        bottom: 0px;
        left: 0px;
        right: 0px;
	}
    
    .popupSearchEngines .searchBar
    {
        border-radius: 4px;
        width: calc(100% - 30px);
        margin: 0 15px;
    }
    
    .popupSearchEngines .searchBar input,
    .popupSearchEngines .searchBar.withCleaner input
    {
        padding: 15px 0;
        width: calc(100% - 48px);
        font-size: 14px;
    }

	.popupSearchEngines .searchBar .cleaner,
	.popupSearchEngines .searchBar.withCleaner .cleaner
	{
		display: none;
	}

	.popupSearchEngines .searchEngines
	{
		margin: 0px;
		padding: 10px;
	}

	.popupSearchEngines .searchEngines li img
	{
		height: 80px;
	}

	.popupSearchEngines .searchEngines li img,
	.popupSearchEngines .searchEngines li p
	{
		width: 80px;
		font-size: 12px;
	}

	/* List view */
	
	.list .searchEngines
	{
		padding: 10px 0;
		margin: 0px;
	}
	
	.list .searchEngines li
	{
		width: calc(100% - 20px);
		padding: 5px 10px;
		margin: 0px;
        border-radius: 0;
	}
	
	.list .searchEngines li img
	{
		height: 30px;
		width: 30px;
		margin: 5px;
        margin-right: 13px;
	}

	.list .searchEngines li p
	{
		width: calc(100% - 70px);
		text-align: left;
		margin: 0px;
		font-size: 14px;
	}

	.list .searchEngines .new p::before,
	.list .searchEngines .selected p::before
	{
		display: none;
	}

	.list .searchEngines .new p::after,
	.list .searchEngines .selected p::after
	{
		content: "<?= Lang::getText("new"); ?>";
		min-width: 10px;
		font-size: 14px;
		margin: auto;
		display: inline-block;
		margin-left: 15px;
        opacity: .5;
	}
    
    .list .searchEngines .selected p::after {content: '<?= Lang::getText("selected"); ?>';}
    
}

@media screen and (max-width: 600px)
{
    .central.menu .aligner,
    .central.menu .menuEngine
    {
        vertical-align: bottom;
    }
    
    .central .menuEngine
    {
        padding: 0;
        border-radius: 0;
        width: 100%;
    }
    
    .menuEngine .view {margin-top: -50px;}
    .menuEngine .actions {margin: 10px; margin-bottom: 20px;}
}