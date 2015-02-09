#! /bin/bash

tar fxj wxWidgets-3.0.2.tar.bz2
STATUS=$?
if [ $STATUS -ne 0 ]; then
	exit 1
fi

cd wxWidgets-3.0.2
STATUS=$?
if [ $STATUS -ne 0 ]; then
	exit 1
fi

#-----------------------------------------------------------------------------
#
# Build wxWidgets for windows x86.
#
mkdir -p build_win32
cd build_win32
../configure --host=i686-w64-mingw32 --prefix=/tmp/wxwidgets-3.0.2_win32/ --enable-vendor=muhkuh --disable-shared
STATUS=$?
if [ $STATUS -ne 0 ]; then
	exit 1
fi

make
STATUS=$?
if [ $STATUS -ne 0 ]; then
	exit 1
fi

make install
STATUS=$?
if [ $STATUS -ne 0 ]; then
	exit 1
fi

pushd /tmp/wxwidgets-3.0.2_win32/lib
cp libwx_baseu-3.0-i686-w64-mingw32.a         libwx_baseu-3.0.a
cp libwx_baseu_net-3.0-i686-w64-mingw32.a     libwx_baseu_net-3.0.a
cp libwx_baseu_xml-3.0-i686-w64-mingw32.a     libwx_baseu_xml-3.0.a
cp libwx_mswu_adv-3.0-i686-w64-mingw32.a      libwx_mswu_adv-3.0.a
cp libwx_mswu_aui-3.0-i686-w64-mingw32.a      libwx_mswu_aui-3.0.a
cp libwx_mswu_core-3.0-i686-w64-mingw32.a     libwx_mswu_core-3.0.a
cp libwx_mswu_gl-3.0-i686-w64-mingw32.a       libwx_mswu_gl-3.0.a
cp libwx_mswu_html-3.0-i686-w64-mingw32.a     libwx_mswu_html-3.0.a
cp libwx_mswu_media-3.0-i686-w64-mingw32.a    libwx_mswu_media-3.0.a
cp libwx_mswu_propgrid-3.0-i686-w64-mingw32.a libwx_mswu_propgrid-3.0.a
cp libwx_mswu_qa-3.0-i686-w64-mingw32.a       libwx_mswu_qa-3.0.a
cp libwx_mswu_ribbon-3.0-i686-w64-mingw32.a   libwx_mswu_ribbon-3.0.a
cp libwx_mswu_richtext-3.0-i686-w64-mingw32.a libwx_mswu_richtext-3.0.a
cp libwx_mswu_stc-3.0-i686-w64-mingw32.a      libwx_mswu_stc-3.0.a
cp libwx_mswu_webview-3.0-i686-w64-mingw32.a  libwx_mswu_webview-3.0.a
cp libwx_mswu_xrc-3.0-i686-w64-mingw32.a      libwx_mswu_xrc-3.0.a
cp libwxscintilla-3.0-i686-w64-mingw32.a      libwx_mswu_scintilla-3.0.a
popd

cd ..


#-----------------------------------------------------------------------------
#
# Build wxWidgets for windows amd64.
#
mkdir -p build_win64
cd build_win64
../configure --host=x86_64-w64-mingw32 --prefix=/tmp/wxwidgets-3.0.2_win64/ --enable-vendor=muhkuh --disable-shared
STATUS=$?
if [ $STATUS -ne 0 ]; then
	exit 1
fi

make
STATUS=$?
if [ $STATUS -ne 0 ]; then
	exit 1
fi

make install
STATUS=$?
if [ $STATUS -ne 0 ]; then
	exit 1
fi

