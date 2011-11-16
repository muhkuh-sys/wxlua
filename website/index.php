<!-- $Id: index.php,v 1.22 2009/06/03 03:19:39 jrl1 Exp $ -->
<?php
  $pagetitle="homepage";
  $anchors_href=array("whatis", "start");
  $anchors_text=array("What is wxLua?", "Getting started");
  include_once("header.inc.php");
?>

<!-- ##### News sidebar ##### -->
<!-- we want this box to be always on top of others -->
<div class="rightSideBar" style="z-index: 1000">
    <p class="sideBarTitle">News</p>
    <div class="sideBarText"><?php include_once("news.inc.php"); ?></div>
</div>


<h1 id="whatis" class="first">What is wxLua ?</h1>
<p>wxLua is a set of bindings to the C++ <a href="http://www.wxwidgets.org">wxWidgets</a> 
<a href="http://en.wikipedia.org/wiki/Cross-platform">cross-platform</a> 
<a href="http://en.wikipedia.org/wiki/GUI">GUI</a> library for the
<a href="http://www.lua.org">Lua</a> programming language. 
You can write complex, graphical, interactive programs with <strong>wxLua</strong>
to develop and deliver your software with the programming ease of an interpreted language like Lua.
Nearly all of the functionality of wxWidgets is exposed to Lua, meaning that your
programs can have windows, dialogs, menus, toolbars, controls, image loading and saving,
drawing, sockets, streams, printing, clipboard access... and much more.</p>

<p>Additionally, wxLua can be used in your C++ programs to embed a <em>Lua interpreter</em>
with the wxWidgets API installed to make development easier or to provide a scripting 
extension to the program's users. See the <a href="documentation.php">wxLua documentation</a> for more info.</p>

<p>Want to see an example of how easy it is to write a cross-platform GUI? Here is a simple Lua script which creates a
wxFrame top level window and a menubar, just add your program to it:</p>
<div style="z-index: 0"><?php include_once("luasample.lua.html"); ?></div>
<p>Easy, isn't it ? You can see more samples <a href="http://wxlua.cvs.sourceforge.net/wxlua/wxLua/samples/">here</a>.</p>

<p><strong>If you use wxLua or you wrote a wxLua-based application, 
don't forget to <a href="http://news.gmane.org/gmane.comp.lib.wxwidgets.wxlua.user">tell us</a> about it !</strong></p>


<h1 id="start">Getting started</h1>
<ol>
<li><p><strong>Get the tools:</strong> The <a href="download.php">download page</a> contains
the binary packages which allow you to get started in a few minutes. You can use the <strong>wxLua</strong>
and <strong>wxLuaEdit</strong> applications write, debug, and run your (wx)Lua programs.</p></li>

<li>
<p><strong>Learn Lua:</strong> Once you've got wxLua installed and running, you need to learn how to use it. 
A good way to learn <a href="http://www.lua.org">Lua</a>, in case you don't already know, is to refer to the
<a href="http://lua-users.org/wiki/TutorialDirectory">tutorial</a> hosted on the Lua wiki.</p></li>

<li>
<p><strong>Learn wxLua:</strong> Now that you have some familiarity with the Lua language you can learn 
about wxWidgets. There is information about the wxLua bindings on the <a href="documentation.php">documentation page</a> 
and the samples, in the <tt>wxLua/samples</tt> directory, might be helpful too.</p></li>
</ol>

<p>Finally, if you need further help, please look at the <a href="support.php">support page</a>.</p>

<?php include_once("footer.inc.php"); ?>
