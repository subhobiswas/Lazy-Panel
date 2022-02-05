<?php
function cpu()
{
    $exec_loads = sys_getloadavg();
    $exec_cores = trim(shell_exec("grep -P '^processor' /proc/cpuinfo|wc -l"));
    $cpu = round($exec_loads[1] / ($exec_cores + 1) * 100, 0) . '%';
    return $cpu;
}
function ram()
{
    $exec_free = explode("\n", trim(shell_exec('free')));
    $get_mem = preg_split("/[\s]+/", $exec_free[1]);
    $mem = round($get_mem[2] / $get_mem[1] * 100, 0) . '%';
    return $mem;
}
function disk()
{
    $ds = disk_total_space("/");
    $df = disk_free_space("/");
    return array('total' => $ds, 'free' => $df, 'useg' => round($ds - $df));
}
function os()
{
    if (false == function_exists("shell_exec") || false == is_readable("/etc/os-release")) {
        return null;
    }
    $os         = shell_exec('cat /etc/os-release');
    $listIds    = preg_match_all('/.*=/', $os, $matchListIds);
    $listIds    = $matchListIds[0];
    $listVal    = preg_match_all('/=.*/', $os, $matchListVal);
    $listVal    = $matchListVal[0];
    array_walk($listIds, function (&$v, $k) {
        $v = strtolower(str_replace('=', '', $v));
    });
    array_walk($listVal, function (&$v, $k) {
        $v = preg_replace('/=|"/', '', $v);
    });
    return array_combine($listIds, $listVal);
}
function formatSizeUnits($bytes)
{
    if ($bytes >= 1073741824) {
        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
    } elseif ($bytes >= 1048576) {
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    } elseif ($bytes >= 1024) {
        $bytes = number_format($bytes / 1024, 2) . ' KB';
    } elseif ($bytes > 1) {
        $bytes = $bytes . ' bytes';
    } elseif ($bytes == 1) {
        $bytes = $bytes . ' byte';
    } else {
        $bytes = '0 bytes';
    }
    return $bytes;
}