pushd /tmp/wxwidgets-3.0.2_win64/lib
cp libwx_baseu-3.0-x86_64-w64-mingw32.a         libwx_baseu-3.0.a
cp libwx_baseu_net-3.0-x86_64-w64-mingw32.a     libwx_baseu_net-3.0.a
cp libwx_baseu_xml-3.0-x86_64-w64-mingw32.a     libwx_baseu_xml-3.0.a
cp libwx_mswu_adv-3.0-x86_64-w64-mingw32.a      libwx_mswu_adv-3.0.a
cp libwx_mswu_aui-3.0-x86_64-w64-mingw32.a      libwx_mswu_aui-3.0.a
cp libwx_mswu_core-3.0-x86_64-w64-mingw32.a     libwx_mswu_core-3.0.a
cp libwx_mswu_gl-3.0-x86_64-w64-mingw32.a       libwx_mswu_gl-3.0.a
cp libwx_mswu_html-3.0-x86_64-w64-mingw32.a     libwx_mswu_html-3.0.a
cp libwx_mswu_media-3.0-x86_64-w64-mingw32.a    libwx_mswu_media-3.0.a
cp libwx_mswu_propgrid-3.0-x86_64-w64-mingw32.a libwx_mswu_propgrid-3.0.a
cp libwx_mswu_qa-3.0-x86_64-w64-mingw32.a       libwx_mswu_qa-3.0.a
cp libwx_mswu_ribbon-3.0-x86_64-w64-mingw32.a   libwx_mswu_ribbon-3.0.a
cp libwx_mswu_richtext-3.0-x86_64-w64-mingw32.a libwx_mswu_richtext-3.0.a
cp libwx_mswu_stc-3.0-x86_64-w64-mingw32.a      libwx_mswu_stc-3.0.a
cp libwx_mswu_webview-3.0-x86_64-w64-mingw32.a  libwx_mswu_webview-3.0.a
cp libwx_mswu_xrc-3.0-x86_64-w64-mingw32.a      libwx_mswu_xrc-3.0.a
cp libwxscintilla-3.0-x86_64-w64-mingw32.a      libwx_mswu_scintilla-3.0.a
popd

cd ../..


#-----------------------------------------------------------------------------
#
# Build wxLua for windows x86.
#

cd wxLua
mkdir -p build_win32
cd build_win32

LDFLAGS="-static -static-libgcc -static-libstdc++" cmake -DwxWidgets_CONFIG_EXECUTABLE=/tmp/wxwidgets-3.0.2_win32/bin/wx-config -DwxWidgets_COMPONENTS="xrc;xml;net;propgrid;richtext;aui;stc;html;adv;core;base" -DCMAKE_BUILD_TYPE=Release -DBUILD_SHARED_LIBS=FALSE -DCMAKE_C_FLAGS=-m32 -DCMAKE_CXX_FLAGS=-m32 -DCMAKE_SYSTEM_NAME=Windows -DCMAKE_C_COMPILER=/usr/bin/i686-w64-mingw32-gcc -DCMAKE_CXX_COMPILER=/usr/bin/i686-w64-mingw32-g++ -DCMAKE_RC_COMPILER=/usr/bin/i686-w64-mingw32-windres -DwxLua_LUA_LIBRARY_USE_BUILTIN=FALSE -DwxLua_LUA_LIBRARY_VERSION="5.1" -DwxLua_LUA_INCLUDE_DIR=${LUA_WIN32_INCLUDE_DIR} -DwxLua_LUA_LIBRARY=${LUA_WIN32_LIBRARY} ..
STATUS=$?
if [ $STATUS -ne 0 ]; then
	exit 1
fi

make
STATUS=$?
if [ $STATUS -ne 0 ]; then
	exit 1
fi

make install DESTDIR=/tmp/wxlua_win32
STATUS=$?
if [ $STATUS -ne 0 ]; then
	exit 1
fi

cd ..


#-----------------------------------------------------------------------------
#
# Build wxLua for windows x86.
#

mkdir -p build_win64
cd build_win64

LDFLAGS="-static -static-libgcc -static-libstdc++" cmake -DwxWidgets_CONFIG_EXECUTABLE=/tmp/wxwidgets-3.0.2_win64/bin/wx-config -DwxWidgets_COMPONENTS="xrc;xml;net;propgrid;richtext;aui;stc;html;adv;core;base" -DCMAKE_BUILD_TYPE=Release -DBUILD_SHARED_LIBS=FALSE -DCMAKE_C_FLAGS=-m64 -DCMAKE_CXX_FLAGS=-m64 -DCMAKE_SYSTEM_NAME=Windows -DCMAKE_C_COMPILER=/usr/bin/x86_64-w64-mingw32-gcc -DCMAKE_CXX_COMPILER=/usr/bin/x86_64-w64-mingw32-g++ -DCMAKE_RC_COMPILER=/usr/bin/x86_64-w64-mingw32-windres -DwxLua_LUA_LIBRARY_USE_BUILTIN=FALSE -DwxLua_LUA_LIBRARY_VERSION="5.1" -DwxLua_LUA_INCLUDE_DIR=${LUA_WIN64_INCLUDE_DIR} -DwxLua_LUA_LIBRARY=${LUA_WIN64_LIBRARY} ..
STATUS=$?
if [ $STATUS -ne 0 ]; then
	exit 1
fi

STATUS=$?
if [ $STATUS -ne 0 ]; then
	exit 1
fi

make
STATUS=$?
if [ $STATUS -ne 0 ]; then
	exit 1
fi

make install DESTDIR=/tmp/wxlua_win64
STATUS=$?
if [ $STATUS -ne 0 ]; then
	exit 1
fi

