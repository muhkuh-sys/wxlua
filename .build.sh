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
mkdir build_win32
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

pushd /tmp/wxwidgets-3.0.2_win32/
ls -l

#export LDFLAGS="-static -static-libgcc -static-libstdc++"
#cmake -DwxWidgets_CONFIG_EXECUTABLE=/tmp/wxwidgets-3.0.2_win32/bin/wx-config -DwxWidgets_COMPONENTS="xrc;xml;net;propgrid;richtext;aui;stc;html;adv;core;base" -DCMAKE_BUILD_TYPE=Release -DBUILD_SHARED_LIBS=FALSE -DCMAKE_C_FLAGS=-m32 -DCMAKE_CXX_FLAGS=-m32 -DCMAKE_SYSTEM_NAME=Windows -DTARGET_PROCESSOR=x86 -DCMAKE_C_COMPILER=/usr/bin/i686-w64-mingw32-gcc -DCMAKE_CXX_COMPILER=/usr/bin/i686-w64-mingw32-g++ -DCMAKE_RC_COMPILER=/usr/bin/i686-w64-mingw32-windres -DwxLua_LUA_LIBRARY_USE_BUILTIN=FALSE -DwxLua_LUA_LIBRARY_VERSION="5.1" -DLUA_INCLUDE_DIR=/home/baccy/workspace/muhkuh/lua/lib/lua-5.1.4/src -DLUA_LIBRARY=/home/baccy/workspace/muhkuh/build_windows32/lua/lib/lua-5.1.4/liblua.dll.a ..
