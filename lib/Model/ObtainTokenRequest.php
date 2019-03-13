<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * ObtainTokenRequest Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class ObtainTokenRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'client_id' => 'string',
        'client_secret' => 'string',
        'code' => 'string',
        'redirect_uri' => 'string',
        'grant_type' => 'string',
        'refresh_token' => 'string',
        'migration_token' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'client_id' => 'client_id',
        'client_secret' => 'client_secret',
        'code' => 'code',
        'redirect_uri' => 'redirect_uri',
        'grant_type' => 'grant_type',
        'refresh_token' => 'refresh_token',
        'migration_token' => 'migration_token'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'client_id' => 'setClientId',
        'client_secret' => 'setClientSecret',
        'code' => 'setCode',
        'redirect_uri' => 'setRedirectUri',
        'grant_type' => 'setGrantType',
        'refresh_token' => 'setRefreshToken',
        'migration_token' => 'setMigrationToken'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'client_id' => 'getClientId',
        'client_secret' => 'getClientSecret',
        'code' => 'getCode',
        'redirect_uri' => 'getRedirectUri',
        'grant_type' => 'getGrantType',
        'refresh_token' => 'getRefreshToken',
        'migration_token' => 'getMigrationToken'
    );
  
    /**
      * $client_id The Square-issued ID of your application, available from the [application dashboard](https://connect.squareup.com/apps).
      * @var string
      */
    protected $client_id;
    /**
      * $client_secret The Square-issued application secret for your application,  available from the [application dashboard](https://connect.squareup.com/apps).
      * @var string
      */
    protected $client_secret;
    /**
      * $code The authorization code to exchange.  This is required if `grant_type` is set to `authorization_code`, to indicate that  the application wants to exchange an authorization code for an OAuth access token.
      * @var string
      */
    protected $code;
    /**
      * $redirect_uri The redirect URL assigned in the [application dashboard](https://connect.squareup.com/apps).
      * @var string
      */
    protected $redirect_uri;
    /**
      * $grant_type Specifies the method to request an OAuth access token.  Valid values are: `authorization_code`, `refresh_token`, and `migration_token`
      * @var string
      */
    protected $grant_type;
    /**
      * $refresh_token A valid refresh token for generating a new OAuth access token.  A valid refresh token is required if `grant_type` is set to `refresh_token` ,   to indicate the application wants a replacement for an expired OAuth access token.
      * @var string
      */
    protected $refresh_token;
    /**
      * $migration_token Legacy OAuth access token obtained using a Connect API version prior  to 2019-03-13. This parameter is required if `grant_type` is set to  `migration_token` to indicate that the application wants to get a replacement   OAuth access token. The response also returns a refresh token.  For more information, see [Migrate to Using Refresh Tokens](/authz/oauth/migration).
      * @var string
      */
    protected $migration_token;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["client_id"])) {
              $this->client_id = $data["client_id"];
            } else {
              $this->client_id = null;
            }
            if (isset($data["client_secret"])) {
              $this->client_secret = $data["client_secret"];
            } else {
              $this->client_secret = null;
            }
            if (isset($data["code"])) {
              $this->code = $data["code"];
            } else {
              $this->code = null;
            }
            if (isset($data["redirect_uri"])) {
              $this->redirect_uri = $data["redirect_uri"];
            } else {
              $this->redirect_uri = null;
            }
            if (isset($data["grant_type"])) {
              $this->grant_type = $data["grant_type"];
            } else {
              $this->grant_type = null;
            }
            if (isset($data["refresh_token"])) {
              $this->refresh_token = $data["refresh_token"];
            } else {
              $this->refresh_token = null;
            }
            if (isset($data["migration_token"])) {
              $this->migration_token = $data["migration_token"];
            } else {
              $this->migration_token = null;
            }
        }
    }
    /**
     * Gets client_id
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }
  
    /**
     * Sets client_id
     * @param string $client_id The Square-issued ID of your application, available from the [application dashboard](https://connect.squareup.com/apps).
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
        return $this;
    }
    /**
     * Gets client_secret
     * @return string
     */
    public function getClientSecret()
    {
        return $this->client_secret;
    }
  
    /**
     * Sets client_secret
     * @param string $client_secret The Square-issued application secret for your application,  available from the [application dashboard](https://connect.squareup.com/apps).
     * @return $this
     */
    public function setClientSecret($client_secret)
    {
        $this->client_secret = $client_secret;
        return $this;
    }
    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
  
    /**
     * Sets code
     * @param string $code The authorization code to exchange.  This is required if `grant_type` is set to `authorization_code`, to indicate that  the application wants to exchange an authorization code for an OAuth access token.
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Gets redirect_uri
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirect_uri;
    }
  
    /**
     * Sets redirect_uri
     * @param string $redirect_uri The redirect URL assigned in the [application dashboard](https://connect.squareup.com/apps).
     * @return $this
     */
    public function setRedirectUri($redirect_uri)
    {
        $this->redirect_uri = $redirect_uri;
        return $this;
    }
    /**
     * Gets grant_type
     * @return string
     */
    public function getGrantType()
    {
        return $this->grant_type;
    }
  
    /**
     * Sets grant_type
     * @param string $grant_type Specifies the method to request an OAuth access token.  Valid values are: `authorization_code`, `refresh_token`, and `migration_token`
     * @return $this
     */
    public function setGrantType($grant_type)
    {
        $this->grant_type = $grant_type;
        return $this;
    }
    /**
     * Gets refresh_token
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refresh_token;
    }
  
    /**
     * Sets refresh_token
     * @param string $refresh_token A valid refresh token for generating a new OAuth access token.  A valid refresh token is required if `grant_type` is set to `refresh_token` ,   to indicate the application wants a replacement for an expired OAuth access token.
     * @return $this
     */
    public function setRefreshToken($refresh_token)
    {
        $this->refresh_token = $refresh_token;
        return $this;
    }
    /**
     * Gets migration_token
     * @return string
     */
    public function getMigrationToken()
    {
        return $this->migration_token;
    }
  
    /**
     * Sets migration_token
     * @param string $migration_token Legacy OAuth access token obtained using a Connect API version prior  to 2019-03-13. This parameter is required if `grant_type` is set to  `migration_token` to indicate that the application wants to get a replacement   OAuth access token. The response also returns a refresh token.  For more information, see [Migrate to Using Refresh Tokens](/authz/oauth/migration).
     * @return $this
     */
    public function setMigrationToken($migration_token)
    {
        $this->migration_token = $migration_token;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
