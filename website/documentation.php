<!-- $Id: documentation.php,v 1.3 2009/06/03 03:19:39 jrl1 Exp $ -->
<?php
  $pagetitle="documentation";
  $anchors_href=array("reference", "install", "bindings", "cvs", "authors");
  $anchors_text=array("Reference manuals", "Compiling", "Bindings", "CVS", "Authors");
  include_once("header.inc.php");
?>

<h1 id="reference" class="first">Reference manuals</h1>
<p>The following links contain useful documents for learning and understanding wxLua, Lua, and wxWidgets.<br/>
If you're looking for tutorials see the &quot;Getting started&quot; section on the <a href="index.php">homepage</a>...</p>

<div class="indented">
<h2 style="padding-top: 0">wxLua documentation</h2>
<p>Read the <a href="docs/wxlua.html">wxLua documentation</a> that describes
programming in lua and wxLua as well as how to use the wxLua library in a C++ program.</p>
<p>The <a href="docs/wxluaref.html">wxLua class reference</a> has a complete list of wxWidgets classes
and datatypes that wxLua wraps.</p>
<p>The <a href="docs/FAQ.html">FAQ</a> may answer some of your questions and it highlights important points.</p>
<p>There are also <a href="http://www.doxygen.org">doxygen</a>-generated documentation for
the C++ wxLua library at <a href="docs/doxygen/html/index.html">this page</a>.</p>

<h2>Lua documentation</h2>
<p>The <a href="http://www.lua.org/manual/5.1/">Lua 5.1 reference manual</a> and the <a href="http://www.lua.org/pil/">Programming in Lua</a> online book describe the Lua language in details.</p>
<p>Also the <a href="http://lua-users.org/wiki">LuaWiki</a> can be a good place to find useful tips about Lua...</p>

<h2>wxWidgets documentation</h2>
<p>The <a href="http://www.wxwidgets.org/docs.htm">wxWidgets reference manual</a> on
<a href="http://www.wxwidgets.org">www.wxwidgets.org</a> is the best
reference for the wxWidgets classes that wxLua wraps.</p>
<p>As usual, don't forget the <a href="http://www.wxwidgets.org/wiki">wxWiki</a> which provides miscellaneous info...</p>
</div>


<h1 id="install">Compiling and installing wxLua</h1>
<p>Please read the <a href="docs/install.html">install.html</a> file from wxLua's docs directory.</p>

<h1 id="bindings">Writing and understanding the binding files</h1>
<p>Read the <a href="docs/binding.html">binding.html</a> file from the docs directory.
Also, take a look at a few of the binding files in
<a href="http://wxlua.cvs.sourceforge.net/wxlua/wxLua/bindings/wxwidgets">wxLua CVS</a> 
to see how they're constructed and how they're merely simplified versions of the original C/C++ code.</p>

<h1 id="cvs">CVS repository</h1>
<p>You can browse online the CVS repository of wxLua at <a href="http://wxlua.cvs.sourceforge.net/wxlua/wxLua">this page</a>.</p>

<h1 id="authors">Authors</h1>
<p>The wxLua development team is composed by various developers (here listed in <strong>chronological order</strong>):</p>
<ol>
<li><strong>Paul and J Winwood</strong>: the original authors. Now not working actively anymore.</li>
<li><strong>Francis Irving</strong>: author of the wxLua standalone application. Now not working actively anymore.</li>
<li><strong>John Labenski</strong>: author of most of the wxLuaEdit application and wxLua lead developer and maintainer.</li>
<li><strong>Ray Gilbert</strong>: worked on the wxLua bindings parser.</li>
<li><strong>Klaas Holwerda</strong>: author of wxLuaCan sample and indefatigable source of ideas.</li>
<li><strong>Francesco Montorsi</strong>: worked on the bakefile-based build system, on this website and the wxLua packaging.</li>
<li><strong>Anders F Björklund</strong>: contributed wxMac screenshots and created wxMac package.</li>
<li><strong>Reuben Thomas</strong>: wrote the bit library that wxLua includes.</li>
<li><strong>Did we forget you?</strong> contact us and we'll add you.</li>
</ol>
<p>Credits also goes to all those tools which lets us to maintain the project: <a href="http://bakefile.sourceforge.net">bakefile</a>, <a href="http://www.doxygen.org">doxygen</a>, <a href="http://www.autopackage.org">autopackage</a> projects and obviously to <a href="http://www.wxwidgets.org">wxWidgets toolkit</a> and to <a href="http://www.sourceforge.net">SourceForge.net</a> for hosting the project.</p>

<?php include_once("footer.inc.php"); ?>
