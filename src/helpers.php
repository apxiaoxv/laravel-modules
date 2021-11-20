<?php

if (! function_exists('module_path')) {
    function module_path($name, $path = '')
    {
        $module = app('modules')->find($name);

        return $module->getPath() . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}

if (! function_exists('config_path')) {
    /**
     * Get the configuration path.
     *
     * @param  string $path
     * @return string
     */
    function config_path($path = '')
    {
        return app()->basePath() . '/config' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}

if (! function_exists('public_path')) {
    /**
     * Get the path to the public folder.
     *
     * @param  string  $path
     * @return string
     */
    function public_path($path = '')
    {
        return app()->make('path.public') . ($path ? DIRECTORY_SEPARATOR . ltrim($path, DIRECTORY_SEPARATOR) : $path);
    }
}



if (! function_exists('get_modules')) {
    /**
     * Get the modules.
     *
     * @param  string  $name
     * @param  string  $para
     * @return array
     */
    function get_modules($name = null, $para = null)
    { 
        $modules = []; 
        foreach (app('modules')->getAllOrdered() as $module) {
            $modules[strtolower($module->get('alias'))] = [ 
                'name' => $module->get('name'),
                'alias' => $module->get('alias'),
                'title' => $module->get('title'),
                'description' => $module->get('description'),
                'keywords' => $module->get('keywords'),
                'license' => $module->get('license'),
                'version' => $module->get('version'),
                'order' => $module->get('order'),
                'providers' => $module->get('providers'),
                'aliases' => $module->get('aliases'),
                'files' => $module->get('files'),
                'requires' => $module->get('requires'),
                'path' => $module->getPath(),
                'enabled'=>$module->isEnabled() ? true : false,
                'install'=> $module->isInstall(),
            ];
        }
    }
}

if (! function_exists('has_module')) {
    /**
     * Has the modules.
     *
     * @param  string  $name
     * @return bool
     */
    function has_module($name)
    { 
        $module = app('modules')->find($name);
        if($module){
            return $module->isEnabled();
        }
        return false;
    }
}