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
<p>
wxLua is a <a href="http://www.lua.org">Lua</a> scripting language wrapper around the 
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
wxLua adds to this small and elegant language nearly all of the functionality 
of the C++ wxWidgets cross-platform GUI library. 
This includes the ability to create complex user interface dialogs, 
file and image manipulation, drawing, network sockets, displaying HTML, 
and printing to name a few. You can use as much or as little of 
wxWidgets as you like and C++ developers can trim down the size the 
bindings by turning off preprocessor directives.
</p>
<p>
wxLua can be built against wxWidgets 2.8.x, 2.9.x and Lua versions 5.1, 5.2, and LuaJIT.
</p>

<p>
The simple wxLua script below creates a wxFrame top-level window, with a menubar, and a statusbar.  
More examples of wxLua programs can be found in the 
<a href="https://sourceforge.net/p/wxlua/svn/HEAD/tree/trunk/wxLua/samples/">samples directory</a>
of the wxLua distribution.
</p>

<div style="z-index: 0; width: 90%"><?php include_once("luasample.lua.html"); ?></div>

<h1 id="start">Getting started</h1>
<ol>
  <li>
    <strong>Get wxLua:</strong> 
    <ul>
      <li> 
        There are binary packages for selected platforms on the <a href="download.php">download page</a>.  
        You will have to compile wxLua for other platforms as described in the <a href="docs/install.html">install</a> document.
      </li>
      <li>
        Once installed, the <strong>wxLua</strong> and <strong>wxLuaEdit</strong> 
        applications can be used to write, debug, and run your (wx)Lua programs.
      </li>
    </ul>
  </li>
  <li>
    <strong>Learn <a href="http://www.lua.org">Lua</a>:</strong>
    <ul>
      <li>
        Review the <a href="http://www.lua.org/manual">Lua Reference Manual</a>, 
        a concise description of the <a href="http://www.lua.org">Lua</a> language.
      <li>
        There are also Lua <a href="http://lua-users.org/wiki/TutorialDirectory">tutorials</a> hosted on the Lua wiki.
      </li>
    </ul>
  </li>
  <li>
    <strong>Learn wxLua:</strong>
    <ul>
      <li>
        Read the <a href="docs/wxlua.html">wxLua Manual</a> for a brief introduction to Lua, 
        a description of the wxLua bindings to wxWidgets, the components of wxLua, how to interface to it in C++...
      </li>
      <li>
        Further information can be found on the <a href="documentation.php">documentation page</a>.
      </li>
      <li>
        Read and run some of the <a href="http://wxlua.svn.sourceforge.net/viewvc/wxlua/trunk/wxLua/samples/">wxLua samples</a>.
      </li>
    </ul>
  </li>
</ol>

<ul>
  <li>
    If you need further help, please look at the <a href="support.php">support page</a>.
  </li>
  <li>
    <strong>If you use wxLua or wrote a wxLua based application,
    don't forget to <a href="http://sourceforge.net/mailarchive/forum.php?forum_name=wxlua-users">tell us</a> about it !</strong>
  </li>
</ul>

<?php include_once("footer.inc.php"); ?>
