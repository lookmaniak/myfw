<?php

class ServerConfig {
    public $mibdirs;
    public $mysqlHome;
    public $opensslConf;
    public $phpPearSysconfDir;
    public $phprc;
    public $tmp;
    public $httpHost;
    public $httpConnection;
    public $httpSecChUaPlatform;
    public $httpUserAgent;
    public $httpAccept;
    public $httpSecChUa;
    public $httpDnt;
    public $httpSecChUaMobile;
    public $httpOrigin;
    public $httpSecFetchSite;
    public $httpSecFetchMode;
    public $httpSecFetchDest;
    public $httpReferer;
    public $httpAcceptEncoding;
    public $httpAcceptLanguage;
    public $path;
    public $systemRoot;
    public $comspec;
    public $pathext;
    public $windir;
    public $serverSignature;
    public $serverSoftware;
    public $serverName;
    public $serverAddr;
    public $serverPort;
    public $remoteAddr;
    public $documentRoot;
    public $requestScheme;
    public $contextPrefix;
    public $contextDocumentRoot;
    public $serverAdmin;
    public $scriptFilename;
    public $remotePort;
    public $gatewayInterface;
    public $serverProtocol;
    public $requestMethod;
    public $queryString;
    public $requestUri;
    public $scriptName;
    public $pathInfo;
    public $pathTranslated;
    public $phpSelf;
    public $requestTimeFloat;
    public $requestTime;
    public $host;
    public $hostname;

    public function __construct(array $server) {
        $this->mibdirs = $server['HOST'] ?? '';
        $this->mibdirs = $server['HOSTNAME'] ?? '';
        $this->mibdirs = $server['MIBDIRS'] ?? '';
        $this->mysqlHome = $server['MYSQL_HOME'] ?? '';
        $this->opensslConf = $server['OPENSSL_CONF'] ?? '';
        $this->phpPearSysconfDir = $server['PHP_PEAR_SYSCONF_DIR'] ?? '';
        $this->phprc = $server['PHPRC'] ?? '';
        $this->tmp = $server['TMP'] ?? '';
        $this->httpHost = $server['HTTP_HOST'] ?? '';
        $this->httpConnection = $server['HTTP_CONNECTION'] ?? '';
        $this->httpSecChUaPlatform = $server['HTTP_SEC_CH_UA_PLATFORM'] ?? '';
        $this->httpUserAgent = $server['HTTP_USER_AGENT'] ?? '';
        $this->httpAccept = $server['HTTP_ACCEPT'] ?? '';
        $this->httpSecChUa = $server['HTTP_SEC_CH_UA'] ?? '';
        $this->httpDnt = $server['HTTP_DNT'] ?? '';
        $this->httpSecChUaMobile = $server['HTTP_SEC_CH_UA_MOBILE'] ?? '';
        $this->httpOrigin = $server['HTTP_ORIGIN'] ?? '';
        $this->httpSecFetchSite = $server['HTTP_SEC_FETCH_SITE'] ?? '';
        $this->httpSecFetchMode = $server['HTTP_SEC_FETCH_MODE'] ?? '';
        $this->httpSecFetchDest = $server['HTTP_SEC_FETCH_DEST'] ?? '';
        $this->httpReferer = $server['HTTP_REFERER'] ?? '';
        $this->httpAcceptEncoding = $server['HTTP_ACCEPT_ENCODING'] ?? '';
        $this->httpAcceptLanguage = $server['HTTP_ACCEPT_LANGUAGE'] ?? '';
        $this->path = $server['PATH'] ?? '';
        $this->systemRoot = $server['SystemRoot'] ?? '';
        $this->comspec = $server['COMSPEC'] ?? '';
        $this->pathext = $server['PATHEXT'] ?? '';
        $this->windir = $server['WINDIR'] ?? '';
        $this->serverSignature = $server['SERVER_SIGNATURE'] ?? '';
        $this->serverSoftware = $server['SERVER_SOFTWARE'] ?? '';
        $this->serverName = $server['SERVER_NAME'] ?? '';
        $this->serverAddr = $server['SERVER_ADDR'] ?? '';
        $this->serverPort = $server['SERVER_PORT'] ?? '';
        $this->remoteAddr = $server['REMOTE_ADDR'] ?? '';
        $this->documentRoot = $server['DOCUMENT_ROOT'] ?? '';
        $this->requestScheme = $server['REQUEST_SCHEME'] ?? '';
        $this->contextPrefix = $server['CONTEXT_PREFIX'] ?? '';
        $this->contextDocumentRoot = $server['CONTEXT_DOCUMENT_ROOT'] ?? '';
        $this->serverAdmin = $server['SERVER_ADMIN'] ?? '';
        $this->scriptFilename = $server['SCRIPT_FILENAME'] ?? '';
        $this->remotePort = $server['REMOTE_PORT'] ?? '';
        $this->gatewayInterface = $server['GATEWAY_INTERFACE'] ?? '';
        $this->serverProtocol = $server['SERVER_PROTOCOL'] ?? '';
        $this->requestMethod = $server['REQUEST_METHOD'] ?? '';
        $this->queryString = $server['QUERY_STRING'] ?? '';
        $this->requestUri = $server['REQUEST_URI'] ?? '';
        $this->scriptName = $server['SCRIPT_NAME'] ?? '';
        $this->pathInfo = $server['PATH_INFO'] ?? '';
        $this->pathTranslated = $server['PATH_TRANSLATED'] ?? '';
        $this->phpSelf = $server['PHP_SELF'] ?? '';
        $this->requestTimeFloat = $server['REQUEST_TIME_FLOAT'] ?? time();
        $this->requestTime = $server['REQUEST_TIME'] ?? time();
    }
}
