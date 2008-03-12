<?php
header('Expires: ' . $now); // rfc2616 - Section 14.21
header('Last-Modified: ' . $now);
header('Cache-Control: no-store, no-cache, must-revalidate, pre-check=0, post-check=0, max-age=0'); // HTTP/1.1
header('Pragma: no-cache'); // HTTP/1.0
// ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="config.inc.php"');
// ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
echo get_cfg_string($configuration);
exit;
// ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// some pages (e.g. stylesheet) may be cached on clients, but not in shared
// proxy servers
session_cache_limiter('private');
// ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
if (function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) {// strip slashes}
// ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$config = @fopen('./config/config.inc.php', 'w');
        if ($config === FALSE) {
            message('error', 'Could not open config file for writing! Bad permissions?');
            break;
        }
        $s = get_cfg_string($configuration);
        $r = fwrite($config, $s);
        if (!$r || $r != strlen($s)) {
            message('error', 'Could not write to config file! Not enough space?');
            break;
        } else {
            message('notice', 'Configuration saved to file config/config.inc.php in phpMyAdmin top level directory, copy it to top level one and delete directory config to use it.', 'File saved');
        }
        unset($r, $s);
        fclose($config);
        break;
    case 'load':
        if ($fail_dir) {
            message('error', 'Reading of configuration disabled because of permissions.');
            break;
        }
        $new_cfg = load_config('./config/config.inc.php');
        if (!($new_cfg === FALSE)) {
            $configuration = $new_cfg;
        }
        $show_info = TRUE;
// ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------       
function load_config($config_file) {
    if (file_exists($config_file)) {
        $success_apply_user_config = FALSE;
        $old_error_reporting = error_reporting(0);
        if (function_exists('file_get_contents')) {
            $success_apply_user_config = eval('?>' . trim(file_get_contents($config_file)));
        } else {
            $success_apply_user_config =
                eval('?>' . trim(implode("\n", file($config_file))));
        }
        error_reporting($old_error_reporting);
        unset($old_error_reporting);
        if ($success_apply_user_config === FALSE) {
            message('error', 'Error while parsing configuration file!');
        } elseif (!isset($cfg) || count($cfg) == 0) {
            message('error', 'Config file seems to contain no configuration!');
        } else {
            // This must be set
            if (!isset($cfg['Servers'])) {
                $cfg['Servers'] = array();
            }
            message('notice', 'Configuration loaded');
            compress_servers($cfg);
            return $cfg;
        }
    } else {
        message('error', 'Configuration file not found!');
    }
    return FALSE;
}
// ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
if ($action != 'download') {
    // Check whether we can write to configuration
    $fail_dir = FALSE;
    $fail_dir = $fail_dir || !is_dir('./config/');
    $fail_dir = $fail_dir || !is_writable('./config/');
    $fail_dir = $fail_dir || (file_exists('./config/config.inc.php') && !is_writable('./config/config.inc.php'));
    $config = @fopen('./config/config.inc.php', 'a');
    $fail_dir = $fail_dir || ($config === FALSE);
    @fclose($config);
}
?>