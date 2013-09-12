<!-- $Id: screenshots.php,v 1.19 2008/03/01 15:20:18 jrl1 Exp $ -->
<?php
  $pagetitle="screenshots";
  $anchors_href=array("win", "gtk2", "osx", "other");
  $anchors_text=array("wxLua on Windows", "wxLua on Linux", "wxLua on OSX", "wxLua on ...");
  include_once("header.inc.php");

  function write_screenshot($url, $title)
  {
    echo "<a href='screenshots/$url'>";
    echo "<img src='thumbnails/$url' style='float:inherit' alt='$title' title='$title'/>";
    echo "</a>&nbsp;&nbsp;&nbsp;&nbsp;";
  }
?>

<h1 id="win" class="first">wxLua on MS Windows (2000, XP, Vista, 7)</h1>
<p>wxLua makes it simple to write applications that look natural in Windows using the 
<strong>wxMSW</strong> port of <a href="http://www.wxwidgets.org">wxWidgets</a> toolkit:</p>
<div style="text-align: center">
    <?php
        write_screenshot("wxluacan_win.png",
                         "The wxLuaCan sample (in wxMSW)");
        write_screenshot("wxluaedit_scribble_win.png",
                         "The scribble sample and wxLuaEdit showing scribble sources (in wxMSW)");
        write_screenshot("wxlua_miscsamples_win.png",
                         "Some miscellaneous samples (in wxMSW)");
    ?>
</div>

<h1 id="gtk2">wxLua on Linux with GTK+2</h1>
<p>The <a href="http://www.wxwidgets.org">wxWidgets</a> port on Linux platforms is called <strong>wxGTK</strong>
as it uses the <a href="http://www.gtk.org">GTK+ 2</a> libraries for drawing. Applications have
the same <em>look &amp; feel</em> as native GTK applications:</p>
<div style="text-align: center">
    <?php
        write_screenshot("wxluacan_gtk2.png",
                         "The wxLuaCan sample (in wxGTK2)");
        write_screenshot("wxluaedit_scribble_gtk2.png",
                         "The scribble sample and wxLuaEdit showing scribble sources (in wxGTK2)");
        write_screenshot("wxlua_miscsamples_gtk2.png",
                         "Some miscellaneous samples (in wxGTK2)");
        write_screenshot("wxlua_sudoku_gtk2.png",
                         "wxLuaSudoku (in wxGTK2)");
        write_screenshot("wxlua_stackdialog_gtk2.png",
                         "wxLua StackDialog showing Lua variables (in wxGTK2)");
    ?>
</div>

<h1 id="osx">wxLua on Mac OS X</h1>
<p>The <a href="http://www.wxwidgets.org">wxWidgets</a> port under Macintosh 
platforms is called <strong>wxMac</strong> and makes wxLua applications look exactly like native Mac applications:</p>
<div style="text-align: center">
    <?php
        write_screenshot("wxluacan_mac.png",
                         "The wxLuaCan sample (in wxMac)");
        write_screenshot("wxluaedit_scribble_mac.png",
                         "The scribble sample and wxLuaEdit showing scribble sources (in wxMac)");
        write_screenshot("wxlua_miscsamples_mac.png",
                         "Some miscellaneous samples (in wxMac)");
        write_screenshot("wxlua_sudoku_mac.png",
                         "wxLuaSudoku (in wxMac)");
        write_screenshot("wxlua_mac_wxgtk.png",
                         "wxLua (on a Mac but using wxGTK port)");
        write_screenshot("wxlua_mac_wxmac.png",
                         "wxLuaSudoku (in wxMac)");
    ?>
</div>

<h1 id="other">wxLua on other platforms ?</h1>
<p><a href="http://www.wxwidgets.org">wxWidgets</a> is available for other platforms and may also work with wxLua, 
but we need testers. If you use OS2, MGL, or PalmOS, and would like to get wxLua working there, please
contact us.</p>

<?php include_once("footer.inc.php"); ?>
