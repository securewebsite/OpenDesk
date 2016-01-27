<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Curl Class
 *
 * @package     CodeIgniter
 * @subpackage  Libraries
 * @category    Libraries
 * @author      Victor Klepikovskiy
 * @CI alias    Alex Polski
 * @version     1.1.1
 *
 * See http://alexpolski.com/category/curl-library/ for details and examples
 *
 * Release history:
 *
 * 1.1.1 - Bugfix release
 *         Posssible returning of incorrect URL by abs_url function
 *         Possible incorrect value in $url variable
 *
 * 1.1 - Added $headers variable, which contains response headers of last
 *         HTTP GET/POST operation
 *       Added additional request headers support for HTTP GET/POST operations
 *       Added redirect support
 *       Added $url variable, which contains URL of last HTTP GET/POST operation
 *       Added abs_url function
 *
 * 1.0 - Initial release
 *
 */
class Curl
{

  // User-agent string
  var $user_agent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)';

  // Operation timeout
  var $timeout = 30;

  // Response headers of last HTTP GET/POST operation
  var $headers = '';

  // URL of last HTTP GET/POST operation
  var $url = '';

  // Follow redirects
  var $follow_location = true;

  // Maximum amount of redirects
  var $max_redirects = 5;

  // Not used at this moment
  var $auto_referer = true;

  // Debug flag
  var $debug = false;

  // CURL id
  var $handle_id = false;

  // Is CURLOPT_FOLLOWLOCATION enabled?
  var $followlocation_enabled = false;


  /**
   * Constructor - Sets Preferences
   *
   * The constructor can be passed an array of config values
   */
  function Curl($config = array())
  {
    if (count($config) > 0)
    {
      $this->initialize($config);
    }
    if (ini_get('open_basedir') == '' && ini_get('safe_mode') == 'Off')
    {
      $this->followlocation_enabled = true;
    }
    log_message('debug', 'CURL Class Initialized');
  }

  // --------------------------------------------------------------------

  /**
   * Initialize preferences
   *
   * @access  public
   * @param array
   * @return  void
   */
  function initialize($config = array())
  {
    foreach ($config as $key => $val)
    {
      if (isset($this->$key))
      {
        $this->$key = $val;
      }
    }
  }

  // --------------------------------------------------------------------

  /**
   * Opens CURL session
   *
   * @access  public
   * @param array
   * @return  void
   */
  function open($config = array())
  {
    if (count($config) > 0)
    {
      $this->initialize($config);
    }
    $this->handle_id = @curl_init();
    $this->_check_error();
  }

  // --------------------------------------------------------------------

  /**
   * Validates the CURL handle
   *
   * @access  private
   * @return  bool
   */
  function _is_valid_handle()
  {
    if (!is_resource($this->handle_id))
    {
      if ($this->debug == true)
      {
        $this->_error('curl_no_handle');
      }
      return false;
    }
    return true;
  }

  // --------------------------------------------------------------------

  /**
   * Return true if the connection is opened
   *
   * @access  public
   * @return  bool
   */

  function is_opened()
  {
    if (!is_resource($this->handle_id))
    {
      return false;
    }
    return true;
  }

  // --------------------------------------------------------------------

  /**
   * Set an option for a CURL session
   *
   * @access  private
   * @param int
   * @param mixed
   * @return  void
   */
  function _set_opt($option, $value)
  {
    @curl_setopt($this->handle_id, $option, $value);
  }

  // --------------------------------------------------------------------

  /**
   * Performs HTTP GET operation
   *
   * @access  public
   * @param string
   * @param array or string
   * @param bool
   * @return  string
   */
  function http_get($url, $headers = array(), $headers_only = false)
  {
    $this->url = '';
    if (!@$this->_is_valid_handle())
    {
      return false;
    }
    $end = false;
    $redirects = 0;
    do
    {
      $this->_set_opt(CURLOPT_URL, $url);
      $this->_set_opt(CURLOPT_RETURNTRANSFER, true);
      $this->_set_opt(CURLOPT_USERAGENT, $this->user_agent);
      $this->_set_opt(CURLOPT_TIMEOUT, $this->timeout);
      $this->_set_opt(CURLOPT_HTTPGET, true);
      $this->_set_opt(CURLOPT_HEADER, true);
      if ($headers_only)
      {
        $this->_set_opt(CURLOPT_NOBODY, true);
      }
      else
      {
        $this->_set_opt(CURLOPT_NOBODY, false);
      }
      if (!empty($headers))
      {
        if (!is_array($headers))
        {
          $headers = array($headers);
        }
        $this->_set_opt(CURLOPT_HTTPHEADER, $headers);
      }
      if ($this->follow_location && $this->followlocation_enabled)
      {
        $this->_set_opt(CURLOPT_FOLLOWLOCATION, true);
        $this->_set_opt(CURLOPT_MAXREDIRS, $this->max_redirects);
        $end = true;
      }
      $ret = @curl_exec($this->handle_id);
      $this->_check_error();
      if (!$headers_only)
      {
        $pos = strpos($ret, "\r\n\r\n");
        $this->headers = substr($ret, 0, $pos);
        $ret = substr($ret, $pos + 4);
      }
      else
      {
        $this->headers = $ret;
      }
      if ($this->follow_location && !$this->followlocation_enabled &&
          $redirects <= $this->max_redirects &&
          preg_match('/\r\nLocation:\s*(.+)/i', $this->headers, $match))
      {
        $url = $this->abs_url(trim($match[1]), $url);
        $redirects++;
      }
      else
      {
        $end = true;
      }
    } while (!$end);
    $this->url = $url;
    return $ret;
  }

  // --------------------------------------------------------------------

  /**
   * Performs HTTP POST operation
   *
   * @access  public
   * @param string
   * @param string
   * @param array or string
   * @param bool
   * @return  string
   */
  function http_post($url, $fields, $fields_string, $headers = array(), $headers_only = false)
  {
    $this->url = '';
    if (!@$this->_is_valid_handle())
    {
      return false;
    }
    $end = false;
    $redirects = 0;
    do
    {
      $this->_set_opt(CURLOPT_URL, $url);
      $this->_set_opt(CURLOPT_RETURNTRANSFER, true);
      $this->_set_opt(CURLOPT_USERAGENT, $this->user_agent);
      $this->_set_opt(CURLOPT_TIMEOUT, $this->timeout);
      $this->_set_opt(CURLOPT_POST, $fields);
      $this->_set_opt(CURLOPT_POSTFIELDS, $fields_string);
      $this->_set_opt(CURLOPT_HEADER, true);
      if ($headers_only)
      {
        $this->_set_opt(CURLOPT_NOBODY, true);
      }
      else
      {
        $this->_set_opt(CURLOPT_NOBODY, false);
      }
      if (!empty($headers))
      {
        if (!is_array($headers))
        {
          $headers = array($headers);
        }
        $this->_set_opt(CURLOPT_HTTPHEADER, $headers);
      }
      if ($this->follow_location && $this->followlocation_enabled)
      {
        $this->_set_opt(CURLOPT_FOLLOWLOCATION, true);
        $this->_set_opt(CURLOPT_MAXREDIRS, $this->max_redirects);
        $end = true;
      }
      $ret = @curl_exec($this->handle_id);
      $this->_check_error();
      if (!$headers_only)
      {
        $pos = strpos($ret, "\r\n\r\n");
        $this->headers = substr($ret, 0, $pos);
        $ret = substr($ret, $pos + 4);
      }
      else
      {
        $this->headers = $ret;
      }
      if ($this->follow_location && !$this->followlocation_enabled &&
          $redirects <= $this->max_redirects &&
          preg_match('/\r\nLocation:\s*(.+)/i', $this->headers, $match))
      {
        $url = $this->abs_url(trim($match[1]), $url);
        $redirects++;
      }
      else
      {
        $end = true;
      }
    } while (!$end);
    $this->url = $url;
    return $ret;
  }

  // --------------------------------------------------------------------

  /**
   * Returns an HTTP code
   *
   * @access  public
   * @return  int
   */
  function get_http_code()
  {
    if (!@$this->_is_valid_handle())
    {
      return false;
    }
    $ret = @curl_getinfo($this->handle_id, CURLINFO_HTTP_CODE);
    $this->_check_error();
    return $ret;
  }

  // --------------------------------------------------------------------

  /**
   * Returns a total time in seconds for the last operation
   *
   * @access  public
   * @return  int
   */
  function get_total_time()
  {
    if (!@$this->_is_valid_handle())
    {
      return false;
    }
    $ret = @curl_getinfo($this->handle_id, CURLINFO_TOTAL_TIME);
    $this->_check_error();
    return $ret;
  }

  // --------------------------------------------------------------------

  /**
   * Returns a number of bytes uploaded
   *
   * @access  public
   * @return  int
   */
  function get_bytes_uploaded()
  {
    if (!@$this->_is_valid_handle())
    {
      return false;
    }
    $ret = @curl_getinfo($this->handle_id, CURLINFO_SIZE_UPLOAD);
    $this->_check_error();
    return $ret;
  }

  // --------------------------------------------------------------------

  /**
   * Returns a number of bytes downloaded
   *
   * @access  public
   * @return  int
   */
  function get_bytes_downloaded()
  {
    if (!@$this->_is_valid_handle())
    {
      return false;
    }
    $ret = @curl_getinfo($this->handle_id, CURLINFO_SIZE_DOWNLOAD);
    $this->_check_error();
    return $ret;
  }

  // --------------------------------------------------------------------

  /**
   * Returns an average upload speed
   *
   * @access  public
   * @return  int
   */
  function get_speed_upload()
  {
    if (!@$this->_is_valid_handle())
    {
      return false;
    }
    $ret = @curl_getinfo($this->handle_id, CURLINFO_SPEED_UPLOAD);
    $this->_check_error();
    return $ret;
  }

  // --------------------------------------------------------------------

  /**
   * Returns an average download speed
   *
   * @access  public
   * @return  int
   */
  function get_speed_download()
  {
    if (!@$this->_is_valid_handle())
    {
      return false;
    }
    $ret = @curl_getinfo($this->handle_id, CURLINFO_SPEED_DOWNLOAD);
    $this->_check_error();
    return $ret;
  }

  // --------------------------------------------------------------------

  /**
   * Close the CURL session
   *
   * @access  public
   * @return  bool
   */
  function close()
  {
    if (!$this->_is_valid_handle())
    {
      return false;
    }
    @curl_close($this->handle_id);
  }

  // ------------------------------------------------------------------------

  /**
   * Check for an CURL error and display error message
   * @access  private
   * @return  void
   */
  function _check_error()
  {
    if ((@curl_error($this->handle_id) != 0) && ($this->debug == true))
    {
      show_error(@curl_error($this->handle_id));
    }
  }

  // ------------------------------------------------------------------------

  /**
   * Display error message
   *
   * @access  private
   * @param string
   * @return  void
   */
  function _error($line)
  {
    $CI =& get_instance();
    $CI->lang->load('curl');
    show_error($CI->lang->line($line));
  }

  // ------------------------------------------------------------------------

  /**
   * Convert relative URL to absolute
   *
   * @access public
   * @param string
   * @param string
   * @return string
   */
  function abs_url($relative, $base)
  {
    if (empty($relative))
    {
      return $base;
    }
    if (substr($relative, 0, 7) == 'http://' ||
        substr($relative, 0, 8) == 'https://')
    {
      return $relative;
    }
    if (substr($base, 0, 7) != 'http://' && substr($base, 0, 8) != 'https://')
    {
      $base = 'http://' . $base;
    }
    $host = preg_replace('/^((http:\/\/|https:\/\/|)[^\/]+).*$/i', '$1', $base);
    $current = preg_replace('/([^\/])\/[^\/]*$/i', '$1', $base);
    if (substr($current, -1) != '/')
    {
      $current .= '/';
    }
    $abs = ($relative{0} == '/') ? ($host . $relative) : ($current . $relative);
    $abs = preg_replace(array('/([^:]{1})\/{2,}/', '/(\/\.)+\//'),
                        array('$1/', '/'), $abs);
    $abs_temp = preg_replace('/\/[^\/\.]+\/\.\./', '', $abs);
    while ($abs != $abs_temp)
    {
      $abs = $abs_temp;
      $abs_temp = preg_replace('/\/[^\/\.]+\/\.\./', '', $abs);
    }
    return $abs;
  }

}
// END CURL Class
?>
