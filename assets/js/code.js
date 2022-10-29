var addr = window.location.href;
var len = addr.length;
if (addr[len-1] != '/') {
    addr = addr + '/';
    window.location.href = addr;
}