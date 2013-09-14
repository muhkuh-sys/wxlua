<!-- $Id: download.php,v 1.34 2009/06/09 21:52:09 jrl1 Exp $ -->
<?php
  $pagetitle="download";
  $anchors_href=array("win",     "linux", "mac",       "sources", "subversion", "older");
  $anchors_text=array("Windows", "Linux", "Macintosh", "Sources", "Subversion", "Older releases");
  include_once("header.inc.php");


  // IMPORTANT: update these info when a new release is available!
  // =============================================================
  $latestversion="2.8.12.3";

  $releaselink="http://sourceforge.net/projects/wxlua/files/wxlua/2.8.12.3";

  $winlink="http://sourceforge.net/projects/wxlua/files/wxlua/2.8.12.3/wxLua-2.8.12.3-MSW-Ansi.zip/download";
  $linuxlink="https://sourceforge.net/projects/wxlua/files/wxlua/2.8.10.0/wxlua-2.8.10-1.x86.package";
  $maclink="https://sourceforge.net/projects/wxlua/files/wxlua/2.8.10.0/wxlua-2.8.10.0-tiger.dmg";
  $gzlink="https://sourceforge.net/projects/wxlua/files/wxlua/2.8.12.3/wxLua-2.8.12.3-src.tar.gz";
?>

<div class="rightSideBar">
    <p class="sideBarTitle">Latest version</p>
    <div class="sideBarText">
        <p>Latest wxLua version is:<br/><br/>
            <strong>&raquo;&nbsp;<?php echo $latestversion; ?>&nbsp;&laquo;</strong><br/><br/>
            The change log for this and previous releases can be <a href="docs/changelog.txt">found here</a>.
        </p>
    </div>

    <!-- ##### Platform detection code ##### -->
    <?php
        $platform = "Unknown";
        $arch = "32 bit";
        $useragent = $_SERVER['HTTP_USER_AGENT'];

        // useful for debugging...
        echo "<!-- " . $useragent . " -->";

        if (strstr($useragent,'Win'))
            $platform='Windows';
        else if (strstr($useragent,'Mac'))
            $platform='Macintosh';
        else if (strstr($useragent,'Linux'))
            $platform='Linux';
        else if (strstr($useragent,'Unix'))
            $platform='Unix';

        if (strstr($useragent,'x86_64') || strstr($useragent,'x64') ||
            strstr($useragent,'AMD64') || strstr($useragent,'IA64'))
            $arch='64 bit';

        if  ($platform != "Unknown") {
    ?>
        <p class="sideBarTitle">Which download?</p>
        <div class="sideBarText">
            <p>Your platform has been detected as:<br/><br/><strong>&raquo;&nbsp;<?php echo $platform . ' ' . $arch; ?>&nbsp;&laquo;</strong></p>
        </div>
    <?php
        }
    ?>
</div>

<h1 class="first">Download wxLua...</h1>
<p>
wxLua can be used as a C++ library for projects that want to add 
Lua scripting capabilities to their wxWidgets programs 
or as an application or Lua module for programmers who want to write, 
debug, and execute applications written entirely in Lua.
<p/>

<ul>
  <li>
    If you are interested in using wxLua as a C++ library to extend your program, 
    you should download the <strong>sourcecode</strong> and compile the 
    wxLua libraries to link to.
    <ul>
      <li>
        Please read the install.html documentation that is provided in the docs/ folder to learn how to build wxLua.
      </li>
    </ul>
  </li>
  <li>
    Instead, if you are interested in using wxLua to write and execute Lua programs 
    download the appropriate <strong>binary</strong> package, if available.
    <ul>
      <li>The builds may come in two flavors, Ansi and Unicode.</li>
      <li>Lua can only be built using Ansi strings and all of its string functions treat them as such.</li>
      <li>wxWidgets can be built using Ansi or Unicode strings.</li>
      <li>wxLua Ansi Build - Strings in Lua are pushed into wxWidgets as-is to be shown in a dialog or used otherwise.</li>
      <li>wxLua Unicode Build - Strings in Lua are Ansi of course, but when they are pushed into wxWidgets 
          they are treated as UTF-8 Unicode strings and translated to the appropriate wxWidgets Unicode char type.
          This means that you can write UTF-8 strings in your Lua source code and wxWidgets will display them appropriately.
          However, this also means that wxWidgets will pass UTF-8 strings back to Lua so you need to be prepared to handle them as such.
          This means that a single character may not always be one byte long, but up to four bytes,
          making the use of Lua's string.gsub/mid/... functions harder to use.
      </li>
    </ul>
  </li>
