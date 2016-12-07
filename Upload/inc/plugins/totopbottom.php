<?php
/*
 * MyBB: [jQuery] Appearing Scroll to Top Bottom
 *
 * File: totopbottom.php
 * 
 * Authors: Vintagedaddyo, effone
 *
 * MyBB Version: 1.8
 *
 * Plugin Version: 1.0
 * 
 */

// Disallow direct access to this file for security reasons

if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}

$plugins->add_hook("pre_output_page","totopbottom");

function totopbottom_info()
{
    global $lang;

    $lang->load("totopbottom");
    
    $lang->totopbottom_Desc = '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="float:right;">' .
        '<input type="hidden" name="cmd" value="_s-xclick">' . 
        '<input type="hidden" name="hosted_button_id" value="AZE6ZNZPBPVUL">' .
        '<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">' .
        '<img alt="" border="0" src="https://www.paypalobjects.com/pl_PL/i/scr/pixel.gif" width="1" height="1">' .
        '</form>' . $lang->totopbottom_Desc;

    return Array(
        'name' => $lang->totopbottom_Name,
        'description' => $lang->totopbottom_Desc,
        'website' => $lang->totopbottom_Web,
        'author' => $lang->totopbottom_Auth,
        'authorsite' => $lang->totopbottom_AuthSite,
        'version' => $lang->totopbottom_Ver,
        'compatibility' => $lang->totopbottom_Compat
    );
}


function totopbottom($page)
{
	global $mybb,$db;


        if(THIS_SCRIPT=="index.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/css/totopbottom.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/js/init.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<span id="scroll_up"></span><span id="scroll_dn"></span><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
	    if(THIS_SCRIPT=="forumdisplay.php")
	{
		{
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/css/totopbottom.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/js/init.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<span id="scroll_up"></span><span id="scroll_dn"></span><span id=\"copyright\">',$page);
			
			return $page;
		}
	}
        if(THIS_SCRIPT=="showthread.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/css/totopbottom.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/js/init.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<span id="scroll_up"></span><span id="scroll_dn"></span><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
        if(THIS_SCRIPT=="memberlist.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/css/totopbottom.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/js/init.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<span id="scroll_up"></span><span id="scroll_dn"></span><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
        if(THIS_SCRIPT=="member.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/css/totopbottom.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/js/init.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<span id="scroll_up"></span><span id="scroll_dn"></span><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
        if(THIS_SCRIPT=="misc.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/css/totopbottom.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/js/init.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<span id="scroll_up"></span><span id="scroll_dn"></span><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
        if(THIS_SCRIPT=="search.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/css/totopbottom.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/js/init.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<span id="scroll_up"></span><span id="scroll_dn"></span><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
        if(THIS_SCRIPT=="modcp.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/css/totopbottom.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/js/init.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<span id="scroll_up"></span><span id="scroll_dn"></span><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
        if(THIS_SCRIPT=="usercp.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/css/totopbottom.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/js/init.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<span id="scroll_up"></span><span id="scroll_dn"></span><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
        if(THIS_SCRIPT=="private.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/css/totopbottom.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/js/init.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<span id="scroll_up"></span><span id="scroll_dn"></span><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
        if(THIS_SCRIPT=="printthread.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/css/totopbottom.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/js/init.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<span id="scroll_up"></span><span id="scroll_dn"></span><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
        if(THIS_SCRIPT=="calendar.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/css/totopbottom.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/js/init.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<span id="scroll_up"></span><span id="scroll_dn"></span><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
        if(THIS_SCRIPT=="portal.php")
	{

		{
			$page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/css/totopbottom.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totopbottom/js/init.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<span id="scroll_up"></span><span id="scroll_dn"></span><span id=\"copyright\">',$page);
			
			return $page;
		}
	}
}

?>