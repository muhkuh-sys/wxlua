<!-- $Id: documentation.php,v 1.3 2009/06/03 03:19:39 jrl1 Exp $ -->
<?php
  $pagetitle="documentation";
  $anchors_href=array("reference", "install", "bindings", "cvs", "authors");
  $anchors_text=array("Reference manuals", "Compiling", "Bindings", "CVS", "Authors");
  include_once("header.inc.php");
?>

<h1 id="reference" class="first">Reference manuals</h1>
<p>This page contains links to information about learning and using wxLua, Lua, and wxWidgets.<br/>
See also the &quot;Getting started&quot; section on the <a href="index.php">homepage</a>...</p>

<div class="indented">
<h2 style="padding-top: 0">wxLua documentation</h2>
<ul>
<li>The <a href="docs/wxlua.html">wxLua manual</a> describes
programming in Lua and wxLua as well as how to use the wxLua library in a C++ program.</li>
<li>The <a href="docs/wxluaref.html">wxLua class reference</a> has a complete list of wxWidgets classes
and datatypes that wxLua wraps. </li>
   <ul><li>It may not be very pretty, but it shows you exactly what in wxWidgets is wrapped by wxLua.</li></ul>
<li>The <a href="docs/FAQ.html">wxLua FAQ</a> may answer some of your questions and it highlights important points.</li>
<li>There is also <a href="http://www.doxygen.org">doxygen</a>-generated documentation for
the C++ wxLua library <a href="docs/doxygen/html/index.html">here</a>.</li>
</ul>

<h2>Lua documentation</h2>
<ul>
<li>The <a href="http://www.lua.org/manual/5.1/">Lua 5.1 reference manual</a> 
    is the definitive reference for the Lua language.</li>
<li>The <a href="http://www.lua.org/pil/">Programming in Lua</a> online book 
    describes the Lua language in detail.</li> 
    <ul><li>Note that this is the first edition for Lua 5.0 and there are important differences to Lua 5.1.4 
    as described on that page. However, it is still a great reference.</li></ul>
<li>Also, the <a href="http://lua-users.org/wiki">LuaWiki</a> can be a good place to find useful tips about Lua...</li>
</ul>

<h2>wxWidgets documentation</h2>
<ul>
<li>The <a href="http://www.wxwidgets.org/docs.htm">wxWidgets reference manual</a> on
<a href="http://www.wxwidgets.org">www.wxwidgets.org</a> is the best
reference for the wxWidgets classes that wxLua wraps.</li>
<li>Don't forget the <a href="http://www.wxwidgets.org/wiki">wxWiki</a> which provides information and tips...</li>
</ul>
</div>

<h1 id="install">Compiling and installing wxLua</h1>
<ul>
<li>Please read the <a href="docs/install.html">install.html</a> file from wxLua's docs directory.</li>
</ul>

<h1 id="bindings">Writing and understanding the binding files</h1>
<ul>
<li>Read the <a href="docs/binding.html">binding.html</a> file from the docs directory.</li>
<li>Look at a few of the binding files in
<a href="http://wxlua.svn.sourceforge.net/viewvc/wxlua/trunk/wxLua/bindings/wxwidgets/">wxLua SVN</a> 
to see how they're constructed and how they're merely simplified versions of the original C/C++ code.</li>
</ul>

<h1 id="cvs">Subversion (SVN) repository</h1>
<ul>
<li>You can browse the SVN repository of wxLua <a href="http://wxlua.svn.sourceforge.net/viewvc/wxlua/trunk/wxLua/">here</a>.</li>
</ul>

<h1 id="authors">Authors</h1>
<p>wxLua developers listed in chronological order:</p>
<ol>
<li><strong>Paul and J Winwood</strong>: The original authors. No longer active.</li>
<li><strong>Francis Irving</strong>: Author of the wxLua standalone application. No longer active.</li>
<li><strong>John Labenski</strong>: Updated and reworked wxLua in 2004 to make it modular, embeddable, and allow multiple instances. Currently developing and maintaining wxLua.</li>
<li><strong>Ray Gilbert</strong>: Rewrote the wxLua bindings parser.</li>
<li><strong>Klaas Holwerda</strong>: Author of wxLuaCan sample and indefatigable source of ideas.</li>
<li><strong>Francesco Montorsi</strong>: Worked on the bakefile-based build system, on this website, and the wxLua packaging.</li>
<li><strong>Anders F Björklund</strong>:Contributed wxMac screenshots and created wxMac package.</li>
<li><strong>Reuben Thomas</strong>: Wrote the bit library that wxLua includes.</li>
<li><strong>Did we forget you?</strong> contact us and we'll add you.</li>
</ol>
<p>Credits also goes to all those tools which lets us to maintain the project: <a href="http://bakefile.sourceforge.net">bakefile</a>, <a href="http://www.doxygen.org">doxygen</a>, <a href="http://www.autopackage.org">autopackage</a> projects and obviously to <a href="http://www.wxwidgets.org">wxWidgets toolkit</a> and to <a href="http://www.sourceforge.net">SourceForge.net</a> for hosting the project.</p>

<?php include_once("footer.inc.php"); ?>
