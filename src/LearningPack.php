<?php
namespace LeoKim\LearningPack;
use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;
class LearningPack
{
    /**
     * @var SessionManager
     */
    protected $session;
    /**
     * @var Repository
     */
    protected $config;
    /**
     * Packagetest constructor.
     * @param SessionManager $session
     * @param Repository $config
     */
    public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }
    /**
     * @param string $msg
     * @return string
     */
    public static function test_rtn($msg = ''){
//        $config_arr = $this->config->get('LearningPack.options');
        return $msg.' <strong>from your custom develop package!</strong>';
    }
}