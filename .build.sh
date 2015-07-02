#! /bin/bash
set -e


WORKING_DIR=`pwd`

# Remember the initial unmodified path
PATH_ORG=${PATH}

# Use mingw-w64-mbs.
export PATH=/opt/mingw-w64-i686/bin:/opt/mingw-w64-x86_64/bin:${PATH_ORG}


##############################################################################
#
# Unpack lua51.
#
mkdir -p lua-5.1.3
pushd lua-5.1.3
LUA_PATH=`pwd`
unzip ${WORKING_DIR}/lua51-5.1.3.zip
popd

export LUA_WIN32_INCLUDE_DIR=${LUA_PATH}/windows_x86/include
export LUA_WIN32_LIBRARY=${LUA_PATH}/windows_x86/lib/liblua.dll.a
export LUA_WIN64_INCLUDE_DIR=${LUA_PATH}/windows_amd64/include
export LUA_WIN64_LIBRARY=${LUA_PATH}/windows_amd64/lib/liblua.dll.a


##############################################################################
#
# Build wxLua for windows x86.
#


mkdir -p build/wxlua_win32
pushd build/wxlua_win32
LDFLAGS="-static -static-libgcc -static-libstdc++" cmake -DwxWidgets_CONFIG_EXECUTABLE=/opt/mingw-w64-i686/bin/wx-config -DwxWidgets_COMPONENTS="xrc;xml;net;propgrid;richtext;aui;stc;html;adv;core;base" -DCMAKE_BUILD_TYPE=Release -DBUILD_SHARED_LIBS=FALSE -DCMAKE_C_FLAGS=-m32 -DCMAKE_CXX_FLAGS=-m32 -DCMAKE_SYSTEM_NAME=Windows -DCMAKE_C_COMPILER=i686-w64-mingw32-gcc -DCMAKE_CXX_COMPILER=i686-w64-mingw32-g++ -DCMAKE_RC_COMPILER=i686-w64-mingw32-windres -DwxLua_LUA_LIBRARY_USE_BUILTIN=FALSE -DwxLua_LUA_LIBRARY_VERSION="5.1" -DwxLua_LUA_INCLUDE_DIR=${LUA_WIN32_INCLUDE_DIR} -DwxLua_LUA_LIBRARY=${LUA_WIN32_LIBRARY} ${WORKING_DIR}/wxLua
make
popd


##############################################################################
#
# Build wxLua for windows amd64.
#
mkdir -p build/wxlua_win64
pushd build/wxlua_win64
LDFLAGS="-static -static-libgcc -static-libstdc++" cmake -DwxWidgets_CONFIG_EXECUTABLE=/opt/mingw-w64-x86_64/bin/wx-config -DwxWidgets_COMPONENTS="xrc;xml;net;propgrid;richtext;aui;stc;html;adv;core;base" -DCMAKE_BUILD_TYPE=Release -DBUILD_SHARED_LIBS=FALSE -DCMAKE_C_FLAGS=-m64 -DCMAKE_CXX_FLAGS=-m64 -DCMAKE_SYSTEM_NAME=Windows -DCMAKE_C_COMPILER=x86_64-w64-mingw32-gcc -DCMAKE_CXX_COMPILER=x86_64-w64-mingw32-g++ -DCMAKE_RC_COMPILER=x86_64-w64-mingw32-windres -DwxLua_LUA_LIBRARY_USE_BUILTIN=FALSE -DwxLua_LUA_LIBRARY_VERSION="5.1" -DwxLua_LUA_INCLUDE_DIR=${LUA_WIN64_INCLUDE_DIR} -DwxLua_LUA_LIBRARY=${LUA_WIN64_LIBRARY} ${WORKING_DIR}/wxLua
make
popd


# Restore the original path.
export PATH=${PATH_ORG}

