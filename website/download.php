<!-- $Id: download.php,v 1.34 2009/06/09 21:52:09 jrl1 Exp $ -->
<?php
  $pagetitle="download";
  $anchors_href=array("win", "linux", "mac", "sources", "subversion", "older");
  $anchors_text=array("Windows", "Linux", "Macintosh", "Sources", "Subversion", "Older releases");
  include_once("header.inc.php");


  // IMPORTANT: update these info when a new release is available!
  // =============================================================
  $latestversion="2.8.10.0";

  $winsize="9";       // size of the wxlua-xxx.bin.zip file (in MB)
  $apsize="11";       // size of the wxlua-xxx.package file (in MB)
  $bundlesize="20";   // size of the wxlua-xxx.dmg file (in MB)

  $winlink="http://downloads.sourceforge.net/wxlua/wxLua-$latestversion-MSW-bin.zip";
  $dlllink="http://downloads.sourceforge.net/wxlua/wxLua-$latestversion-MSW-dll.zip";
  $linuxlink="http://downloads.sourceforge.net/wxlua/wxlua-$latestversion-1.x86.package";
  $maclink="http://downloads.sourceforge.net/wxlua/wxlua-2.8.10.0-tiger.dmg";
  $gzlink="http://downloads.sourceforge.net/wxlua/wxLua-$latestversion-src.tar.gz";
?>

<div class="rightSideBar">
    <p class="sideBarTitle">Latest version</p>
    <div class="sideBarText">
        <p>Latest wxLua version is:<br/><br/>
            <strong>&raquo;&nbsp;<?php echo $latestversion; ?>&nbsp;&laquo;</strong><br/><br/>
           The change log for this and previous releases can be <a href="docs/changelog.txt">found here</a>
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
<p><strong>Sources or binaries?</strong> wxLua can be used as a <strong>C++ library</strong> for projects
that want to add scripting capabilities using a Lua interpreter to their wxWidgets programs or as an 
<strong>application</strong> or <strong>Lua module</strong> for programmers
who want to write, debug, and execute applications written entirely in Lua.<br/><br/>

If you are interested in using wxLua as a C++ library to extend your program, you should download the 
<strong>source package</strong> and compile the wxLua libraries to link to.<br/>

Instead, if you are interested in using wxLua to write and execute Lua programs, then go with the <strong>binaries</strong>, if available.</p>

Don't forget to read the documentation about the wxLua <a href="http://wxlua.sourceforge.net/docs/wxlua.html#wxLua_Applications">executables</a> 
and how to run the <a href="http://wxlua.sourceforge.net/docs/wxlua.html#wxLua_Samples"> samples</a>.

<p><b>You can view a complete list of the downloads on Sourceforge <a href="http://sourceforge.net/project/showfiles.php?group_id=140042">here<alt="Downloads"/></a>.</b></p>


<div class="indented">
<h2 id="win">...for Windows</h2>
<a href="<?php echo $winlink; ?>"><img src="images/win.png" alt="Windows download"/></a>
<p><a href="<?php echo $winlink; ?>">Binary package</a> ~ <?php echo $winsize; ?> MB: self-contained; you won't need anything else.</p>
<p>You may also want to download a <a href="<?php echo $dlllink; ?>">package</a> containing the
DLLs required for using wxWidgets bindings as a <a href="http://lua-users.org/wiki/BuildingModules">Lua module</a>.</p>
<p>Simply unzip the binaries into a new directory and run the programs.<br/>
For problems with installation, see the <a href="support.php">support page</a>.</p>
</div>

<div class="indented">
<h2 id="linux">...for Linux</h2>
<a href="<?php echo $linuxlink; ?>"><img src="images/linux.png" alt="Linux download"/></a>
<p><a href="<?php echo $linuxlink; ?>">Binary package</a> (autopackage for <strong>32 bit</strong> linuxes) ~ <?php echo $apsize; ?> MB: self-contained; you won't need anything else; click <a href="http://autopackage.org/docs/howto-install/">here</a> for quick info about installing autopackages.<br/>
For problems with installation, see the <a href="support.php">support page</a>.</p>
</div>

<div class="indented">
<h2 id="mac">...for Macintosh</h2>
<a href="<?php echo $maclink; ?>"><img src="images/macosx.png" alt="Macintosh download"/></a>
<p><a href="<?php echo $maclink; ?>">Binary package</a> (Mac Bundle) ~ <?php echo $bundlesize; ?> MB: self-contained.<br/>
For problems with installation, see the <a href="support.php">support page</a>.</p>
</div>

<div class="indented">
<h2 id="mac">...for Maemo</h2>
<p>Run wxLua on your Nokia N810 (possibly N770) using the Maemo platform.
Please visit Charles Shapiro's website, <a href="http://tomshiro.org/lua-maemo/">http://tomshiro.org/lua-maemo/</a>, for more information.
</p>
</div>

<div class="indented">
<h2 id="sources">Sources</h2>
<p>See below about browsing the sources to see what the package contains.</p>
<ul>
<li><a href="<?php echo $gzlink; ?>">Source package</a> (.tar.gz) </li>
</ul>
<p>See <a href="docs/install.html">install.html</a> for info about required libraries and how to compile and install them.</p>
</div>

<div class="indented">
<h2 id="subversion">Browse the Sourceforge Subversion (SVN) repository online</h2>
<p>November 21, 2011 - wxLua has switched from CVS to Subversion and all further development will take place in SVN.</p>
<ul>
<li>Browse the wxLua <a href="http://wxlua.svn.sourceforge.net/viewvc/wxlua/trunk/wxLua/">SVN repository</a> on Sourceforge</li>
<!-- <li>Browse the wxLua <a href="http://wxlua.cvs.sourceforge.net/wxlua/wxLua/">CVS repository</a> on Sourceforge</li> -->
<li>Checkout the wxLua SVN module using <a href="https://sourceforge.net/scm/?type=svn&group_id=140042">these instructions</a></li>
</ul>
</div>

<div class="indented">
<h2 id="older">Older releases</h2>
<p>A complete list of the wxLua downloads on Sourceforge are <a href="http://sourceforge.net/project/showfiles.php?group_id=140042">here<alt="Downloads"/></a>.
</div>

<?php include_once("footer.inc.php"); ?>
