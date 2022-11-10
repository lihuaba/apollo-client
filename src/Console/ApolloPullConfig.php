<?php

namespace ApolloClient\Console;

use Illuminate\Console\Command;

class ApolloPullConfig extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'apollo-client:pull-config
                            {--server= : 服务器地址，例如：http://baidu.com:234}
                            {--app_id= : APPID}
                            {--cluster= : 集群}
                            {--namespace= : 空间}
                            {--secret= : 密钥}
                            {--save_path : 保存路径，如果文件存在如何处理}
                            ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '拉取阿波罗配置文件';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {

    }

}
