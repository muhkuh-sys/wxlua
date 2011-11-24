<!-- $Id: index.php,v 1.22 2009/06/03 03:19:39 jrl1 Exp $ -->
<?php
+  $pagetitle="homepage";
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
<p>wxLua is a 
<a href="http://www.lua.org">Lua</a> 
scripting language wrapper around the 
<a href="http://www.wxwidgets.org">wxWidgets</a> 
<a href="http://en.wikipedia.org/wiki/Cross-platform">cross-platform</a> C++ 
<a href="http://en.wikipedia.org/wiki/GUI">GUI</a> library. 
It consists of two IDE type editors that can edit, debug, and run Lua programs (wxLua and wxLuaEdit), 
an executable for running standalone wxLua scripts (wxLuaFreeze), 
a Lua module that may be loaded using require("wx") when using the standard Lua executable, 
and a library for extending C++ programs with a fast, small, fully embeddable scripting language.
</p>

<p>
Lua is a small scripting language written in ANSI C that can load and run interpreted 
scripts as either files or strings. The Lua language is fast, dynamic, and easy to learn. 
Lua contains a limited number of data types, mainly numbers, booleans, strings, functions, 
tables, and userdata. Perhaps the most powerful feature of the Lua language is that tables 
can be used as either numerically indexed arrays or associative arrays that can 
cross-reference any variable type to any other variable type.
</p>
<p>
wxLua adds to this small and elegant language nearly all of the functionality of the C++ wxWidgets cross-platform GUI library. 
This includes the ability to create complex user interface dialogs, file and image manipulation, 
drawing, network sockets, displaying HTML, and printing to name a few. You can use as much or as little of 
wxWidgets as you like and C++ developers can trim down the size the bindings by turning off preprocessor directives.
<p>

<p>Want to see an example of how easy it is to write a cross-platform GUI? Here is a simple Lua script which creates a
wxFrame top level window and a menubar, just add your program to it:</p>

<div style="z-index: 0; width: 90%"><?php include_once("luasample.lua.html"); ?></div>

<p>Easy, isn't it? You can see more samples <a href="http://wxlua.svn.sourceforge.net/viewvc/wxlua/trunk/wxLua/samples/">here</a>.</p>

<p><strong>If you use wxLua or you wrote a wxLua-based application, 
don't forget to <a href="http://sourceforge.net/mailarchive/forum.php?forum_name=wxlua-users">tell us</a> about it !</strong></p>


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
