<?php

use Modules\Cms\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Nwidart\Modules\Facades\Module;

class DemoSeed extends Seeder
{

    /**
     * @throws Exception
     */
    public function run()
    {
        $module = app('modules');

        $this->call(UserSeed::class);

        if($module->find('cms') && $module->find('cms')->isEnabled())  $this->call(CmsSeed::class);
        if($module->find('doc') && $module->find('doc')->isEnabled())  $this->call(DocSeed::class);
        if($module->find('querylist') && $module->find('querylist')->isEnabled())  $this->call(QueryListSeed::class);
    }
}