</ul>

Don't forget to read the documentation about the wxLua 
<a href="http://wxlua.sourceforge.net/docs/wxlua.html#wxlua_applications">executables</a> 
and how to run the <a href="http://wxlua.sourceforge.net/docs/wxlua.html#wxlua_samples">samples</a>.<br/>

<p><h3>
<b>You can view a complete list of downloads on Sourceforge 
<a href="https://sourceforge.net/projects/wxlua/files/">here<alt="Downloads"/></a>.</b>
</h3></p>

<h2 id="win">...for Windows</h2>
<table><tr>
<td valign="top"><img src="images/win.png" alt="Windows download"/></td>
<td>
    <p>Choose either the Ansi or Unicode version and download desired wxLua-X.Y.Z.R-[Ansi/Unicode].zip</br>
    The <a href="<?php echo $releaselink; ?>">binary packages</a> are self-contained; you won't need anything else.
    Simply unzip the binaries into a new directory and run the programs in the bin/ directory.<br/>
    See the <a href="support.php">support page</a> if you have problems with installation.
</td>
</tr></table>


<h2 id="linux">...for Linux</h2>
<table><tr>
<td valign="top"><img src="images/linux.png" alt="Linux download"/></td>
<td>
    <p>There are currently no binary packages for 2.8.12, please read the install 
    instructions to learn how to compile it from source code on your system.</p>

    <!--
    <p><a href="<?php echo $linuxlink; ?>">Older 2.8.10 Binary package</a> (autopackage for 
    <strong>32 bit</strong> linuxes) self-contained; you won't need anything else.<br/>
    For problems with installation, see the <a href="support.php">support page</a>.</p>
    -->
</td>
</tr></table>


<h2 id="mac">...for Macintosh</h2>
<table><tr>
<td valign="top"><img src="images/macosx.png" alt="Macintosh download"/></td>
<td>
    <p>There are currently no binary packages for 2.8.12, please read the install
    instructions to learn how to compile it from source code on your system.
    <br/>
    <a href="<?php echo $maclink; ?>">Older 2.8.10 binary package</a> as a self-contained Mac bundle.
    </p>
</td>
</tr></table>


<h2>...for Maemo</h2>
<p>
Run wxLua on your Nokia N810 (possibly N770) using the Maemo platform.
Please visit Charles Shapiro's website, 
<a href="http://tomshiro.org/lua-maemo/">http://tomshiro.org/lua-maemo/</a>, for more information.
</p>


<h2 id="sources">Sourcecode</h2>
<table><tr>
<td valign="top"></td>
<td>
    <p>
    <a href="<?php echo $gzlink; ?>">2.8.12.3 source package</a> (.tar.gz)<br/>
    See <a href="docs/install.html">install.html</a> for info about required libraries and how to compile and install them.
    </p>
</td>
</tr></table>


<h2 id="subversion">Browse the Sourceforge Subversion (SVN) Sourcecode Repository On-line</h2>
<p>November 21, 2011 - wxLua has switched from CVS to Subversion and all further development will take place in SVN.</p>
<table><tr>
<td valign="top"></td>
<td>
    <p>
    Browse the wxLua <a href="https://sourceforge.net/p/wxlua/svn/HEAD/tree/trunk/wxLua/">SVN repository</a> on Sourceforge.
    <!-- <li>Browse the wxLua <a href="http://wxlua.cvs.sourceforge.net/wxlua/wxLua/">CVS repository</a> on Sourceforge</li> -->
    </p>
</td>
</tr></table>


<h2 id="older">Older Releases</h2>
<p>A complete list of the wxLua downloads on Sourceforge are 
<a href="https://sourceforge.net/projects/wxlua/files/">here<alt="Downloads"/></a>.


<?php include_once("footer.inc.php"); ?>
