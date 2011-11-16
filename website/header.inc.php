<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-AU">
  <head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
    <meta name="keywords" content="wxLua, wxWidgets, component, C++, bakefile, lua, bindings, embedded, interpreter" />
    <meta name="author" content="Francesco Montorsi (webdesign by haran)" />
    <meta name="generator" content="haran" />

    <link rel="stylesheet" type="text/css" href="style.css" title="Gila (screen)" />
    <link rel="alternate" type="application/rss+xml" title="wxLua Project News"
            href="http://sourceforge.net/export/rss2_projnews.php?group_id=140042&amp;rss_fulltext=1" />

    <title>wxLua - <?php echo $pagetitle; ?></title>
  </head>

  <body>
    <!-- ##### Header ##### -->
    <div id="header">
      <table border="0" style="width:100%; vertical-align: middle;">
         <tr style="vertical-align: middle; margin:0; padding: 0">
            <td style="width:50%; margin:0; padding: 0">
                <a href="http://wxlua.sourceforge.net">
                    <img src="images/wxlualogo.png" style="border:0" alt="The wxLua logo"/>
                </a>
            </td>
            <td style="width:50%; vertical-align: middle;">
                <h1 class="headerTitle">
                    wxLua<span> - <a href="http://www.wxwidgets.org">wxWidgets</a> bindings for <a href="http://www.lua.org">Lua</a></span>
                </h1>
            </td>
         </tr>
      </table>

        <?php
            function writeSideBarEntry($entryname, $entrytitle)
            {
                global $pagetitle;

                // write different HTML code if this the menu entry for this page
                $isthispage = strcasecmp($pagetitle, $entryname) == 0;
                if ($isthispage)
                    echo "<span class='thisPage'>&rsaquo; ";
                else
                    echo "<a href='" . strtolower($entryname) . ".php' title='$entrytitle'>";

                echo ucfirst($entryname);

                if ($isthispage)
                    echo ' &lsaquo;</span>';
                else
                    echo '</a>';
            }
        ?>

        <div class="subHeader">
            <span class="doNotDisplay">Navigation: </span>
            <?php writeSideBarEntry("index", "Home page") ?> |
            <?php writeSideBarEntry("license", "wxLua license") ?> |
            <?php writeSideBarEntry("screenshots", "wxLua in action!") ?> |
            <?php writeSideBarEntry("download", "Download it!") ?> |
            <?php writeSideBarEntry("documentation", "wxLua docs") ?> |
            <?php writeSideBarEntry("support", "Need help?") ?>
        </div>
    </div>

    <div id="side-bar">

      <!-- ##### Left Sidebar ##### -->
      <div class="leftSideBar">
        <p class="sideBarTitle">This Page</p>
        <ul>
          <?php
                assert(count($anchors_href) == count($anchors_text));
                for ($i=0; $i < count($anchors_href); $i++)
                    echo "<li><a href='" . $_SERVER['PHP_SELF'] . '#' .
                            $anchors_href[$i] . "'>" . $anchors_text[$i] . "</a></li>";
          ?>
        </ul>

        <p class="sideBarTitle">Links</p>
        <ul>
              <li><a href="http://sourceforge.net/projects/wxlua" title="The project page at Sourceforge.net">Project page</a></li>
              <li><a href="http://www.wxwidgets.org" title="Learn more about wxWidgets">wxWidgets</a></li>
              <li><a href="http://www.wxwidgets.org/wiki" title="The official wxWidgets wiki">wxWiki</a></li>
              <li><a href="http://www.lua.org" title="Learn more about lua">Lua</a></li>
              <li><a href="http://lua-users.org/wiki" title="The official lua wiki">LuaWiki</a></li>
        </ul>
      </div>
    </div>

    <!-- ##### Main Copy ##### -->
    <div id="main-copy">

